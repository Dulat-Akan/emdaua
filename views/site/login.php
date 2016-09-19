<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;


$session = Yii::$app->session;

$this->title = 'Войти';
$this->params['breadcrumbs'][] = $this->title;
?>

<div>


<div class="col-md-12" style="margin-top:50px;">
    <div class="col-md-5 col-md-offset-3">
        
        
            <?php if(isset($session))
            {
                echo $session->getFlash('message');
            }
            ?>
        

    </div>
</div>


<div class="col-md-12">

<div class="col-md-4 col-md-offset-4">
    
        <h2 style="margin-left:80px;">Войти</h2>


</div>


</div>

<div class="site-login">
<div style='margin-left:25%'>
   

   

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-horizontal'],
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 col-lg-offset-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-2 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div>

                <div class="col-md-12">
                    <div class="col-md-4 col-md-offset-1">
                    <?= Html::submitButton('Войти в систему', ['class' => 'btn btn-info', 'name' => 'login-button', 'style' => 'margin-left:85px;']) ?>
                    </div>
                </div>
            </div>
        </div>

    <?php ActiveForm::end(); ?>
</div>
    
</div>


</div>