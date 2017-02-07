<?php

use yii\helpers\Url;
 ?>




 <div class="row">
 	<div class="col-md-12">
 		<div class="col-md-4 col-md-offset-5">

 			<h1>SERVER PAGE</h1>

 			<!-- <h3><button id="status">проверить статус</button></h3> -->

 		</div>
 	</div>
 </div>
<div id="overlay"></div>
<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/livetwo">


<input id="basek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/k">


<input id="baseredirect" type="hidden" value="<?php echo Url::to('@base'); ?>/site/login">


<input id="baseupdatek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/updatek">

<input id="baseupdatek2" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liverequest">

<!-- server -->

		<!-- upravlenie statusom -->
<input type="hidden" id="sa" value="<?php echo Url::to('@base'); ?>/site/sendgamestatus">
		<!-- zapros statusa dilera -->
<input type="hidden" id="ds" value="<?php echo Url::to('@base'); ?>/site/gamestatusdealer">
		<!-- obrabotka resultatov -->
<input type="hidden" id="rs" value="<?php echo Url::to('@base'); ?>/site/rouletteresult">

<input type="hidden" id="ball_update" value="<?php echo Url::to('@base'); ?>/site/ballupdatestatus">

<input type="hidden" id="delete_st" value="<?php echo Url::to('@base'); ?>/site/deletefaulureuserstavki">

<!-- server -->





<script src="<?php echo Url::to('@jquery') ?>/server.js"></script> 









	



