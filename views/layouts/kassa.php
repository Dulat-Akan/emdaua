<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>

<!---7622fec5730bc24d2efcd38f8b6ca589--->
<html>
    <head>
        <title>Кабинет кассира- </title>
		<meta charset="utf-8" />
		<link rel="apple-touch-icon" sizes="76x76" href="<?php echo Url::to('@img') ?>/assetss/img/apple-icon.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php echo Url::to('@img') ?>/assetss/img/favicon.png">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<link rel="stylesheet" type="text/css" href="<?php echo Url::to('@jquery') ?>/table.css">

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
		<meta name="viewport" content="width=device-width" />
 <script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>

		<!-- Bootstrap core CSS     -->
		<link href="<?php echo Url::to('@img') ?>/assetss/css/bootstrap.min.css" rel="stylesheet" />

		<!-- Animation library for notifications   -->
		<link href="<?php echo Url::to('@img') ?>/assetss/css/animate.min.css" rel="stylesheet"/>

		<!--  Paper Dashboard core CSS    -->
		<link href="<?php echo Url::to('@img') ?>/assetss/css/paper-dashboard.css" rel="stylesheet"/>

		<!--  CSS for Demo Purpose, don't include it in your project     -->
		<link href="<?php echo Url::to('@img') ?>/assetss/css/demo.css" rel="stylesheet" />
		<script src="<?php echo Url::to('@jquery') ?>/jquery.min.js"></script>
		<!--  Fonts and icons     -->
		<link href="<?php echo Url::to('@img') ?>/assetss/css/themify-icons.css" rel="stylesheet">
		<style>
			.ital{
				font-family: 'Fenix', serif; font-style: italic; color: black !important; font-size: 23px  !important;
			}
			
			::-webkit-input-placeholder {
   text-align: center;
   color:#c0392b;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;  
   color:#c0392b;
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;  
   color:#c0392b;
}

:-ms-input-placeholder {  
   text-align: center; 
   color:#c0392b;
}
		</style>
    </head>
    <?php $this->beginBody() ?>	

	
<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Касса
                </a>
            </div>

            <ul class="nav">
				<?php if(!Yii::$app->user->isGuest) { echo '
				<li>
                    <a href="';?><?php echo Url::to('@base') ; echo '/userpay/index"  id="useri">
                        <i class="ti-user"></i>
                        <p style="color:black; font-weight:600">Главная</p>
                    </a>
                </li>
                
                <li>
                    <a href="';?><?php echo Url::to('@base') ; echo '/userpay/shift" id="tablei">
                        <i class="ti-bell"></i>
                        <p style="color:black; font-weight:600">Смены</p>
                    </a>
                </li>
				
				<li>
                    <a href="';?><?php echo Url::to('@base') ; echo '/userpay/stats?period1=20171104&period2=20180107" id="tablei">
                        <i class="ti-view-list-alt"></i>
                        <p style="color:black; font-weight:600">Статистика</p>
                    </a>
                </li>
                <li>
                    
                </li>
                <li>
                   
                </li>';}?>
				<?php  if(Yii::$app->user->isGuest) { echo '
                <li> 
				<a href="';?><?php echo Url::to('@base') ; echo '/site/login" >
                        <i class="ti-map"></i>
                        <p>Вход</p>
                    </a>   
                </li>
                <li>
					<a href="';?><?php echo Url::to('@base') ; echo '/site/registration">
                        <i class="ti-bell"></i>
                        <p>Регистрация</p>
                    </a>
                </li>';
				}
				else { echo '
				<li class="active-pro">
					 <a href="';?><?php echo Url::to('@base') ; echo '/site/logout">
							<i class="ti-export"></i>
							<p>Выйти</p>
						</a>
                </li> ';
				}?>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<?php if(Yii::$app->user->isGuest) { echo '
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">Профиль пользователя</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Уведомление</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Уведомление 1</a></li>
                                <li><a href="#">Уведомление 2</a></li>
                                <li><a href="#">Уведомление 3</a></li>
                                <li><a href="#">Уведомление 4</a></li>
                                <li><a href="#">Уведомление 5</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Настройки</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>
		';}?>

        <div class="content">
            <div class="container-fluid">
				<?php echo $content; ?>
			</div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
				<div class="copyright pull-right">
                    
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo Url::to('@img') ?>assetss/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="<?php echo Url::to('@img') ?>assetss/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo Url::to('@img') ?>assetss/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo Url::to('@img') ?>assetss/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo Url::to('@img') ?>assetss/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?php echo Url::to('@img') ?>assetss/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?php echo Url::to('@img') ?>assetss/js/demo.js"></script>

</html>