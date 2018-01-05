<?php use yii\helpers\Url;?>
<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/poker/findcart">
<input type="hidden" id="status" value="<?php echo Url::to('@base') ?>/poker/status">

            
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
                    
           <script>

	var fixtime = 0; 
	var command = $("#command");
	var timer = $("#timer");
	var gl = 30;
        
        $("#command").click(function(){
            setInterval(function(){updatestatus()},5000);
            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice.wav" type="audio/wav"></audio>';
            command.text('Игра запущена');
            $('#s,#s2,#s3,#s4,#s5,#s6,#s7,#s8,#s9').hide();
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
<script type="text/javascript">
    function k1(){
       document.getElementById('igrok').innerHTML = document.getElementById('k1').innerHTML;
    }
    function k2(){
       document.getElementById('igrok').innerHTML = document.getElementById('k2').innerHTML;
    }
    function k3(){
       document.getElementById('igrok').innerHTML = document.getElementById('k3').innerHTML;
    }
    function k4(){
       document.getElementById('igrok').innerHTML = document.getElementById('k4').innerHTML;
    }
    function k5(){
       document.getElementById('igrok').innerHTML = document.getElementById('k5').innerHTML;
    }
    function k6(){
       document.getElementById('igrok').innerHTML = document.getElementById('k6').innerHTML;
    }
    function k7(){
       document.getElementById('igrok').innerHTML = document.getElementById('k7').innerHTML;
    }
    function k8(){
       document.getElementById('igrok').innerHTML = document.getElementById('k8').innerHTML;
    }
    function k9(){
       document.getElementById('igrok').innerHTML = document.getElementById('k9').innerHTML;
    }
    function k10(){
       document.getElementById('igrok').innerHTML = document.getElementById('k10').innerHTML;
    }
    
    function k12(){
        var elements3 = document.getElementsByClassName("p1");
        for(var i = 0, length = elements2.length; i < length; i++) {
            if( elements2[i].textContent === ''){
                elements2[i].style.display = 'inline';
            }
        } 
        var elements3 = document.getElementsByClassName("p2");
        for(var i = 0, length = elements2.length; i < length; i++) {
            if( elements2[i].textContent === ''){
                elements2[i].style.display = 'inline';
            }
        } 
        var elements3 = document.getElementsByClassName("p3");
        for(var i = 0, length = elements2.length; i < length; i++) {
            if( elements2[i].textContent === ''){
                elements2[i].style.display = 'inline';
            }
        } 
        var elements3 = document.getElementsByClassName("p4");
        for(var i = 0, length = elements2.length; i < length; i++) {
            if( elements2[i].textContent === ''){
                elements2[i].style.display = 'inline';
            }
        } 
        var elements3 = document.getElementsByClassName("p5");
        for(var i = 0, length = elements2.length; i < length; i++) {
            if( elements2[i].textContent === ''){
                elements2[i].style.display = 'inline';
            }
        } 
        var elements = document.getElementsByClassName("chip");
        for(var i = 0, length = elements.length; i < length; i++) {
            if( elements[i].textContent === ''){
                elements[i].style.display = 'none';
            }
        } 
       
    }
    function k11(){
        
        var elements = document.getElementsByClassName("chip");
        for(var i = 0, length = elements.length; i < length; i++) {
            if( elements[i].textContent === ''){
                elements[i].style.display = 'inline';
            }
        }  
       
         
       function k12(){  
           
            for(var i = 0, length = elements.length; i < length; i++) {
                if( elements[i].textContent === ''){
                    elements[i].style.display = 'none';
                }
            } 
        }
        setTimeout( k12, 3000);
        
    }
    function sort5(k1,k2,k3,k4,k5){
        var temp=0;
        var cardarr = [k1,k2,k3,k4,k5];
        for(i=0;i<4;i++){
            for(j=i+1;j<5;j++){
                if(cardarr[i]>=cardarr[j]){
                    temp = cardarr[i];
                    cardarr[i]=cardarr[j];
                    cardarr[j]=temp;
                }
            }
        }
        return cardarr;
    }
          
    function findroyalflesh5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var set = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        if(sortedcard[0]===102 && sortedcard[1]===112 && sortedcard[2]===122 && sortedcard[3]===132 && sortedcard[4]===142)
            return true;
    }
    
    function findstreetflash5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var mast = new Array();
        var count = 0;
        var count2 = 0;
        mast = [k1%10, k2%10, k3%10, k4%10, k5%10];
        sortedcard = sort5(Math.trunc(k1/10),Math.trunc(k2/10),Math.trunc(k3/10),Math.trunc(k4/10),Math.trunc(k5/10));
        
        for(i=0; i<4; i++){
            if(sortedcard[i]+1===sortedcard[i+1])
                count++;
        }
        
        for(i=0; i<4; i++){
            if(mast[0]===mast[i+1])
                count2++;
        }
        if(count===4 && count2===4){
            sortedcard[5]=mast[0];
            return sortedcard;
        }
    }
    function findkare5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var kare = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            count = 0;
            for(j=i+1;j<5;j++)
                if(sortedcard[i]===sortedcard[j]){
                    kare=sortedcard[i];
                    count++;
                }
        }
        if (count===4)
            return kare;
    }
    
    function findfullhouse5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var set = 0;
        var k=10;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            count = 0;
            for(j=i+1;j<5;j++){
                if(sortedcard[i]===sortedcard[j]){
                    set=sortedcard[i];
                    count=count+1;
                } 
                if(count===2){
                    i=5;
                    break;
                }
            }
        }
        
        var t = new Array();
        for(i=0;i<5;i++)
            if(sortedcard[i]!==set)
                for(j=i+1;j<5;j++)
                    if(sortedcard[i]===sortedcard[j]){
                        k=i;
                        break;
                    }     
        
        
        if (count===2 && k!==10){
            t[0]=set;
            t[1]=sortedcard[k];
            return t;
        }
        
    }
     function findflash5(k1,k2,k3,k4,k5){ // полную карту. фе 142
       
        var count = 0;
        var sortedcard = sort5(k1,k2,k3,k4,k5);
        var mast = new Array();
        mast = [(sortedcard[0])%10, (sortedcard[1])%10, (sortedcard[2])%10, (sortedcard[3])%10, (sortedcard[4])%10];
        for(i=0; i<5; i++){
            if(mast[0] === mast[i+1])
                count++;
        }
        if(count===4)
            return mast[4];
    }
    
    function findstreet5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0; i<4; i++){
            if(sortedcard[i]+1===sortedcard[i+1])
                count++;
        }
        if(count===4)
            return sortedcard[4];
    }
    
    function findset5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var count2 = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<4;i++){
            count = 0;
            for(j=i+1;j<5;j++){
                if(sortedcard[i]===sortedcard[j]){
                    count++;
                }
                if(count>=2){
                    count2=count;
                    set=sortedcard[i];
                }
            }
        var set = 0;
        }
        
        if (count2>=2)
            return set;
    }
    
    function findtwopair5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var twopair = new Array();
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            for(j=i+1;j<5;j++)
                if(sortedcard[i]===sortedcard[j]){
                    twopair[count]=sortedcard[i];
                    count++;
                }
        }
        if (count>=2)
            return twopair;
    }
    
    function findpair5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            for(j=i+1;j<5;j++)
                if(sortedcard[i]===sortedcard[j])
                    return sortedcard[i];
        }
    }
    
    
    function findkiker5(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        sortedcard = sort5(k1,k2,k3,k4,k5);
        
        return sortedcard[4];
    }
    
    function sort6(k1,k2,k3,k4,k5,k6){
        var temp=0;
        var cardarr = [k1,k2,k3,k4,k5,k6];
        for(i=0;i<5;i++){
            for(j=i+1;j<6;j++){
                if(cardarr[i]>=cardarr[j]){
                    temp = cardarr[i];
                    cardarr[i]=cardarr[j];
                    cardarr[j]=temp;
                }
            }
        }
        return cardarr;
    }
          
    function findroyalflesh6(k1,k2,k3,k4,k5,k6){
        var sortedcard = new Array();
        sortedcard = sort6(k1,k2,k3,k4,k5,k6);
        if(sortedcard[0]===102 && sortedcard[1]===112 && sortedcard[2]===122 && sortedcard[3]===132 && sortedcard[4]===142)
            return true;
        if(sortedcard[1]===102 && sortedcard[2]===112 && sortedcard[3]===122 && sortedcard[4]===132 && sortedcard[5]===142)
            return true;
    }
    
    function findstreetflash6(k1,k2,k3,k4,k5,k6){ //full
        var sortedcard = new Array();
        var mast = 0;
        var last = [0,0,0,0,0,0];
        var count = 0;
        var count2 = 0;
        var id =0;
        var sortedcard2 = sort6(Math.trunc(k1/1),Math.trunc(k2/1),Math.trunc(k3/1),Math.trunc(k4/1),Math.trunc(k5/1),Math.trunc(k6/1));;
        sortedcard2  = [sortedcard2[0]%10, sortedcard2[1]%10, sortedcard2[2]%10, sortedcard2[3]%10, sortedcard2[4]%10,sortedcard2[5]%10];
        sortedcard = sort6(Math.trunc(k1/10),Math.trunc(k2/10),Math.trunc(k3/10),Math.trunc(k4/10),Math.trunc(k5/10),Math.trunc(k6/10));
        
        if(sortedcard2[0] === sortedcard2[1])
            mast = sortedcard2[0] ;
        if(sortedcard2[2] === sortedcard2[3])
            mast = sortedcard2[2] ;
        for(i=0; i<6; i++){
            
            if(sortedcard2[i]=== mast)
                last[i+id]=sortedcard[i];
            else{
                id=-1;
                last[5]=sortedcard[i];
                //last[0]=sortedcard[5];
            }
        }
        last[6]=mast;
        
        for(i=0; i<6; i++){
            if(sortedcard[i]+1===sortedcard[i+1])
                count++;
        }
        
        for(i=0; i<6; i++){
            if(mast===sortedcard2[i+1])
                count2++;
        }
        
        
        if(count>=4 && count2>=4){
            return last;
        }
        
    }
    function findkare6(k1,k2,k3,k4,k5,k6){ // 
        var sortedcard = new Array();
        var count = 0;
        var count2 = 0;
        var kare = 0;
        sortedcard = sort6(k1,k2,k3,k4,k5,k6);
        for(i=0;i<6;i++){
            count = 0;
            for(j=i+1;j<6;j++)
                if(sortedcard[i]===sortedcard[j]){
                    
                    count++;
                }
                if(count === 3){
                    count2 = count;
                    kare=sortedcard[i];
                }
        }
        if (count2 === 3)
            return kare;
    }
    
    function findfullhouse6(k1,k2,k3,k4,k5,k6){
        var sortedcard = new Array();
        var count = 0;
        var set = 0;
        var k=10;
        sortedcard = sort6(k1,k2,k3,k4,k5,k6);
        for(i=0;i<5;i++){
            count = 0;
            for(j=i+1;j<5;j++){
                if(sortedcard[i]===sortedcard[j]){
                    set=sortedcard[i];
                    count=count+1;
                } 
                if(count===2){
                    i=5;
                    break;
                }
            }
        }
        
        var t = new Array();
        for(i=0;i<5;i++)
            if(sortedcard[i]!==set)
                for(j=i+1;j<5;j++)
                    if(sortedcard[i]===sortedcard[j]){
                        k=i;
                        break;
                    }     
        
        
        if (count===2 && k!==10){
            t[0]=set;
            t[1]=sortedcard[k];
            return t;
        }
        
    }
     function findflash6(k1,k2,k3,k4,k5,k6){ // полную карту. фе 142
        var t = new Array();
        var count = 0;
        var sortedcard = sort6(k1,k2,k3,k4,k5,k6);
        var mast = new Array();
        mast = [(sortedcard[0])%10, (sortedcard[1])%10, (sortedcard[2])%10, (sortedcard[3])%10, (sortedcard[4])%10, (sortedcard[5])%10];
        for(i=0; i<6; i++){
            if(mast[0] === mast[i+1])
                count++;
        }
        
        if(count>=4){
            t[0]=mast[4];
            if(sortedcard[5]%10 === mast[4])
                t[1]=Math.trunc(sortedcard[5]/10);
            else
                t[1]=Math.trunc(sortedcard[5]/10);
            return t;
        }
            
    }
    
    function findstreet6(k1,k2,k3,k4,k5,k6){
        var sortedcard = new Array();
        var count = 0;
        var last = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5,k6);
        for(i=1; i<6; i++){
            if(sortedcard[0]+i === sortedcard[i]){
                count++;
                last = sortedcard[i];
            }
        }
        if(count>=4)
            return last;
    }
    
    function findset6(k1,k2,k3,k4,k5,k6){
        var sortedcard = new Array();
        var count = 0;
        var count2 = 0;
        sortedcard = sort6(k1,k2,k3,k4,k5,k6);
        for(i=0;i<5;i++){
            count = 0;
            for(j=i+1;j<6;j++){
                if(sortedcard[i]===sortedcard[j]){
                    count++;
                }
                if(count>=2){
                    count2=count;
                    set=sortedcard[i];
                }
            }
        var set = 0;
        }
        
        if (count2>=2)
            return set;
    }
    
    function findtwopair6(k1,k2,k3,k4,k5,k6){
        var sortedcard = new Array();
        var count = 0;
        var twopair = new Array();
        sortedcard = sort5(k1,k2,k3,k4,k5,k6);
        for(i=0;i<5;i++){
            for(j=i+1;j<5;j++)
                if(sortedcard[i]===sortedcard[j]){
                    twopair[count]=sortedcard[i];
                    count++;
                }
        }
        if (count>=2)
            return twopair;
    }
    
    function findpair6(k1,k2,k3,k4,k5,k6){
        var sortedcard = new Array();
        sortedcard = sort6(k1,k2,k3,k4,k5,k6);
        for(i=0;i<5;i++){
            for(j=i+1;j<6;j++)
                if(sortedcard[i]===sortedcard[j])
                    return sortedcard[i];
        }
    }
    
    
    function findkiker6(k1,k2,k3,k4,k5,k6){
        var sortedcard = new Array();
        sortedcard = sort6(k1,k2,k3,k4,k5,k6);
        
        return sortedcard[4];
    }
