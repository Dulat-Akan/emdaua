<?php

use yii\helpers\Html;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pokers';
$this->params['breadcrumbs'][] = $this->title;
?><br><br><br>
<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/poker/findcart">
<div class="poker-index">
    <h1><?= Html::encode($this->title) ?></h1>
    <br><br><br>
</div>

<div class="col-md-8">
    Barcode: <input id = "barcodeEntry" type="text" name="barcode" onkeyup="ff()" autofocus/><br />
</div>

<br><br><br>
<div id="f" >
    <b style="float:left">Flop:&nbsp &nbsp &nbsp</b>
    
    <div style="float:left" >
        <img id="f1" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
        
    </div>
    <div style="float:left">
        <img id="f2" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div style="float:left">
        <img id="f3" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div style="float:left">
        <img id="f4" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div >
        <img id="f5" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
</div><br>

<div id="r1" style="float:left">
    Player 1:  <p id="p1" style ="background:#ccc; color:red; display: inline"></p><br>
    <div  style="float:left">
        <img id="r11" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div   style="float:left">
        <img id="r12" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
</div>

<div id="r2" style="float:left; margin-left: 20px" >
    Player 2: <p id="p2"style ="background:#ccc; color:red; display: inline"></p><br>
    <div style="float:left">
        <img id="r21" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div  style="float:left">
        <img id="r22"  width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
</div>

<div id="r3" style="float:left; margin-left: 20px">
    Player 3: <p id="p3" style ="background:#ccc; color:red; display: inline"></p><br>
    <div style="float:left" >
        <img id="r31" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div  style="float:left">
        <img id="r32" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
</div>
<div id="r4" style="float:left; margin-left: 20px; margin-right: 20px">
    Player 4: <p id="p4" style ="background:#ccc; color:red; display: inline"></p><br>
    <div style="float:left">
        <img id="r41" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div style="float:left">
        <img id="r42"  width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
</div>
<div id="r5" >
    Player 5: <p id="p5" style ="background:#ccc; color:red; display: inline"></p><br>
    <div style="float:left">
        <img id="r51" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
    <div  style="float:left">
        <img id="r52" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
    </div>
