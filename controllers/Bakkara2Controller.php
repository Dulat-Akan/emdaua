<?php

namespace app\controllers;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;
use yii\helpers\Url;
use yii\data\Pagination;
use app\models\Country;
use app\models\TypeSobitiya;
use app\models\User;
use app\models\Usertwo;
use app\models\Ruletka;
use app\models\Roulette;
use yii\web\UploadedFile;
use yii\widgets\ActiveForm;
use yii\httpclient\Client;
class Bakkara2Controller extends \yii\web\Controller
{
    public function beforeAction($action){
        if( $action->id == 'rbronirovanieapp'){
            $this->enableCsrfValidation = false;
        }else if( $action->id == 'index'){
        $this->enableCsrfValidation = false;}
            else if( $action->id == 'rloginapp'){
               $this->enableCsrfValidation = false;
            }
            return parent::beforeAction($action);
    }
    
    public function actionIndex()
    {
        $lastgame= Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();
              
        $arr = array($lastgame);            
        echo $_GET['callback'] . '(' . json_encode($arr) . ')';
    }
    // статистика 
    public function actionStats()
    {
        $lastgame= Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 6")->queryAll();
                
        $arr = array($lastgame);            
        echo $_GET['callback'] . '(' . json_encode($arr) . ')';
    }
    // 5 рпоследних ставок. история
    public function actionUpdatebets()
    {
       if(isset($_GET['userid'])){
            $userid = $_GET['userid'];
            $lastgame= Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 2 ")->queryAll();
            if($lastgame[0]['status']==1)
              $id = $lastgame[0]['id'];

            $lastbets= Yii::$app->db->createCommand("SELECT * FROM bakkara_history WHERE userid=$userid  ORDER BY id DESC LIMIT 5 ")->queryAll();
            $arr = array($lastbets);            
        echo $_GET['callback'] . '(' . json_encode($arr) . ')';
          }
    }
    // добавить статус при завершении 1-й партии. опред выиграшных комб.
    public function actionAddstatus()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $winner = $_GET['winner'];
            $pair_p = $_GET['pair_p'];  
            $pair_d = $_GET['pair_d'];
            $insp = $_GET['insp'];
            $insb = $_GET['insb'];
            $v3 = $_GET['big']; 
            $gameid = $id + 1;
            echo $id.$winner.$pair_d;
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();
            $q = Yii::$app->db->createCommand("UPDATE `bakkara` SET `status` = 1, `winner`='$winner', `pair_p`='$pair_p', `pair_d`='$pair_d', `insp`='$insp', `insb`='$insb', `small`='$v3' where `id`='$id'")->execute();

            //расчет ставок
            $history = Yii::$app->db->createCommand("SELECT * FROM bakkara_history WHERE gameid =$id")->queryAll();
            $count=count($history);

            for($i=0;$i<$count;$i++){
               //pair_p
               if($pair_p!=0){
                  if($history[$i]['event']=='pair_p'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();

                  }
               }
               else{
                  if($history[$i]['event']=='pair_p'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();

                  }
               }
               //pair_d
               if($pair_d!=0){
                  if($history[$i]['event']=='pair_d'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id ")->execute();

                  }
               }
               else{
                  if($history[$i]['event']=='insp'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id ")->execute();

                  }
               }
               //pair_black
               if($insp!=0){
                  if($history[$i]['event']=='player'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id ")->execute();

                  }
               }
               else{
                  if($history[$i]['event']=='player'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id ")->execute();

                  }
               }
               //pair_red
               if($insb!=0){
                  if($history[$i]['event']=='diller'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id ")->execute();

                  }
               }
               else{
                  if($history[$i]['event']=='diller'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id ")->execute();

                  }
               }
               //player
               if($winner=='player'){
                  if($history[$i]['event']=='player'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id ")->execute();

                  }
               
                  if($history[$i]['event']=='diller'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();

                  }
                  if($history[$i]['event']=='tie'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();

                  }
               }
               //diller
               if($winner=='diller'){
                  if($history[$i]['event']=='diller'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();

                  }
              
                  if($history[$i]['event']=='player'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();

                  }

                  if($history[$i]['event']=='tie'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();

                  }
               }
                //tie
               if($winner=='tie'){
                  if($history[$i]['event']=='tie'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();

                  }
               
                  if($history[$i]['event']=='player'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();

                  }
               
                  if($history[$i]['event']=='diller'){
                    $id = $history[$i]['id'];
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();

                  }
               }
            
           }
            //енд расчет ставок

