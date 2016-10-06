<?php

use yii\helpers\Url;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-4">
					
					

					<input class="btn btn-danger" id="par" type="button" value="парсинг">


			</div>


			<div class="col-md-2">
				
					<input class="btn btn-info" id="search" type="button" value="Поиск">

			</div>
		</div>
	</div>
</div> -->











<!-- <div class="container" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-success" style="display:none;" id="uvedom"></div>

			</div>
		</div>
	</div>
</div> -->






<div class="container">
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/soccer.php');
				

			?>


	</div>
</div>



<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/soccer">

<input id="basetwo" type="hidden" value="<?php echo Url::to('@base'); ?>/site/soccerlive">

<input id="baseaction" type="hidden" value="<?php echo Url::to('@base'); ?>/site/soccerliveptwo">




<script src="<?php echo Url::to('@jquery') ?>/s_p.js"></script>


</body>
</html>