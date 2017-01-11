<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Poker */

$this->title = 'Create Poker';
$this->params['breadcrumbs'][] = ['label' => 'Pokers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="poker-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
