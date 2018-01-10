<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserpaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Список пользователей "Almagames"';


$this->params['breadcrumbs'][] = $this->title;
?>


<div class="userpay-index">

    

    <div class="row">
        
        <div class="col-md-12 col-sm-12 col-xs-12">
                    <h1 style="text-align: center;"><p class="bg-info"  style="padding:5px "><?= Html::encode($this->title) ?></p></h1>
        </div>
    </div>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <p>
        <?php //Html::a('Create Userpay', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    
    <div class="card" style="padding:20px; color:green !important">
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
            [
                'format'=>'raw',
                'value' => function($data){
                return
                    Html::a('<span></span> View', ['view','id'=>$data->id], ['title' => 'view','class'=>'btn btn-success']).' '.
                    Html::a('<span></span> Update', ['update','id'=>$data->id], ['title' => 'edit','class'=>'btn btn-info']);
                }
            ],
            ['class' => 'yii\grid\ActionColumn',
            'template' => ' {roulettehistory}',
                'buttons' => [
                    
                    'roulettehistory' => function ($url,$model,$key) {

                        return Html::a('история ставок', $url);

                        //print_r($model);
                      
                    },
                ],
            ],
            


        ],
    ]); 
      function initDefaultButtons()
        {
                if (!isset($this->buttons['view'])) {
                        $this->buttons['view'] = function ($model, $key, $index, $column) {
                                /** @var ActionColumn $column */
                                $url = $column->createUrl($model, $key, $index, 'view');
                                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
                                        'title' => Yii::t('yii', 'View'),
                                ]);
                        };
                }
                if (!isset($this->buttons['update'])) {
                        $this->buttons['update'] = function ($model, $key, $index, $column) {
                                /** @var ActionColumn $column */
                                $url = $column->createUrl($model, $key, $index, 'update');
                                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                                        'title' => Yii::t('yii', 'Update'),
                                ]);
                        };
                }
                if (!isset($this->buttons['delete'])) {
                        $this->buttons['delete'] = function ($model, $key, $index, $column) {
                                /** @var ActionColumn $column */
                                $url = $column->createUrl($model, $key, $index, 'delete');
                                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                                        'title' => Yii::t('yii', 'Delete'),
                                        'data-confirm' => Yii::t('yii', 'Are you sure to delete this item?'),
                                        'data-method' => 'post',
                                ]);
                        };
                }
        }

    ?>

    </div>
    
    <script>
    //userpay/index?UserpaySearch%5Bemail%5D=&UserpaySearch%5Bphone%5D=%2B77021
    $( "input[name*='phone']" ).bind("enterKey",function(e){
        var phone = $( "input[name*='phone']" ).val(  );
        var url = "http://almagames.kz/basic/web/userpay/index?UserpaySearch%5Bemail%5D=&UserpaySearch%5Bphone%5D=%2B"+phone; // get selected value
        if (url) { // require a URL
          window.location = url; // redirect
        }
    });
    $( "input[name*='phone']" ).keyup(function(e){
        if(e.keyCode == 13)
        {
            $(this).trigger("enterKey");
        }
    });
    
    $( "input[name*='email']" ).bind("enterKey",function(e){
        var email = $( "input[name*='email']" ).val(  );
        var url = "http://almagames.kz/basic/web/userpay/index?UserpaySearch%5Bphone%5D=&UserpaySearch%5Bemail%5D="+email; // get selected value
        if (url) { // require a URL
          window.location = url; // redirect
        }
    });
    $( "input[name*='email']" ).keyup(function(e){
        if(e.keyCode == 13)
        {
            $(this).trigger("enterKey");
        }
    });
    </script>
</div>
