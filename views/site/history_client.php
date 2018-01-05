<?php
use yii\helpers\Url;
?>
<div class="col-md-12" style="margin-bottom:30px;font-size:18px;">
	

<div class="col-md-2">Дата</div>

<div class="col-md-4">играющие команды</div>

<div class="col-md-2">коэффициент</div>

<div class="col-md-2">сумма</div>

<div class="col-md-2"><a class="btn btn-info" href="<?php echo Url::to('@control/korzina'); ?>">намеченные ставки</a></div>

</div>


<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/updatekorzina">


<div class="col-md-8" style="display:none;" id="uvedomlenie">
	
	<div class="col-md-3 col-md-offset-4">
		
		<div class="alert alert-success">
 				<h4 style="margin-left:8px;">ставка принята</h4>
		</div>
	</div>


</div>


<div class="col-md-8" style="display:none;" id="uvedomlenie2">
	
	<div class="col-md-3 col-md-offset-4">
		
		<div class="alert alert-error">
 				<h4 style="margin-left:8px;">Внимание вы допустили ошибку!..</h4>
		</div>
	</div>


</div>



<?php 
foreach ($model as $row) {
 ?>

<div class="col-md-12">
	
<hr>

<div class="col-md-2"><?php echo $row['date_stavki']; ?>-<?php echo $row['time_stavki']; ?></div>

<div class="col-md-4"><?php echo $row['name_kommand']; ?></div>

<div class="col-md-2"><?php echo $row['k']; ?></div>

<div class="col-md-2"><?php echo $row['sum']; ?></div>

<div class="col-md-2">

	<div class="input-group">
    
    <span class="form-control-feedback"></span>
    </div>
    <span class="help-inline" style="display:none;">заполните!</span>
  

 
	</div>




</div>

<?php 
}
 ?>






