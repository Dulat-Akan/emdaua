<?php use yii\helpers\Url;?>
<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/bakkara/findcart">
<input type="hidden" id="url2" value="<?php echo Url::to('@base') ?>/bakkara/server">
<input type="hidden" id="url3" value="<?php echo Url::to('@base') ?>/bakkara/addstatus">
<input type="hidden" id="comb" value="<?php echo $lastcard['comb']?>">
<script type="text/javascript">
    
    
    function init() {
    // Clear forms here
        document.getElementById("barcodeEntry").value = "";
        $('#barcodeEntry').val('');

    }
    window.onload = init;
</script>
<?php echo $lastcard['comb']?>
     
            <!-- glavnaya stranisa -->
    
            <p class="col-xs-12 " style="text-align:center;margin-top:0px;top:0px;background:#080808;line-height: 40px; color:#fff">Online Bakkara</p>
    <div id="wav" style="display:none"></div>
            <div class="ui-grid-solo col-xs-12">
                <div class="ui-block-a"></div>
            </div>
                        <p style="text-align:center" class="col-xs-10 col-xs-offset-1 bg-primary" id="command"><a href="#"  id="start">Запустите игру</a></p>
            <p class="col-xs-10 col-xs-offset-1" id="timer" style="text-align:center"></p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s">Статус игры</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s1">Принимаются ставки</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s2">Раздайте 1-ю карту игрока</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s3">Принимаются ставки</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s4">Раздайте 1-ю карту диллера</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s5">Принимаются ставки</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s6">Раздайте 2-ю карту игрока</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s7">Раздайте 2-ю карту диллера</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s8">Раздайте дополнительные карты игроку</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s9">Раздайте дополнительные карты диллеру</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s10">Игра закончена</p>
                        <p style="text-align:center; display: none" class="bg-primary col-xs-10 col-xs-offset-1" id="s11">Ставки приостонвлены</p>

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
    <?php 
    if($lastcard['p11']==0)
        $p11 = "01";
    else
        $p11 = $lastcard['p11'];

    if($lastcard['p12']==0)
        $p12 = "01";
    else
        $p12 = $lastcard['p12'];

    if($lastcard['d11']==0)
        $d11 = "01";
    else
        $d11 = $lastcard['d11'];

    if($lastcard['d12']==0)
        $d12 = "01";
    else
        $d12 = $lastcard['d12'];

    if($lastcard['pa']==0)
        $pa = "01";
    else
        $pa = $lastcard['pa'];

    if($lastcard['da']==0)
        $da = "01";
    else
        $da = $lastcard['da'];

    $status = 0;  // 4 - не надо раздоват доп карты никому; 1 - толкьо игроку; 2 - диллеру; 3 - всем;
    $pp=0; // summa kart igroka
    $dd=0; // summa kart dillera
    $pp11 = 0;
    $pp12 = 0;
    $dd11 = 0;
    $dd12 = 0;

    $pp11 = intval($lastcard['p11']/10);
    $pp12 = intval($lastcard['p12']/10);
    $dd11 = intval($lastcard['d11']/10);
    $dd12 = intval($lastcard['d12']/10);

    if($pp11>=10)
        $pp11=0;
    if($pp12>=10)
        $pp12=0;
    if($dd11>=10)
        $dd11=0;
    if($dd12>=10)
        $dd12=0;

    if($pp11>13)
        $pp11=1;
    if($pp12>130)
        $pp12=1;
    if($dd11>13)
        $dd11=1;
    if($dd12>13)
        $dd12=1;

    $pp = $pp11 + $pp12;
    $dd = $dd11 + $dd12;
    if($pp>10)
        $pp=$pp%10;

    if($dd>10)
        $dd=$dd%10;

    if($pp<5 && $dd<5)
      $status = 3;
    else{
      if($pp<5)
        $status = 1;
      if($dd<5)
        $status = 2;
      if($pp>4 && $dd>4)
        $status = 4;
      }
     echo "<br>".$status.$pp11.$pp12.$dd11.$dd12.' and '.$pp.' '.$dd;
                      
    ?>
    <input type="hidden" id="status" value="<?php echo $status;?>">
    <!-- Tab panes -->
         <div class="col-xs-10 col-xs-offset-1"  >
                                                <img style ="-webkit-transform: rotate(90deg); margin-right: 10px; margin-left: 10px; " id="pa1" width="40" src="<?php echo Url::to('@img').'/'.$pa ?>.png"  alt="дополнительная карта игрока"/>
                                                <img id="p11" width="40" src="<?php echo Url::to('@img').'/'.$p11 ?>.png" alt="первая карта игрока"/>
                                                <img id="p12" width="40" src="<?php echo Url::to('@img').'/'.$p12 ?>.png" alt="вторая карта игрока"/>
                                                <img id="d11" width="40" src="<?php echo Url::to('@img').'/'.$d11 ?>.png" alt="первая карта диллера"/>
                                                <img id="d12" width="40" src="<?php echo Url::to('@img').'/'.$d12 ?>.png" alt="вторая карта диллера"/>
                                                <img style ="-webkit-transform: rotate(90deg); margin-right: 10px; margin-left: 10px; " id="da2" width="40" src="<?php echo Url::to('@img').'/'.$da ?>.png"  alt="дополнительная карта диллера"/>
                                            </div>
    <div class="col-md-8" >
            <b style="font-size:12px">Barcode:</b> <input id = "barcodeEntry" type="text" name="barcode" onkeyup="ff()" autofocus/><br />
        </div>
        

