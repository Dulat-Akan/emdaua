<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usertwo */
/* @var $form ActiveForm */
?>

<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Казино';
?>
<input id="base_url" type="hidden" value="<?php echo Url::to('@base'); ?>">
  <div class="registration">
				<div class="content">
					<h3>РЕГИСТРАЦИЯ</h3>
					<div class="products-row clear-fix">
					
						<div class="row">
						<div class="col-md-12">
						<div class='col-md-9 col-md-offset-2' >
						<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>

<?php if( Yii::$app->session->hasFlash('error') ): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif;?>

<div class="usertwo">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'phone') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'password') ?>
      
    
        <div class="form-group">

     		<div class="col-md-12">
     			<div class="col-md-4 col-md-offset-4">

					<?= Html::submitButton('Зарегистрироваться', ['class' => 'btn btn-primary','style'=>'margin-left:15px;']) ?>

     			</div>
     		</div>
            
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- usertwo -->
						
						</div>
						
						</div>
						
						</div>
					
						
						
							
					
							
							
							
							
						</div><!-- /.products-row -->
					</div> <!-- /.content -->
				</div>

			
        







            

           
            