</div>
<br><br><br>
<script>
    
    function sort5(k1,k2,k3,k4,k5){
        var temp=0;
        var cardarr = {k1,k2,k3,k4,k5};
        for(i=0;i<4;i++){
            for(j=i+1;j<5;j++){
                if(cardarr[i]>cardarr[j]){
                    temp = cardarr[i];
                    cardarr[i]=cardarr[j];
                    cardarr[j]=temp;
                }
            }
        }
        return cardarr;
    }
    
    function streetout5(k1,k2,k3,k4,k5){
        var count=0;
        var kicks=0;
        var arr = {0,0,0,0,0};
        var sortedcard = new Array();
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            count++;
            for(j=i+1;j<5;j++){
                if(sortedcard[i]===(sortedcard[j]+10) || sortedcard[i]===(sortedcard[j]+20)
                        || sortedcard[i]===(sortedcard[j]+30)||sortedcard[i]===(sortedcard[j]+40)){
                        arr[j]=sorted[j];
                        arr[i]=sorted[i];
                }
            }
             
        }
        
        for(i=0;i<5;i++){
            for(j=0;j<10;j++){
                if(arr[i]!=0)
                    if(hand[j]==arr[0]+i)
                        kicks++;
            }
        }
    }
    
    function findpair(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            for(j=1;j<5;j++)
                if(sortedcard[i]===sortedcard[j])
                    return sortedcard[i];
        }
    }
    
    function findtwopair(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var twopair = new Array();
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            for(j=1;j<5;j++)
                if(sortedcard[i]===sortedcard[j]){
                    twopair[count]=sortedcard[i];
                    count++;
                }
        }
        if (count>=2)
            return twopair;
    }
    
    function findset(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var set = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            count = 0;
            for(j=1;j<5;j++)
                if(sortedcard[i]===sortedcard[j]){
                    set=sortedcard[i];
                    count++;
                }
        }
        if (count>=3)
            return set;
    }
    
    function findkare(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var kare = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            count = 0;
            for(j=1;j<5;j++)
                if(sortedcard[i]===sortedcard[j]){
                    kare=sortedcard[i];
                    count++;
                }
        }
        if (count>=4)
            return kare;
    }
    
    function findfullhouse(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        var set = 0;
        var k=0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0;i<5;i++){
            count = 0;
            for(j=1;j<5;j++)
                if(sortedcard[i]===sortedcard[j]){
                    set=sortedcard[i];
                    count++;
                } 
        }
        
        var t = new Array();
        for(i=0;i<5;i++){
            if(sortedcard[i]!=set]){
                t[k]=sortedcard[i];
                k++;
            }
        }
        if (count>=3) 
            if(t[0]=t[1]){
                t[0]=set;
                return t;
            }
         
    }
    
    function findstreet(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0; i<4; i++){
            if(sortedcard[i]+10==sortedcard[i+1])
                count++;
        }
        if(count==4)
            return sortedcard[4];
    }
    
    function findflash(k1,k2,k3,k4,k5){
        var sortedcard = new Array();
        var count = 0;
        sortedcard = sort5(k1,k2,k3,k4,k5);
        for(i=0; i<5; i++){
            if(sortedcard[0]==sortedcard[i+1])
                count++;
        }
        
        if(count==5)
            return sortedcard[4];
    }
    
    function finbest7(k1,k2,k3,k4,k5,k6,k7){
        var sorted = {k1,k2,k3,k4,k5,k6,k7};
        var temp=0;
        for(i=0; i<6; i++){
            for(j=i+1;j<7;j++){
                if(sorted[i]<sorted[j]){
                    temp = sorted[i];
                    sorted[i]=sorted[j];
                    sorted[j]=temp;
                }
            }
        }
    }
    
    function bestcard5(k1,k2,k3,k4,k5){
        var temp = 0;
    }
    
    function ff(){
        var url = $("#url").val();
        var status = 0;
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
                var nn = JSON.parse(result);
                var arr = JSON.parse(JSON.stringify(nn[16]));
                
                p1=0;p2=0;p3=0;p4=0;p5=0;p11=0;p12=0;p13=0;p14=0;p15=0;     
                ch1=0;ch2=0;ch3=0;ch4=0;ch5=0; 
                
                for(i=0;i<15;i++){
                    if(nn[i].hand!=''){
                        document.getElementById(nn[i].hand).src="<?php echo Url::to('@img') ?>/"+nn[i].ves+".png";
                    }
             
                    if(i>9 ){
                        //p1=(Math.trunc(nn[9].ves/10))*100+(Math.trunc(nn[4].ves/10));
                        //alert(nn[9].ves+' '+nn[4].ves+' '+Math.trunc(nn[9].ves/10)+' '+p1);
                        //for(j=0;j<10;j++){
                       // p1 = ;
                       //сначало большая карта затем меншая карта
                       //alert('1 hand '+nn[i+4].ves+''+nn[i+9].ves+' '+'2 hand '+nn[i+3].ves+''+nn[i+8].ves);
                        if(Math.trunc(nn[0].ves/10)>Math.trunc(nn[5].ves/10)){
                            p1=(Math.trunc(nn[0].ves/10))*100+(Math.trunc(nn[5].ves/10));
                            //одномастные карты или нет
                            if((nn[0].ves%10)==(nn[5].ves%10))
                                p11=1;
                        }
                        else{
                            p1=(Math.trunc(nn[5].ves/10))*100+(Math.trunc(nn[0].ves/10));
                            if((nn[0].ves%10)==(nn[5].ves%10))
                                p11=1;
                        }
                        if(Math.trunc(nn[1].ves/10)>Math.trunc(nn[6].ves/10)){
                            p2=(Math.trunc(nn[1].ves/10))*100+(Math.trunc(nn[i6].ves/10));
                            if((nn[1].ves%10)==(nn[6].ves%10))
                                p12=1;
                        }
                        else{
                            p2=(Math.trunc(nn[6].ves/10))*100+(Math.trunc(nn[1].ves/10));
                            if((nn[1].ves%10)==(nn[6].ves%10))
                                p12=1;
                        }
                        
                        if(Math.trunc(nn[2].ves/10)>Math.trunc(nn[7].ves/10)){
                            p3=(Math.trunc(nn[2].ves/10))*100+(Math.trunc(nn[7].ves/10));
                            if((nn[2].ves%10)==(nn[7].ves%10))
                                p13=1;
                        }
                        else{
                            p3=(Math.trunc(nn[7].ves/10))*100+(Math.trunc(nn[2].ves/10));
                            if((nn[2].ves%10)==(nn[7].ves%10))
                                p13=1;
                        }
                        
                        if(Math.trunc(nn[3].ves/10)>Math.trunc(nn[8].ves/10)){
                            p4=(Math.trunc(nn[3].ves/10))*100+(Math.trunc(nn[8].ves/10));
                            if((nn[3].ves%10)==(nn[8].ves%10))
                                p14=1;
                        }
                        else{
                            p4=(Math.trunc(nn[8].ves/10))*100+(Math.trunc(nn[3].ves/10));
                            if((nn[3].ves%10)==(nn[8].ves%10))
                                p14=1;
                        }
                        
                        if(Math.trunc(nn[4].ves/10)>Math.trunc(nn[9].ves/10)){
                            p5=(Math.trunc(nn[4].ves/10))*100+(Math.trunc(nn[9].ves/10));
                            if((nn[4].ves%10)==(nn[9].ves%10))
                                p15=1;
                        }
                        else{
                            p5=(Math.trunc(nn[9].ves/10))*100+(Math.trunc(nn[4].ves/10));
                            if((nn[4].ves%10)==(nn[9].ves%10))
                                p15=1;
                        }       
                    }
                    
                    if(i==10){
                        chance();
                    }
                }
                function chance(){
                t1=0,t2=0,t3=0,t4=0,t5=0;
                for(k=0;k<170;k++){
                    if(arr[k].vesom==p1){
                        if(p11==1 && t1!=1){
                            ch1 = arr[k].perc;
                            $("#p1").text(ch1);
                            t1=1;
                        }
                        if(p11!=1 && t1==0){
                            ch1 = arr[k].perc;
                            $("#p1").text(ch1);
                            t1=1;
                        }
                     }
                     if(arr[k].vesom==p2){
                        if(p12==1 && t2!=1){
                            ch2 = arr[k].perc;
                            $("#p2").text(ch2);
                            t2=1;
                        }
                        if(p12!=1 &&  t2==0){
                            ch2 = arr[k].perc;
                            $("#p2").text(ch2);
                            t2=1;
                        }
                     }
                     
                     if(arr[k].vesom==p3){
                        if(p13==1 && t3!=1){
                            ch3 = arr[k].perc;
                            $("#p3").text(ch3);
                            t3=1;
                        }
                        if(p13!=1 && t3==0){
                            ch3 = arr[k].perc;
                            $("#p3").text(ch3);
                            t3=1;
                        }
                    }
                    if(arr[k].vesom==p4){
                        if(p14==1 && t4!=1){
                            ch4 = arr[k].perc;
                            $("#p4").text(ch4);
                            t4=1;
                        }
                        if(p14!=1  && t4==0){
                            ch4 = arr[k].perc;
                            $("#p4").text(ch4);
                            t4=1;
                        }
                    }
                    if(arr[k].vesom==p5){
                        if(p15==1 && t5!=1){
                            ch5 = arr[k].perc;
                            $("#p5").text(ch5);
                            t5=1;
                        }
                        if(p15!=1  && t5==0){
                            ch5 = arr[k].perc;
                            $("#p5").text(ch5);
                            t5=1;
                        }
                    }
                    if(t1==1 && t2==1 && t3==1 && t4==1 && t5==1)
                        break;
                    }
                }
            },
            error: function(){
            }
        });
           $("#barcodeEntry").val('');
            
      }
    }
</script>
