<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userpay */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userpay-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //$form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'access_token')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'timer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'balance')->textInput() ?>

    <?php //$form->field($model, 'ul')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'name1')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'name2')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'dateb')->textInput(['maxlength' => true]) ?>

    <?php //$form->field($model, 'tel')->textInput() ?>

    <?php //$form->field($model, 'role')->textInput() ?>

    <?php //$form->field($model, 'file1')->textInput(['maxlength' => true]) ?>

    <div class="row">
        <div class="col-md-12">
            <div class="col-md-2 col-md-offset-5">
                <?= Html::submitButton($model->isNewRecord ? 'Create' : 'пополнить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
            </div>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
