<?php

/* @var $this \yii\web\View */
/* @var $content string */

            $user_agent = $_SERVER["HTTP_USER_AGENT"];
            if (strpos($user_agent, "Firefox") !== false) $browser = "Firefox";
            elseif (strpos($user_agent, "Opera") !== false) $browser = "Opera";
            elseif (strpos($user_agent, "Chrome") !== false) $browser = "Chrome";
            elseif (strpos($user_agent, "MSIE") !== false) $browser = "Internet Explorer";
            elseif (strpos($user_agent, "Safari") !== false) $browser = "Safari";
  //else $browser = "Неизвестный";
  //echo "Ваш браузер: $browser";
  if($browser == "Internet Explorer"){
	header("Location:"."/web/index.php/site/");exit();
  }
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">

	
<head>
    <!--scroll bar -->
    
<script src="https://use.fontawesome.com/13971517a4.js"></script>

    <style>
   
        .white{
            line-height: 50px;
            color:white !important;
        }
        #s1,#s2,#s3,#s4,#s5,#s6,#s7,#s8,#s9{
            display:none;
        }
        body{
            
            margin: 0px !important; 
            padding-bottom: 0px;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/jquery.jscrollpane.css">
    <script src="<?php echo Url::to('@jquery') ?>/jquery.min.js"></script>
    <script src="<?php echo Url::to('@jquery') ?>/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery.mousewheel.js"></script>
    <meta charset="<?= Yii::$app->charset ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/jquery_mobile/jquery.mobile.custom.structure.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/jquery_mobile/jquery.mobile.custom.theme.min.css">
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery_mobile/jquery.mobile.custom.min.js"></script>
    
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
<body >
<?php $this->beginBody() ?>

<?= $content ?>  

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
