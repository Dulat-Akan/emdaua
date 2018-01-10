<?php 


use yii\helpers\Url;

 ?>
<div class="container">
	<div class="row">
		
		<div class="col-xs-12">

				<div class="col-xs-11 col-xs-offset-1">
					
						<h3>Просмотр истории</h3>

				</div>

				<div class="col-xs-12 col-xs-offset-0">
						

						<form method="POST" action="<?php echo Url::to('@base') ?>/userbets/roulettehistory" style="margin-top:20px;" class="form-control">
									

									<input name="email" required  type="email" placeholder="Введите email абонента">

								<div class="col-xs-17 col-xs-offset-3">
									
										<input style="margin-top:10px;" class="btn btn-primary" type="submit" value="посмотреть">

								</div>
									


						</form>
						
						


				</div>

		</div>
	</div>
</div>