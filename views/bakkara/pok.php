<?php use yii\helpers\Url; ?>

<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/poker/findcart">
<input type="hidden" id="beturl" value="<?php echo Url::to('@base') ?>/poker/sendhist">
<script type="text/javascript">
function zoom(){
     $("#bottom").show(500);
     //$("#l").hide(2000);
    document.getElementById('r').style.display='block';
    document.getElementById('l').style.display='none';
    //document.getElementById('bottom').style.height = '500px';
    //document.getElementById('bottom').style.display='block';
}

function zooml(){
     //$("#l").show(2000);
     $("#bottom").hide(500);
    document.getElementById('r').style.display='none';
    document.getElementById('l').style.display='block';
    document.getElementById('bottom').style.height = '0px';
    //document.getElementById('bottom').style.display='none';
}
function nav1(){
    document.getElementById('nav2').style.display='block';
    document.getElementById('nav1').style.display='none';
}
function nav2(){
    document.getElementById('nav2').style.display='none';
    document.getElementById('nav1').style.display='block';
}
</script>

<div id="top">
    <img id="r" onClick="zooml()" src="<?php echo Url::to('@img/btn_top.png'); ?>" width="40px" height="40px" style="display:none;right:50%;bottom:400px;position:absolute;z-index:5;">
    <img id="l" onClick="zoom()" src="<?php echo Url::to('@img/btn_dwn.png'); ?>" >
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uNN6Pj06Cj8" frameborder="0" allowfullscreen></iframe>
    <!--<img style="user-select: none; cursor: zoom-in;top:2000px;" src="http://192.168.1.150:8092/webcam3.mjpeg" width="100%" height="100%">
    -->
</div>
<div id="msg"  class="alert alert-info" style="display: none;position: absolute;top:45%;left:45%;z-index: 10;">
          <p>Ваша ставка принята!</p>
</div>
<div id="bottom" style="height:400px; background: #fdd700;">
    sdfsdfsdfsdf
</div>
