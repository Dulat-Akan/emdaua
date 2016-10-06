<?php

use yii\helpers\Url;
 ?>
<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-3">
					
					

					<input class="btn btn-danger" id="par" type="button" value="парсинг">


			</div>


			<div class="col-md-2">
				
					<input class="btn btn-info" id="search" type="button" value="Поиск">

			</div>
		</div>
	</div>
</div> -->






<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/parserlive">







<div class="" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>

<div class="" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-success" style="display:none;" id="uvedom"></div>

			</div>
		</div>
	</div>
</div>





<div class="">
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


		<script>
			
			

		</script>

		



<div class="">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12" style="display:;" id="new">
				
				

  			  <!-- iframe с другого домена -->

   				 
				

				

				



			</div>
		</div>
	</div>
</div>



<div class="">
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/myfile_live.php');
				

			?>





			


	</div>
</div>




<!-- <div class="container" style="margin-top:30px;">
	<div class="row" id="pok_searh2">

		


	</div>
</div> -->


<div class="" style="margin-top:30px;">
	<div class="row" id="pok_searh3">

		

		


	</div>
</div>








<script src="<?php echo Url::to('@jquery') ?>/r_l.js"></script>







