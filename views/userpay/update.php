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
<div class="userpay-update">
	
	<div class="row">
		<div class="col-md-12">
				<h2 style="text-align: center"><p class="bg-info"><?= Html::encode($this->title) ?></p></h2>
		</div>
		<div class="col-md-12">
			<h5>
                <?= Html::a('<- Перейти на главную', ['index'], ['class' => 'primary']) ?>
            </h5>
		</div>

		<br>
		<br>
		<br>
		<br>
		<div class="col-md-12" style="margin-top: 50px">
			<div class="col-md-4 col-md-offset-2">
				<h3 style="text-align: left">На счету: <?php

					echo $model['balance'];
					

				 ?>&nbspagp </h3>
			</div>
		</div>
	</div>

	
    

    <div class="row">

		<form  method="POST" name="Userpay" action="<?php echo Url::to('@base'); ?>/userpay/update?id=<?php echo $model['id']; ?>">
    		<div class="col-md-12" style="margin-top:20px;">
    			<div class="col-md-3 col-md-offset-2">
					<div class="input-group">
					  <span class="input-group-addon">AP</span>
					  <input name="balance"  class="form-control balance" type="text" min="1" required pattern="^[0-9]+$" placeholder="сумма пополнения">
					</div>
    			</div>
    			<div class="col-md-2">
    				<input type="submit" class="btn btn-primary" disabled id="paymentb" value="пополнить">
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
					  <span class="input-group-addon">AP</span>
					  <input name="payout" class="form-control payout" type="text" min="1" required pattern="^[0-9]+$" placeholder="сумма вывода">
					</div>
    			</div>
    			<div class="col-md-2">
    				<input type="submit" id="payo" class="btn btn-primary" disabled value="вывести &nbsp&nbsp&nbsp">
    			</div>
    			<div class="col-md-3">
    				<p >Будет выведено &nbsp<span id="payout"> 0 </span>&nbsp agp</p>
    			</div>
    		</div>
    	</form>
    </div>
    <script type="text/javascript">
    	$( ".balance" ).change(function() {

    		var val = $(this).val();

				if(val < 0){
					$(this).val("0");
					val = 0;
				}

    		var agp = parseInt(val*10);
		 	$("#balance" ).text(agp);

		 	if(val > 0){
		 		$("#paymentb").prop("disabled",false);
		 	}else{
		 		$("#paymentb").prop("disable",true);
		 	}

		});

		$(".payout").change(function() {
    	

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
