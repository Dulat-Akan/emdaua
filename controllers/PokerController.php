<?php

namespace app\controllers;

use Yii;
use app\models\Poker;
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
         $this->layout = 'main2';
        $dataProvider = new ActiveDataProvider([
            'query' => Poker::find(),
        ]);
        $karti = \app\models\Karti::find()->all();
        $poker = Poker::find()->all();
        
           
        return $this->render('index', [
            'dataProvider' => $dataProvider,'karti'=>$karti,'poker'=>$poker,
        ]);
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
            
            
           
                      
            foreach ($karti as $k){
                if($k->barcode == $barcode){
                    array_push($card, $k->code);
                    array_push($card, 2);
                    $cards->ves = $k->code;
                    $cards->hand = $newhand;
                    $cards->save();
                    
                }
            }
            $lastpart = Poker::find()->asArray()->all();
            $m=0;
            
            $partiya;
            for($i=count($lastpart); $i>=0; $i--){
                
                if($lastpart[count($lastpart)-1]['hand']!="f5" && $lastpart[$i]['hand']=="f5"){
                    break;
                }
                if(isset($lastpart[$i]['hand'])){
                    $partiya[$m]['hand'] = $lastpart[$i]['hand'];
                    $partiya[$m]['ves']  = $lastpart[$i]['ves'];
                }
                $m=$m+1;
            }
            $lastp;
            $m=0;
            for($i=count($partiya); $i>=0; $i--){
                
                if(isset($partiya[$i]['hand'])){
                    $lastp[$m]['hand'] = $partiya[$i]['hand'];
                    $lastp[$m]['ves']  = $partiya[$i]['ves'];
                }
                $m=$m+1;
            }
            
            $lastp[16]=$chance_preflop;
            print_r(json_encode($lastp));
            exit();
            return json_encode($lastp);
        }
        
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
