<?php
use yii\helpers\Url;
/* @var $this yii\web\View */

$this->title = 'Казино';
?>
	
<input id="base_url" type="hidden" value="<?php echo Url::to('@base'); ?>">
<div class="">
	<?php if( Yii::$app->session->hasFlash('success') ): ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('success'); ?>
    </div>
<?php endif;?>
	<?php if( Yii::$app->session->hasFlash('error') ): ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <?php echo Yii::$app->session->getFlash('error'); ?>
    </div>
<?php endif;?>			
					<div class="content">
			

					<div class="products-row">
					<div class="row blok">
						<div class="col-sm-4">
								<div class="product">
								  <a href="<?php echo Url::to('@control/slive'); ?>"><img  v="line" style="margin-top: 5px;"  src="<?php echo Url::to('@img/liniya.jpg'); ?>"/></a>
								</div><!-- /.product -->
							</div>
							<div class="col-sm-4">
								<div class="product">
							      <a href="<?php echo Url::to('@control/slive'); ?>"><img  style="margin-top: 5px;" src="<?php echo Url::to('@img/futball.jpg'); ?>"/></a> 

								</div><!-- /.product -->
							</div>
								<div class="col-sm-4">
								<div class="product">
								

								   <img style="margin-top: 5px;"  src="<?php echo Url::to('@img/totalizator.jpg'); ?>"/>

								</div><!-- /.product -->
							</div>
					</div>
						
						
							
						<div class='row blok'>
								<div class="col-sm-4">
								<div class="product">
							   <img style="margin-top: 5px;"  src="<?php echo Url::to('@img/discount.jpg'); ?>"/>
								</div><!-- /.product -->
							</div>
							
								<div class="col-sm-4">
								<div class="product">
							             <img style="margin-top: 5px;" src="<?php echo Url::to('@img/delov.jpg'); ?>"/>

								</div><!-- /.product -->
							</div>
							
							
							<div class="col-sm-4">
								<div class="product">
								   <a href="<?php echo Url::to('@control/request'); ?>"><img style="margin-top: 5px;"  src="<?php echo Url::to('@img/result_games.jpg'); ?>"/></a> 

								</div><!-- /.product -->
							</div>
							</div><!----row-->
							
							
								<div class='row blok'>
								<div class="col-sm-4">
								<div class="product">
							 <img style="margin-top: 5px;" src="<?php echo Url::to('@img/bonus.jpg'); ?>"/>
								</div><!-- /.product -->
							</div>
							
								<div class="col-sm-4">
								<div class="product">
							           <a href="<?php echo Url::to('@control/requestlive'); ?>">    <img style="margin-top: 5px;" src="<?php echo Url::to('@img/stavki.jpg'); ?>"/></a> 

								</div><!-- /.product -->
							</div>
							
							
							<div class="col-sm-4">
								<div class="product">
							   <img style="margin-top: 5px;" src="<?php echo Url::to('@img/map.jpg'); ?>"/>

								</div><!-- /.product -->
							</div>
							</div><!----row-->
							
						</div><!-- /.products-row -->
					</div> <!-- /.content -->
				</div>

			
        
<?php echo Url::to('@img/totalizator.jpg'); ?>






            

           
            


