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
class SiteController extends Controller
{


    public function beforeAction($action){
        if( $action->id == 'testing'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }
	
	
public function actionStatus($login){
//podtverzhden
$this->actionStatus2($login);



}

 public function actionOnline(){
	   return $this->render('online');
  }
 public function actionPoker(){
	   return $this->render('poker');
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

            return $this->render('test');

    }



    public function actionNumber(){
        if(isset($_POST['number'])){
            $number = $_POST['number'];
            if($_SERVER["REMOTE_ADDR"] == "127.0.0.1"){
               $result = Yii::$app->db->createCommand()->insert('roulette', ['number' => $number])->execute();

               if($result == true){
                    echo "1";
               }else{
                echo "2";
               }
           }
        }
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
$user_agent = $_SERVER["HTTP_USER_AGENT"];
  if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
  elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
  elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
  elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
  elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
  else $browser = "Неизвестный";
  //echo "Ваш браузер: $browser";
  if($browser == "Internet Explorer"){
	   $this->layout = 'explorers';
	  return $this->render('explorer');
	  
	  
  }
		
		
		
	 $this->layout = 'main2';
		$page='index';
        return $this->render('index');
    }


    public function actionRequest(){

        return $this->render('request');
    }

    public function actionRequestlive(){
$this->layout = 'main3';
        return $this->render('request_live',['model'=>$layout]);
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

            if($success){
                echo $content;
            }else{
                echo "файл не записан..";
            }


    }


        public function actionLiveupdate(){




            $content = file_get_contents('http://olimp.kz/betting');
          

            $file = "../views/site/liverequest.php";
           

            $myfile = fopen($file, 'w+');

            $success = fwrite($myfile, $content);

            $page = Yii::$app->view->renderFile('@files/liverequest.php');

            fclose($myfile);

            if($success){

                if($page == $content){
                    echo "ok";
                }else{
                    echo "false";
                }
                

            }else{
                echo "false";
            }


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
//$hid = "http://inza.si";
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
 public function actionOnlineajax(){
	 $identity = \Yii::$app->user->identity;
	 if($identity){
		 $res_id = $identity['id'];
	 }else{
		 echo "nouser";exit();
	 }
	 //
	 
	$session =Yii::$app->session;
        $session->open();
	$option=trim(strip_tags($_POST['param2']));
	
if($option == 'number4'){
$summ=trim(strip_tags($_POST['summa']));
//$time = time() - (3600 * 24 * 3);
$time = time();

	$model = new Ruletka();
			 $model->id_user = $res_id;
   $tring=implode(",", $_POST['param']);
        $model->stavka4 = $tring;
		$model->summastavka4=$summ;
		$model->timer=$time;
        $model->save(false);
		   
array_push($_POST['param'], $summ);

//$_SESSION['stavka']['number4'][]=$_POST['param'];
echo "ok";exit();
}
if($option == 'number2'){
$summ=trim(strip_tags($_POST['summa']));
	$model = new Ruletka();
			 $model->id_user = $res_id;
   $tring=implode(",", $_POST['param']);
        $model->stavka2 = $tring;
		$model->summastavka2=$summ;
        $model->save(false);
		   	
	
	array_push($_POST['param'], $summ);
//$_SESSION['stavka']['number2'][]=$_POST['param'];
echo "ok";exit();
}
if($option == 'baza'){

$user_stavka = Ruletka::find()->asArray()->where("id_user=$res_id")->limit(1)->one();
$name='activ';
  $success_result=Roulette::find()->asArray()->where("status='{$name}'")->limit(1)->one();
$number_success=$success_result['number'];
if($success_result){
$arr=explode(',',$user_stavka['stavka4']);
if(in_array($number_success,$arr)){
	$user_stavka[4]=$number_success;
	/*
	foreach($_SESSION['stavka']['number4'] as $item){
		
	}
	*/
	$_SESSION['stavka']['number4'][]=$arr;
	/*
	foreach ($_SESSION['stavka']['number4'] as $item){
		  $sess_num=implode(",", $item);
		  if($sess_num == $user_stavka['stavka4']){
			  
		  }
	}
	*/
	//$this->render('cart-modal', compact('session'));
	
}



echo "ok";exit();
}else{
	 $file = fopen('log.txt', 'w+');
  $date=date("d m Y H:i:s");
$write = fwrite($file, "не пришел запрос с базы выигрышное число: ".$date);
}


	
}//baza


if($option == 'statistika'){

	 $session =\Yii::$app->session;
		      $session->open();
	 $this->layout = false;
	 return $this->render('cart-modal', compact('session'));
}


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

            /*echo $_POST['game']." | ".$_POST['k']." | ".$_POST['name'];*/
        
        
        date_default_timezone_set('Asia/Almaty');

        $date = date("d.m.Y");
        $time = date("H.i.s");

        $user = $identity['id'];

        $sobitie = new TypeSobitiya();
        $sobitie->ishod = $_POST['game'];
        $sobitie->k = $_POST['k'];
        $sobitie->name_kommand = $_POST['name'];
        $sobitie->date_stavki = $date;
        $sobitie->time_stavki = $time;
        $sobitie->res_id = $user;
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
        
        $sobitie = Yii::$app->db->createCommand("SELECT * FROM type_sobitiya WHERE status IS NULL AND res_id = '$res_id'")->queryAll();
        
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






}
