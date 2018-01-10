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
    <style>
        Div.kolekcii{
            overflow: auto;
            height:80%;
            background-attachment: local, local, scroll, scroll;
            position:fixed;
        }
        .section-tabs .tab-content{
                padding: 20px !important;
        }
        div.kolekcii_soderzhimoe{
            float:left;
            width:100%;
        }
        .flip-container{
            padding:30px 5px !important;margin:20px 0px!important;
        }
        .tab-content.clearfix{
            padding:50px !important;margin:20px!important;
            background:node;    
        }
        .section-tabs {
            padding-bottom: 20px;
        }
        #main{
            width:100%;
            height:100% !important;
            position:absolute;
        }
        #top{
            z-index: 1;
            opacity: 0.99;
            background: #fdd700 !important;
            -moz-transition: opacity 0.75s ease, width 0.75s ease;
            -webkit-transition: opacity 0.75s ease, width 0.75s ease;
            -ms-transition: opacity 0.75s ease, width 0.75s ease;
            transition: opacity 0.75s ease, width 0.75s ease;
            position: absolute;
            top: 0;
            width: 100%;
            height: 100% !important;
            left: 0;
        }
        #bottom{
            z-index:2;
            width: 100%;
            bottom: 0px;
            display:none;
            position:absolute;
        }
        .f1{
            float:left;
            margin-left:2px;
            width:50px;
        }
        .ss{
            width:90%;
        }
        .ss2{
            width:100%;
        }
        #nav18{
            padding:0px;
        }
        #nav19{
            padding:0px;
        }
        #nav1{
            text-align: center;
            margin:auto;
            padding:auto;
            margin-right:20px;
        }
        #nav2{
            margin-right:20px;
            text-align: center;
        }
        #l{
            width:30em;
            height:45px;
            z-index: 5;
            bottom:0px;
            left:calc(50% - 15em);
            position:absolute;
        }
        #r{
            width:30em;
            height:45px;
            z-index: 5;
            bottom:560px;
            left:calc(100% - 30em);
            position:absolute;
        }
        .white{
                  line-height: 50px;
                  color:white !important;
        }
    </style>
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/table.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/jquery.jscrollpane.css">
    <script src="<?php echo Url::to('@jquery') ?>/jquery.min.js"></script>
    <script src="<?php echo Url::to('@jquery') ?>/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery.mousewheel.js"></script>
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
<?php
    NavBar::begin([
        'brandLabel' => 'AlmaBet',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top nav2',
        ],
    ]);
    echo "<div style=\"width:200px;float:right;padding-left:20px;\" id=\"google_translate_element\"></div>";
    if(Yii::$app->user->isGuest ){
    echo 
            Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => [
                        ['label' => 'Домой', 'url' => ['/index.php/site']],
                        ['label' => 'регистрация', 'url' => ['/index.php/site/usertwo']],
                        ['label' => 'О нас', 'url' => ['/index.php/site/about']],
                        ['label' => 'Наши контакты', 'url' => ['/site/contact']],
<<<<<<< HEAD
                       /* ['label' => 'Покер', 'url' => ['/index.php/poker/pok']],*/
                        ['label' => 'Живая игра', 'url' => ['/site/about']],
=======
                        ['label' => 'Покер', 'url' => ['/index.php/poker/pok']],
                        ['label' => 'Рулетка', 'url' => ['/index.php/site/roulette']],
>>>>>>> 54977dd36ee1bbc224055ea4e4f873928da52f4f
                        ['label' => 'Вход', 'url' => ['/index.php/site/login']]       
                    ]
            ]); 
            NavBar::end();
     }
    else{
        echo 
        Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
                 'items' => [
<<<<<<< HEAD
                     '<li class="white">Баланс: ' . Yii::$app->user->identity->balance . ' тг. </li>',
                    ['label' => 'Кабинет', 'url' => ['/index.php/site/lk']],
                    ['label' => 'Корзина', 'url' => ['/index.php/site/korzina']],
                    ['label' => 'Домой', 'url' => ['/index.php/site']],
                    
                    ['label' => 'О нас', 'url' => ['/index.php/site/about']],
                    ['label' => 'Наши контакты', 'url' => ['/site/contact']],
                    ['label' => 'Живая игра', 'url' => ['/site/about']],
                    '<li>'
                    . Html::beginForm(['/index.php/site/logout'], 'post', ['class' => 'navbar-form'])
                    . Html::submitButton(
                        'Выход (' . Yii::$app->user->identity->username . ')',
=======
                     '<li class="white" id="balans">Баланс: ' . Yii::$app->user->identity->balance . 'тг. </li>',
                    ['label' => 'Домой', 'url' => ['/index.php/site']],
                    ['label' => 'регистрация', 'url' => ['/index.php/site/usertwo']],
                    ['label' => 'О нас', 'url' => ['/index.php/site/about']],
                    ['label' => 'Наши контакты', 'url' => ['/site/contact']],
                    ['label' => 'Покер', 'url' => ['/index.php/poker/pok']],
                    ['label' => 'Рулетка', 'url' => ['/index.php/site/roulette']],
                    '<li>'
                    . Html::beginForm(['/index.php/site/logout'], 'post', ['class' => 'navbar-form'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
>>>>>>> 54977dd36ee1bbc224055ea4e4f873928da52f4f
                        ['class' => 'btn btn-link']
                    )
                    . Html::endForm()
                    . '</li>'
                  ]
        ]); 
        NavBar::end();
     }
<<<<<<< HEAD
 ?>
=======
     
     ?> 
    
>>>>>>> 54977dd36ee1bbc224055ea4e4f873928da52f4f
   


          <div id="main" style="overflow:hidden;">
        <?= $content ?>
    </div>
   
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
