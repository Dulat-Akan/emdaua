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

class SiteController extends Controller
{
	
	
public function actionStatus($login){
//podtverzhden
$this->actionStatus2($login);
}

protected function actionStatus2($login){
    $time = time() - (3600 * 24 * 3);//если прошло ровно три дня тогда то что хранится в базе будет равно результату,  
	//если прошло более три дня тогда результат будет больше того, что хранится в базе 
			//если прошло меньше трех дней тогда результат будет меньше того что в базе
			 $login2=strip_tags($login);//функция вырезает теги если есть в запросе
		     $baza=Usertwo::findOne(['username' => $login2]);
		
			 if($baza->timer){
				  if(is_numeric($baza->timer)){
				  if($baza->timer < $time){
					 
			$baza->delete();
			$model = new Usertwo();
		 return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/index'));
			 }else{
				 			 		 if($baza->timer==$time || $time < $baza->timer){
					 //разрешаем потвержление в течении трех дней но не больше трех
					 	$baza->timer='podtverzhden';
			$baza->save(false);
		Yii::$app->session->setFlash('success', 'Вы успешно подтвердили регистрацию, теперь можете войти на сайт');
			 return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/index'));
			
					 }
			 }
				  }
                   else{
Yii::$app->session->setFlash('error', 'Вы уже потверждали ранее акаунт');
 return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/index'));
				 }
		
}
	  			 Yii::$app->session->setFlash('error', 'Такого логина в этой системе нет');
 return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/index'));    
		     }
			
    public function actionUsertwo()
        {
	$this->layout = 'main2';		
			
$model = new Usertwo();

            if ($model->load(Yii::$app->request->post())) {
                if($model->validate()) {
            // form inputs are valid, do something here
                    $model->attributes = Yii::$app->request->post('Usertwo');
                     $model->password=Yii::$app->getSecurity()->generatePasswordHash($_POST['Usertwo']['password']);
                    $model->timer=time();
                    $model->save();
                    
$username=$_POST['Usertwo']['username'];    
$patch="<a href='http://".$_SERVER['HTTP_HOST'].Url::to('@site')."/status?login=".$username."' target='blank'>перейдите по ссылке</a>";
$date=date("d.m.Y"); 
$time=date("H:i"); 
$to=$_POST['Usertwo']['email'];//кому отправить
$subject = "Потверждение регистрации";//тема письма
			   $subject='=?UTF-8?B?'.base64_encode($subject).'?=';
	          $From = ' site';
             $message="Для потверждения регистрации ".$patch;
                     $headers="From: $From\r\nReply-To: \r\nContent-type: text/html; charset=UTF-8\r\n";
		              mail($to,$subject,$message,$headers);
Yii::$app->session->setFlash('success', 'Данные приняты, вам на почту выслано письмо с активацией, необходимо сделать активацию в течениии трех дней');
return $this->refresh();
                        
                        
                }else{
                    Yii::$app->session->setFlash('error', 'Ошибка: такой логин в нашей системе есть');
                     return $this->refresh();
                }
            }

            return $this->render('usertwo', [
                'model' => $model,
            ]);
        }
    



    public function actionEntry(){

        $model = new EntryForm();

        if($model->load(Yii::$app->request->post()) && $model->validate()){
            // данные в $model удачно проверены

            // делаем что-то полезное с $model ...

                return $this->render('entry-confirm',['model'=>$model]);
        }else{

            // либо страница отображается первый раз, либо есть ошибка в данных

            return $this->render('entry',['model'=>$model]);

        }

    }

    public function actionTesting(){

    }

