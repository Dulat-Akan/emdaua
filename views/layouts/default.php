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
          <style >
                    Div.kolekcii{
                              overflow: auto;
                              height:80%;
                              background-attachment: local, local, scroll, scroll;
                              position:fixed;
                    }

                    div.kolekcii_soderzhimoe{
                              float:left;
                              width:100%;
                    }
                    .white{
                  line-height: 50px;
                  color:white !important;
        }
          </style>
          
        

          
          <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>
         


          <!--end scroll bar -->
          <!--end scroll bar -->
          
          <script src="<?php echo Url::to('@jquery') ?>/jquery-ui-1.10.3.custom.js"></script>    
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




<div class="container">

   <?= $content ?>

</div>



   



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
