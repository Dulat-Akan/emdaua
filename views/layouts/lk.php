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
        body{
	margin:0;
	color:#444;
	background:#F0C27B;
        font:400 16px/18px Roboto, sans-serif;
    }
    *,:after,:before{box-sizing:border-box}
    .pull-left{float:left}
    .pull-right{float:right}
    .clearfix:after,.clearfix:before{content:'';display:table}
    .clearfix:after{clear:both;display:block}

    .accordion-wrap{
        top:0;
        left:0;
        right:0;
        bottom:0;
        padding:15px;
        padding-top: 100px;
        position:fixed;
        background: #F0C27B;

    }
    .accordion{
        width:90%;
        margin:auto;
        max-width:90%;
        overflow:hidden;
        border-radius:3px;
        background:#B7AFA3;
        box-shadow:0 17px 50px 0 rgba(0,0,0,.19),0 12px 15px 0 rgba(0,0,0,.24);
    }
    .accordion>a{
        color:#374046;
        padding:15px;
        display:block;
        text-decoration:none;
        transition:all .3s ease-in-out 0s;
    }
    .accordion>a:not(:last-child){
        border-bottom:1px solid rgba(0,0,0,.2);
    }
    .accordion>a:hover,
    .accordion>a.active{
        background:#E8D0A9;
    }
    .accordion>a.active{
        color:#B77F24;
    }
    .accordion>a>.alert-numb,
    .accordion>.sub-nav>a>.alert-numb{
        color:#eee;
        right:10px;
        height:22px;
        min-width:40px;
        font-size:12px;
        font-weight:600;
        line-height:22px;
        border-radius:15px;
        text-align:center;
        background:#665e51;
    }
    .accordion>a.active>.alert-numb,
    .accordion>.sub-nav>a.active>.alert-numb{
        background:#d0a051;
    }
    .accordion .sub-nav{
        display:none;
        color:#374046;
        overflow:hidden;
        background:#ecf0f1;
    }
    .accordion .sub-nav.open{
        display:block;
    }
    .accordion .sub-nav a{
        display:block;
        color:inherit;
        font-weight:300;
        padding:10px 15px;
        text-decoration:none;
        transition:all .2s ease-in-out 0s;
    }
    .accordion .sub-nav a:not(:last-child){
        border-bottom:1px solid rgba(0,0,0,.1);
    }
    .accordion .sub-nav a:hover{
        background:#c2ced1;
        box-shadow:5px 0 0 #8ca3a8 inset;
    }

    .accordion .html{
        padding:15px;
    }
    .accordion .about-me{
        text-align:center;
        position:relative;
    }
    .accordion .about-me h4{
        margin-bottom:0;
    }
    .accordion .about-me p{
        font-size:14px;
        font-weight:300;
        margin-bottom:0;
    }
    .accordion .about-me .photo{
        width:95px;
        height:95px;
        left:0px;
        float:left;
        overflow:hidden;
        border-radius:50%;
        position:relative;
        border:4px solid #fff;
        box-shadow:0 6px 20px 0 rgba(0,0,0,.19),0 8px 17px 0 rgba(0,0,0,.2);
        background:url(https://s.gravatar.com/avatar/24a65a47147cddf5b270bc9f609ffa2a?s=90) no-repeat center;
    }
    .accordion .about-me .photo .photo-overlay{
        top:0;
        left:0;
        right:0;
        bottom:0;
        opacity:0;
        visibility:hidden;
        position:absolute;
        background:rgba(0,0,0,.4);
    }
    .accordion .about-me .photo .photo-overlay .plus{
        top:50%;
        left:50%;
        width:30px;
        height:30px;
        color:#1a1a1b;
        cursor:pointer;
        font-size:24px;
        font-weight:100;
        margin-top:-15px;
        margin-left:-15px;
        position:absolute;
        line-height:30px;
        border-radius:50%;
        text-align:center;
        background:#e8d0a9;
        transform:scale(0) rotate(0);
        transition:all .1s ease-in-out 0s;
    }
    .accordion .about-me .photo:hover .photo-overlay{
        opacity:1;
        visibility:visible;
    }
    .accordion .about-me .photo:hover .photo-overlay .plus{
        transform:scale(1) rotate(90deg);
    }

    .accordion .about-me .social-link{
        top:0;
        left:0;
        right:0;
        bottom:0;
        opacity:0;
        padding-top:48px;
        visibility:hidden;
        position:absolute;
        background:rgba(0,0,0,.3);
        transition:opacity .5s ease-in-out 0s;
    }
    .accordion .about-me .social-link.active{
        opacity:1;
        visibility:visible;
    }
    .accordion .about-me .social-link .link{
        width:30px;
        padding:0;
        color:#eee;
        height:30px;
        margin:0 4px;
        line-height:28px;
        border-radius:50%;
        display:inline-block;
        transform:translateY(-80px) scale(0);
        border:1px solid rgba(0,0,0,.2);
    }
    .accordion .about-me .social-link .link-twitter{
        background:#55acce;
    }
    .accordion .about-me .social-link .link-codepen{
        background:#1a1a1b;
    }
    .accordion .about-me .social-link .link-facebook{
        background:#3b5998;
    }
    .accordion .about-me .social-link .link-dribbble{
        background:#ea4c89;
    }
    .accordion .about-me .social-link .link:hover{
        box-shadow:none;
    }
    .accordion .about-me .social-link.active .link{
        transform:translateY(0) scale(1);
    }
    .accordion .about-me .social-link.active .link:nth-child(1){
        transition-duration:.1s;
    }
    .accordion .about-me .social-link.active .link:nth-child(2){
        transition-duration:.2s;
    }
    .accordion .about-me .social-link.active .link:nth-child(3){
        transition-duration:.3s;
    }
    .accordion .about-me .social-link.active .link:nth-child(4){
        transition-duration:.4s;
    }
    .accordion .about-me .social-link.active .link:nth-child(5){
        transition-duration:5s;
    }
    .accordion .about-me.blur p,
    .accordion .about-me.blur h4,
    .accordion .about-me.blur .photo{
        -webkit-filter:blur(2px);
        filter:blur(2px);
    }

    .accordion .chat .user:not(:last-child){
        margin-bottom:10px;
    }
    .accordion .chat .user .photo{
        width:40px;
        height:40px;
        font-size:24px;
        line-height:36px;
        text-align:center;
        position:relative;
        border-radius:3px;
        display:inline-block;
        border:1px solid rgba(0,0,0,.2);
    }
    .accordion .chat .user .photo:before,
    .accordion .chat .user .photo:after{
        content:'';
        opacity:0;
        visibility:hidden;
        position:absolute;
        transition:opacity .4s ease-in-out 0s;
    }
    .accordion .chat .user .photo:before{
        left:50%;
        width:60px;
        bottom:50px;
        padding:4px;
        font-size:12px;
        line-height:14px;
        margin-left:-30px;
        text-align:center;
        background:#333333;
        border-radius:4px;
        word-break:break-all;
        content:attr(data-username);
    }
    .accordion .chat .user .photo:after{
        left:50%;
        bottom:35px;
        margin-left:-8px;
        border:8px solid transparent;
        border-top:8px solid #333333;
    }
    .accordion .chat .user .photo:hover:before,
    .accordion .chat .user .photo:hover:after{
        opacity:1;
        visibility:visible;
    }

    .accordion .chat .user.user-dribble .photo{
        color:#fff;
        margin-right:5px;
        background:#f15e95;
    }
    .accordion .chat .user .text-msg{
        max-width:70%;
        font-size:13px;
        padding:4px 8px;
        background:#fff;
        border-radius:4px;
        display:inline-block;
        border:1px solid #cdd6d8;
    }
    .accordion .chat .user.user-khadkamhn .text-msg{
        background:#dce2e4;
    }

    .accordion .invite{
        text-align:center;
    }
    .accordion .invite .dribbble{
        display:block;
        color:#c33269;
        margin:10px 0;
        font-size:24px;
        font-family:Pacifico;
    }
    .accordion .invite .btn{
        color:#eee;
        font-weight:500;
        background:#ccc;
        padding:10px 15px;
        border-radius:2px;
        background:#f15e95;
        display:inline-block;
        text-transform:uppercase;
    }
    .accordion .invite .btn:hover{
        box-shadow:none;
        background:#cb386f;
    }
    .white{
                  line-height: 50px;
                  color:white !important;
        }
    </style>
   
    <script src="<?php echo Url::to('@jquery') ?>/jquery.min.js"></script>
    <script src="<?php echo Url::to('@jquery') ?>/jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>   
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
    
     }
    else{
        echo 
        Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
                 'items' => [
                     '<li class="white">Баланс: ' . Yii::$app->user->identity->balance . ' тг. </li>',
                    ['label' => 'Домой', 'url' => ['/index.php/site']],
                    ['label' => 'регистрация', 'url' => ['/index.php/site/usertwo']],
                    ['label' => 'О нас', 'url' => ['/index.php/site/about']],
                    ['label' => 'Наши контакты', 'url' => ['/site/contact']],
                    ['label' => 'Покер', 'url' => ['/index.php/poker/pok']],
                    ['label' => 'Казино', 'url' => ['/index.php/site/online']],
                    '<li>'
                    . Html::beginForm(['/index.php/site/logout'], 'post', ['class' => 'navbar-form'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'btn btn-link']
                    )
                    . Html::endForm()
                    . '</li>'
                  ]
        ]); 
        NavBar::end();
     }
 ?>	
<div class="container-fluid" style="margin-top:0px;">
          <div class="container" style="" id="download">
                    <div class=""><img src="<?php echo Url::to('@img') ?>/3.gif" alt=""></div>
          </div>

          <div class="container-fluid container-content2">
                    <div class="row">
                              <div class="col-md-12">
                                        <div class="col-md-10 col-md-push-2" id="pok_searh2"><?= $content ?></div>
          <!-- <div class="col-md-10 col-md-push-2" id=""></div> -->
                                        
                              </div>
                    </div>
           </div>
          <script src="<?php echo Url::to('@jquery') ?>/l_o.js"></script>

          <script>
          $('.btn.btn-primary').click(function(){
          $('.alert').html('');
          $('.alert').removeClass('alert-success');
          $('.alert').removeClass('alert');

          })

          </script>

          <script type="text/javascript">
                    $(function(){
                              $('.kolekcii').jScrollPane();
                    });
          </script>
</div>
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