            //новая игра
           $lastcard = Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")
                ->queryAll();
           
            $comb = $lastcard[0]['comb'];
            if($comb!=0)
            $q = Yii::$app->db->createCommand("INSERT `bakkara` SET `gameid`='$gameid'")->execute();
            


         }
    }


    public function actionSendb()

    {
        $bets = Bakkarahistory::find()->all();

        $balance =0;
        $minus=0;
        $d=0;
        foreach ($bets as $b) {
          if($b['status']==1 && $b['userid']==64){
            $balance = $balance + ($b['price']*$b['kef']);
            

          }
          if($b['userid']==64){
            $minus = $minus + ($b['price']);
          }
        }
        $balance=$balance-$minus;
        $lastgame= Yii::$app->db->createCommand("UPDATE `user` SET `balance`=$balance WHERE `id` = 64")->execute();

        
    }
    // обновлять статус игры. 0 карьы не разданы, 1 - 1я карта, 2 - 2я карта. 3 остальные карты
    public function actionUpdatestatus()  {

      if(isset($_GET['status'])){
        $status= $_GET['status'];
        $lastcard = Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();
           
        //$id = $lastcard[0]['id'];
        // comb -> status
        //$q1 = Yii::$app->db->createCommand("UPDATE `bakkara` SET `comb` = $status WHERE `id`=$id")->execute();

      }
        
    }

    public function actionUpdatedata()
    {
        $id = $_GET['id'];

        if(isset($_GET['tel'])){
            $tel = $_GET['tel'];
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();
            if($tel!='')
            $q = Yii::$app->db->createCommand("UPDATE `user` SET `tel`='$tel' where `id`='$id'")->execute();
        }
        if(isset($_GET['email'])){
            $email = $_GET['email'];
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();
            if($email!='')
            $q = Yii::$app->db->createCommand("UPDATE `user` SET `email` = '$email' where `id`='$id'")->execute();
        }
        if(isset($_GET['name1'])){
            $name1 = $_GET['name1'];  
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();
            if($name1!='')
            $q = Yii::$app->db->createCommand("UPDATE `user` SET `name1`='$name1' where `id`='$id'")->execute();
        }
        if(isset($_GET['name2'])){  
            $name2 = $_GET['name2'];
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();
            if($name2!='')
            $q = Yii::$app->db->createCommand("UPDATE `user` SET `name2`='$name2' where `id`='$id'")->execute();
        }
        if(isset($_GET['phone'])){
            $phone = $_GET['phone'];
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();
            if($phone!='')
            $q = Yii::$app->db->createCommand("UPDATE `user` SET `phone`='$phone' where `id`='$id'")->execute();
        }
        if(isset($_GET['pass'])){
            $pass = $_GET['pass'];
            $hpass = Yii::$app->getSecurity()->generatePasswordHash($pass);
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();
            if($pass!='')
            $q = Yii::$app->db->createCommand("UPDATE `user` SET `password`='$hpass' where `id`='$id'")->execute();
        }
    }
   
    // получать статус карты. 0 карьы не разданы, 1 - 1я карта, 2 - 2я карта. 3 остальные карты
    public function actionGetstatus()  {

      $lastcard = Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 2")->queryAll();
           
        $status = $lastcard[0]['winner'];
        echo $_GET['callback'] . '(' . json_encode($status) . ')';
        
    }
    public function actionGetdata()  {

        if(isset($_GET['userid'])){
          $id = $_GET['userid'];
          $data = Yii::$app->db->createCommand("SELECT * FROM user WHERE id=$id")->queryAll();
          $arr = array($data);            
          echo $_GET['callback'] . '(' . json_encode($arr) . ')';
          //return $data;
        }
        
    }

    public function actionGetwinner()  {

        if(isset($_GET['id'])){
          $id = $_GET['id'];
          //$data = Yii::$app->db->createCommand("SELECT * FROM bakkara WHERE id=$id")->queryAll();
          //$event = $data['event'];  
          $event = $id;          
          echo $_GET['callback'] .'('. json_encode($event).')';
          //return $data;
        }
        
    }
    // расчет и обновления баланса
    public function actionBalance(){

      if(isset($_GET['userid'])){
        $userid = $_GET['userid'];
        $history = Yii::$app->db->createCommand("SELECT * FROM bakkara_history ")->queryAll();
        $result = Yii::$app->db->createCommand("SELECT * FROM user WHERE id = '$userid'")->queryAll();

            if($result){
                foreach ($result as $value) {
                    $balance = $value['balance'];
                }
            }

        $setb =0;    
        $count=count($history);
        
        $minus=0;
        if($history)
        for($i=0;$i<$count;$i++){
           //pair_p
            if($history[$i]['userid']==$userid){
              if($history[$i]['status']==1){
                $setb = $setb + ($history[$i]['price']*$history[$i]['kef']);  
              }
              $minus = $minus + $history[$i]['price'];
            }
        }
        $setb = $setb - $minus;
        $lastgame= Yii::$app->db->createCommand("UPDATE `user` SET `setb`='$setb' WHERE `id` = '$userid'")->execute();
        
        $users = User::find()->all();
        foreach ($users as $u) {
          if($u->id==$userid){
            $arr=$u->setb;
          }
        }
        //$arr = array("ok");       
        
        echo $_GET['callback'] .'('. json_encode($balance+$arr).')';
      }

    }
    // добавление ставок
    public function actionBets()
    {
         if(isset($_GET['event'])){
            $event = $_GET['event'];
            $kef = $_GET['kef'];
            $gameid = $_GET['gameid'];
            $price = $_GET['price'];
            $userid = $_GET['userid'];
            $lastcard = Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();
            
              $result = Yii::$app->db->createCommand()->insert('bakkara_history', ['event' => $event,'gameid' => $gameid,'price' => $price,'userid' => $userid,'kef' => $kef])->execute();
            //$q = Yii::$app->db->createCommand("INSERT INTO `bakkara_history` (event,kef,gameid,price,userid) VALUES ('$event',$kef,$gameid,$price,$userid)")->queryAll();

            $this->actionSendb();
         }
    }

    public function actionSendpass()
    {
         if(isset($_GET['phone'])){
            $phone = $_GET['phone'];
            $emailr = Yii::$app->db->createCommand("SELECT * FROM user WHERE `phone`='$phone' ORDER BY id DESC LIMIT 1")->queryAll();
            $userid = $emailr[0]['id'];
            $email = $emailr[0]['email'];

             $arr = array('a','b','c','d','e','f',
                           'g','h','i','j','k','l',
                           'm','n','o','p','r','s',
                           't','u','v','x','y','z',
                           '1','2','3','4','5','6',
                           '7','8','9','0');
              // Генерируем пароль
              $pass = "";
              for($i = 0; $i < 5; $i++)
              {
                // Вычисляем случайный индекс массива
                $index = rand(0, count($arr) - 1);
                $pass .= $arr[$index];
              }

              $hpass = Yii::$app->getSecurity()->generatePasswordHash($pass);

              $newphoneid = "oldversion";

              $lastgame = Yii::$app->db->createCommand("UPDATE `user` SET `password`='$hpass',`phoneid` = '$newphoneid'  WHERE `id` = '$userid'")->execute();
              
              $arr1 = array($email,$pass); 
              /*$ch = curl_init("http://almagames.kz");

              curl_setopt($ch, CURLOPT_POSTFIELDS, 'pass=123456&email=kuatzhashkey@gmail.com');

              curl_exec($ch);
              curl_close($ch);*/

              echo $_GET['callback'] .'('. json_encode($arr1).')';

             
              
               

           
         }
    }
    
    public function actionServer(){
$this->layout = 'main2';
      return $this->render('server');

    }
    // поиск карт по штрих коду
    public function actionFindcart(){   

        $db = \Yii::$app->db;

        if(isset($_POST['barcode'])){
          $q2=0;$q1=0;$q3=0;$q4=0;
            $barcode = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["barcode"]))));
            $karti =  Karti::find()->all();

            $karta =0;
            foreach ($karti as $k){
                if($k->barcode == $barcode){
                    $karta = $k->code;

                }
            }

            $lastcard = Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")
                ->queryAll();
           
            $id = $lastcard[0]['id'];

            $p11=$lastcard[0]['p11'];
            $p12=$lastcard[0]['p12'];

            $d11=$lastcard[0]['d11'];
            $d12=$lastcard[0]['d12'];

            if($d11>=100)
              $d11=0;
            if($d12>=100)
              $d12=0;
            if($p11>=100)
              $p11=0;
            if($p12>=100)
              $p12=0;

            if($d11>=140)
              $d11=1;
            if($d12>=140)
              $d12=1;
            if($p11>=140)
              $p11=1;
            if($p12>=140)
              $p12=1;



            $p=$p11+$p12;
            $d=$d11+$d12;
            if($d>10)
              $d=$d%10;
            if($p>10)
              $p=$p%10;

            $k;
            if($lastcard[0]['d11']==0)
              $k = 'd11';
            if($lastcard[0]['p11']==0)
              $k = 'p11';

           // $q1 = Yii::$app->db->createCommand("UPDATE `bakkara` SET $k = $karta WHERE `id`=$id")->execute();

            if($lastcard[0]['p11']==0){
                $q1 = Yii::$app->db->createCommand("UPDATE `bakkara` SET `p11` = $karta WHERE `id`=$id")->execute();
                echo 1;
            }

            
            if($lastcard[0]['p11']!=0){
              echo 2;
              if($lastcard[0]['d11']==0)
                  $q2 = Yii::$app->db->createCommand("UPDATE `bakkara` SET `d11` = $karta WHERE `id`=$id")->execute();

                //print_r($lastcard[0]['p11']);}
              else{
                if($lastcard[0]['p12']==0)
                  $q3 = Yii::$app->db->createCommand("UPDATE `bakkara` SET `p12` = $karta WHERE `id`=$id")->execute();
                else{
                  if($lastcard[0]['d12']==0)
                    $q4 = Yii::$app->db->createCommand("UPDATE `bakkara` SET `d12` = $karta WHERE `id`=$id")->execute();
                  
                }
              }
            }
            exit;

            if($lastcard[0]['d12']!=0){
              if($lastcard[0]['pa']==0){
                    if($p<5){
                      if($lastcard[0]['pa']==0)
                        $q = Yii::$app->db->createCommand("UPDATE `bakkara` SET `pa` = $karta WHERE `id`=$id")->execute();
                      
                    }
                    else if($d<5){
                      if($lastcard[0]['pa']==0)
                        $q = Yii::$app->db->createCommand("UPDATE `bakkara` SET `pa` = $karta WHERE `id`=$id")->execute();
                      
                    }
              }
              if($lastcard[0]['pa']!=0){
                if($lastcard[0]['da']==0){
                  $q = Yii::$app->db->createCommand("UPDATE `bakkara` SET `da` = $karta WHERE `id`=$id")->execute();
                }
              }
            }
        }

        
    }
  public function actionCards(){
    if(isset($_GET['text'])){
        $db = \Yii::$app->db;
        $lastcard = Yii::$app->db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")
                ->queryAll();
               echo $lastcard[0]['p11'];
            return $this->render('cards');
    }
  }   



      
}