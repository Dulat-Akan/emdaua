<?php

use yii\helpers\Url;
 ?>
<!-- <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-4"><h1>Ставки Live</h1></div>
			</div>
		</div>
	</div> -->
	<div class='header-middle'>

  <button style="" id="update" class="btn btn-primary btn-sm" type="button">обновить страницу</button>
  </div>
<hr/>


<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liverequest">

<input id="basetwo" type="hidden" value="<?php echo Url::to('@base'); ?>/site/live">

<input id="baseaction" type="hidden" value="<?php echo Url::to('@base'); ?>/site/livep">

<input id="baseupdate" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liveupdate">







<div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>

<div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-success" style="display:none;" id="uvedom"></div>

			</div>
		</div>
	</div>
</div>





<div class="" style="position:fixed;margin-top:100px;display:none;" id="download">
	<div class="row">
		<div class="col-md-12">

			<div class="col-md-1 col-md-offset-6"><img src="<?php echo Url::to('@img') ?>/3.gif" alt=""></div>

		</div>
	</div>
</div>






<div>
	<div class="row" style="display:none;" id="pok_res1">

		<div class="col-md-12">
				<?php 	
				echo Yii::$app->view->renderFile('@files/liverequest.php');
			?>

		</div>
		

			


	</div>
</div>
 



<script src="<?php echo Url::to('@jquery') ?>/sl.js"></script>
