<?php

namespace app\controllers;

use Yii;
use app\models\AdminPanel;
use app\models\AdminpanelSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Url;

/**
 * AdminpanelController implements the CRUD actions for AdminPanel model.
 */
class AdminpanelController extends Controller
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
     * Lists all AdminPanel models.
     * @return mixed
     */
    public function actionIndex()
    {

        Url::remember();

        $idd = Yii::$app->user->id;

        if($idd == 100){


        $searchModel = new AdminpanelSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

    }else{
        return Yii::$app->response->redirect(Url::toRoute('site/login'));
    }



    }

    /**
     * Displays a single AdminPanel model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        Url::remember();

        $idd = Yii::$app->user->id;

        if($idd == 100){

        
            return $this->render('view', [
                'model' => $this->findModel($id),
            ]);

        }else{
             return Yii::$app->response->redirect(Url::toRoute('site/login'));
        }
    }

    /**
     * Creates a new AdminPanel model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {

        Url::remember();

        $idd = Yii::$app->user->id;

        if($idd == 100){

   
            $model = new AdminPanel();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }

        }else{
            return Yii::$app->response->redirect(Url::toRoute('site/login'));
        }
    }

    /**
     * Updates an existing AdminPanel model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        Url::remember();

        $idd = Yii::$app->user->id;

        if($idd == 100){

            $model = $this->findModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('update', [
                    'model' => $model,
                ]);
            }

        }else{
            return Yii::$app->response->redirect(Url::toRoute('site/login'));
        }
    }

    /**
     * Deletes an existing AdminPanel model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {

        Url::remember();

        $idd = Yii::$app->user->id;

        if($idd == 100){


            
            $this->findModel($id)->delete();

            return $this->redirect(['index']);

         }else{
            return Yii::$app->response->redirect(Url::toRoute('site/login'));
         }
    }

    /**
     * Finds the AdminPanel model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return AdminPanel the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {

        Url::remember();

        $idd = Yii::$app->user->id;

        if($idd == 100){


                if (($model = AdminPanel::findOne($id)) !== null) {
                    return $model;
                } else {
                    throw new NotFoundHttpException('The requested page does not exist.');
                }

         }else{
            return Yii::$app->response->redirect(Url::toRoute('site/login'));
         }
    }

}
