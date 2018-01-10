<?php

namespace app\controllers;
use app\models\Bakkara;
use app\models\BakkaraHistory;
use app\models\Karti;
use app\models\Usertwo;
use app\models\User;
use Yii;
use yii\helpers\Url;
class BakkaraController extends \yii\web\Controller
{
   
    
    public function actionServer(){
      $db = Yii::$app->db;
      $this->layout = 'main5';

     
       if(isset($_POST['barcode'])){
          $q2=0;$q1=0;$q3=0;$q4=0;
            $barcode = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["barcode"]))));
            $status = trim(strip_tags(stripcslashes(htmlspecialchars($_POST["status"]))));
            $karti =  Karti::find()->all();

            $karta =0;
            foreach ($karti as $k){
                if($k->barcode == $barcode){
                    $karta = $k->code;
                }
            }

            $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")
                ->queryAll();

            $id = $lastcard[0]['id'];
            $p=$lastcard[0]['d11']+$lastcard[0]['d12'];
            $d=$lastcard[0]['p11']+$lastcard[0]['p12'];
            if($d>10)
              $d=$d%10;
            if($p>10)
              $p=$p%10;

            $k;
            if($lastcard[0]['d11']==0)
              $k = 'd11';
            if($lastcard[0]['p11']==0)
              $k = 'p11';
                    if($lastcard[0]['pa']!=0){
                      if($lastcard[0]['da']==0)
                        $q = $db->createCommand("UPDATE `bakkara` SET `da` = $karta WHERE `id`=$id")->execute();
                    } 
           // $q1 = $db->createCommand("UPDATE `bakkara` SET $k = $karta WHERE `id`=$id")->execute();
            echo "ok";
            if($lastcard[0]['p11']==0){
              $q1 = $db->createCommand("UPDATE `bakkara` SET `p11` = $karta, `comb`=2  WHERE `id`=$id")->execute();
               //---- ras4et stavok --------
              $pair_p=0;
              $pair_d=0;
              $small=0;    
              $winner='live';

              $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();
              $id = ($lastcard[0]['id']-1);
              
              $lastfinished = Yii::$app->db->createCommand("SELECT * FROM bakkara WHERE id =$id")->queryAll();
              $winner = $lastfinished[0]['winner'];
              $pair_p = $lastfinished[0]['pair_p'];
              $pair_d = $lastfinished[0]['pair_d'];
              $small = $lastfinished[0]['small'];
              $insb = $lastfinished[0]['insb'];
              $insp = $lastfinished[0]['insp'];

              echo "id = ".$id;

              $history = Yii::$app->db->createCommand("SELECT * FROM bakkara_history WHERE gameid =$id")->queryAll();
                  

              foreach ($history as $h) {
                if($h['event'] == 'pair_p'){
                  $id = $h['id'];
                  if($pair_p!=0)
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'pair_d'){
                  $id = $h['id'];
                  if($pair_d!=0)
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'player'){
                  $id = $h['id'];
                  if($winner =='player')
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'diller'){
                  $id = $h['id'];
                  if($winner =='diller')
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'tie'){
                  $id = $h['id'];
                  if($winner =='tie')
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'small'){
                  $id = $h['id'];
                  if($small!=0)
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'big'){
                  $id = $h['id'];
                  if($small==0)
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'insb'){
                  $id = $h['id'];
                  if($insb!=0)
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
                if($h['event'] == 'insp'){
                  $id = $h['id'];
                  if($insp!=0)
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=1 WHERE id =$id")->execute();
                  else
                    $update= Yii::$app->db->createCommand("UPDATE `bakkara_history` SET `status`=2 WHERE id =$id")->execute();
                }
              } 
              //---- ras4et stavok --------
            }

            else {
              if($lastcard[0]['d11']==0)
                $q2 = $db->createCommand("UPDATE `bakkara` SET `d11` = $karta, `comb`=4 WHERE `id`=$id")->execute();

                //print_r($lastcard[0]['p11']);}
              else{
                if($lastcard[0]['p12']==0)
                  $q3 = $db->createCommand("UPDATE `bakkara` SET `p12` = $karta, `comb`=6 WHERE `id`=$id")->execute();
                else{
                  
                  if($lastcard[0]['d12']==0){
                      //sna4alo dobavim kartu
                      $q4 = $db->createCommand("UPDATE `bakkara` SET `d12` = '$karta', `comb`=7 WHERE `id`=$id")->execute();
                      //posle etogo berem karti s posl dobav kartoi
                      $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();

                      $pp1 = intval($lastcard[0]['p11']/10); // 72/10 = 7 (semerka karta)
                      $pp2 = intval($lastcard[0]['p12']/10);
                      $dd1 = intval($lastcard[0]['d11']/10);
                      $dd2 = intval($lastcard[0]['d12']/10);

                      if($pp1>13)  // esli karta 123 -> 123/10 =12 12=>0
                        $pp1=1;

                      if($pp2>13)
                        $pp2=1;

                      if($dd1>13)
                        $dd1=1;

                      if($dd2>13)
                        $dd2=1;

                      if($pp1>9)  // esli karta 123 -> 123/10 =12 12=>0
                        $pp1=0;

                      if($pp2>9)
                        $pp2=0;

                      if($dd1>9)
                        $dd1=0;

                      if($dd2>9)
                        $dd2=0;

                      $ps = $pp1+$pp2;
                      $ds = $dd1+$dd2;

                      if($ps>9) // esli summa karta bolwe 10 to berem birlikterdi ubiraya ondiktardi
                        $ps=$ps%10;

                      if($ds>9)
                        $ds=$ds%10;

                      $d=""; // nevajno, dlya proverki
                      $d = $pp1.$pp2.' '.$dd1.$dd2;
                      
                      
                      $status =0;

                      if($ps<5 && $ds>5&&$ds<8)  // только игроку доп карта
                        $status = 1;
                      if($ps>5 && $ps<8 && $ds<6) // только диллеру доп карта
                        $status = 2;
                      if($ps<6 && $ps<6)
                        $status = 3;

                      

                        $pins=0;
                        $dins=0;

                        if($ds==4 && $ps<4)
                            $dins = 1.5;
                        if($ds==5 && $ps<5)
                            $dins = 2;
                        if($ds==6 && $ps<6)
                            $dins = 3;
                        if($ds==7 && $ps<7)
                            $dins = 4;

                        if($ps==5 && $ds==4)
                            $pins = 2;
                        if($ps==6 && $ds<6)
                            $pins = 3;
                        if($ps==7 && $ds<6)
                            $pins = 4;

                        if($pins>0)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `insp` ='$pins' WHERE `id`=$id")->execute();
                        if($dins>0)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `insb` ='$dins' WHERE `id`=$id")->execute();

                        
                      if($status==0){  // если не будут раздавать доп карту
                        if($ps>$ds)
                          
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `d12` = '$karta', `winner`='player', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps<$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `d12` = '$karta', `winner`='diller', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps==$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `d12` = '$karta', `winner`='tie', `status` = 1 WHERE `id`=$id")->execute();

                        $q = $db->createCommand("INSERT `bakkara` SET `gameid`=($id+1)")->execute();
                      }
                      if($ps>7 && $ds<5){   // esli u igroka 8 ili 9 to zakan4ivaem igru
                        $q5 = $db->createCommand("UPDATE `bakkara` SET `d12` = '$karta', `winner`='player', `status` = 1 WHERE `id`=$id")->execute();
                        $q = $db->createCommand("INSERT `bakkara` SET `gameid`=($id+1)")->execute();
                      }
                      if($ds>7 && $ps<5){  // esli u dillera 8 ili 9 to zakan4ivaem igru
                        $q5 = $db->createCommand("UPDATE `bakkara` SET `d12` = '$karta', `winner`='diller', `status` = 1 WHERE `id`=$id")->execute();
                        $q = $db->createCommand("INSERT `bakkara` SET `gameid`=($id+1)")->execute();
                      }

                  }
                  else{
                    
                    
                    if($lastcard[0]['pa']==0 &&  $status==3){
                        if($lastcard[0]['pa']==0){
                          $q = $db->createCommand("UPDATE `bakkara` SET `pa` = $karta, `comb`=8 WHERE `id`=$id")->execute();
                          $ppa = intval($lastcard[0]['pa']/10);
                          if($ppa>13)  // esli karta 123 -> 123/10 =12 12=>0
                            $ppa=1;
                          if($ppa>9)  // esli karta 123 -> 123/10 =12 12=>0
                            $ppa=0;

                            $pins=0;
                            $dins=0;

                            if($ds>7 && $ps==0)
                                $dins = 8;    // if tie
                            if($ds>1 && $ds<7 && $ps==1) 
                                $dins = 7;    // if players wins
                            if($ds>2 && $ds<7 && $ps==2)
                                $dins = 4;
                            if($ds==4 && $ps==3)
                                $dins = 2;
                            if($ds==5 && $ps==4)
                              $dins = 2;

                            if($ps==4 && $ds<4)
                                $pins = 1.5;
                            if($ps==5 && $ds<5)
                                $pins = 2;
                            if($ps==6 && $ds<6)
                                $pins = 3;
                            if($ps==7 && $ds<7)
                              $pins = 4;
                            if($ps==8 && $ds<7)
                              $pins = 8;   // if diller wins
                            if($ps==9 && $ds<7)
                              $pins = 10;  // if tie

                            if($pins>0)
                              $q5 = $db->createCommand("UPDATE `bakkara` SET `insp2` ='$pins' WHERE `id`=$id")->execute();
                            if($dins>0)
                              $q5 = $db->createCommand("UPDATE `bakkara` SET `insb2` ='$dins' WHERE `id`=$id")->execute();

                        }
                        
                    }  
                    if($lastcard[0]['pa']==0 && $status==1){

                        if($lastcard[0]['pa']==0)
                          $q = $db->createCommand("UPDATE `bakkara` SET `pa` = $karta, `comb`=8 WHERE `id`=$id")->execute();

                        $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();

                        $pp1 = intval($lastcard[0]['p11']/10); // 72/10 = 7 (semerka karta)
                        $pp2 = intval($lastcard[0]['p12']/10);
                        $dd1 = intval($lastcard[0]['d11']/10);
                        $dd2 = intval($lastcard[0]['d12']/10);
                        $ppa = intval($lastcard[0]['pa']/10);

                        if($pp1>10)  // esli karta 123 -> 123/10 =12 12=>0
                          $pp1=0;

                        if($pp2>10)
                          $pp2=0;

                        if($ppa>10)
                          $ppa=0;

                        if($dd1>10)
                          $dd1=0;

                        if($dd2>10)
                          $dd2=0;

                        $ps = $pp1+$pp2+$ppa;
                        $ds = $dd1+$dd2;

                        if($ps>10) // esli summa karta bolwe 10 to berem birlikterdi ubiraya ondiktardi
                          $ps=$ps%10;

                        if($ds>10)
                          $ds=$ds%10;

                        if($ps>$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='player', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps<$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='diller', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps==$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='tie', `status` = 1 WHERE `id`=$id")->execute();
                        $q = $db->createCommand("INSERT `bakkara` SET `gameid`=($id+1)")->execute();
                    }
                    if($lastcard[0]['da']==0 && ($status==2)){
                        if($lastcard[0]['da']==0)
                          $q = $db->createCommand("UPDATE `bakkara` SET `da` = $karta, `comb`=8 WHERE `id`=$id")->execute();

                        $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();

                        $pp1 = intval($lastcard[0]['p11']/10); // 72/10 = 7 (semerka karta)
                        $pp2 = intval($lastcard[0]['p12']/10);
                        $dd1 = intval($lastcard[0]['d11']/10);
                        $dd2 = intval($lastcard[0]['d12']/10);
                        $ppa = intval($lastcard[0]['pa']/10);
                        $dda = intval($lastcard[0]['da']/10);

                        if($pp1>10)  // esli karta 123 -> 123/10 =12 12=>0
                          $pp1=0;

                        if($pp2>10)
                          $pp2=0;

                        if($dda>10)
                          $dda=0;

                        if($dd1>10)
                          $dd1=0;

                        if($dd2>10)
                          $dd2=0;

                        $ps = $pp1+$pp2;
                        $ds = $dd1+$dd2+$dda;

                        if($ps>10) // esli summa karta bolwe 10 to berem birlikterdi ubiraya ondiktardi
                          $ps=$ps%10;

                        if($ds>10)
                          $ds=$ds%10;

                        if($ppa!=0){
                          if($ds>7 && $ps==0)
                                $dins = 8;    // if tie
                            if($ds>1 && $ds<7 && $ps==1) 
                                $dins = 7;    // if players wins
                            if($ds>2 && $ds<7 && $ps==2)
                                $dins = 4;
                            if($ds==4 && $ps==3)
                                $dins = 2;
                            if($ds==5 && $ps==4)
                              $dins = 2;

                            if($ps==4 && $ds<4)
                                $pins = 1.5;
                            if($ps==5 && $ds<5)
                                $pins = 2;
                            if($ps==6 && $ds<6)
                                $pins = 3;
                            if($ps==7 && $ds<7)
                              $pins = 4;
                            if($ps==8 && $ds<7)
                              $pins = 8;   // if diller wins
                            if($ps==9 && $ds<7)
                              $pins = 10;  // if tie

                            if($pins>0)
                              $q5 = $db->createCommand("UPDATE `bakkara` SET `insp2` ='$pins' WHERE `id`=$id")->execute();
                            if($dins>0)
                              $q5 = $db->createCommand("UPDATE `bakkara` SET `insb2` ='$dins' WHERE `id`=$id")->execute();
                        }

                        if($ps>$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='player', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps<$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='diller', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps==$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='tie', `status` = 1 WHERE `id`=$id")->execute();

                        $q = $db->createCommand("INSERT `bakkara` SET `gameid`=($id+1)")->execute();
                    } 
                    if($lastcard[0]['da']==0 && ($status==3)){
                        if($lastcard[0]['da']==0)
                          $q = $db->createCommand("UPDATE `bakkara` SET `da` = $karta, `comb`=9 WHERE `id`=$id")->execute();

                        $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();

                        $pp1 = intval($lastcard[0]['p11']/10); // 72/10 = 7 (semerka karta)
                        $pp2 = intval($lastcard[0]['p12']/10);
                        $dd1 = intval($lastcard[0]['d11']/10);
                        $ppa = intval($lastcard[0]['pa']/10);
                        $dd2 = intval($lastcard[0]['d12']/10);
                        $dda = intval($lastcard[0]['da']/10);

                        if($pp1>10)  // esli karta 123 -> 123/10 =12 12=>0
                          $pp1=0;

                        if($pp2>10)
                          $pp2=0;

                        if($ppa>10)
                          $ppa=0;

                        if($dda>10)
                          $dda=0;

                        if($dd1>10)
                          $dd1=0;

                        if($dd2>10)
                          $dd2=0;

                        $ps = $pp1+$pp2+$ppa;
                        $ds = $dd1+$dd2+$dda;

                        if($ps>10) // esli summa karta bolwe 10 to berem birlikterdi ubiraya ondiktardi
                          $ps=$ps%10;

                        if($ds>10)
                          $ds=$ds%10;

                        if($ps>$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='player', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps<$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='diller', `status` = 1 WHERE `id`=$id")->execute();
                        if($ps==$ds)
                          $q5 = $db->createCommand("UPDATE `bakkara` SET `winner`='tie', `status` = 1 WHERE `id`=$id")->execute();
                        $q = $db->createCommand("INSERT `bakkara` SET `gameid`=($id+1)")->execute();
                    } 
                    
                  }
                  
                }
              }
            }
            

            /*if($lastcard[0]['d12']!=0){
              if($lastcard[0]['pa']==0){
                    if($p<5){
                      if($lastcard[0]['pa']==0)
                        $q = $db->createCommand("UPDATE `bakkara` SET `pa` = $karta WHERE `id`=$id")->execute();
                      
                    }
                    else if($d<5){
                      if($lastcard[0]['pa']==0)
                        $q = $db->createCommand("UPDATE `bakkara` SET `pa` = $karta WHERE `id`=$id")->execute();
                      
                    }
              }
              if($lastcard[0]['pa']!=0){
                if($lastcard[0]['da']==0){
                  $q = $db->createCommand("UPDATE `bakkara` SET `da` = $karta WHERE `id`=$id")->execute();
                }
              }
            }*/

        }
        $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();
               
        return $this->render('server', ['lastcard' => $lastcard[0]]);

    }
    // поиск карт по штрих коду
    public function actionFindcart(){   

       return $this->render('findcart'); 

        
    }
    
  public function actionAddstatus(){
    $db = Yii::$app->db;
    if(isset($_POST["comb"])){

      $comb = $_POST["comb"];
      $lastcard = $db->createCommand("SELECT * FROM bakkara ORDER BY id DESC LIMIT 1")->queryAll();

      $id = $lastcard[0]['id'];

      $q = $db->createCommand("UPDATE `bakkara` SET `comb` = '$comb' WHERE `id`=$id")->execute();
    }

    //$this->layout = 'main5';
    //return $this->render('cards'); 
  }   


      
}