<?php use yii\helpers\Url;?>
<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/bakkara/findcart">
<input type="hidden" id="url2" value="<?php echo Url::to('@base') ?>/bakkara/server">

     
			<!-- glavnaya stranisa -->
	
            <p class="col-xs-12 " style="text-align:center;margin-top:0px;top:0px;background:#080808;line-height: 40px; color:#fff">Online Bakkara</p>
	<div id="wav" style="display:none"></div>
            <div class="ui-grid-solo col-xs-12">
                <div class="ui-block-a"><a href="#" class="ui-btn ui-shadow ui-corner-all ui-btn-b" id="start">Запустите игру</a></div>
            </div>
            <p style="text-align:center" class="col-xs-10 col-xs-offset-1 bg-primary" id="command"><a href="#" style="color:#fff;">Запустите игру </a></p>
            <p class="col-xs-10 col-xs-offset-1" id="timer" style="text-align:center"></p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s">Статус игры</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s1">Принимаются ставки</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s2">Раздайте 1-ю карту игрока</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s3">Принимаются ставки</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s4">Раздайте 1-ю карту диллера</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s5">Принимаются ставки</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s6">Раздайте 2-ю карту игрока и диллера</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s7">Раздайте дополнительные карты</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s8">Игра закончена</p>

<br>
<script>
  var fixtime = 0; 
    var start = $("#start");
    var timer = $("#timer");
    var gl = 30;  
    $("#start").click(function(){
            setInterval(function(){updatestatus()},5000);
            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice.wav" type="audio/wav"></audio>';
            start.text('Игра запущена');
            $('#command,#s,#s2,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s1').show();
            $("#barcodeEntry").focus();
            gl = 10;
            var status = 0;
            refreshId = setInterval(function(){
                gl--;
                timer.text(gl);
                if(gl === 0){
                    status++;
                    if(status===7)
                        status=0;
                    if(status===1){
                        $('#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
                        $('#s2').show();
                        console.log(status);
                        document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice2.wav" type="audio/wav"></audio>';
                    }
                    if(status===2){

                    }
                    clearInterval(refreshId);
                }
            },1000); 
            
        }); 

</script>
<!-- Nav tabs -->
    
    <!-- Tab panes -->
         <div class="col-xs-10 col-xs-offset-1"  >
                                                <img style ="-webkit-transform: rotate(90deg); margin-right: 10px; margin-left: 10px; " id="pa1" width="40" src="<?php echo Url::to('@img') ?>/01.png"/" alt="дополнительная карта игрока"/>
                                                <img id="p11" width="40" src="<?php echo Url::to('@img') ?>/01.png" alt="первая карта игрока"/>
                                                <img id="p12" width="40" src="<?php echo Url::to('@img') ?>/01.png" alt="вторая карта игрока"/>
                                                <img id="d11" width="40" src="<?php echo Url::to('@img') ?>/01.png" alt="первая карта диллера"/>
                                                <img id="d12" width="40" src="<?php echo Url::to('@img') ?>/01.png" alt="вторая карта диллера"/>
                                                <img style ="-webkit-transform: rotate(90deg); margin-right: 10px; margin-left: 10px; " id="da2" width="40" src="<?php echo Url::to('@img') ?>/01.png"/" alt="дополнительная карта диллера"/>
                                            </div>
	<div class="col-md-8" >
            <b style="font-size:12px">Barcode:</b> <input id = "barcodeEntry" type="text" name="barcode" onkeyup="ff()" autofocus/><br />
        </div>

<script>

    var url2 = $("#url2").val();
    var text="1234";
    $("#barcodeEntry").keypress(function(){

        var url = $("#url").val();
       


        //console.log(1);
console.log(url2);
        var barcode = $(this).val();
console.log(barcode.length);


            if(barcode.length == 13){

                      var data = {
                            "barcode":barcode
                        };

                    $.ajax({
                        type: 'post',
                        url: url2, 
                        data: data,
                        dataType:"text", 
                        response: 'text',
                        success: function(result){
                            console.log(result);

                            console.log("result");
                            //console.log(url);
                            window.location.reload();
                        },
                        error: function(result){
                            //console.log(result);
                            console.log('error');
                        }

                    }); 
            


            }


    });

</script>
