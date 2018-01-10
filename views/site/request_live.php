<?php

use yii\helpers\Url;
 ?>
<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/parserlive">

<input id="rec" type="hidden" value="<?php echo Url::to('@base'); ?>/site/recordbd">


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
        <div class="col-md-12">
            <div class="col-md-12"  id="new">
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

	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/myfile_live.php');
				

			?>
</div>

</div>

<div class="" style="margin-top:30px;">
	<div class="row" id="pok_searh3"></div>
</div>








<script src="<?php echo Url::to('@jquery') ?>/r_l.js"></script>








