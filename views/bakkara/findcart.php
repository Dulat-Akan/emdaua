<?php use yii\helpers\Url;?>
<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/bakkara/findcart">
<input type="hidden" id="url2" value="<?php echo Url::to('@base') ?>/bakkara/server">

            
			<!-- glavnaya stranisa -->
	
            <p class="col-xs-12 " style="text-align:center;margin-top:0px;top:0px;background:#080808;line-height: 40px; color:#fff"> Покер</p>
	<div id="wav" style="display:none"></div>
            <div class="ui-grid-solo">
                <div class="ui-block-a"><a href="#" class="ui-btn ui-shadow ui-corner-all ui-btn-b">Запустите игру</a></div>
            </div>
            <p style="text-align:center" class="col-xs-10 col-xs-offset-1 bg-primary" id="command"><a href="#" style="color:#fff;">Запустите игру </a></p>
            <p class="col-xs-12" id="timer" style="text-align:center"></p>
                        <p style="text-align:center" class="bg-primary col-xs-10 col-xs-offset-1" id="s">Статус игры</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s1">Принимаются ставки</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s2">Раздайте карты игрокам</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s3">Принимаются префлоп ставки</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s4">Откройте флоп</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s5">Принимаются флоп ставки</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s6">Откройте терн</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s7">Принимаются терн ставки</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s8">Откройте ривер</p>
                        <p style="text-align:center" class="bg-primary col-xs-12" id="s9">Расчет ставок</p>

<br>

<!-- Nav tabs -->
    
    <!-- Tab panes -->
        <div id="f" >
            
            <div class="col-xs-12 center-block">
                <b style="font-size:12px">Flop:&nbsp &nbsp &nbsp</b><br>
                <div style="float:left" >
                    <img id="f1" width="25px" src="<?php echo Url::to('@img') ?>/01.png" >
                </div>
                <div style="float:left">
                    <img id="f2" width="25px" src="<?php echo Url::to('@img') ?>/01.png" >
                </div>
                <div style="float:left">
                    <img id="f3" width="25px" src="<?php echo Url::to('@img') ?>/01.png" >
                </div>
                <div style="float:left">
                    <img id="f4" width="25px" src="<?php echo Url::to('@img') ?>/01.png" >
                </div>
                <div style="float:left">
                    <img id="f5" width="25px" src="<?php echo Url::to('@img') ?>/01.png" >
                </div>
            </div>
        </div>
        <br>       
        <div>
            <div class="col-xs-12 center-block">
                <div style="float:left;">
                    <p style="margin:0px;font-size:12px">P1</p>
                    <img style="float:left" id="r11" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>
                    <img id="r12" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>&nbsp;
                </div>
                <div style="float:left">
                    <p style="margin:0px;font-size:12px">P2</p>
                    <img style="float:left" id="r21" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>
                    <img id="r22" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>&nbsp;
                </div>
                <div>
                    <p style="margin:0px;font-size:12px">P3</p>
                    <img style="float:left" id="r31" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>
                    <img id="r32" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>&nbsp;
                </div>
            </div>
            <div class="col-xs-12 center-block">
                <div style="float:left">
                    <p style="margin:0px;font-size:12px">P4</p>
                    <img style="float:left" id="r41" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>
                    <img id="r42" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>&nbsp;
                </div>
                <div>
                    <p style="margin:0px;font-size:12px">P5</p>
                    <img style="float:left" id="r51" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>
                    <img id="r52" width="25px" src="<?php echo Url::to('@img') ?>/01.png"/>
                </div> 
            </div>
        </div><br>
	<div class="col-md-8" >
            <b style="font-size:12px">Barcode:</b> <input id = "barcodeEntry" type="text" name="barcode" onkeyup="ff()" autofocus/><br />
        </div>
<br><br><br>
