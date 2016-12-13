<?php

use yii\helpers\Url;
 ?>
<div id="overlay"></div>
<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/livetwo">


<input id="basek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/k">


<input id="baseredirect" type="hidden" value="<?php echo Url::to('@base'); ?>/site/login">


<input id="baseupdatek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/updatek">

<input id="baseupdatek2" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liverequest">


<div class="" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>


	
		
		
				
				<div class="alert-info" style="display:none;" id="uvedom">

							<span>ставка добавлена!</span>

				</div>

		



<div class="">
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

			
				echo Yii::$app->view->renderFile('@files/live.php');
				

			?>


	</div>
</div>



<div class="" style="">
	<div class="row" id="pok_searh3">

		


	</div>
</div>



<<<<<<< HEAD
<script src="<?php echo Url::to('@jquery') ?>/lr.js"></script>
=======
<script src="<?php echo Url::to('@jquery') ?>/lr.js"></script> 




>>>>>>> 63bc5ab860047cf530c289ff5ef7cc6136c2a4dd




	



