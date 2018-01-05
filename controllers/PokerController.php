<?php

namespace app\controllers;

use Yii;
use app\models\Poker;
use app\models\Pokerhistory;
use app\models\Karti;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PokerController implements the CRUD actions for Poker model.
 */
class PokerController extends Controller
{
    
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
     * Lists all Poker models.
     * @return mixed
     */
    public function actionIndex()
    { 
        if (Yii::$app->user->isGuest) 
            return $this->redirect(["/site/login"]);
         $this->layout = 'pokl';
        $dataProvider = new ActiveDataProvider([
            'query' => Poker::find(),
        ]);
        $karti = \app\models\Karti::find()->all();
        $poker = Poker::find()->all();
        $j=0;
        $i=0;
        foreach($poker as $p){
            if($p->partiya == 0)
            $q = Yii::$app->db->createCommand("UPDATE `poker` SET `partiya` = $j WHERE `id` = $p->id")->execute();
            if(($i+1)%15==0 && ($i+1)/15>0)
                $j=$j+1;
            $i=$i+1;
        }
        return $this->render('index', [
            'dataProvider' => $dataProvider,'karti'=>$karti,'poker'=>$poker,
        ]);
    }
    
          public function actionPok() {
                if (Yii::$app->user->isGuest) 
                           return $this->redirect(["/site/login"]);
                
                $karti = \app\models\Karti::find()->all();
                $poker = Poker::find()->all();
              $this->layout = 'poker';
              return $this->render('pok',['karti'=>$karti,'poker'=>$poker,]);
          }
          public function actionStatus() {
                   
                
                    $lastcard = Yii::$app->db->createCommand("SELECT * FROM poker ORDER BY id DESC LIMIT 1")->queryAll();
                  
                    $last_card = $lastcard[0]['hand'];
                  
                    if($last_card=='f5')
                        $q = Yii::$app->db->createCommand("UPDATE `poker` SET `status1` = 1")->execute();
                    
                    return  $last_card;
                
          }
           public function actionPok1() {
               if(isset($_POST['code'])){
                    $poker = Yii::$app->db->createCommand("SELECT * FROM poker WHERE status1 = 0")
                      ->queryAll();
              
                    /*$partiya;
                    $m=0;
                    $flag=0;
                    foreach($poker as $p){

                        if($flag==1){
                            $partiya->hand = $p->hand;
                            $partiya->ves  = $p->ves;
                        }
                        if($p->hand =="f5"){
                            $flag=1;
                        }
                        $m=$m+1;
                    }
                    foreach($poker as $p){

                        if($flag==1){
                            $partiya->hand = $p->hand;
                            $partiya->ves  = $p->ves;
                        }
                    }*/
                  
                   /* 0 print_r(count($poker));
                  exit();*/
                    return json_encode($poker);
               
               }
          }
          public function actionSendhist(){
                    $history = new Pokerhistory;
                    $price = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["price"]))));
                    $event = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["event"]))));
                    $user = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["user"]))));
                    $kef = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["kef"]))));
                    $stage = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["stage"]))));
                    $gameid = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["gameid"]))));
                    //$b=2*$balance;
                    //$finalbalance = $balance + $balance;
                    //
                    
                    if(isset($_POST['price'])){
                              //$history->gamid = $gameid;
                              $history->gameid = $gameid;
                              $history->price = $price;
                              $history->event = $event;
                              $history->userid =  $user;
                              $history->kef =  $kef;
                              $history->stage = $stage;
                              
                              $history->save();
                             
                    }
                    //$a = 
                    $id = Yii::$app->user->identity->id;
                   
                    
                    
                    $user = Yii::$app->db->createCommand("SELECT * FROM `user` * FROM")->queryOne();
                   
                    $balance = $user['balance']-$price;
                     $t = Yii::$app->db->createCommand("UPDATE `user` SET `balance` = $balance WHERE `id` = $id " )->execute();
                             
                               
          }
  			public function actionCalc(){
                    $history = new Pokerhistory;
                    $gameid = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["gameid"]))));
                    $hist = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["hist"]))));
                    //$b=2*$balance;
                    //$finalbalance = $balance + $balance;
                    //
                    $id = Yii::$app->user->identity->id;
                    $arr = explode(" ", $hist);
                    $comb= $arr[0];
                    $event=$arr[1];
                    
                    $temp=substr($event, -1);
                    $player="r";
                    $player =$player.$temp."2";
                    //return $player;
                  // $user = Yii::$app->db->createCommand("UPDATE  `poker` SET  `history` = '$comb' WHERE (`partiya` = $gameid) AND (`hand`='$player')")->queryAll();
                   
                    //$user = Yii::$app->db->createCommand("UPDATE  `pokerhistory` SET  `gamid` = '$comb' WHERE (`partiya` = $gameid) AND (`userid`=$id)")->queryAll();
                  // $user = User::find()->where(['name' => 'CeBe'])->one();
                  // $findbets = Yii::$app->db->createCommand("SELECT * FROM `pokerhistory` WHERE (`id` = $id) AND (`status` = 'Не расчитано') AND (`gameid`=$gameid)")->queryAll();
                   
                   $user = Yii::$app->db->createCommand("SELECT * FROM `user` WHERE `id` = $id")->queryOne();
                   
                    
                      
                   $customers = Pokerhistory::find()
                        ->where(['userid' => $id])
                        ->all();
                    foreach ($customers as $c){
                        if($c->status == 'Не расчитано'){
                            if($c->gameid == $gameid){
                                if($c->event == $event){
                                    $c->gamid= ($c->kef)*($c->price);
                                    $c->status == 'Выиграло';
                                    $balance = $user['balance']+$c->gamid;
                                    $t = Yii::$app->db->createCommand("UPDATE `user` SET `balance` = $balance WHERE `id` = $id " )->execute();
                                    $c->update();
                                }
                            }
                        }
                    }
                   
                  return $c->gamid;
                        
                    if(isset($_POST['gameid'])){
                        
                              //$history->gamid = $gameid;
                                $t = Yii::$app->db->createCommand("UPDATE `poker` SET `history` = 111 WHERE (`partiya` = $gameid) AND (`hand`='r12')" )->execute();
                               
                    }
                            
          }
          public function actionAddkoef(){
              $v11;$v12;$v21;$v22;$v31;$v32;$v41;$v42;$v51;$v52;
              $c=0;
                  $lastpart = Yii::$app->db->createCommand("SELECT * FROM `poker` WHERE `status1` = 0 ORDER BY `id` DESC LIMIT 10")
                      ->queryAll();
              
                  //if(count($lastpart)==11){
                     
                                $v11 = intval($lastpart[0]['ves']/10);
                                $s11 = $lastpart[0]['ves']%10;
                             
                         
                                $v12 =intval($lastpart[1]['ves']/10);
                                $s12 = $lastpart[1]['ves']%10;
                          
                                $v21 = intval($lastpart[2]['ves']/10);
                                $s21 = $lastpart[2]['ves']%10;
                          
                                $v22 =intval($lastpart[3]['ves']/10);
                                $s22 = $lastpart[3]['ves']%10;
                          
                                $v31 = intval($lastpart[4]['ves']/10);
                                $s31 = $lastpart[4]['ves']%10;
                          
                                $v32 =intval($lastpart[5]['ves']/10);
                                $s32 = $lastpart[5]['ves']%10;
                          
                                $v41 = intval($lastpart[6]['ves']/10);
                                $s41 = $lastpart[6]['ves']%10;
                          
                                $v42 =intval($lastpart[7]['ves']/10);
                                $s42 = $lastpart[7]['ves']%10;
                          
                                $v51 = intval($lastpart[8]['ves']/10);
                                $s51 = $lastpart[8]['ves']%10;
                          
                                $v52 =intval($lastpart[9]['ves']/10);
                                $s52 = $lastpart[9]['ves']%10;
                       
                          
                      
                              
                      if($v11 > $v12){
                        $p1=($v11*100) + $v12;
                        if($s11==$s12)
                            $s1=1;
                        else
                            $s1=2;                                
                      }
                      else{
                        $p1=($v12*100) + $v11;
                        if($s11==$s12)
                            $s1=1;
                        else
                            $s1=2; 
                      }
                      
                      if($v21 > $v22){
                        $p2=($v21*100) + $v22;
                        if($s21==$s22)
                            $s2=1;
                        else
                            $s2=2;                                
                      }
                      else{
                        $p2=($v22*100) + $v21;
                        if($s21==$s22)
                            $s2=1;
                        else
                            $s2=2; 
                      }
                      if($v31 > $v32){
                        $p3=($v31*100) + $v32;
                        if($s31==$s32)
                            $s3=1;
                        else
                            $s3=2;                                
                      }
                      else{
                        $p3=($v32*100) + $v31;
                        if($s31==$s32)
                            $s3=1;
                        else
                            $s3=2; 
                      }
                      if($v41 > $v42){
                        $p4=($v41*100) + $v42;
                        if($s41==$s42)
                            $s4=1;
                        else
                            $s4=2;                                
                      }
                      else{
                        $p4=($v42*100) + $v41;
                        if($s41==$s42)
                            $s4=1;
                        else
                            $s4=2; 
                      }
                      if($v51 > $v52){
                        $p5=($v51*100) + $v52;
                        if($s51==$s52)
                            $s5=1;
                        else
                            $s5=2;                                
                      }
                      else{
                        $p5=($v52*100) + $v51;
                        if($s51==$s52)
                            $s5=1;
                        else
                            $s5=2; 
                      }
                 // }
                    
                    
                    
                    
                              $koefp1 = Yii::$app->db->createCommand("SELECT `perc` FROM chance1 WHERE `vesom` = $p1 AND `suit`=$s1")->queryOne();
                              $kp1= (1/$koefp1['perc'])*100;
                              
                              $koefp2 = Yii::$app->db->createCommand("SELECT `perc` FROM chance1 WHERE `vesom` = $p2 AND `suit`=$s2")->queryOne();
                              $kp2= (1/$koefp2['perc'])*100;
                              
                              $koefp3 = Yii::$app->db->createCommand("SELECT `perc` FROM chance1 WHERE `vesom` = $p3 AND `suit`=$s3")->queryOne();
                              $kp3= (1/$koefp3['perc'])*100;
                              
                              $koefp4 = Yii::$app->db->createCommand("SELECT `perc` FROM chance1 WHERE `vesom` = $p4 AND `suit`=$s4")->queryOne();
                              $kp4= (1/$koefp4['perc'])*100;
                              
                              $koefp5 = Yii::$app->db->createCommand("SELECT `perc` FROM chance1 WHERE `vesom` = $p5 AND `suit`=$s5")->queryOne();
                              $kp5= (1/$koefp5['perc'])*100;
                              
                              $a1 = Yii::$app->db->createCommand("UPDATE `poker` SET `status2` = $kp1 WHERE (`hand`= 'r11') AND (`status1`=0)")->execute();
                              $a2 = Yii::$app->db->createCommand("UPDATE `poker` SET `status2` = $kp2 WHERE (`hand`= 'r21') AND (`status1`=0)")->execute();
                              $a3 = Yii::$app->db->createCommand("UPDATE `poker` SET `status2` = $kp3 WHERE (`hand`= 'r31') AND (`status1`=0)")->execute();
                              $a4 = Yii::$app->db->createCommand("UPDATE `poker` SET `status2` = $kp4 WHERE (`hand`= 'r41') AND (`status1`=0)")->execute();
                              $a5 = Yii::$app->db->createCommand("UPDATE `poker` SET `status2` = $kp5 WHERE (`hand`= 'r51') AND (`status1`=0)")->execute();
                              
                              $kef[0]=$kp1;
                              $kef[1]=$kp2;
                              $kef[2]=$kp3;
                              $kef[3]=$kp4;
                              $kef[4]=$kp5;      
                              //print_r($kef);
                              return json_encode($kef);
          }
          public function actionFindcart()
          {   
              $db = \Yii::$app->db;
              $cards = new Poker();
              $chance_preflop = \app\models\Chance1::find()->asArray()->all();
              if(isset($_POST['barcode'])){
                  $card = array(11);
                  $barcode = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["barcode"]))));
                  $karti =  Karti::find()->all();


                  $lastcard = Yii::$app->db->createCommand("SELECT * FROM poker ORDER BY id DESC LIMIT 1")
                      ->queryAll();
                  
                  $last_card = $lastcard[0]['hand'];
                  
                  
                  $newhand = 'r11';
                  if($last_card=='r11')
                      $newhand = 'r21';

                  if($last_card=='r21')
                      $newhand = 'r31';

                  if($last_card=='r31')
                      $newhand = 'r41';

                  if($last_card=='r41')
                      $newhand = 'r51';

                  if($last_card=='r51')
                      $newhand = 'r12';

                  if($last_card=='r12')
                      $newhand = 'r22';

                  if($last_card=='r22')
                      $newhand = 'r32';

                  if($last_card=='r32')
                      $newhand = 'r42';

                  if($last_card=='r42')
                      $newhand = 'r52';

                  if($last_card=='r52')
                      $newhand = 'f1';

                  if($last_card=='f1')
                      $newhand = 'f2';

                  if($last_card=='f2')
                      $newhand = 'f3';

                  if($last_card=='f3')
                      $newhand = 'f4';

                  if($last_card=='f4')
                      $newhand = 'f5';

                  if($last_card=='f5')
                      $newhand = 'r11';

                  $poker = Poker::find()->all();

                  foreach ($karti as $k){
                      if($k->barcode == $barcode){
                          array_push($card, $k->code);
                          array_push($card, 2);
                          $cards->ves = $k->code;
                          $cards->hand = $newhand;
                          
                          $cards->partiya = intval(count($poker)/15);
                          $cards->save();
                            
                      }
                  }
                  
                  $m=1;
                  $part=0;
                  
                      
                  
                  //$lastpart = Poker::find()->where(['status1' => 0])->all();
                  //$lastpart = Yii::$app->db->createCommand("SELECT * FROM poker WHERE status1 = 0 ORDER BY id DESC LIMIT 15")->queryAll();
                  //$lastpart = Yii::$app->db->createCommand("SELECT * FROM poker ORDER BY id DESC LIMIT 15")->queryAll();
                  
                  $lastpart[16]=$chance_preflop;
                  return json_encode($lastpart);
              }

          }

    public function actionDealer(){ 
        $this->layout = 'main4';
        return $this->render('dealer');
    }
    
    /**
     * Displays a single Poker model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Poker model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Poker();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Poker model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Poker model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Poker model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Poker the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Poker::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
