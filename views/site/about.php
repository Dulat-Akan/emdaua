<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>
<html>
<head>
<style>
video#bgvid { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
   
    background-size: cover; 
}
</style>
</head>       
       <body style="margin:0px 0 0 0;padding:0px;border:0px;top:0px;left:0px">
            <div style="height:100%;width:100%;margin:0px 0 0 0;border:0px;top:0px;left:0px;position:relative;">
                <div style="position:absolute; z-index:1;height:100%;width:100%" >
                    <video playsinline autoplay loop poster="<?php echo Url::to('@img') ?>/jg/alm.mp4" id="bgvid">
                        <source src="<?php echo Url::to('@img') ?>/jg/alm.webm" type="video/webm">
                        <source src="<?php echo Url::to('@img') ?>/jg/alm.mp4" type="video/mp4">
                    </video>

                </div>
                <div style="margin:0px;padding:10px 0px;float:left;position:relative; width:30%; z-index:2;background:url(<?php echo Url::to('@img') ?>/jg/lft.png); background-repeat: repeat-x, repeat-x;top:150px;left:0px; text-align:center;background-size: 100%;">
                    <a href="site/roulette" style="text-decoration:none; font-size:30px"> ОНЛАЙН РУЛЕТКА </a>
                </div>
                <div style="margin:0px;position:relative; width:40%; z-index:3; margin-top:40px;margin-left:30%;text-align:center;background-size: 100%;padding-top:20px;">
                    <a href="#" style="text-decoration:none;"> <img style="margin-left:-20px;" src="<?php echo Url::to('@img') ?>/jg/g2.png"/></a>
                </div>
                <div style="margin:0px;padding:10px 0px; position:relative; width:30%; z-index:4;background:url(<?php echo Url::to('@img') ?>/jg/rgt.png);left:70%; text-align:center;background-size: 100%;background-repeat: repeat-x, repeat-x;margin-top:-70px">
                    <a href="poker/pok" style="text-decoration:none; font-size:30px"> ОНЛАЙН ПОКЕР </a>
                </div>	
            </div>
    </body>
</html>