    public function actionSay($message = 'Привет'){

        return $this->render('say',['message'=>$message]);

    }

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    public function actionIndex()
    {
	$this->layout = 'main2';
            $page='index';
        return $this->render('index');
    }
    public function actionRecordbd2(){
        if(isset($_POST['zogolovok'])){
            $zogolovok = $_POST['zogolovok'];
            $comand1 = $_POST['comand1'];
            $comand2 = $_POST['comand2'];
            $date = $_POST['datetime'];
            $schet = $_POST['schet'];
            
            $i=0;
            foreach ($comand1 as $c){
                
                $hist = new \app\models\History2();
                $hist->name1 = $comand1[$i];
                $hist->name2 = $comand2[$i];
                $hist->date_time = $date[$i];
                $hist->per1 = $schet[$i];
                $score = stristr($hist->per1, '(', true);
                
                $string1 = str_replace($score,'',$hist->per1);
                $string1 = str_replace('(','',$string1);
                $string1 = str_replace(')','',$string1);
                $string1 = str_replace('<br>','',$string1);
                $schets = explode(" ", $string1);
                $hist->per2 = $score;
                if(isset($schets[0]))
                $hist->per3 = $schets[0];
                if(isset($schets[1]))
                $hist->per4 = $schets[1];
                if(isset($schets[2]))
                $hist->per5 = $schets[2];
                if(isset($schets[3]))
                $hist->per6 = $schets[3];
                if(isset($schets[4]))
                $hist->per7 = $schets[4];
                $i++;
                $hist->save();
            }
        }
    }
    
    
    public function actionRecordbd(){
        if(isset($_POST['zogolovok'])){
            $zagolovok = $_POST['zogolovok'];
            $comand1 = $_POST['comand1'];
            $comand2 = $_POST['comand2'];
            $date = $_POST['datetime'];
            $schet = $_POST['schet'];
            $time = $_POST['time'];
            
            function str_replace_first($from, $to, $subject){
                $from = '/'.preg_quote($from, '/').'/';

                return preg_replace($from, $to, $subject, 1);
            }
            
                $i=0;
                foreach ($comand1 as $c){
                $hist = new \app\models\History();
                $hist->name1 = $comand1[$i];
                $hist->name2 = $comand2[$i];
                
                //$hist->date_time = $date[$i];
                $string1 = str_replace('<b>','',$schet[$i]); 
                $string2 = str_replace('</b>','',$string1); 
                $score = stristr($string2, '(', true);
                
                // per3 (1 taim)
                $string3 = str_replace($score,'',$string2);
                $string4 = str_replace('(','',$string3);
                $string5 = str_replace(')','',$string4);
                $ftime = stristr($string5, ',', true);
                
                // per4 (2 taim)
                $stime = str_replace_first($ftime,'',$string5);
                $stime = substr_replace($stime, null, 0, 2);
                $f = stristr($stime, ',', true);
                if($f!='')
                    $hist->per4 = $f;
                if($f=='' && $stime!='')
                    $hist->per4 = $stime;
                
                // per5 (3 taim)
                $ttime = str_replace_first($hist->per4,'',$stime);
                $ttime = substr_replace($ttime, null, 0, 2);
                $k = stristr($ttime, ',', true);
                if($k!='')
                    $hist->per5 = $k;
                if($k=='' && $ttime!='')
                    $hist->per5 = $ttime;
                
                // per6 (4 taim);
                $fourthtime = str_replace_first($hist->per5,'',$ttime);
                $fourthtime = substr_replace($fourthtime, null, 0, 2);
                $d = stristr($fourthtime, ',', true);
                if($d!='')
                    $hist->per6 = stristr($fourthtime, ',', true);
                if($d=='' && $fourthtime!='')
                    $hist->per6 = $fourthtime;
                
                // per7 (5 taim);
                $fifthtime = str_replace_first($hist->per6,'',$fourthtime);
                $fifthtime = substr_replace($fifthtime, null, 0, 2);
                $f = stristr($fifthtime, ',', true);
                if($f!='')
                    $hist->per7 = stristr($fifthtime, ',', true);
                if($f=='' && $fifthtime!='')
                    $hist->per7 = $fifthtime;
                
                $hist->per1 = $score;
                $hist->per2 = $time[$i];
                $hist->per3 = $ftime;
                $hist->per8 = $string2;
                $hist->date_time = $date[$i];
                $i++;
                $hist->save();
            }
        }
    }
    