</script>
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
<script type="text/javascript">
    
    function updatestatus(){
                    
        var url = $("#status").val();
        var user = "<?= \Yii::$app->user->identity->id; ?>";
        var status = 0;
        var data = {
            "user":user,
        };

        $.ajax({
            type: 'post',
            url: url, 
            data: data,
            response: 'json',
            success: function(result){
                //console.log(result);
            }
        });
    }
   
    function ff(){
        var url = $("#url").val();
        var i = 0;
        var barcode = $("#barcodeEntry").val();
        var data = {
            "barcode":barcode
        };
        
        
        if(barcode.length === 13){
         
        $.ajax({
            type: 'post',
            url: url, 
            data: data,
            response: 'json',
            success: function(result){
                //console.log(result);
                var nn = JSON.parse(result);
                var arr = JSON.parse(JSON.stringify(nn[16]));
                var flag = 0;
                var d=0;
                /*function hid(){
                    $(".chip").display = none ;
                }*/
                //p1=0;p2=0;p3=0;p4=0;p5=0;p11=0;p12=0;p13=0;p14=0;p15=0;     
                ch1=0;ch2=0;ch3=0;ch4=0;ch5=0; 
                
                while(nn[d].hand){
                    
                  //console.log(nn[d].hand);
                        document.getElementById(nn[d].hand).src="<?php echo Url::to('@img') ?>/" + nn[d].ves + ".png";
                        var aa=0;
                    
                    
                    if(d===9){
                        if(!nn[10]){
                            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice.wav" type="audio/wav"></audio>';
                    command.text('Игра запущена');
                            var status = 1;
                            var gl = 10;
                            $('#s, #s1, #s2, #s4, #s5, #s6, #s7, #s8').hide();
                            $('#s3').show();
                            refreshId = setInterval(function(){
                                    gl--;
                                    timer.text(gl);
                                    if(gl === 0){
                                        status++;
                                        if(status===8)
                                            status=0;
                                        if(status===2){
                                            $('#s, #s1, #s2, #s3, #s5, #s6, #s7,  #s8').hide();
                                            $('#s4').show();
                                            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice2.wav" type="audio/wav"></audio>';
                                            console.log(status);
                                        }
                                        clearInterval(refreshId);
                                    }
                            },1000); 
                            if(Math.trunc(nn[0].ves/10)>Math.trunc(nn[5].ves/10)){
                                p1=(Math.trunc(nn[0].ves/10))*100+(Math.trunc(nn[5].ves/10));
                                //одномастные карты или нет
                                if((nn[0].ves%10)===(nn[5].ves%10))
                                    p11=1;
                            }
                            else{
                                p1=(Math.trunc(nn[5].ves/10))*100+(Math.trunc(nn[0].ves/10));
                                if((nn[0].ves%10)===(nn[5].ves%10))
                                    p11=1;
                            }
                            if(Math.trunc(nn[1].ves/10)>Math.trunc(nn[6].ves/10)){
                                p2=(Math.trunc(nn[1].ves/10))*100+(Math.trunc(nn[6].ves/10));
                                if((nn[1].ves%10)===(nn[6].ves%10))
                                    p12=1;
                            }
                            else{
                                p2=(Math.trunc(nn[6].ves/10))*100+(Math.trunc(nn[1].ves/10));
                                if((nn[1].ves%10)===(nn[6].ves%10))
                                    p12=1;
                            }

                            if(Math.trunc(nn[2].ves/10)>Math.trunc(nn[7].ves/10)){
                                p3=(Math.trunc(nn[2].ves/10))*100+(Math.trunc(nn[7].ves/10));
                                if((nn[2].ves%10)===(nn[7].ves%10))
                                    p13=1;
                            }
                            else{
                                p3=(Math.trunc(nn[7].ves/10))*100+(Math.trunc(nn[2].ves/10));
                                if((nn[2].ves%10)===(nn[7].ves%10))
                                    p13=1;
                            }

                            if(Math.trunc(nn[3].ves/10)>Math.trunc(nn[8].ves/10)){
                                p4=(Math.trunc(nn[3].ves/10))*100+(Math.trunc(nn[8].ves/10));
                                if((nn[3].ves%10)===(nn[8].ves%10))
                                    p14=1;
                            }
                            else{
                                p4=(Math.trunc(nn[8].ves/10))*100+(Math.trunc(nn[3].ves/10));
                                if((nn[3].ves%10)===(nn[8].ves%10))
                                    p14=1;
                            }

                            if(Math.trunc(nn[4].ves/10)>Math.trunc(nn[9].ves/10)){
                                p5=(Math.trunc(nn[4].ves/10))*100+(Math.trunc(nn[9].ves/10));
                                if((nn[4].ves%10)===(nn[9].ves%10))
                                    p15=1;
                            }
                            else{
                                p5=(Math.trunc(nn[9].ves/10))*100+(Math.trunc(nn[4].ves/10));
                                if((nn[4].ves%10)===(nn[9].ves%10))
                                    p15=1;
                            }
                            
                            
                            console.log( p1);
                        }  
                    }
                    if(d===10){
                        
                    }
                    if(d===12){
                        if(!nn[13]){
                            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice.wav" type="audio/wav"></audio>';
                            command.text('Игра запущена');
                            var status = 1;
                            var gl = 10;
                            $('#s,#s1,#s2,#s4,#s3,#s6,#s7,#s8').hide();
                            $('#s5').show();
                            refreshId = setInterval(function(){
                                    gl--;
                                    timer.text(gl);
                                    if(gl === 0){
                                        status++;
                                        if(status===8)
                                            status=0;
                                        if(status===2){
                                            $('#s,#s1,#s2,#s3,#s5,#s4,#s7,#s8').hide();
                                            $('#s6').show();
                                            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice2.wav" type="audio/wav"></audio>';
                                            console.log(status);
                                        }
                                        clearInterval(refreshId);
                                    }
                            },1000); 
                        }
                    } 
                    
                    if(d===13){
                        if(!nn[14]){
                            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice.wav" type="audio/wav"></audio>';
                            command.text('Игра запущена');
                            var status = 1;
                            var gl = 10;
                            $('#s,#s1,#s2,#s4,#s3,#s6,#s5,#s8').hide();
                            $('#s7').show();
                            refreshId = setInterval(function(){
                                    gl--;
                                    timer.text(gl);
                                    if(gl === 0){
                                        status++;
                                        if(status===8)
                                            status=0;
                                        if(status===2){
                                            $('#s,#s1,#s2,#s3,#s5,#s4,#s7,#s6,#s9').hide();
                                            $('#s8').show();
                                            console.log(status);
                                            document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/voice2.wav" type="audio/wav"></audio>';
                                        }
                                        clearInterval(refreshId);
                                    }
                            },1000); 
                        }
                    } 
                    if(d===14 && nn[14].hand!=''){
                    
                        command.text('Игра запущена');
                        var status = 1;
                        var gl = 10;
                        $('#s,#s1,#s2,#s4,#s3,#s6,#s5,#s8,#s7').hide();
                        $('#s9').show();
                        refreshId = setInterval(function(){
                                gl--;
                                timer.text(gl);
                                if(gl === 0){
                                    status++;
                                    if(status===8)
                                        status=0;
                                    if(status===2){
                                        $('#s,#s1,#s2,#s3,#s5,#s4,#s7,#s6,#s8').hide();
                                        $('#s9').show();
                                        command.text('Запустите игру');
                                        document.getElementById('wav').innerHTML='<audio autoplay="autoplay" ><source src="<?php echo Url::to('@img') ?>/youlose.wav" type="audio/wav"></audio>';
                                    }
                                    clearInterval(refreshId);
                                }
                        },1000); 
                        setInterval(function(){updatestatus()},5000);
                     
                    }
                    if(d>8 ){
                        //p1=(Math.trunc(nn[9].ves/10))*100+(Math.trunc(nn[4].ves/10));
                        //alert(nn[9].ves+' '+nn[4].ves+' '+Math.trunc(nn[9].ves/10)+' '+p1);
                        //for(j=0;j<10;j++){
                        // p1 = ;
                        //сначало большая карта затем меншая карта
                        //alert('1 hand '+nn[i+4].ves+''+nn[i+9].ves+' '+'2 hand '+nn[i+3].ves+''+nn[i+8].ves);
                        if(Math.trunc(nn[0].ves/10)>Math.trunc(nn[5].ves/10)){
                            p1=(Math.trunc(nn[0].ves/10))*100+(Math.trunc(nn[5].ves/10));
                            //одномастные карты или нет
                            if((nn[0].ves%10)===(nn[5].ves%10))
                                p11=1;
                        }
                        else{
                            p1=(Math.trunc(nn[5].ves/10))*100+(Math.trunc(nn[0].ves/10));
                            if((nn[0].ves%10)===(nn[5].ves%10))
                                p11=1;
                        }
                        if(Math.trunc(nn[1].ves/10)>Math.trunc(nn[6].ves/10)){
                            p2=(Math.trunc(nn[1].ves/10))*100+(Math.trunc(nn[6].ves/10));
                            if((nn[1].ves%10)===(nn[6].ves%10))
                                p12=1;
                        }
                        else{
                            p2=(Math.trunc(nn[6].ves/10))*100+(Math.trunc(nn[1].ves/10));
                            if((nn[1].ves%10)===(nn[6].ves%10))
                                p12=1;
                        }
                        
                        if(Math.trunc(nn[2].ves/10)>Math.trunc(nn[7].ves/10)){
                            p3=(Math.trunc(nn[2].ves/10))*100+(Math.trunc(nn[7].ves/10));
                            if((nn[2].ves%10)===(nn[7].ves%10))
                                p13=1;
                        }
                        else{
                            p3=(Math.trunc(nn[7].ves/10))*100+(Math.trunc(nn[2].ves/10));
                            if((nn[2].ves%10)===(nn[7].ves%10))
                                p13=1;
                        }
                        
                        if(Math.trunc(nn[3].ves/10)>Math.trunc(nn[8].ves/10)){
                            p4=(Math.trunc(nn[3].ves/10))*100+(Math.trunc(nn[8].ves/10));
                            if((nn[3].ves%10)===(nn[8].ves%10))
                                p14=1;
                        }
                        else{
                            p4=(Math.trunc(nn[8].ves/10))*100+(Math.trunc(nn[3].ves/10));
                            if((nn[3].ves%10)===(nn[8].ves%10))
                                p14=1;
                        }
                        
                        if(Math.trunc(nn[4].ves/10)>Math.trunc(nn[9].ves/10)){
                            p5=(Math.trunc(nn[4].ves/10))*100+(Math.trunc(nn[9].ves/10));
                            if((nn[4].ves%10)===(nn[9].ves%10))
                                p15=1;
                        }
                        else{
                            p5=(Math.trunc(nn[9].ves/10))*100+(Math.trunc(nn[4].ves/10));
                            if((nn[4].ves%10)===(nn[9].ves%10))
                                p15=1;
                        }       
                    }
                    
                    if(d>8){
                        k11();
                        //chance();
                    }
                    
                    if(d>11){
                        for(m=0;m<5;m++){
                            //var arr = findstreet(Math.trunc(nn[(m)].ves/10),Math.trunc(nn[(m+5)].ves/10),Math.trunc(nn[10].ves/10),Math.trunc(nn[11].ves/10),Math.trunc(nn[12].ves/10));
                            //var arr = findstreet(nn[(m)].ves, nn[(m+5)].ves, nn[10].ves, nn[11].ves, nn[12].ves);
                            //pair=findstreetflesh(arr[0],arr[1],arr[2],arr[3],arr[4]);
                            //console.log(arr);
                            //console.log(pair);
                        }
                         
                    }
                    if(d>12){
                        for(m=0;m<6;m++){
                            var arr = findpair6(Math.trunc(nn[(m)].ves/10),Math.trunc(nn[(m+5)].ves/10),Math.trunc(nn[10].ves/10),Math.trunc(nn[11].ves/10),Math.trunc(nn[12].ves/10),Math.trunc(nn[13].ves/10));
                            //var arr = findstreet6(nn[(m)].ves, nn[(m+5)].ves, nn[10].ves, nn[11].ves, nn[12].ves, nn[13].ves);
                            //pair=findstreetflesh(arr[0],arr[1],arr[2],arr[3],arr[4]);
                            console.log(arr);
                            //console.log(pair);
                        }
                         
                    }
                    d++;
                }
                 var elements1 = document.getElementsByClassName("p1");
                        for(var i = 0, length = elements1.length; i < length; i++) {
                            if( elements1[i].textContent === ''){
                                elements1[i].style.display = 'inline';
                            }
                        } 
                        var elements2 = document.getElementsByClassName("p2");
                        for(var i = 0, length = elements2.length; i < length; i++) {
                            if( elements2[i].textContent === ''){
                                elements2[i].style.display = 'inline';
                            }
                        } 
                        var elements3 = document.getElementsByClassName("p3");
                        for(var i = 0, length = elements3.length; i < length; i++) {
                            if( elements3[i].textContent === ''){
                                elements3[i].style.display = 'inline';
                            }
                        } 
                        var elements4 = document.getElementsByClassName("p4");
                        for(var i = 0, length = elements4.length; i < length; i++) {
                            if( elements4[i].textContent === ''){
                                elements4[i].style.display = 'inline';
                            }
                        } 
                        var elements5 = document.getElementsByClassName("p5");
                        for(var i = 0, length = elements5.length; i < length; i++) {
                            if( elements5[i].textContent === ''){
                                elements5[i].style.display = 'inline';
                            }
                        }
                
               /*function chance(){
                
                t1=0,t2=0,t3=0,t4=0,t5=0;
                for(k=0;k<170;k++){
                    if(arr[k].vesom===p1){
                        if(p11===1 && t1!==1){
                            ch1 = arr[k].perc;
                            $(".p1").text(ch1);
                            //setTimeout(function(){ $('#id').hide(); }, 5000);
                            
                            //setTimeout(hid(), 3000);
                            t1=1;
                        }
                        if(p11!==1 && t1===0){
                            ch1 = arr[k].perc;
                            $(".p1").text(ch1);
                            t1=1;
                        }
                     }
                     if(arr[k].vesom===p2){
                        if(p12===1 && t2!==1){
                            ch2 = arr[k].perc;
                            $(".p2").text(ch2);
                            t2=1;
                        }
                        if(p12!==1 &&  t2===0){
                            ch2 = arr[k].perc;
                            $(".p2").text(ch2);
                            t2=1;
                        }
                     }
                     
                     if(arr[k].vesom===p3){
                        if(p13===1 && t3!==1){
                            ch3 = arr[k].perc;
                            $(".p3").text(ch3);
                            t3=1;
                        }
                        if(p13!==1 && t3===0){
                            ch3 = arr[k].perc;
                            $(".p3").text(ch3);
                            t3=1;
                        }
                    }
                    if(arr[k].vesom===p4){
                        if(p14===1 && t4!==1){
                            ch4 = arr[k].perc;
                            $(".p4").text(ch4);
                            t4=1;
                        }
                        if(p14!==1  && t4===0){
                            ch4 = arr[k].perc;
                            $(".p4").text(ch4);
                            t4=1;
                        }
                    }
                    if(arr[k].vesom===p5){
                        if(p15===1 && t5!==1){
                            ch5 = arr[k].perc;
                            $(".p5").text(ch5);
                            t5=1;
                        }
                        if(p15!==1  && t5===0){
                            ch5 = arr[k].perc;
                            $(".p5").text(ch5);
                            t5=1;
                        }
                    }
                    if(t1===1 && t2===1 && t3===1 && t4===1 && t5===1)
                        break;
                }
                
            }*/
            
        },
        error: function(){
        }
        });
           $("#barcodeEntry").val('');
            
      }
    }
    
</script>
