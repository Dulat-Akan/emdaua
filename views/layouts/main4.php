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
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/jquery.jscrollpane.css">
	<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery.jscrollpane.min.js"></script>
	<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery.mousewheel.js"></script>
                
    <!--end scroll bar -->
    
                
    <!--end scroll bar -->
    <script src="<?php echo Url::to('@jquery') ?>/jquery.min.js"></script>
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
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>




<?php $this->beginBody() ?>
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