    public function actionCompare(){
        
        $hist = \app\models\History2::find()->all();
        $liveresult = \app\models\TypeSobitiya::find()->all();
        $lr = new TypeSobitiya();
        
        function p1($schet){
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            if($k1>$k2)
                return "Выиграло";
            else
                return "Проиграло";
        }
        
        function x($schet){
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            if($k1==$k2)
                return "Выиграло";
            else
                return "Проиграло";
        }
        
        function p2($schet){
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            if($k1<$k2)
                return "Выиграло";
            else
                return "Проиграло";
        }
        
        function x1($schet){
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            if($k1>=$k2)
                return "Выиграло";
            else
                return "Проиграло";
        }
        
        function x2($schet){
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            if($k1<=$k2)
                return "Выиграло";
            else
                return "Проиграло";
        }
        
        function x12($schet){
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            if($k1!=$k2)
                return "Выиграло";
            else
                return "Проиграло";
        }
        
        function f1($schet, $fora){
            $f1 = substr_replace($fora, null, 0, 4);
            $f1 = stristr($f1, ')', true);
             
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            
            if(($k1+$f1)>$k2)
                return "Выиграло";
            else if(($k1+$f1)==$k2)
                return "Возврат";
            else
                return "Проиграло";
        }
        
        function f2($schet, $fora){
            $f2 = substr_replace($fora, null, 0, 4);
            $f2 = stristr($f2, ')', true);
             
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            
            if(($k2+$f2)>$k1)
                return "Выиграло";
            else if(($k2+$f2)==$k1)
                return "Возврат";
            else
                return "Проиграло";
        }
        
        function temp($schet, $fora,$com){
            
            $schets = explode(" - ", $com);
            $c1 = $schets[0];
            $c2 = $schets[1];
            print_r($c1); //$c1.' и '.$c2;
            
            $f2 = substr_replace($fora, null, 0, 4);
            $f2 = stristr($f2, ')', true);
             
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            
            if(($k2+$f2)>$k1)
                return "Выиграло";
            else if(($k2+$f2)==$k1)
                return "Возврат";
            else
                return "Проиграло";
        }
            
        function total($schet,$total,$id){
            $tot = substr_replace($total, null, 0, 7);
            $tot = stristr($tot, ')', true);
            
            $k1 = stristr($schet, ':', true);
            $k2 = str_replace($k1,'',$schet);
            $k2 = substr_replace($k2, null, 0, 1);
            $m = stripos($total, "М");
            $b = stripos($total, "Б");
            
            if(($k1+$k2)>$tot){
                if($b !== false){
                    return "Выиграла";
                }
                if($m !== false){
                    return "Проиграла";   
                }
            }
        }
        
        foreach($hist as $h){
            foreach($liveresult as $l){
                $is = stripos ($l->name_kommand, $h->name1);
                if($is !== false){
                    $p1 = stripos($l->ishod, "П1");
                    $p2 = stripos($l->ishod, "П2");
                    $x = stripos($l->ishod, "Х");
                    $x1 = stripos($l->ishod, "1Х");
                    $x2 = stripos($l->ishod, "Х2");
                    $x12 = stripos($l->ishod, "12");
                    $f1 = stripos($l->ishod, "Ф1");
                    $f2 = stripos($l->ishod, "ф2");
                    $total = stripos($l->ishod, "Тот(");
                    $indtotal = stripos($l->ishod, "Тот(");
                    
                    if($p1 !== false){ 
                        $r = p1($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($p2 !== false){ 
                        $r = p2($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($x !== false){ 
                        $r = x($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($x1 !== false){ 
                        $r = x1($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($x2 !== false){ 
                        $r = x2($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($x12 !== false){ 
                        $r = x12($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($f1 !== false){ 
                        $r = f1($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($f2 !== false){ 
                        $r = f2($h->per2, $l->ishod);
                        \Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                    
                    if($total !== false){ 
                        temp($h->per2, $l->ishod,$l->name_kommand);
                        //$r = total($h->per2, $l->ishod);
                        //\Yii::$app->db->createCommand("UPDATE type_sobitiya SET status='$r' WHERE id='$l->id'")->execute(); 
                    }
                      
                }
            }
            
        }
        
    }
    
    public function actionRequest(){

        return $this->render('request');
    }
    
    public function actionRequestlive(){

        return $this->render('request_live');
    }

    public function actionSoccerpage(){

        return $this->render('soccer_request');
    }
    
    public function actionSlive(){

        return $this->render('s_live');
    }


    public function actionLiverequest(){

            $content = file_get_contents('http://olimp.kz/betting');
            $file = "../views/site/liverequest.php";
            $myfile = fopen($file, 'w+');
            $success = fwrite($myfile, $content);
            fclose($myfile);

            if($success)
                echo $content;
            else
                echo "файл не записан..";
            
    }

        public function actionLiveupdate(){

            $content = file_get_contents('http://olimp.kz/betting');
            $file = "../views/site/liverequest.php";
            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            $page = Yii::$app->view->renderFile('@files/liverequest.php');

            fclose($myfile);

            if($success){
                if($page == $content)
                    echo "ok";
                else
                    echo "false";
            }else
                echo "false"; 
    }    

    public function actionP(){


            $content = file_get_contents('http://olimp.kz/result');
          

            $file = "../views/site/myfile.php";
           

            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            fclose($myfile);

            if($success){
                echo $content;
            }else{
                echo "файл не записан..";
            }
    
    }



     public function actionPtwo(){


            $content = file_get_contents('https://www.parimatch.com/liveres.html?MG=0');
          
            $content = iconv('windows-1251', 'utf-8', $content);

            $file = "../views/site/myfile_live.php";
           

            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            fclose($myfile);

            if($success){
                echo $content;
            }else{
                echo "файл не записан..";
            }

            
    }


   



    public function actionSoccer(){

            if(isset($_POST['data']) && isset($_POST['hid'])){

                $data = $_POST['data'];

            switch ($data) {
                case 'Футбол':
                    $url = "http://olimp.kz/betting/soccer";
                    break;
                case 'Теннис':
                    $url = "http://olimp.kz/betting/tennis";
                    break;

                case 'Хоккей':
                    $url = "http://olimp.kz/betting/hockey";
                    break;

                case 'Американский футбол':
                    $url = "http://olimp.kz/betting/american-football";
                    break;

                case 'Бейсбол':
                    $url = "http://olimp.kz/betting/baseball";
                    break;

                case 'Биатлон':
                    $url = "http://olimp.kz/betting/biathlon";
                    break;
                case 'Бокс':
                    $url = "http://olimp.kz/betting/boxing";
                    break;
                case 'Гандбол':
                    $url = "http://olimp.kz/betting/handball";
                    break;

                case 'Гольф':
                    $url = "http://olimp.kz/betting/golf";
                    break;
                case 'Горные лыжи':
                    $url = "http://olimp.kz/betting/mountain-skiing";
                    break;
                case 'Дартс':
                    $url = "http://olimp.kz/betting/darts";
                    break;
                case 'Киберспорт':
                    $url = "http://olimp.kz/betting/cybersport";
                    break;
                case 'Крикет':
                    $url = "http://olimp.kz/betting/cricket";
                    break;
                case 'Лыжи':
                    $url = "http://olimp.kz/betting/skiing";
                    break;
                case 'Мотоспорт':
                    $url = "http://olimp.kz/betting/index.php?page=line&action=1&sel[]=117";
                    break;
                case 'Песапалло':
                    $url = "http://olimp.kz/betting/index.php?page=line&action=1&sel[]=115";
                    break;
                case 'Прыжки с трамплина':
                    $url = "http://olimp.kz/betting/ski-jumping";
                    break;
                case 'Прыжки с трамплина':
                    $url = "http://olimp.kz/betting/ski-jumping";
                    break;

                case 'Ралли':
                    $url = "http://olimp.kz/betting/index.php?page=line&action=1&sel[]=119";
                    break;

                case 'Регби-лига':
                    $url = "http://olimp.kz/betting/rugby-league";
                    break;
                case 'Регби-союз':
                    $url = "http://olimp.kz/betting/rugby-union";
                    break;
                case 'Смешанные боевые искусства':
                    $url = "http://olimp.kz/betting/mma";
                    break;
                case 'Снукер':
                    $url = "http://olimp.kz/betting/snooker";
                    break;
                case 'Формула 1':
                    $url = "http://olimp.kz/betting/formula1";
                    break;

                
                default:
                    $url = "err";
                    break;
            }


            $content = file_get_contents($url);
          
            $file = "../views/site/soccer.php";
           
            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            fclose($myfile);

            if($success){
                echo $content;
            }else{
                echo "файл не записан..";
            }

            }

            

    }


    /* public function actionSoccer(){

            $content = file_get_contents('http://olimp.kz/betting/soccer');
          
            $file = "../views/site/soccer.php";
           
            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            fclose($myfile);

            if($success){
                echo $content;
            }else{
                echo "файл не записан..";
            }

    }*/

        

      public function actionSoccerliveptwo(){
 
        return $this->render("soccerliveresult");

    }


     public function actionSoccerlive(){

            $session = Yii::$app->session;

            $session->open();
            

            if(isset($_POST['hid'])){

            $hid = "http://olimp.kz/".$_POST['hid'];

            $session->set("href",$hid);

            $content = file_get_contents($hid);
            

            $file = "../views/site/soccerlive.php";
           

            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            fclose($myfile);

            if($success){
                echo "ok";
            }else{
                echo "файл не записан..";
            }

        }


        
    }



    public function actionLive(){

            $session = Yii::$app->session;

            $session->open();
            

            if(isset($_POST['hid'])){

            $hid = "http://olimp.kz/".$_POST['hid'];

            $session->set("href",$hid);

            $content = file_get_contents($hid);
            

            $file = "../views/site/live.php";
           

            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            $session->close();

            fclose($myfile);

            if($success){
                echo "ok";
            }else{
                echo "файл не записан..";
            }

        }


        
    }


         public function actionLivetwo(){

             $session = Yii::$app->session;

             $session->open();

             $href = $session->get('href');

            if(isset($href)){
                
                $content = file_get_contents($href);
                

                $file = "../views/site/live.php";
               

                $myfile = fopen($file, 'w+');

                $success = fwrite($myfile, $content);

                fclose($myfile);

                if($success){
                    echo "ok";
                }else{
                    echo "файл не записан..";
                }

            }

       


        
    }

    public function actionTest(){

        /*$password = "hh";
        
        $hash = Yii::$app->getSecurity()->generatePasswordHash($password);
        

        echo $hash;*/

        

       
    }



    public function actionLivep(){

        return $this->render("live_result");

    }


    public function actionUpdatek(){

            $session = Yii::$app->session;

            $session->open();

            $get_session = $session->get('href');
            

            if(isset($get_session)){


            $hid = "http://olimp.kz/".$get_session;

            $content = file_get_contents($hid);
            
            $file = "../views/site/live.php";

            $page = file_get_contents($file);

            if($content == $page){
                    echo "false";
            }else{
                $myfile = fopen($file, 'w+');

                $success = fwrite($myfile, $content);

                $session->close();

                fclose($myfile);

                if($success){
                    echo "ok";

                }else{
                    echo "false";
                }

            }

           

        }

    }


   

protected function checkTimer($login){
		$time = time() - (3600 * 24 * 3);//если прошло ровно три дня тогда то что хранится в базе будет равно результату,  
			//если прошло более три дня тогда результат будет больше того, что хранится в базе 
			//если прошло меньше трех дней тогда результат будет меньше того что в базе
			$login2=strip_tags($login);//функция вырезает теги если есть в запросе
			
		     $baza=Usertwo::findOne(['username' => $login2]);
			 if($baza){//если нашел такой логин
			 
			if($baza->timer){
			//если есть значение в переменой из базы
					  if(is_numeric($baza->timer)){
						  //если числовое значениеж переменой, не числовое это когда потвержден
				if($baza->timer < $time){
				//если просрочено потверждение
			$baza->delete();
		return true;
			 }else{
				 //если еще есть время для потвержления но еще не потвержден
				 Yii::$app->session->setFlash('error', 'Акаунт не потвержден, вы можете его потвердить в течении трех дней с момента регистрации');
            return false;exit();
			 }
				}
				else{
					//если записано потвержден
					if($baza->timer=='podtverzhden'){
						return true;
					}else{
						echo 99999;exit();
					}
				}
					 }//если есть в базе
				 
			 }
			
	return true;
	
}


    public function actionLogin()
    {

        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
		if(isset($_POST['LoginForm'])){
			$login=$_POST['LoginForm']['username'];
			$result=$this->checkTimer($login);//проверка просрочено ли подтверждение
			if($result==false){
				   return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/index'));
				exit();
			}
		
		}
		
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
			
			
            return $this->goBack();
        }
		
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionK(){
        $session = Yii::$app->session;
        $identity = \Yii::$app->user->identity;

        if($identity){

        if(isset($_POST['game'])){


        date_default_timezone_set('Asia/Almaty');

        $date = date("d.m.Y");
        $time = date("H.i.s");

        $user = $identity['id'];

        $number_kommand = 2;

        $name_kommand = $_POST['name'];
        $ish = $_POST['game'];

        $arr_razd = explode("-",$name_kommand);

        $arr_razd[0];//first kommand
        $arr_razd[1];//the two kommand

        
        $number_kommand = $_POST['head'];
        

        $sobitie = new TypeSobitiya();
        $sobitie->ishod = $ish;
        $sobitie->k = $_POST['k'];
        $sobitie->name_kommand = $name_kommand;
        $sobitie->date_stavki = $date;
        $sobitie->time_stavki = $time;
        $sobitie->res_id = $user;
        $sobitie->number_kommand = $number_kommand;
        $sobitie->save();

        if($sobitie){
        echo "ok";
        }else{
        echo "false";
        }

        }

        }else{
        $message = "<h4 style='color:red;'>необходимо авторизоваться в системе!</h4>";
        $session->setFlash('message', $message);
        echo "false";
        }
    }    


    public function actionKorzina(){

        $session = Yii::$app->session;

        $identity = \Yii::$app->user->identity;

        if($identity){

        $res_id = $identity['id'];
        
        $sobitie = Yii::$app->db->createCommand("SELECT * FROM type_sobitiya WHERE status IS NULL AND res_id = '$res_id'")
                ->queryAll();
        
        return $this->render("korz",['model'=>$sobitie]);

         }else{
            $message = "<h4 style='color:red;'>необходимо авторизоваться в системе!</h4>";
             $session->setFlash('message', $message);

             return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/login'));
         }

    }


    public function actionHistorykorzina(){

        $identity = \Yii::$app->user->identity;

        
        if($identity){
        
        $res_id = $identity['id'];

        $sobitie = Yii::$app->db->createCommand("SELECT * FROM type_sobitiya WHERE status IS NOT NULL AND res_id = '$res_id'")
                ->queryAll();



        return $this->render("history_client",['model'=>$sobitie]);

        }

    }


    public function actionUpdatekorzina(){

        if(isset($_POST['sum'])){

            if(isset($_POST['id'])){




                    $id = $_POST['id'];
                    $sum = $_POST['sum'];

                    $sobitie = TypeSobitiya::findOne($id);
                    $sobitie->status = "принято";
                    $sobitie->sum = $sum;
                    $sobitie->update();
                    if($sobitie){
                        echo "ok";
                    }else{
                        echo "false";
                    }

            }


        }else{
            echo "false";
        }

    }

    public function actionDeletekorzina(){

        
            if(isset($_POST['id'])){




                    $id = $_POST['id'];

                    $sobitie = TypeSobitiya::findOne($id);
                    $sobitie->status = "deleted";
                    $sobitie->delete();
                    if($sobitie){
                        echo "ok";
                    }else{
                        echo "false";
                    }

            


        }else{
            echo "false";
        }

    }




}
