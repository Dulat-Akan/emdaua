<?php

namespace app\controllers;

use Yii;
use app\models\Userpay;
use app\models\UserpaySearch;
use app\models\Usertwo;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

//Url::remember();
//echo Url::previous();

/**
 * UserpayController implements the CRUD actions for Userpay model.
 */
class UserpayController extends Controller
{



    public function beforeAction($action){
        if( $action->id == 'paymentq'){
            $this->enableCsrfValidation = false;
        }else if($action->id == 'update'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Userpay models.
     * @return mixed
     */
    public function actionIndex()
    {
        $id = Yii::$app->user->id;
        $user =Usertwo::findOne(['id' => $id]);


        if (!Yii::$app->user->identity || $user->role<3) {
            //return ;
            Url::remember();
            //echo Url::previous();
            return Yii::$app->response->redirect(Url::to(['site/login']));
        }else{



                $this->layout = 'kassa'; 

                $searchModel = new UserpaySearch();
                $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

                //print_r($dataProvider);

                return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);

         }

        //echo "оплата закрыта по соображениям безопасности";
    }



      public function actionRoulettehistory($id){


            if(!preg_match("|^[\d]+$|", $id)){
              
                echo "fack you hack";
                exit;

            }
                
            

             $identity = Yii::$app->user->identity;

                if($identity){

                    $id = $id;

                    $this->layout = 'clear';

                    $user = Yii::$app->db->createCommand("SELECT * FROM user WHERE `id`='$id' LIMIT 1")->queryAll();

                    $balance = 0;
                    foreach ($user as $keyh) {
                        $balance = $keyh['balance'];
                    }

                    $result = Yii::$app->db->createCommand("SELECT * FROM r_koef WHERE `user_id`='$id' ORDER BY `id` desc")->queryAll();

                    return $this->render('r_history',['result'=>$result,'balance'=>$balance]);

                }else{
                    return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/login'));
                }


        }
    public function actionOpensmena(){
    
        if (isset($_POST['login'])) {
                $login = $_POST['login'];
                $pass = $_POST['pass'];
                $rpass = 0;
                
                date_default_timezone_set('Asia/Almaty');
                $now = date('Y-m-d');
                $date = str_replace('-', "", $now);
                $date = intval($date);
                    
                $hashpass = Yii::$app->getSecurity()->generatePasswordHash($pass);
                
                $result = Yii::$app->db->createCommand("SELECT * FROM kassir WHERE `username`='$login' ")->queryAll();
                foreach ($result as $r) {
                        $rpass = $r['pass'];
                }
                
                if($rpass == $pass){
                    \Yii::$app->db->createCommand("UPDATE gameparams SET  `isopen`='1', `kassirlogin`='$login', `kassid`='$date' WHERE id='1'")->execute();
                    return 1;
                }
                else
                    return 0;
                
        }
        
        
    }
    public function actionClosesmena(){
    
        if (isset($_POST['login'])) {
                $login = $_POST['login'];
                $pass = $_POST['pass'];
                $rpass = 0;
                
                date_default_timezone_set('Asia/Almaty');
                $now = date('Y-m-d');
                $date = str_replace('-', "", $now);
                $date = intval($date);
                    
                $hashpass = Yii::$app->getSecurity()->generatePasswordHash($pass);
                
                $result = Yii::$app->db->createCommand("SELECT * FROM kassir WHERE `username`='$login' ")->queryAll();
                foreach ($result as $r) {
                        $rpass = $r['pass'];
                }
                
                if($rpass == $pass){
                    \Yii::$app->db->createCommand("UPDATE gameparams SET  `isopen`='0', `kassirlogin`='$login', `kassid`='$date' WHERE id='1'")->execute();
                    return 1;
                }
                else
                    return 0;
                
        }
        
        
    }   
    public function actionShift()
    {
            $id = Yii::$app->user->id;
            $user =Usertwo::findOne(['id' => $id]);

            $this->layout = 'kassa'; 
            

            $kassaparam = Yii::$app->db->createCommand("SELECT * FROM gameparams")->queryAll();

            foreach ($kassaparam as $a) {
                $isopen = $a['isopen'];
                $kassirlogin = $a['kassirlogin'];
            }
            
            
        
            return $this->render('shift', [
                'isopen' => $isopen,
                'kassirlogin' => $kassirlogin,
            ]);


        //echo "оплата закрыта по соображениям безопасности";
    }
    
    public function actionStats($period1,$period2)
    {
            $deposit = 0;
            $withdrow = 0;
            $cash = 0;
            $qiwi = 0;
            $systembot = 0;
            $kassa24 = 0;
            
            
            $this->layout = 'kassa'; 
            $c = 0;
            date_default_timezone_set('Asia/Almaty');
            $now = date('Y-m-d');
            $date = str_replace('-', "", $now);
            $date = intval($date);
            
            $users =Usertwo::find()->all();
            $transaction = Yii::$app->db->createCommand("SELECT * FROM transaction")->queryAll();
            
            $total = array();
            $us = array('phone'=>0,'deposit'=>0, 'cash'=>0, 'qiwi'=>0, 'systembot'=>0, 'kassa24'=>0,'withdrow'=>0,'win'=>0, 'balance'=>0); 
            
            // begin date in game
                // begin date
                $month = intval((intval($period1%10000))/100);
                if($month<10)
                    $month="0".$month;
                                
                $day = intval($period1%100);
                if($day<10)
                    $day="0".$day;
                $year = intval($period1/10000);
                $date1 = "".$year."-".$month."-".$day."  12:00:01am";
                // end date             
                $month2 = intval((intval($period2%10000))/100);
                if($month2<10)
                    $month2="0".$month2;
                
                $day2 = intval($period2%100);
                if($day2<10)
                    $day2="0".$day2;
                $year2 = intval($period2/10000);
                $date2 = "".$year2."-".$month2."-".$day2."  12:00:01am";
                
                $bdate = strtotime($date1); // to unix
                $edate = strtotime($date2); // to unix
                                
                                //AND `sum`>'0'
                
            // end date in game
            
            foreach($users as $u){
                $deposit = 0;
                $withdrow = 0;
                $cash = 0;
                $qiwi = 0;
                $systembot = 0;
                $kassa24 = 0;
                $win = 0;
                $bets =0;

                $number = $u->phone;
                $balance = $u->balance;
                $userid = $u->id;
                
                    $date = $date -$period;
                    $transaction = Yii::$app->db->createCommand("SELECT * FROM transaction WHERE `number`='$number' AND `idsmena` >= '$period1' AND `idsmena` <= '$period2' ")->queryAll();
                    
                
                
                if(is_int($period)){
                    $transaction = Yii::$app->db->createCommand("SELECT * FROM transaction WHERE `number`='$number' AND `kassirlogin` = '$period' ")->queryAll();
                }
                
                $transaction = array_reverse($transaction);

                foreach($transaction as $t){
                    if( $t['action']=='payment'  && $t['amount']>0){
                        $deposit = $deposit + $t['amount'];
                        if( $t['typet'] == 'systembot')
                            $systembot = $systembot + $t['amount'];
                        if( $t['typet'] == 'qiwi')
                            $qiwi = $qiwi + $t['amount'];
                        if( $t['typet'] == 'systembot')
                            $systembot = $systembot + $t['amount'];
                        if( $t['typet'] == 'kassa')
                            $cash = $cash + $t['amount'];
                        if( $t['typet'] == 'kassa24')
                            $kassa24 = $cash + $t['amount'];
                    }
                    if( $t['action']=='payout'  && $t['amount']>0)
                        $withdrow = $withdrow + $t['amount'];
                }
                $result = Yii::$app->db->createCommand("SELECT * FROM `r_koef` WHERE `time` >= '$bdate' AND `time` <= '$edate' AND `user_id` =  '$userid'")->queryAll();
                $game = Yii::$app->db->createCommand("SELECT * FROM `r_koef` WHERE `time` >= '$bdate' AND `time` <= '$edate' AND `user_id` =  '$userid' AND `sum` > 0")->queryAll();
                
                foreach ($result as $key) {
                    $unserial = unserialize($key['result_koef']);

                    for($i = 0;$i < count($unserial[0][0]);$i++){
                        if($unserial[0][1][$i] != 0){
                            $bets = $bets + $unserial[0][1][$i];
                        }
                    }
                    for($ii = 0;$ii < count($unserial[1][0]);$ii++){
                        if($unserial[1][1][$ii] != 0){
                            $bets = $bets + $unserial[1][1][$ii];
                        }
                    }
                    for($iii = 0;$iii < count($unserial[2][0]);$iii++){
                        if($unserial[2][1][$iii] != 0){
                            $bets = $bets + $unserial[2][1][$iii];
                        }
                    }
                }

                foreach ($game as $g) {
                    $win = $win + $g['sum'];
                }
                
                $us['phone'] = $number;
                $us['deposit'] = $deposit;
                $us['withdrow'] = $withdrow;
                $us['cash'] = $cash;
                $us['qiwi'] = $qiwi;
                $us['systembot'] = $systembot;
                $us['kassa24'] = $kassa24;
                $us['win'] = $win;
                $us['balance'] = $balance;
                $us['bets'] = $bets;
                if($deposit>0)
                    $total[$c] = $us;
                
                $c=$c+1;
            }
            
            
            $deposit = 0;
            $withdrow = 0;
            $cash = 0;
            $qiwi = 0;
            $systembot = 0;
            $kassa24 = 0;
            $win = 0;
            $bets = 0;
            
            foreach($total as $t){
                $deposit = $deposit + $t['deposit'];
                $withdrow = $withdrow + $t['withdrow'];
                $cash = $cash + $t['cash'];
                $qiwi = $qiwi + $t['qiwi'];
                $systembot = $systembot + $t['systembot'];
                $kassa24 = $kassa24 + $t['kassa24'];
                $win = $win + $t['win'];
                $balance = $balance + $t['balance'];
                $bets = $bets + $t['bets'];
            }
            
            return $this->render('stats', [
                'withdrow' => $withdrow,
                'deposit' => $deposit,
                'total' => $total,
                'cash' => $cash,
                'qiwi' => $qiwi,
                'systembot' => $systembot,
                'kassa24' => $kassa24,
                'period1'=>$period1,
                'period2'=>$period2,
                'game'=>$game,
                'win'=>$win,
                'balance'=>$balance,
                'bets'=>$bets,
            ]);


        //echo "оплата закрыта по соображениям безопасности";
    }
    public function actionSetidsmena()
    {
        
        $transaction = Yii::$app->db->createCommand("SELECT * FROM transaction")->queryAll();
        
        foreach($transaction as $t){
            $id = $t['id'];
            $date = $t['date'];
            $date = date_create($date)->Format('Y-m-d');
            $date = str_replace('-', "", $date);
            $date = intval($date);
            //$date = strtotime($date);
            \Yii::$app->db->createCommand("UPDATE transaction SET `idsmena`='$date' WHERE id='$id'")->execute(); 
        }
        
        
            return $this->render('stats', [
                'transaction' => $transaction,
                'kassirlogin' => $kassirlogin,
            ]);


        //echo "оплата закрыта по соображениям безопасности";
    }

    /**
     * Displays a single Userpay model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        date_default_timezone_set("Asia/Almaty");
        $this->layout = 'kassa'; 
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Userpay model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        exit;
        // $this->layout = 'default'; 
        // $model = new Userpay();

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->id]);
        // } else {
        //     return $this->render('create', [
        //         'model' => $model,
        //     ]);
        // }
    }

    /**
     * Updates an existing Userpay model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {

        if (!Yii::$app->user->identity) {
            //return ;
            Url::remember();
            //echo Url::previous();
            return Yii::$app->response->redirect(Url::to(['site/login']));
        }else{


            $kassaparam = Yii::$app->db->createCommand("SELECT * FROM gameparams")->queryAll();

            foreach ($kassaparam as $a) {
                $isopen = $a['isopen'];
                $kassirlogin = $a['kassirlogin'];
                $idsmena = $a['kassid'];
            }
            
            $this->layout = 'kassa'; 
            $model = $this->findModel($id);

            $model2 = Userpay::findOne([
                    'id' => $id,
                    //'status' => Customer::STATUS_ACTIVE,
                ]);

            $agpkurs = Yii::$app->db->createCommand("SELECT * FROM gameparams")->queryAll();

            $kursusd = 334;    
            $kursagp =10;

            foreach ($agpkurs as $a) {
                $kursusd = $a['kursusd'];
                $kursagp = $a['kursagp'];
            }

            //$agp = $kursusd/$kursagp;
            $agp = $kursagp;

            //popolnenie
            if (isset($_POST['balance'])) {
                
             
                $bal = $model2['balance'];

                $post = Yii::$app->request->post();

                $hh = $post['balance'];

                if($hh < 0){
                    exit;
                }

                if($hh == null){
                    exit;
                }

                $balagp = (int) $hh * (int)$agp;

                $success = (int) $bal + ($hh * $agp);
                $model->balance = $success;
                //$model->balagp = 10;
                $model->save();

                date_default_timezone_set('Asia/Almaty');
                $now = date('Y-m-d H:i:s');
                $phone = $model2['phone'];
                $result = Yii::$app->db->createCommand()->insert('transaction', ['kassirlogin' => $kassirlogin, 'idsmena' => $idsmena,  'number' => $phone, 'action' => 'payment', 'amount' => $balagp, 'typet' => "kassa", 'date' => $now,'balagp' => $success,'uid' => $id])->execute();

                //$result2 = Yii::$app->db->createCommand("UPDATE `user` SET balagp = '$balagp'  WHERE  `id` = '$id'")->execute();

                return $this->redirect(['view', 'id' => $model->id]);
                //
                //print_r($post['Userpay']['balance']);
                //print_r(Yii::$app->request->post());
            } 
            
            // vivod
            if (isset($_POST['payout'])) {
                
             
                $bal = $model2['balance'];

                $post = Yii::$app->request->post();

                $hh = $post['payout'];

                if(($hh*$agp) > $bal){
                    return $this->redirect(['view', 'id' => $model->id]);
                }

                if($hh < 0){
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                
                $success = (int) $bal - ($hh * $agp);

                $balagp = (int) $hh * $agp;

                $model->balance = $success;
                $model->save();


                date_default_timezone_set('Asia/Almaty');
                $now = date('Y-m-d H:i:s');
                $phone = $model2['phone'];
                $result = Yii::$app->db->createCommand()->insert('transaction', ['number' => $phone, 'action' => 'payout', 'amount' => $success, 'typet' => "kassa", 'date' => $now,'balagp' => $balagp,'uid' => $id])->execute();
              

                return $this->redirect(['view', 'id' => $model->id]);
                //
                //print_r($post['Userpay']['balance']);
                //print_r(Yii::$app->request->post());
            } 
            
                return $this->render('update', [
                    'model' => $model,
                    'isopen'=>$isopen,
                ]);

        }
    }

    /**
     * Deletes an existing Userpay model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

        exit;
        $this->layout = 'default'; 
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionCancel()
    {
            
        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $action = $_POST['action'];
            $amount = $_POST['amount'];
            $uid = $_POST['uid'];
           
            $model = $this->findModel($uid);
            $model2 = Userpay::findOne(['id' => $uid,]);
            $bal = $model2['balance'];
            
            if($bal>$$amount){
                if($action == 'payment'){
                    $success = (int) $bal - (int) $amount;
                    $model->balance = $success;
                    $cancelid = Yii::$app->db->createCommand("UPDATE `transaction` SET `statust`= 'canceled'  WHERE  `id` = '$id'")->execute();
                    $model->save();
                    
                }
            }
            else
                return $this->render('view', [
                    'res' => 'Баланс меньше',
                ]);


            if($action == 'payout'){
                $success = (int) $bal + (int) $amount;
                $model->balance = $success;
                $cancelid = Yii::$app->db->createCommand("UPDATE `transaction` SET `statust`= 'canceled'  WHERE  `id` = '$id'")->execute();
                $model->save();
            }
 

            
            
        }
        if($cancelid)
            return 1;
        else
            return 0;
    }

    /**
     * Finds the Userpay model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Userpay the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        if (!Yii::$app->user->identity) {
            //return ;
            Url::remember();
            //echo Url::previous();
            return Yii::$app->response->redirect(Url::to(['site/login']));
        }else{


                $this->layout = 'default'; 
                if (($model = Userpay::findOne($id)) !== null) {
                    return $model;
                } else {
                    throw new NotFoundHttpException('The requested page does not exist.');
                }

        }
    }


   
     public function actionTest(){

        
                    // $account = "abc";
            
                    // $file = "../views/userpay/logs.php";
           

                    //     $myfile = fopen($file, 'a+');

                    //     $success = fwrite($myfile, "|".$account."|");

                    //     fclose($myfile);
                 
    


             

            

    }


       public function actionPaymentq(){

        $successip = 0;

        //$successpaymentarray = array("89.218.54.34","89.218.54.36","79.142.55.231","79.142.55.227","212.154.215.82");
        $successpaymentarray = array("89.218.54.34","89.218.54.36");

        for($i = 0;$i < count($successpaymentarray);$i++){

                if($_SERVER["REMOTE_ADDR"] == $successpaymentarray[$i]){
                        $successip = 1;
                }

        }

        if($successip != 1){
            //echo "none";
            exit;
        }

        


        if(isset($_GET['command'])){

                
                $command = "";
                $txn_id = "";
                $account = "";
                $sum = "";
                $pay_type = "";
                $trm_id = "";
                $txn_date = "";
                $data1 = "";
                $fixten = 0;




                    
                 
    //http://old.qiwi.kz/ru/provider-test/

             
                    $command = $_GET['command'];

                    $newaccount = "";

                    //$txn_date = $now;
                    $data1 = "";
                    $fixten = 0;
                    //$command = $_GET['command'];

                    if(isset($_GET['txn_id'])){
                        $txn_id = $_GET['txn_id'];
                    }

                    if(isset($_GET['account'])){
                        $account = $_GET['account'];
                    }

                    if(isset($_GET['sum'])){
                        $sum = $_GET['sum'];
                    }

                    if(isset($_GET['pay_type'])){
                        $pay_type = $_GET['pay_type'];
                    }

                    if(isset($_GET['trm_id'])){
                        $trm_id = $_GET['trm_id'];
                    }

                    if(isset($_GET['txn_date'])){
                        $txn_date = $_GET['txn_date'];
                    }


                    if(isset($_GET['data1'])){
                        $data1 = $_GET['data1'];
                    }

                    
                    $resultsum = 0;

                 
                    
                        $match = "/^(\d{10})$/";
                        $match2 = "/^(\d{11})$/";
                        $match3 = "/^(\d{12})$/";
                        $match4 = "/^\s(\d{10})$/";
                        $match5 = "/^\s(\d{11})$/";

                        $preg = preg_match_all($match, $account);
                        $preg2 = preg_match_all($match2, $account);
                        $preg3 = preg_match_all($match3, $account);
                        $preg4 = preg_match_all($match4, $account);
                        $preg5 = preg_match_all($match5, $account);

                        if($preg == 1){

                            $newaccount = "+7".$account;
                            $a = 2;

                        }else if($preg2 == 1){

                            $newaccount = "+".$account;
                            $a = 3;

                            $newaccount = str_replace("+8", "+7", $newaccount);

                        }else if($preg3 == 1){

                            $newaccount = "+".$account;
                            $a = 4;

                        }else if($preg4 == 1){

                            $newaccount = str_replace(" ", "+7", $account);
                            $a = 5;

                        }else if($preg5 == 1){

                            $newaccount = str_replace(" ", "+", $account);
                            $a = 6;

                        }


                        

                        $file = "../views/userpay/logs.php";
           

                        $myfile = fopen($file, 'a');

                        $countnumber = count((string) $account);

                        $success = fwrite($myfile, "\n|".$account." : ".$_SERVER["REMOTE_ADDR"]." : ".$sum." newacount :".$newaccount."| a |".$a."|");
                        //$success = fwrite($myfile, "|".$_GET."|");

                        fclose($myfile);


                        //echo "|".$newaccount."|".$a."|"."|".$account."|";
                        //print_r($account);

                       // exit;

                    //

            //check database

                    $connection = Yii::$app->db;

                    $sql5 = "SELECT * FROM gameparams WHERE id = '1'";

                    $command5 = $connection->createCommand($sql5);

                    $model5 = $command5->queryAll();

                    $usd = 340;
                    $agp = 10;

                    foreach ($model5 as $value5) {
                        $usd = $value5['kursusd'];
                        $agp = $value5['kursagp'];
                    }

                    $resultsum = ($sum / $usd) * $agp;
                    $resultsumtwo = (int) $resultsum;

                    




                    $searchsuccessphone = 0;
                    $basesum = 0;
                    $newbalance = 0;
            
            switch ($command) {
                case 'check':
                    //check account
                    //sum

    // https://service.someprv.ru:8443/payment_app.cgi?command=check&txn_id=1234567&ac
    // count=4957835959&sum=200.00
    // или
    // https://service.someprv.ru:8443/payment_app.cgi?command=check&txn_id=1234567&ac
    // count=4957835959&sum=200.00&pay_type=1&trm_id=4151200&data1=123456

                    $sql = "SELECT * FROM user WHERE `phone` = '$newaccount'";
                    $command = $connection->createCommand($sql);
                    $success = $command->queryAll();
                    

                    if(!$success){
                       
                        echo '<?xml version="1.0" encoding="UTF-8"?>
                        <response>
                        <osmp_txn_id>'.$txn_id.'</osmp_txn_id>
                        <result>5</result>
                        <comment></comment>
                        </response>';

                    }else{

                          echo '<?xml version="1.0" encoding="UTF-8"?>
                                <response>
                                <osmp_txn_id>'.$txn_id.'</osmp_txn_id>
                                <result>0</result>
                                <comment></comment>
                                </response>';

                            
                    }

                    break;

                    case 'pay':
                    //check account
                    //sum
                    //almagames.mypsx.net/userpay/paymentq

    // https://service.someprv.ru:8443/payment_app.cgi?command=pay&txn_id=1234567&account=4957835959&sum=500.00
    // &txn_date=20110101120005&trm_id=4151200
    // или
    // https://service.someprv.ru:8443/payment_app.cgi?command=pay&txn_id=1234567&account=4957835959&sum=500.00
    // &txn_date=20110101120005&pay_type=1&trm_id=4151200&data1=123456
                   

                    $sql = "SELECT * FROM user WHERE `phone` = '$newaccount'";
                    $command = $connection->createCommand($sql);
                    $success = $command->queryAll();
                    

                    if(!$success){
                       
                        echo '<?xml version="1.0" encoding="UTF-8"?>
                            <response>
                             <osmp_txn_id>'.$txn_id.'</osmp_txn_id>
                             <prv_txn>'.$txn_date.'</prv_txn>
                             <sum>'.$sum.'</sum>
                             <result>5</result>
                             <comment>OK</comment>
                            </response>';

                    }else{

                         foreach ($success as $key) {
                            $searchsuccessphone = $key['phone'];
                            $basesum = $key['balance'];
                        }

                            $newbalance = (int) $basesum + (int) $resultsumtwo;


                            // $myfile = fopen($file, 'a');

                            // $success = fwrite($myfile, "\n|".$account." : ".$_SERVER["REMOTE_ADDR"]." : ".$sum." newacount :".$newaccount." balance ".$newbalance."|");

                            // fclose($myfile);

                            date_default_timezone_set('Asia/Almaty');
                            $now = date('Y-m-d H:i:s');

                            
                //obnovlenie bd transacsii

                Yii::$app->db->createCommand()->insert('transaction', ['number' => $searchsuccessphone, 'action' => 'payment', 'amount' => $resultsumtwo, 'typet' => "qiwi", 'txn_id' => $txn_id,'date' => $txn_date])->execute();

                //obnovlenie bd transacsii

                //obnovlenie bd usera

                $sql6 = "UPDATE user SET balance = '$newbalance' WHERE phone = '$searchsuccessphone'";
                $command6 = $connection->createCommand($sql6);
                $command6->execute();

                //obnovlenie bd usera

                echo '<?xml version="1.0" encoding="UTF-8"?>
                <response>
                 <osmp_txn_id>'.$txn_id.'</osmp_txn_id>
                 <prv_txn>'.$txn_date.'</prv_txn>
                 <sum>'.$sum.'</sum>
                 <result>0</result>
                 <comment>OK</comment>
                </response>';

                            
                    }

                    
                    break;
                
                
            }





          }

        
       

    }









}
