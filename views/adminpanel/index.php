<?php

use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AdminpanelSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Панель Администратора';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-panel-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Сделать изменения', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pole1:ntext',
            'pole2:ntext',
            'pole3:ntext',
            'pole4:ntext',
            // 'pole5:ntext',
            // 'pole6:ntext',
            // 'pole7:ntext',
            // 'pole8:ntext',
            // 'pole9:ntext',
            // 'pole10:ntext',
            // 'pole11:ntext',
            // 'pole12:ntext',
            // 'pole13:ntext',
            // 'pole14:ntext',
            // 'pole15:ntext',
            // 'pole16:ntext',
            // 'pole17:ntext',
            // 'pole18:ntext',
            // 'pole19:ntext',
            // 'pole20:ntext',
            // 'pole21:ntext',
            // 'pole22:ntext',
            // 'pole23:ntext',
            // 'pole24:ntext',
            // 'pole25:ntext',
            // 'pole26:ntext',
            // 'pole27:ntext',
            // 'pole28:ntext',
            // 'pole29:ntext',
            // 'pole30:ntext',
            // 'pole31:ntext',
            // 'pole32:ntext',
            // 'pole33:ntext',
            // 'pole34:ntext',
            // 'pole35:ntext',
            // 'pole36:ntext',
            // 'pole37:ntext',
            // 'pole38:ntext',
            // 'pole39:ntext',
            // 'pole40:ntext',
            // 'pole41:ntext',
            // 'pole42:ntext',
            // 'pole43:ntext',
            // 'pole44:ntext',
            // 'pole45:ntext',
            // 'pole46:ntext',
            // 'pole47:ntext',
            // 'pole48:ntext',
            // 'pole49:ntext',
            // 'pole50:ntext',
            // 'pole51:ntext',
            // 'pole52:ntext',
            // 'pole53:ntext',
            // 'pole54:ntext',
            // 'pole55:ntext',
            // 'pole56:ntext',
            // 'pole57:ntext',
            // 'pole58:ntext',
            // 'pole59:ntext',
            // 'pole60:ntext',
            // 'pole61:ntext',
            // 'pole62:ntext',
            // 'pole63:ntext',
            // 'pole64:ntext',
            // 'pole65:ntext',
            // 'pole66:ntext',
            // 'pole67:ntext',
            // 'pole68:ntext',
            // 'pole69:ntext',
            // 'pole70:ntext',
            // 'pole71:ntext',
            // 'pole72:ntext',
            // 'pole73:ntext',
            // 'pole74:ntext',
            // 'pole75:ntext',
            // 'pole76:ntext',
            // 'pole77:ntext',
            // 'pole78:ntext',
            // 'pole79:ntext',
            // 'pole80:ntext',
            // 'pole81:ntext',
            // 'pole82:ntext',
            // 'pole83:ntext',
            // 'pole84:ntext',
            // 'pole85:ntext',
            // 'pole86:ntext',
            // 'pole87:ntext',
            // 'pole88:ntext',
            // 'pole89:ntext',
            // 'pole90:ntext',
            // 'pole91:ntext',
            // 'pole92:ntext',
            // 'pole93:ntext',
            // 'pole94:ntext',
            // 'pole95:ntext',
            // 'pole96:ntext',
            // 'pole97:ntext',
            // 'pole98:ntext',
            // 'pole99:ntext',
            // 'pole100:ntext',
            // 'imageurl1:url',
            // 'imageurl2:url',
            // 'imageurl3:url',
            // 'imageurl4:url',
            // 'imageurl5:url',
            // 'imageurl6:url',
            // 'imageurl7:url',
            // 'imageurl8:url',
            // 'imageurl9:url',
            // 'imageurl10:url',
            // 'imageurl11:url',
            // 'imageurl12:url',
            // 'imageurl13:url',
            // 'imageurl14:url',
            // 'imageurl15:url',
            // 'imageurl16:url',
            // 'imageurl17:url',
            // 'imageurl18:url',
            // 'imageurl19:url',
            // 'imageurl20:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>


<div class="col-md-12 col-xs-12 col-sm-12">

    <div class="col-md-6 col-xs-12 col-sm-6 col-md-offset-4 col-sm-offset-4 col-xs-offset-0">
        <a href="<?php echo Url::toRoute('site/aboutme'); ?>">Здесь вы просматриваете изменения "Страица О нас"</a>
    </div>

</div>
