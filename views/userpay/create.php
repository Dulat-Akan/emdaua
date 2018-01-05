<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Userpay */

$this->title = 'Create Userpay';
$this->params['breadcrumbs'][] = ['label' => 'Userpays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userpay-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
