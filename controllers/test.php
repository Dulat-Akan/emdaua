<?php 
 public function actionRouletteresult(){

        $session = Yii::$app->session;

                if (!$session->isActive){
                    $session->open();
                }

        if($_SERVER['REMOTE_ADDR'] == "192.168.1.150"){    
        //if($_SERVER['REMOTE_ADDR'] != "192.168.1.150"){    

             /*proverka to chto zaprosi otpravlyaet sam server*/

        $number = 2000;

        $street = 12;
        $split = 18;
        $corner = 9;
        $six_number = 6;
        $stright_up = 36;
        $dushina = 3;
        $kolonki = 3;
        $chet_nechet = 2;
        $krasn_chernoe = 2;
        $mal_bolshie = 2;
        $none = 12;
        $ntwo = 7.2;
        $nthree = 5;
        $nfour = 4;
        $big_seriess = 2;
        $small_series = 2;
        $orphand = 3.6;
        $zero_spiel2 = 9;

        $vinstatus = 0;

        $ostat = array();

        
        $ball_id = 2000;

        $result2 = Yii::$app->db->createCommand("SELECT * FROM roulette")->queryAll();

        foreach ($result2 as $value2) {
            $number = $value2['number'];
            $ball_id = $value2['id'];     
        }

        $session->set("ballid",$ball_id);
        $session->set("number",$number);


        $result = Yii::$app->db->createCommand("SELECT * FROM r_koef WHERE status = '2'")->queryAll();

        if($result == true){

        $data = "";



        foreach ($result as $value) {


            $data = unserialize($value['koef']);

        //  print_r($data);

        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";

       // exit;


        if($data != ""){
                            /*one arrays*/
            $d0 = $data[0];
            $d1 = $data[1];
                            /*zapolnenie*/
            $d1_money = array();
            $d1_status = array();
            $d1_name = array();

            for($u = 0;$u < count($d0);$u++){
                $d1_money[$u] = 0;
                $d1_status[$u] = 0;
                $d1_name[$u] = 0;
            }
                            /*zapolnenie*/
                             /*one arrays*/

                             /*two arrays*/
            $d2 = $data[2];
            $d3 = $data[3];
                            /*zapolnenie*/

            $d3_money = array();
            $d3_status = array();
            $d3_name = array();

            for($p = 0;$p < count($d2);$p++){
                $d3_money[$p] = 0;
                $d3_status[$p] = 0;
                $d3_name[$p] = 0;
            }

                            /*zapolnenie*/
                            /*two arrays*/

                            /*three arrays*/
            $d4 = $data[4];
            $d5 = $data[5];
                            /*zapolnenie*/
            $d5_money = array();
            $d5_status = array();
            $d5_name = array();

            for($l = 0;$l < count($d4);$l++){
                $d5_money[$l] = 0;
                $d5_status[$l] = 0;
                $d5_name[$l] = 0;
            }

            if(isset($data[6])){
                $d6 = $data[6];
            }
            

            /*snyatie balansa s postavlennih stavok*/

            /*raschet postavlennoi stavki*/
                    $money_ost = 0;

                    for($ii = 0;$ii < count($d1);$ii++){

                        if($d1[$ii] != 0){
                            //echo $d0[$ii]." | ".$d1_status[$ii]." | ".$d1_money[$ii];
                            $money_ost += $d1[$ii];
                        }


                    }


                   
                    /*echo "<br>";
                    echo "--------------";
                     echo "<br>";*/

                    for($ii = 0;$ii < count($d3);$ii++){

                        if($d3[$ii] != 0){

                           // echo $d2[$ii]." | ".$d3_status[$ii]." | ".$d3_money[$ii]."<br>";
                            $money_ost += $d3[$ii];
                        }


                    }

                    // echo "<br>";
                    // echo "--------------";
                    //  echo "<br>";

                    for($ii = 0;$ii < count($d5);$ii++){

                        if($d5[$ii] != 0){

                           // echo $d4[$ii]." | ".$d5_status[$ii]." | ".$d5_money[$ii]."<br>";
                            $money_ost += $d5[$ii];

                        }


                    }



            /*raschet postavlennoi stavki*/

            $id = $data[7];

            $balans = 0;
            $fixbalans = 0;

            $startingbalance = 0;

            $result3 = Yii::$app->db->createCommand("SELECT * FROM user WHERE id = '$id'")->queryAll();

            if($result3){
                foreach ($result3 as $value3) {
                    $balans = $value3['balance'];
                    $startingbalance = $value3['balance'];
                }
            }

            

            if($balans > 0 && $balans >= $money_ost){
                    $balans -= $money_ost;
                    $fixbalans = 1;        
            }




            /*snyatie balansa s postavlennih stavok*/




                            /*zapolnenie*/
                           /*three arrays*/

                           /*vichisleniya one arrays*/

            for($i = 0;$i < count($d1);$i++){
                if($d1[$i] != 0){

                    

                    if($number != 2000){
                        if($d0[$i] == $number){

                             $d1_money[$i] = $d1[$i] * $stright_up;
                             $d1_status[$i] = 1;
                             $d1_name[$i] = "stright_up";
                             $vinstatus = 1;

                             //echo $d0[$i]." | ".$d1[$i]." | ".$d1_money[$i]." | ".$d1_status[$i]."<br>";
                        }
                    }
                    

                }
            }


                           /*vichisleniya one arrays*/

          $ar2k1_1 = array(3,6,9,12,15,18,21,24,27,30,33,36);
          $ar2k1_2 = array(2,5,8,11,14,17,20,23,26,29,32,35);
          $ar2k1_3 = array(1,4,7,10,13,16,19,22,25,28,31,34);
          $red = array(1,3,5,7,9,12,14,16,18,19,21,23,25,27,30,32,34,36);
          $black = array(2,4,6,8,10,11,13,15,17,20,22,24,26,28,29,31,33,35);
          $orphanss = array(1,20,14,31,9,6,34,17);
          $zero_spiel = array(35,3,26,0,32);
          $s_s = array(27,13,36,11,30,8,23,10,5,24,16,33);
          $big_series = array(22,18,29,7,28,12,25,2,21,4,19,15);       
          $sosed = array(0,32,15,19,4,21,2,25,17,34,6,27,13,36,11,30,8,23,10,5,24,16,33,1,20,14,31,9,22,18,29,7,28,12,35,3,26);       

                           /*vichisleniya two arrays*/

            for($i = 0;$i < count($d3);$i++){
                if($d3[$i] != 0){

                    if($number != 2000){
                        
                        switch ($d2[$i]) {
                            case '1x12':

                                

                                for($q = 1;$q <= 12;$q++){
                                    if($q == $number){
                                        
                                        $d3_status[$i] = 1;
                                        $d3_name[$i] = "duzhina";
                                        $d3_money[$i] = $d3[$i] * $dushina;
                                        $vinstatus = 1;
                                        //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                    }
                                }

                                

                                break;

                                case '2x12':

                                    for($w = 13;$w <= 24;$w++){
                                        if($w == $number){
                                            
                                            $d3_status[$i] = 1;
                                            $d3_name[$i] = "duzhina";
                                            $d3_money[$i] = $d3[$i] * $dushina;
                                            $vinstatus = 1;
                                            //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                        }
                                    }


                                break;


                                case '3x12':

                                    for($e = 25;$e <= 36;$e++){
                                        if($e == $number){
                                            
                                            $d3_status[$i] = 1;
                                            $d3_name[$i] = "duzhina";
                                            $d3_money[$i] = $d3[$i] * $dushina;
                                            $vinstatus = 1;
                                            //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                        }
                                    }


                                break;


                                case '2k1-1':

                                    for($r = 0;$r < count($ar2k1_1);$r++){
                                        if($ar2k1_1[$r] == $number){
                                            
                                            $d3_status[$i] = 1;
                                            $d3_name[$i] = "kolonki";
                                            $d3_money[$i] = $d3[$i] * $kolonki;
                                            $vinstatus = 1;
                                            //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                        }
                                    }


                                break;

                                case '2k1_2':

                                    for($t = 0;$t < count($ar2k1_2);$t++){
                                        if($ar2k1_2[$t] == $number){
                                            
                                            $d3_status[$i] = 1;
                                            $d3_name[$i] = "kolonki";
                                            $d3_money[$i] = $d3[$i] * $kolonki;
                                            $vinstatus = 1;
                                            //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                        }
                                    }


                                break;


                                case '2k1_3':

                                    for($y = 0;$y < count($ar2k1_3);$y++){
                                        if($ar2k1_3[$y] == $number){
                                            
                                            $d3_status[$i] = 1;
                                            $d3_name[$i] = "kolonki";
                                            $d3_money[$i] = $d3[$i] * $kolonki;
                                            $vinstatus = 1;
                                            //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                        }
                                    }


                                break;

                                case '1to18':

                                    for($o = 1;$o <= 18;$o++){
                                        if($o == $number){
                                            
                                            $d3_status[$i] = 1;
                                            $d3_name[$i] = "mal_bol";
                                            $d3_money[$i] = $d3[$i] * $mal_bolshie;
                                            $vinstatus = 1;
                                            //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                        }
                                    }


                                break;


                                case '19to36':

                                    for($a = 19;$a <= 36;$a++){
                                        if($a == $number){
                                            
                                            $d3_status[$i] = 1;
                                            $d3_name[$i] = "mal_bol";
                                            $d3_money[$i] = $d3[$i] * $mal_bolshie;
                                            $vinstatus = 1;
                                            //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                        }
                                    }


                                break;


                                case 'even':

                                    for($s = 0;$s <= 36;$s++){

                                       if($s % 2 == 0){

                                            if($s == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "even_odd";
                                                $d3_money[$i] = $d3[$i] * $chet_nechet;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                        }
                                        
                                    }


                                break;


                                case 'odd':

                                    for($s = 0;$s <= 36;$s++){

                                       if($s % 2 == 1){

                                            if($s == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "even_odd";
                                                $d3_money[$i] = $d3[$i] * $chet_nechet;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                        }

                                    }


                                break;


                                case 'red':

                                    for($d = 0;$d < count($red);$d++){

                                            if($red[$d] == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "black_red";
                                                $d3_money[$i] = $d3[$i] * $krasn_chernoe;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                    }


                                break;


                                case 'black':

                                    for($f = 0;$f < count($black);$f++){

                                            if($black[$f] == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "black_red";
                                                $d3_money[$i] = $d3[$i] * $krasn_chernoe;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                    }


                                break;


                                case 'bs':

                                    for($g = 0;$g < count($big_series);$g++){

                                            if($big_series[$g] == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "b_s";
                                                $d3_money[$i] = $d3[$i] * $big_seriess;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                    }


                                break;

                                case 'ss':

                                    for($h = 0;$h < count($s_s);$h++){

                                            if($s_s[$h] == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "s_s";
                                                $d3_money[$i] = $d3[$i] * $small_series;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                    }


                                break;


                                case 'orp':

                                    for($j = 0;$j < count($orphanss);$j++){

                                            if($orphanss[$j] == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "orp";
                                                $d3_money[$i] = $d3[$i] * $orphand;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                    }


                                break;

                                case 'zs':

                                    for($k = 0;$k < count($zero_spiel);$k++){

                                            if($zero_spiel[$k] == $number){
                                                
                                                $d3_status[$i] = 1;
                                                $d3_name[$i] = "z_s";
                                                $d3_money[$i] = $d3[$i] * $zero_spiel2;
                                                $vinstatus = 1;
                                                //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";
                                            }

                                    }


                                break;


                                case 'no':

                                    //echo "--".$d3[$i]."--";
                                    //echo "--".$d6[0][0]."--";

                                    for($z = 0;$z < count($sosed);$z++){
                                        if(isset($d6[0][0])){

                                            if($d6[0][0] == $sosed[$z]){

                                                
                                                if($z+1 > 36){
                                                    $zm = $z+1-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zm = $z+1;
                                                }

                                                if($z-1 < 0){
                                                    $zg = $z-1+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zg = $z-1;
                                                }

                                                if($sosed[$z] == $number || $sosed[$zg] == $number || $sosed[$zm] == $number){
                                                    $d3_status[$i] = 1;
                                                    $d3_name[$i] = "no";

                                                    $jjj = (($d3[$i] / 3) * $none)-1;
                                                    $d3_money[$i] = floor($jjj);
                                                    $ost = $jjj - $d3_money[$i] + 1;
                                                    $vinstatus = 1;
  
                                                    array_push($ostat, $ost);
                                                    //echo $ost;

                                                    //$d3_money[$i] = floor(($d3[$i] / 3) * $none);
                                                    //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";

                                                    //echo $zm;
                                                    // echo $sosed[$zm];
                                                    // echo $z;
                                                    // echo $sosed[$zg];
                                                }
                                            }

                                        }
                                    }


                                break;


                                case 'ntwo':

                                    //echo "--".$d3[$i]."--";
                                    //echo "--".$d6[1][0]."--";

                                    for($n = 0;$n < count($sosed);$n++){
                                        if(isset($d6[1][0])){

                                            if($d6[1][0] == $sosed[$n]){

                                                
                                                if($n+1 > 36){
                                                    $zm = $n+1-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zm = $n+1;
                                                }

                                                if($n+2 > 36){
                                                    $zl = $n+2-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zl = $n+2;
                                                }

                                                if($n-1 < 0){
                                                    $zg = $n-1+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zg = $n-1;
                                                    //echo "ddd";
                                                }

                                                if($n-2 < 0){
                                                    $zk = $n-2+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zk = $n-2;
                                                }

                                                //echo $zm." | ".$zl." | ".$zg." | ".$zk."<br>"."<br>";

                                               // exit;

                                                if($sosed[$n] == $number || $sosed[$zg] == $number || $sosed[$zm] == $number || $sosed[$zk] == $number || $sosed[$zl] == $number){
                                                    $d3_status[$i] = 1;
                                                    $d3_name[$i] = "notwo";

                                                    $jjj = (($d3[$i] / 5) * $ntwo)-1;
                                                    $d3_money[$i] = floor($jjj);
                                                    $ost = $jjj - $d3_money[$i] + 1;
                                                    //echo $ost;
                                                    array_push($ostat, $ost);
                                                    $vinstatus = 1;
                                                    //$d3_money[$i] = floor(($d3[$i] / 5) * $ntwo);
                                                    //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";

                                                    //echo $zm;
                                                    // echo $sosed[$zm];
                                                    // echo $z;
                                                    // echo $sosed[$zg];
                                                }
                                            }

                                        }
                                    }


                                break;


                                case 'nthree':

                                    //echo "--".$d3[$i]."--";
                                    //echo "--".$d6[1][0]."--";

                                    for($n = 0;$n < count($sosed);$n++){
                                        if(isset($d6[2][0])){

                                            if($d6[2][0] == $sosed[$n]){

                                                
                                                if($n+1 > 36){
                                                    $zm = $n+1-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zm = $n+1;
                                                }

                                                if($n+2 > 36){
                                                    $zl = $n+2-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zl = $n+2;
                                                }

                                                if($n+3 > 36){
                                                    $zr = $n+3-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zr = $n+3;
                                                }

                                                if($n-1 < 0){
                                                    $zg = $n-1+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zg = $n-1;
                                                }

                                                if($n-2 < 0){
                                                    $zk = $n-2+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zk = $n-2;
                                                }


                                                if($n-3 < 0){
                                                    $zt = $n-3+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zt = $n-3;
                                                }

                                                if($sosed[$n] == $number || $sosed[$zg] == $number || $sosed[$zm] == $number || $sosed[$zk] == $number || $sosed[$zl] == $number || $sosed[$zt] == $number || $sosed[$zr] == $number){
                                                    $d3_status[$i] = 1;
                                                    $d3_name[$i] = "nothree";

                                                    $jjj = (($d3[$i] / 7) * $nthree)-1;
                                                    $d3_money[$i] = floor($jjj);
                                                    $ost = $jjj - $d3_money[$i] + 1;
                                                    //echo $ost;
                                                    array_push($ostat, $ost);
                                                    $vinstatus = 1;
                                                    //$d3_money[$i] = floor(($d3[$i] / 3) * $nthree);
                                                   // echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";

                                                    //echo $zm;
                                                    // echo $sosed[$zm];
                                                    // echo $z;
                                                    // echo $sosed[$zg];
                                                }
                                            }

                                        }
                                    }


                                break;


                                case 'nf':

                                    //echo "--".$d3[$i]."--";
                                    //echo "--".$d6[1][0]."--";

                                    for($n = 0;$n < count($sosed);$n++){
                                        if(isset($d6[3][0])){

                                            if($d6[3][0] == $sosed[$n]){

                                                
                                                if($n+1 > 36){
                                                    $zm = $n+1-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zm = $n+1;
                                                }

                                                if($n+2 > 36){
                                                    $zl = $n+2-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zl = $n+2;
                                                }

                                                if($n+3 > 36){
                                                    $zr = $n+3-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zr = $n+3;
                                                }

                                                if($n+4 > 36){
                                                    $zvv = $n+4-37;
                                                    //echo "facker";
                                                    //echo $sosed[$zm];

                                                }else{
                                                    $zvv = $n+4;
                                                }

                                                if($n-1 < 0){
                                                    $zg = $n-1+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zg = $n-1;
                                                }

                                                if($n-2 < 0){
                                                    $zk = $n-2+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zk = $n-2;
                                                }


                                                if($n-3 < 0){
                                                    $zt = $n-3+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zt = $n-3;
                                                }

                                                if($n-4 < 0){
                                                    $zvn = $n-4+37;
                                                    //echo "facker";
                                                    //echo $sosed[$zg];

                                                }else{
                                                    $zvn = $n-4;
                                                }

                                                if($sosed[$n] == $number || $sosed[$zg] == $number || $sosed[$zm] == $number || $sosed[$zk] == $number || $sosed[$zl] == $number || $sosed[$zt] == $number || $sosed[$zr] == $number || $sosed[$zvv] == $number || $sosed[$zvn] == $number){
                                                    $d3_status[$i] = 1;
                                                    $d3_name[$i] = "nofour";
                                                    $jjj = (($d3[$i] / 9) * $nfour)-1;
                                                    $d3_money[$i] = floor($jjj);
                                                    $ost = $jjj - $d3_money[$i] + 1;
                                                    //echo $ost;
                                                    array_push($ostat, $ost);
                                                    $vinstatus = 1;
                                                    //echo $d2[$i]." | ".$d3[$i]." | ".$d3_money[$i]." | ".$d3_status[$i]."<br>";

                                                    //echo $zm;
                                                    // echo $sosed[$zm];
                                                    // echo $z;
                                                    // echo $sosed[$zg];
                                                }
                                            }

                                        }
                                    }


                                break;
                            
                            default:
                                # code...
                                break;
                        }


                        
                    }
                    //echo $d2[$i]." | ".$d3[$i]."<br>";
                }
            }


                           /*vichisleniya two arrays*/

                           /*vichisleniya two arrays*/

            

            for($i = 0;$i < count($d5);$i++){
                if($d5[$i] != 0){
                    //echo $d4[$i]." | ".$d5[$i]."<br>";

                    $exp = explode("x", $d4[$i]);
                        $ooo = 0;
                        $fixit = 0;
                    for($gm = 0;$gm < count($exp);$gm++){

                        if($exp[$gm] == $number){

                            $d5_status[$i] = 1;

                            $fixit = 1;

                            //echo $number."<br>";
                            
                            //echo $d4[$i]." | ".$d5[$i]." | ".$d5_money[$i]." | ".$d5_status[$i]."<br>";
                        }
                        $ooo++;
                    }
                        if($ooo == 2 && $fixit == 1){
                                $d5_money[$i] = $d5[$i] * $split;
                                $vinstatus = 1;
                                $d5_name[$i] = "split";
                                //echo "<br>----2----<br>";

                                //echo "hhh";
                            }

                        if($ooo == 6 && $fixit == 1){
                                $d5_money[$i] = $d5[$i] * $six_number;
                                $vinstatus = 1;
                                $d5_name[$i] = "six_number";
                                //echo "<br>----3----<br>";
                                //echo "3hhh";
                            }

                        if($ooo == 4 && $fixit == 1){
                                $d5_money[$i] = $d5[$i] * $corner;
                                $vinstatus = 1;
                                $d5_name[$i] = "corner";
                                //echo "<br>----4----<br>";


                            }

                        if($ooo == 3 && $fixit == 1){
                                $d5_money[$i] = $d5[$i] * $street;
                                $vinstatus = 1;
                                $d5_name[$i] = "street";
                                //echo "<br>----4----<br>";


                            }

                        if($fixit == 1){

                            //echo $d4[$i]." | ".$d5[$i]." | ".$d5_money[$i]." | ".$d5_status[$i]."<br>";
                        }

                }
            }

                            
                           /*vichisleniya two arrays*/
        }

        /*pribavlenie viigrisha k base*/

        $money_summ = 0;

        for($ii = 0;$ii < count($d1_status);$ii++){

            if($d1_status[$ii] == 1){
                //echo $d0[$ii]." | ".$d1_status[$ii]." | ".$d1_money[$ii];
                $money_summ += $d1_money[$ii];
            }


        }

       
        /*echo "<br>";
        echo "--------------";
         echo "<br>";*/

        for($ii = 0;$ii < count($d3_status);$ii++){

            if($d3_status[$ii] == 1){

               // echo $d2[$ii]." | ".$d3_status[$ii]." | ".$d3_money[$ii]."<br>";
                $money_summ += $d3_money[$ii];
            }


        }

        // echo "<br>";
        // echo "--------------";
        //  echo "<br>";

        for($ii = 0;$ii < count($d5_status);$ii++){

            if($d5_status[$ii] == 1){

               // echo $d4[$ii]." | ".$d5_status[$ii]." | ".$d5_money[$ii]."<br>";
                $money_summ += $d5_money[$ii];

            }


        }


        /*echo "<br>";
        echo "--------------";
         echo "<br>";*/

         /*pribavlenie viigrisha k base*/

         //echo $money_summ;
         //zanesti v bazu

         if($fixbalans == 1){
            $itog = $balans + $money_summ;
        }else{
            $itog = $balans;
        }

         


         //echo $itog;

         //echo $itog;
         // $result4 = Yii::$app->db->createCommand("UPDATE user SET balance='$itog' WHERE id='$id'")->execute();

         // if($result4){
         //    //echo "1";
         // }else{
         //    //echo "2";
         // }
         /*pribavlenie viigrisha k base*/



         

        //$ostat
         $sendarray = array();

         $success1 = array();
         $success2 = array();
         $success3 = array();

         $success1[0] = $d0;    /*stavki prostih chisel  -- massivi ravni po dline*/
         $success1[1] = $d1;    /*postavlennie summi*/
         $success1[2] = $d1_status; /*status stavki*/
         $success1[3] = $d1_money;  /*kolichestvo viigrannih deneg ishodya iz statusa*/
         $success1[4] = $d1_name;  /*names stavki*/


         $success2[0] = $d2;    /*stavki kombinasii naprimer 1-12 i t.d  -- massivi ravni po dline*/
         $success2[1] = $d3;    /*postavlennie summi*/
         $success2[2] = $d3_status;     /*status stavki*/
         $success2[3] = $d3_money;      /*kolichestvo viigrannih deneg ishodya iz statusa*/
         $success2[4] = $d3_name;      /*names stavki*/


         $success3[0] = $d4;            /*stavki grupp chisel  -- massivi ravni po dline*/
         $success3[1] = $d5;                /*postavlennie summi*/
         $success3[2] = $d5_status;          /*status stavki*/
         $success3[3] = $d5_money;              /*kolichestvo viigrannih deneg ishodya iz statusa*/
         $success3[4] = $d5_name;              /*names stavki*/
         
         $sendarray[0] = $success1;         /*1 rascheti*/  
         $sendarray[1] = $success2;          /*2 rascheti*/ 
         $sendarray[2] = $success3;              /*3 rascheti*/ 
         $sendarray[3] = $ostat;            /*ost*/
         $sendarray[4] = $money_summ;           /*summa viigrisha*/
         $sendarray[5] = $number;
         $sendarray[6] = $startingbalance;
         $sendarray[7] = $ball_id;

         $sendarrayserial = serialize($sendarray);

         /*struktura array[$0-4 - drevo1] -> [$0-3 - drevo2] */

         /*obnovit resultati*/

         $result7 = Yii::$app->db->createCommand("UPDATE user SET balance='$itog' WHERE id='$id'")->execute();


         $result5 = Yii::$app->db->createCommand("UPDATE r_koef SET result_koef='$sendarrayserial', status='1', win_status='$vinstatus', sum='$money_summ', user_id='$id' WHERE status='2' LIMIT 1")->execute();


         $result6 = Yii::$app->db->createCommand("UPDATE r_status SET game_status='0' WHERE id='1'")->execute();

         if($result5){
            echo "1";
         }else{
            echo "2";
         }

         /*obnovit resultati*/

                    /*zakritie foreach*/
                    }
                    /*zakritie foreach*/

         }else{
                echo "ставок не было..";
         }


        }else{
                return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/index'));
        }      /*KONES remote addr*/
        /*if($result == true){
            echo "1";
        }else{
            echo "2";
        }*/

        }

     ?>