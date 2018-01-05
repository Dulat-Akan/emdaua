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
class UserbetsController extends Controller
{



    public function beforeAction($action){
        if( $action->id == 'paymentq'){
            $this->enableCsrfValidation = false;
        }else if($action->id == 'update'){
            $this->enableCsrfValidation = false;
        }else if($action->id == 'roulettehistory'){
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
        



                $this->layout = 'clear'; 

                return $this->render('index');


        //echo "оплата закрыта по соображениям безопасности";
    }



      public function actionRoulettehistory(){

           
                    if(isset($_POST['email'])){

                        $email = $_POST['email'];

                        $array = array("php","'","<","echo","eval",">","script","/","-","*","+");

                        for($i = 0;$i < count($array);$i++){
                            $res = strripos($email, $array[$i]);
                            if($res == true){
                                echo "fack you hack";
                                exit;
                            }
                        }

                        $email = trim($email);
                        $email = stripslashes($email);
                        $email = strip_tags($email);
                        $email = htmlspecialchars($email);


                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "fack you hack";
                            exit;
                        }

                        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                            echo "fack you hack";
                            exit;
                        }

                       

                        $userid = 0;

                        $this->layout = 'clear';

                        $result2 = Yii::$app->db->createCommand("SELECT * FROM user WHERE `email`='$email' ORDER BY `id` desc")->queryAll();

                        if($result2){



                        foreach ($result2 as $key2) {
                           $userid = $key2['id'];
                        }


                        $result = Yii::$app->db->createCommand("SELECT * FROM r_koef WHERE `user_id`='$userid' ORDER BY `id` desc")->queryAll();

                        return $this->render('r_history',['result'=>$result]);

                    }else{
                        echo "пользователь не найден повторите поиск";
                    }

                    }
            

        }






}
