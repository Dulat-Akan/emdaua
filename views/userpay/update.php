<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Userpay */

$this->title = 'Операции для аккаунта: ' . $model->phone;
$this->params['breadcrumbs'][] = ['label' => 'Userpays', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<input type="hidden" id="isopen" value="<?php echo $isopen;?>">
<div class="userpay-update">
	
	<div class="row">
		<div class="col-md-12">
				<h1 style="text-align: center"><p class="bg-info" style="font-size:26px"><?= Html::encode($this->title) ?></p></h1>
		</div>
		<br>
		<br>
		<br>	
	</div>
	
	<div class="card" style="padding:20px; color:green !important; margin-top:50px">
		<div class="row">
		<div class="col-md-3 col-md-offset-2">
						<h3 style="text-align: left">&nbsp&nbsp На счету: <?php echo $model['balance']; ?>&nbspagp </h3><br>
					</div>
			<form  method="POST" name="Userpay" action="<?php echo Url::to('@base'); ?>/userpay/update?id=<?php echo $model['id']; ?>">
			
				<div class="col-md-12" style="margin-top:20px;">
					
					<div class="col-md-3 col-md-offset-2">
					
						<div class="input-group">
						  <span class="input-group-addon" style="border: 1px solid green;  border-radius: 4px;">AP</span>
						  <input name="balance"  class="form-control balance" style="border: 1px solid green;  border-radius: 4px;" type="text" min="1" required pattern="^[0-9]+$" placeholder="сумма пополнения">
						</div>
					</div>
					<div class="col-md-2">
						<input type="submit" class="btn btn-primary" style="border: 2px solid green; color:black; text-align center" disabled id="paymentb" value="пополнить">
					</div>
					<div class="col-md-3">
						<p >Будет зачислено &nbsp<span id="balance"> 0 </span>&nbsp agp</p>
					</div>
				</div>
			</form>
			<hr style="border-top: 2px; border-color: black" >
			<form  method="POST" name="Userpayout" action="<?php echo Url::to('@base'); ?>/userpay/update?id=<?php echo $model['id']; ?>">
				<div class="col-md-12" style="margin-top:20px;">
					<div class="col-md-3 col-md-offset-2">
						<div class="input-group">
						  <span class="input-group-addon" style="border: 1px solid green;  border-radius: 4px;">AP</span>
						  <input name="payout" class="form-control payout" type="text" min="1" required pattern="^[0-9]+$" placeholder="сумма вывода" style="border: 1px solid green;  border-radius: 4px;  ">
						</div>
					</div>
					<div class="col-md-2">
						<input type="submit" id="payo" class="btn btn-primary" style="border: 2px solid green; color:black; text-align center" disabled value="&nbsp&nbspвывести&nbsp&nbsp">
					</div>
					<div class="col-md-3">
						<p >Будет выведено &nbsp<span id="payout"> 0 </span>&nbsp agp</p>
					</div>
				</div>
			</form>
		</div>	
    </div>
    <script type="text/javascript">
    	$( ".balance" ).keyup(function() {

    		var val = $(this).val();
			var isopen = $("#isopen").val();

				if(val < 0){
					$(this).val("0");
					val = 0;
				}

    		var agp = parseInt(val*10);
		 	$("#balance" ).text(agp);
			
			if(isopen==0)
				alert("Чтобы продолжить откройте смену!");
			
		 	if(val > 0 && isopen==1){
		 		$("#paymentb").prop("disabled",false);
		 	}else{
		 		$("#paymentb").prop("disable",true);
		 	}

		});

		$(".payout").keyup(function() {
    	

    		var val = $(this).val();

				if(val < 0){
					$(this).val("0");
					val = 0;
				}

    		var agp = parseInt(val*10);
		 	$("#payout" ).text( agp);

		 	if(val > 0){
		 		$("#payo").prop("disabled",false);
		 	}else{
		 		$("#payo").prop("disable",true);
		 	}
		});






    </script>
</div>
