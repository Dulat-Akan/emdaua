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




//livegame - команды с коэффициентами
//livelist - команды играющие live
//soccerlist = обычные ставки на игры запрос конкретной игры
//resultlist = результаты обычные
//resultlivelist = list live result
//soccerlivetwo = внутренняя страница простых ставок на игры



//liverequest -> slive -> livelist
//actionlive->livep -> livegame
//Liverequest ->livelist    -- обновление списка live

//Liveupdate ->livelist    -- обновление списка live

//actionptwo - > requestlive - > resultlivelist

class SiteController extends Controller
{


    public function beforeAction($action){
        if( $action->id == 'number'){
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }
    
    
public function actionStatus($login){
//podtverzhden
$this->actionStatus2($login);



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
            
public function actionUsertwo(){
   // $this->layout = 'main2';        
    $model = new Usertwo();
        if ($model->load(Yii::$app->request->post())) {
            if($model->validate()) {
        // form inputs are valid, do something here
                $model->attributes = Yii::$app->request->post('Usertwo');
                $model->password=Yii::$app->getSecurity()->generatePasswordHash($_POST['Usertwo']['password']);
                $model->timer=time();
                $model->save();

                $username=$_POST['Usertwo']['username'];    
                $patch="<a href='http://".$_SERVER['HTTP_HOST'].Url::to('@base')."/status?login=".$username."' target='blank'>перейдите по ссылке</a>";
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
            
            
            $domain = "http://almagames.mypsx.net";

            for($i = 2;$i < 255;$i++){
                if($_SERVER["REMOTE_ADDR"] == '192.168.1.'.$i){
                    $domain = "http://www.almabet.kz";
                }else if($_SERVER["REMOTE_ADDR"] == '127.0.0.1'){
                    $domain = "http://www.almabet.kz";
                }

            }

 
         $url = $domain.":8091/webcam2.mjpeg"; 

        $url2 = $domain.":8090/webcam.mjpeg"; 

         echo Url::to('@cam1');



    }



    public function actionNumber(){
        if(isset($_POST['number'])){
            $number = $_POST['number'];
            //if($_SERVER["REMOTE_ADDR"] != "192.168.1.150"){
            if($_SERVER["REMOTE_ADDR"] == "192.168.1.151"){
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
        echo "Страница на модернизации";
        //return $this->render('index');
    }


    public function actionRequest(){

        $session = Yii::$app->session;

        $resultlist = $session->get("resultlist");

        $m = unserialize($resultlist);

  

        return $this->render('request',[
            'm' => $m,
        ]);
    }

   public function actionRequestlive(){

        $session = Yii::$app->session;

        $resultlivelist = $session->get("resultlivelist");

        $m = unserialize($resultlivelist);



        return $this->render('request_live',[
            'm' => $m,
        ]);
    }

    public function actionSoccerpage(){

        $session = Yii::$app->session;

        $soccerlist = $session->get("soccerlist");

        $m = unserialize($soccerlist);



        return $this->render('soccer_request',[
            'm' => $m,
        ]);

    }

    



   public function actionSlive(){         //otobrazhenie livecomand

        $session = Yii::$app->session;

        $livelist = $session->get("livelist");

        $m = unserialize($livelist);

        return $this->render('s_live',[
            'm' => $m,
        ]);
    }


   public function actionLiverequest(){            //s_live zaproz livespiska igr

            //livegame - команды с коэффициентами
            //livelist - команды играющие live

            $session = Yii::$app->session;

            $content = file_get_contents('http://olimp.kz/betting');

            $serial = serialize($content);

            $session->set("livelist",$serial);
          

            // $file = "../views/site/liverequest.php";
           

            // $myfile = fopen($file, 'w+');

            // $success = fwrite($myfile, $content);

            // fclose($myfile);

            if($content){
                echo $content;
            }else{
                echo "файл не записан..";
            }


    }


         public function actionLiveupdate(){         //obnovlenie live igr


            $session = Yii::$app->session;

            $content = file_get_contents('http://olimp.kz/betting');

            $serial = serialize($content);

            $session->set("livelist",$serial);
          
            $page = unserialize($session->get("livelist"));

            // $file = "../views/site/liverequest.php";
           
            // $myfile = fopen($file, 'w+');

            // $success = fwrite($myfile, $content);

            // $page = Yii::$app->view->renderFile('@files/liverequest.php');

            // fclose($myfile);

            if($content){

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

            $session = Yii::$app->session;

            $content = file_get_contents('http://olimp.kz/result');

            $serial = serialize($content);

            $session->set("resultlist",$serial);
          

            // $file = "../views/site/myfile.php";
           

            // $myfile = fopen($file, 'w+');

            // $success = fwrite($myfile, $content);

            // fclose($myfile);

            if($content){
                echo $content;
            }else{
                echo "файл не записан..";
            }
    
    }



     public function actionPtwo(){

            $session = Yii::$app->session;

            $content = file_get_contents('http://www.parimatch.kz/liveres.html?MG=0');
          
            $contentf = iconv('windows-1251', 'utf-8', $content);

            $serial = serialize($contentf);

            $session->set("resultlivelist",$serial);

            // $file = "../views/site/myfile_live.php";
           

            // $myfile = fopen($file, 'w+');

            // $success = fwrite($myfile, $content);

            // fclose($myfile);

            if($serial){
                echo $content;
            }else{
                echo "файл не записан..";
            }

            
    }


   



     public function actionSoccer(){

            $session = Yii::$app->session;

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

            //zapisat v sessiyu

             $content = file_get_contents($url);

             $serial = serialize($content);

             $session->set("soccerlist",$serial);
          
            // $file = "../views/site/soccer.php";
           
            // $myfile = fopen($file, 'w+');

            // $success = fwrite($myfile, $content);

            // fclose($myfile);

            if($content){
                echo $content;
            }else{
                echo "файл не записан..";
            }

            }

            

    }


        

     public function actionSoccerliveptwo(){

        $session = Yii::$app->session;

        $getlivesoccer = $session->get("soccerlivetwo");

        $unserial = unserialize($getlivesoccer);

        return $this->render("soccerliveresult",[
            'm' => $unserial,
        ]);

    }


     public function actionSoccerlive(){        /*prostie igri click*/

            $session = Yii::$app->session;

            $session->open();
            

            if(isset($_POST['hid'])){

            $hid = "http://olimp.kz/".$_POST['hid'];
//$hid = "http://inza.si";
            $session->set("hr",$hid);

            $content = file_get_contents($hid);

            $serial = serialize($content);

            $session->set("soccerlivetwo",$serial);
            

            // $file = "../views/site/soccerlive.php";
           

            // $myfile = fopen($file, 'w+');

            // $success = fwrite($myfile, $content);

            // fclose($myfile);

            if($content){
                echo "ok";
            }else{
                echo "файл не записан..";
            }

        }


        
    }

     public function actionSoccerliveupdate(){

             $session = Yii::$app->session;

             $session->open();

             $href = $session->get('hr');

            if(isset($href)){
                
                $content = file_get_contents($href);
                

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

            $serial = serialize($content);
            
            $livegame = $session->set("livegame",$serial);

            



            // $file = "../views/site/live.php";
           

            // $myfile = fopen($file, 'w+');

            // $success = fwrite($myfile, $content);

            // $session->close();

            // fclose($myfile);

            if(isset($content)){
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

    if(isset($_POST['a']) && isset($_POST['b'])){

        $a = $_POST['a'];
        $b = $_POST['b'];
    
    $json = '{"a":"'.$a.'","b":"'.$b.'"}';
                
    echo $json;

    }





 }
     public function actionLivep(){

        $session = Yii::$app->session;

        $livegame = $session->get("livegame");

        $m = unserialize($livegame);


        return $this->render("live_result",[
            'm' => $m,
        ]);

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

         $this->layout = 'default';

        if (!Yii::$app->user->isGuest) {

            if (Url::remember()) {

                return Yii::$app->response->redirect(Url::previous());
            //Url::remember();
//echo Url::previous();
                }else{
                    return $this->goHome();
                }
        }

        $model = new LoginForm();


        
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
        Url::remember();
         if (Yii::$app->user->isGuest) 
            return $this->redirect(["/site/login"]);
        $this->layout = 'poker';
        return $this->render('about');
    }


public function actionK(){
        $session = Yii::$app->session;
        $identity = \Yii::$app->user->identity;

        if($identity){



        if(isset($_POST['game'])){

           
         
        
        date_default_timezone_set('Asia/Almaty');

        $date = date("d.m.Y");
        $time = time();

        $user = $identity['id'];

        $game = $_POST['game'];
        $k = $_POST['k'];
        $name = $_POST['name'];
        

        $res = Yii::$app->db->createCommand()->insert('type_sobitiya', ['ishod' => $game,'k' => $k,'name_kommand' => $name,'date_stavki' => $date,'time_stavki' => $time,'res_id' => $user])->execute();

        if($res){
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


        $now = time() - 300;    /*удалить записи старше 30 минут*/

         $res = Yii::$app->db->createCommand("DELETE FROM type_sobitiya WHERE time_stavki < '$now'")->execute();


        
        $sobitie = Yii::$app->db->createCommand("SELECT * FROM type_sobitiya WHERE status IS NULL AND res_id = '$res_id'")->queryAll();

        $stopgame = Yii::$app->db->createCommand("SELECT * FROM stopgame")->queryAll();
        
        return $this->render("korz",['model'=>$sobitie,'stopgame'=>$stopgame]);

         }else{
            $message = "<h4 style='color:red;'>необходимо авторизоваться в системе!</h4>";
             $session->setFlash('message', $message);

             return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/login'));
         }

    }

    public function actionLk(){
        $this->layout = 'lk';   
        if (Yii::$app->user->isGuest) 
            return $this->redirect(["/site/login"]);
        $id = Yii::$app->user->id;
        
        $model =Usertwo::findOne(['id' => $id]);
       
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
                  $model->file1 = UploadedFile::getInstance($model,'file1');
                  if(isset($model->file1)){
                  $model->file1->saveAs('acc/'. date ("m.d.y H:m:s"). 'c1.' .$model->file1->extension);
                  $model->ul ='http://almagames.mypsx.net/acc/'. date ("m.d.y H:m:s"). 'c1.' .$model->file1->extension;
                  }
                  $model->save();
        }
        return $this->render("lk",['model'=>$model]);
        
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

                $res = Yii::$app->db->createCommand("DELETE FROM type_sobitiya WHERE id = '$id'")->execute();

                if($res){
                    echo "ok";
                }else{
                    echo "false";
                }


        }
        


    }




    public function actionDealer(){

       
        $this->layout = 'dealer';

        return $this->render('dealer');

    }


    public function actionDealercall(){

        if(isset($_POST['a'])){

            $m = $_POST['a'];


                $u = Yii::$app->db->createCommand("UPDATE r_status SET dealer_status='$m' WHERE id='1'")->execute();

                if($u == true){
                   $json = '{"a":"ok","b":"'.$m.'"}';
                   echo $json;
                }else{
                    $json = '{"a":"false","b":"'.$m.'"}';
                    echo $json;
                }
            
        }

    }


    public function actionRoulette(){

        Url::remember();
        $identity = Yii::$app->user->identity;

        if($identity){

            $id = Yii::$app->user->id;

            $this->layout = 'main4';

            return $this->render('roulette', ['id' => $id]);

        }else{
            return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/login'));
        }

        



    }

    public function actionServer(){

       //if($_SERVER['REMOTE_ADDR'] != "192.168.1.150"){ 
       if($_SERVER['REMOTE_ADDR'] == "192.168.1.150"){ 

        $this->layout = 'main4';

        return $this->render('server');

    }else{
        return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/index'));
    }

    }


    public function actionSenddata(){

        $session = Yii::$app->session;

        if (!$session->isActive){
            $session->open();
        }

        $keygen = $session->get('zapros');

        if($keygen != 2){

            if(isset($_POST["hid"])){

                $rdata = $_POST['data'];

                $rdataserial = serialize($rdata);

                $session->set('rdata', $rdataserial);

                $time = time();

                $result = Yii::$app->db->createCommand()->insert('r_koef', ['koef' => $rdataserial,'time' => $time,'status' => '2'])->execute();

                if($result == true){
                    echo "1";
                }else{
                    echo "2";
                }

            }

        }else{
            echo "3";
        }
    }

    public function actionGamestatus(){





    }

    public function actionGamestatusdealer(){

            $status = 1;

            $result = Yii::$app->db->createCommand('SELECT * FROM r_status')->queryAll();

            foreach ($result as $value) {
                    
                    $s = $value['dealer_status'];
                    $status = $s;
            }

            echo $status;


    }


    public function actionSendgamestatus(){

        $session = Yii::$app->session;

        if (!$session->isActive){
            $session->open();
        }

        if(isset($_POST["data"])){

            $data = $_POST["data"];

            if($data == 2){
                //zablokirovat
               $session->set('zapros', '2');
            }else if($data == 1){
                //razblokirovat
                    $session->set('zapros', '1');
            }

            $result = Yii::$app->db->createCommand("UPDATE r_status SET game_status='$data' WHERE id=1")->execute();

            if($result == true){
                echo "1";
            }else{
                echo "2";
            }

        }
        

    }


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

        $twoaccountidarray = array();
        $checkaccount = 0;


        foreach ($result as $value) {





            $data = unserialize($value['koef']);

        //  print_r($data);

        // echo "<br>";
        // echo "<br>";
        // echo "<br>";
        // echo "<br>";

       // exit;


        if($data != ""){

            //check users



            $useridaccount = $data[7];

            for($x = 0;$x < count($twoaccountidarray);$x++){
                if($twoaccountidarray[$x] == $useridaccount){
                        $checkaccount = 1;
                }
            }

            if($checkaccount == 0){
                $twoaccountidarray[] = $useridaccount;
            }



            //check users
            $vinstatus = 0;
            
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
                            if($d1[$ii] < 0){
                                $d1[$ii] = ($d1[$ii] + $d1[$ii]) + $d1[$ii];

                                $money_ost += $d1[$ii];
                            }else{
                                $money_ost += $d1[$ii];
                            }
                            
                        }


                    }


                   
                    /*echo "<br>";
                    echo "--------------";
                     echo "<br>";*/

                    for($iii = 0;$iii < count($d3);$iii++){

                        if($d3[$iii] != 0){

                            if($d3[$iii] < 0){
                                $d3[$iii] = ($d3[$iii] + $d3[$iii]) + $d3[$iii];
                                $money_ost += $d3[$iii];
                            }else{
                                $money_ost += $d3[$iii];
                            }

                           // echo $d2[$ii]." | ".$d3_status[$ii]." | ".$d3_money[$ii]."<br>";
                            
                        }


                    }

                    // echo "<br>";
                    // echo "--------------";
                    //  echo "<br>";

                    for($iiii = 0;$iiii < count($d5);$iiii++){

                        if($d5[$iiii] != 0){

                            if($d5[$iiii] < 0){
                                $d5[$iiii] = ($d5[$iiii] + $d5[$iiii]) + $d5[$iiii];
                                $money_ost += $d5[$iiii];
                            }else{
                                $money_ost += $d5[$iiii];
                            }

                        }


                    }



            /*raschet postavlennoi stavki*/

            $id = $data[7];

            $balans = 0;
            $balanscopy = 0;
            $fixbalans = 0;

            $startingbalance = 0;

            $result3 = Yii::$app->db->createCommand("SELECT * FROM user WHERE id = '$id'")->queryAll();

            if($result3){
                foreach ($result3 as $value3) {
                    $balans = $value3['balance'];
                    $balanscopy = $value3['balance'];
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
                                                $d3_money[$i] = (int) $d3[$i] * (int) $krasn_chernoe;
                                        
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

        for($iip = 0;$iip < count($d1_status);$iip++){

            if($d1_status[$iip] == 1){
                //echo $d0[$ii]." | ".$d1_status[$ii]." | ".$d1_money[$ii];
                $money_summ += (int) $d1_money[$iip];
            }


        }

       
        /*echo "<br>";
        echo "--------------";
         echo "<br>";*/

        for($iik = 0;$iik < count($d3_status);$iik++){

            if($d3_status[$iik] == 1){

               // echo $d2[$ii]." | ".$d3_status[$ii]." | ".$d3_money[$ii]."<br>";
                $money_summ += (int) $d3_money[$iik];
            }


        }

        // echo "<br>";
        // echo "--------------";
        //  echo "<br>";

        for($iiu = 0;$iiu < count($d5_status);$iiu++){

            if($d5_status[$iiu] == 1){

               // echo $d4[$ii]." | ".$d5_status[$ii]." | ".$d5_money[$ii]."<br>";
                $money_summ += (int) $d5_money[$iiu];

            }


        }


        /*echo "<br>";
        echo "--------------";
         echo "<br>";*/

         /*pribavlenie viigrisha k base*/

         //echo $money_summ;
         //zanesti v bazu

         //check account 1 //znachit sidit s 2 h ustroistv

         // if($checkaccount == 1){

         // }

         //check account 1 //znachit sidit s 2 h ustroistv

         $itog = 0;

         if($fixbalans == 1){

            if($checkaccount != 1){

                $itog = (int) $balans + (int) $money_summ;
            }else{
                $itog = $balanscopy;//esli naebal
                $vinstatus = 0;
            }
            

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
         $sendarray[8] = $itog;

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


    public function actionSenddatatest(){
        $session = Yii::$app->session;

        $rdata = $session->get('rdata');

        $rdataunserial = unserialize($rdata);

        //$rdataunserial[0];

        print_r($rdataunserial[0]);


    }


        public function actionGamestatusclient(){

            $status = 1;

            $result = Yii::$app->db->createCommand('SELECT * FROM r_status')->queryAll();

            foreach ($result as $value) {
                    
                    $s = $value['game_status'];
                    $status = $s;
            }

            echo $status;


          }


        public function actionRouletteball(){           /*shari posl 5*/

                $array = array();
                $i = 0;

                $result = Yii::$app->db->createCommand('SELECT * FROM roulette ORDER BY `id` DESC LIMIT 5')->queryAll();

                

                if($result == true){

                            foreach ($result as $value) {
                            
                            $array[$i] = $value['number'];

                            $i++;

                              }

                            $json = json_encode($array);

                             echo $json;
                }else{
                    echo "0";
                }


                

        }


        public function actionGetresult(){


            if(isset($_POST['id'])){


            $user_id = $_POST['id'];

            $t = array();

            $result = Yii::$app->db->createCommand("SELECT * FROM r_koef WHERE `user_id`='$user_id' ORDER BY `id` DESC LIMIT 1")->queryAll();

                if($result == true){

                    foreach ($result as $key) {

                        $unserial = unserialize($key['result_koef']);

                        $json_array =  json_encode($unserial);

                        $t[0] = $json_array;
                        $t[1] = $key['win_status'];
                        $t[2] = $key['sum'];
                        $t[3] = $key['time'];

                        $enc = json_encode($t);

                        echo $enc;
                    }




                }else{
                    echo "2000";
                }


            }  /*kones if post*/

        }       /*kones func*/


        public function actionGetbalans(){

            $balans = 0;
            if(Yii::$app->user->identity){

                $balans = Yii::$app->user->identity->balance;
                echo $balans;
            }else{
                echo $balans;
            }
            


        }


        public function actionRoulettehistory(){

             $identity = Yii::$app->user->identity;

                if($identity){

                    $id = Yii::$app->user->id;

                    $this->layout = 'clear';

                    $result = Yii::$app->db->createCommand("SELECT * FROM r_koef WHERE `user_id`='$id' ORDER BY `id`")->queryAll();

                    return $this->render('r_history',['result'=>$result]);

                }else{
                    return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/login'));
                }


        }



        public function actionRepeatnumber(){


                $session = Yii::$app->session;

                if (!$session->isActive){
                    $session->open();
                }

                $hh = $session->get('rdata');

                if(isset($hh)){
                    $unser = unserialize($hh);

                    $js = json_encode($unser);

                    echo $js;
                    
                }else{
                    echo "2000";
                }

                


        }






public function actionRouletteinfo(){

             $identity = Yii::$app->user->identity;

                if($identity){

                    return $this->render('roulette_info');

                }else{
                    return Yii::$app->response->redirect(Url::to('@basepath/index.php/site/login'));
                }


        }


public function actionBallupdatestatus(){

    $session = Yii::$app->session;

    if (!$session->isActive){
            $session->open();
        }

    $ballstatus = Yii::$app->db->createCommand("SELECT * FROM roulette")->queryAll();

    $ball_id = 2000;
    $number = 2000;

    foreach ($ballstatus as $value2) {
            $number = $value2['number'];
            $ball_id = $value2['id'];
        }

            $updateballsession = "no";
            $updatenumbersession = "no";

            if($session->has("ballid")){

                if($session->has("number")){

                    $updateballsession = $session->get("ballid");
                    $updatenumbersession = $session->get("number");

                    }

            }
           


    if($ball_id != 2000 && $number != 2000){
        if(isset($updateballsession) && isset($updatenumbersession)){

            if($updateballsession != "no" && $updatenumbersession != "no"){
                if($number == $updatenumbersession && $ball_id == $updateballsession && $updatenumbersession != 0){
                    echo "7";   /*shar ne obnovilsya*/
                }else{
                    echo "6";   /*shar obnovilsya*/
                }
            }else{
                echo "11";
            }
        }else{
            echo "9";
        }
    }else{
        echo "10";
    }




}


public function actionDeletefaulureuserstavki(){


        $delete = Yii::$app->db->createCommand("DELETE FROM r_koef WHERE status = '2'")->execute();

        if($delete){
            echo "1";
        }else{
            echo "2";
        }


}


public function actionServerlive(){

        $this->layout = 'main4';

        return $this->render('server_live');

}


public function actionSendstopgame(){

    

    
    if(isset($_POST['send'])){

        $data = $_POST['send'];

        $r1 = $data[0];
        $r2 = $data[1];

        /*(3600 * 24 * 90)*/

        $now = time() - (3600 * 24);    /*удалить записи старше 24 часов*/

         $res = Yii::$app->db->createCommand("DELETE FROM stopgame WHERE date < '$now'")->execute();

        

        for($ii = 0;$ii < count($r1); $ii++){

            if($r2[$ii] == "Приостановлен"){

                    $time = time();

                    $result = Yii::$app->db->createCommand()->insert('stopgame', ['name' => $r1[$ii],'status' => $r2[$ii],'date' => $time])->execute(); 

                    if($result){
                        echo "данные записаны";
                    }else{
                        echo "данных не было";
                    }
    
            }else{

                $convert = iconv("UTF-8", "UTF-8", $r1[$ii]);
              

                $zapros = Yii::$app->db->createCommand("SELECT * FROM stopgame WHERE name = '$convert'")->queryAll();

                if($zapros){


                    $zz = Yii::$app->db->createCommand("DELETE FROM stopgame WHERE name = '$r1[$ii]'")->execute();

                    if($zz){
                        echo "запись удалена";
                    }else{
                        echo "запись  не удалена";
                    }
                }else{
                    echo "данных не было для удаления";
                }


            }

            $hh = strripos($r2[$ii], "Матч прерван");

            if($hh === false){

            }else{
                $result2 = Yii::$app->db->createCommand()->insert('stopgame', ['name' => $r1[$ii],'status' => $r2[$ii],'date' => $time])->execute(); 

                if($result2){
                        echo "данные записаны2";
                    }else{
                        echo "данных не было";
                    }
            }
        }

        

        

    }


}



public function actionAboutme(){

    Url::remember();

    $model = Yii::$app->db->createCommand("SELECT * FROM admin_panel")->queryAll();

    return $this->renderPartial("aboutme",['model'=>$model]);

}




}
