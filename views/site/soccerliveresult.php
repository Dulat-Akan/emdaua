<?php

use yii\helpers\Url;
 ?>









	<div class='page3'>







<input id="basey" type="hidden" value="<?php echo Url::to('@base'); ?>/site/soccerliveupdate">



<!-- sdelat obnovlenie komand -->



<div style="">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>

<div style="">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-success" style="display:none;" id="uvedom"></div>

			</div>
		</div>
	</div>
</div>





<div>
			<div class="row">


				<!-- <div class="col-md-12 col-md-offset-4">
					
					<h3>Результаты игр</h3>
				
				
				</div>
				
				
				<div class="col-md-12 col-md-offset-2">
					
					<div class="col-md-5">
						
						<p>kommand1</p>
				
					</div>
				
					<div class="col-md-5">
						
						<p>222222222222222222</p>
				
					</div>
						
				
				</div> -->

				





			</div>
		</div>






<div>
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/soccerlive.php');
				

			?>


	</div>
</div>



<div class="container" style="margin-top:30px;">
	<div class="row" id="pok_searh3">

		


	</div>
</div>


<script src="<?php echo Url::to('@jquery') ?>/s_l_r.js"></script> 




</div>