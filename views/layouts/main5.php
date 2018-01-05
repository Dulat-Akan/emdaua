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
    
   

          
          <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>
         
 
    <meta charset="<?= Yii::$app->charset ?>">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
  
  
</head>
<body>




<?php $this->beginBody() ?>
  
<?= $content ?></div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