<script>

    var comb = $("#comb").val();
    var url2 = $("#url2").val();
    var status = $("#status").val();

    if(comb==0){
            $('#command,#start,#s,#s2,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s1').show();
            testTimer1(15);
        }
        if(comb==1){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s2').show();
        }

        if(comb==2){
            $('#command,#start,#s,#s1,#s2,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s3').show();
            testTimer2(15);
        }
        if(comb==3){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s4').show();
        }
        if(comb==4){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s5').show();
            testTimer3(15);
        }
        if(comb==5){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s6').show();
        }
        if(comb==6){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s7').show();
        }
        if(comb==7){

            if(status == 4){
                $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
                $('#s10').show();
            }
            if(status == 1){
                $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
                $('#s8').show();
            }
            if(status == 2){
                $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
                $('#s9').show();
            }
            if(status == 3){
                $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
                $('#s8').show();
            }
        }
        if(comb==8){
            if(status==3 || status == 2){
                $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
                $('#s9').show();
            }
            
            if(status == 3){
                $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
                $('#s10').show();
            }
        }

        console.log("comb = "+comb);
    $("#barcodeEntry").keypress(function(){
        

        if(comb==1){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s2').show();
        }

        if(comb==2){
            $('#command,#start,#s,#s1,#s2,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s3').show();
            testTimer2(15);
        }
        if(comb==3){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s4').show();
        }
        if(comb==4){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s5').show();
            testTimer3(15);
        }
        if(comb==5){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s6').show();
        }
        if(comb==6){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s7').show();
        }
        if(comb==7){
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $('#s8').show();
        }

        var url = $("#url").val();
        
        var barcode = $(this).val();

        if(status==4){
            $('#command,#s,#s1,#s2,#s4,#s5,#s6,#s7,#s2').hide();
            $('#s8').show();
        }
            if(barcode.length == 13){

                    var data = {
                        "barcode":barcode,
                        "status":status
                    };

                    $.ajax({
                        type: 'post',
                        url: url2, 
                        data: data,
                        dataType:"text", 
                        response: 'text',
                        success: function(result){
                            document.getElementById("barcodeEntry").value = "";
                            console.log(result);
                            console.log(result[0]);
                            console.log("result");
                            $('#barcodeEntry').val('');
                            console.log($('#barcodeEntry').val());
                            window.location.reload();
                        },
                        error: function(result){
                            document.getElementById("barcodeEntry").value = "";
                            console.log(result);
                            console.log('error');
                            window.location.reload();
                        }

                    }); 
            }
    });

    function testTimer1(startTime) {
        var seconds = startTime;
        var url3 = $("#url3").val();

        $("#s1").text("Принимаются ставки: "+seconds);
        //уменьшаем общее время на одну секунду
        startTime= startTime-1;
        //смотрим время не закончилось
        if ( startTime  >= 0 ) {
                //если нет то повторяем процедуру заново
               stopTimer  =  setTimeout(function(){testTimer1(startTime); }, 1000);
               //если закончилось, то выводим сообщение на экран, и делаем кнопку запуска активной
        } else {
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $("#s2").show();
            var data = {
                "comb":1,
            };

            $.ajax({
                type: 'post',
                url: url3, 
                data: data,
                dataType:"text", 
                response: 'text',
                success: function(result){
                    console.log(result);
                    console.log(result[0]);
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
    }
    function testTimer2(startTime) {
        var seconds = startTime;
        var url3 = $("#url3").val();

        $("#s3").text("Принимаются ставки: "+seconds);
        //уменьшаем общее время на одну секунду
        startTime= startTime-1;
        //смотрим время не закончилось
        if ( startTime  >= 0 ) {
                //если нет то повторяем процедуру заново
               stopTimer  =  setTimeout(function(){testTimer2(startTime); }, 1000);
               //если закончилось, то выводим сообщение на экран, и делаем кнопку запуска активной
        } else {
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $("#s4").show();
            var data = {
                "comb":3,
            };

            $.ajax({
                type: 'post',
                url: url3, 
                data: data,
                dataType:"text", 
                response: 'text',
                success: function(result){
                    console.log(result);
                    console.log(result[0]);
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
    }
    function testTimer3(startTime) {
        var seconds = startTime;
        var url3 = $("#url3").val();

        $("#s5").text("Принимаются ставки: "+seconds);
        //уменьшаем общее время на одну секунду
        startTime= startTime-1;
        //смотрим время не закончилось
        if ( startTime  >= 0 ) {
                //если нет то повторяем процедуру заново
               stopTimer  =  setTimeout(function(){testTimer3(startTime); }, 1000);
               //если закончилось, то выводим сообщение на экран, и делаем кнопку запуска активной
        } else {
            $('#command,#s,#s1,#s3,#s4,#s5,#s6,#s7,#s8').hide();
            $("#s6").show();
            var data = {
                "comb":5,
            };

            $.ajax({
                type: 'post',
                url: url3, 
                data: data,
                dataType:"text", 
                response: 'text',
                success: function(result){
                    console.log(result);
                    console.log(result[0]);
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
    }

</script>
