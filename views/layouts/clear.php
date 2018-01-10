<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>



<html lang="<?= Yii::$app->language ?>">

	
<head>
         
          
        

          
          <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>
          <script src="<?php echo Url::to('@jquery') ?>/jquery-ui-1.10.3.custom.js"></script>    
          <meta charset="<?= Yii::$app->charset ?>">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <?= Html::csrfMetaTags() ?>
          <title><?= Html::encode($this->title) ?></title>
          <?php $this->head() ?>
       
        
</head>

<body>

                                        <?= $content ?>


<footer class="footer">
    <div class="container">
        <p class="pull-left"></p>

        <p class="pull-right"></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
