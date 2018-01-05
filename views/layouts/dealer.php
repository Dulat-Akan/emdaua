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
    <!--scroll bar -->
    
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/jquery_mobile/jquery.mobile-1.4.5.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/crossplatform_roulette.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/table.css">
    

    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>


   <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery_mobile/jquery.mobile-1.4.5.min.js"></script>
    
    
    
   
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  
  
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'ru', layout: google.translate.TranslateElement.FloatPosition.BOTTOM_RIGHT}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>

<?php $this->beginBody() ?>

    
   


          <div id="main" style="overflow:hidden;">
        <?= $content ?>
    </div>
   
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
