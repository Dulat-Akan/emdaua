<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Poker */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="poker-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'hand')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ves')->textInput() ?>

    <?= $form->field($model, 'partiya')->textInput() ?>

    <?= $form->field($model, 'status1')->textInput() ?>

    <?= $form->field($model, 'status2')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
