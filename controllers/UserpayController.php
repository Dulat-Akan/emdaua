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



                $this->layout = 'default'; 

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

    /**
     * Displays a single Userpay model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $this->layout = 'default'; 
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




            $this->layout = 'default'; 
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
                $result = Yii::$app->db->createCommand()->insert('transaction', ['number' => $phone, 'action' => 'payment', 'amount' => $success, 'typet' => "kassa", 'date' => $now,'balagp' => $balagp,'uid' => $id])->execute();

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

                 
                    // $m = (string) $account;

                    // echo mb_strtolower($m);
                    
                   //echo $newaccount;

                    $a = 0;
                
                    if($account[0] == "7" && $account[1] == "7"){
                            
                                $newaccount = "+".$account;
                                $a = 1;

                        }else if($account[0] == " " && $account[1] == "7"){
                            $newaccount = str_replace(" ", "+", $account);
                            $a = 2;
                        }else if($account[0] == "8"){
                            $newaccount = str_replace("8", "+7", $account);
                            $a = 3;
                        }else if($account[0] == "+" && $account[1] == "7"){
                            $newaccount = $account;
                            $a = 4;
                        }else if($account[0] == "7" && $account[1] == "0"){
                            $newaccount = "+7".$account;
                            $a = 5;
                        }

                        $file = "../views/userpay/logs.php";
           

                        $myfile = fopen($file, 'a');

                        $success = fwrite($myfile, "\n|".$account." : ".$_SERVER["REMOTE_ADDR"]." : ".$sum." newacount :".$newaccount."|");
                        //$success = fwrite($myfile, "|".$_GET."|");

                        fclose($myfile);


                        //echo "|".$newaccount."|".$a."|"."|".$account."|";
                        //print_r($account);

                        //exit;

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
