<?php

use yii\helpers\Url;
 ?>




 <div class="row">
 	<div class="col-md-12">
 		<div class="col-md-4 col-md-offset-5">

 			<h1>SERVER PAGE</h1>

 		</div>
 	</div>
 </div>
<div id="overlay"></div>
<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/livetwo">


<input id="basek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/k">


<input id="baseredirect" type="hidden" value="<?php echo Url::to('@base'); ?>/site/login">


<input id="baseupdatek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/updatek">

<input id="baseupdatek2" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liverequest">






<script src="<?php echo Url::to('@jquery') ?>/server.js"></script> 









	



