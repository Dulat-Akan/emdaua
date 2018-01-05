<?php

use yii\helpers\Url;
use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AdminPanel */

$this->title = 'Создать Записи';
$this->params['breadcrumbs'][] = ['label' => 'Admin Panels', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="admin-panel-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>


<div class="col-md-12 col-xs-12 col-sm-12">

    <div class="col-md-6 col-xs-12 col-sm-6 col-md-offset-4 col-sm-offset-4 col-xs-offset-0">
        <a href="<?php echo Url::toRoute('site/aboutme'); ?>">Здесь вы просматриваете изменения "Страица О нас"</a>
    </div>

</div>

