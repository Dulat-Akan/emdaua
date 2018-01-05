<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserpaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Список пользователей "Almagames"';


$this->params['breadcrumbs'][] = $this->title;

$v = "";
?>


<div class="userpay-index">

    

    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1 style="text-align: center;"><p class="bg-info"  style="padding:5px "><?= Html::encode($this->title) ?></p></h1>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php //Html::a('Create Userpay', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            //'username',
            //'password',
            'email:email',
            //'status',
            // 'auth_key',
            // 'created_at',
            // 'updated_at',
            // 'access_token',
             'phone',
            // 'timer',
            // 'balance',
            // 'ul',
            // 'name1',
            // 'name2',
            // 'dateb',
            // 'tel',
            // 'role',
            // 'file1',

            ['class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete} {roulettehistory}',
                'buttons' => [
                    'delete' => function ($url,$model) {
                        return Html::a(
                        '<span class=""></span>', 
                        $url);
                    },

                    'roulettehistory' => function ($url,$model,$key) {

                        return Html::a('история ставок', $url);

                        //print_r($model);
                      
                    },
                ],
            ],


        ],
    ]);

        //print_r($dataProvider);

      

        
       


     ?>
</div>
