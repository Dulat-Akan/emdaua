<?php use yii\helpers\Url; ?>

<input type="hidden" id="url" value="<?php echo Url::to('@basepath') ?>/poker/findcart">
<input type="hidden" id="showurl" value="<?php echo Url::to('@base') ?>/poker/pok1">
<input type="hidden" id="beturl" value="<?php echo Url::to('@base') ?>/poker/sendhist">
<input type="hidden" id="balance" value="<?php echo Url::to('@base') ?>/poker/balance">
<input type="hidden" id="koef" value="<?php echo Url::to('@base') ?>/poker/addkoef">
<input type="hidden" id="calc" value="<?php echo Url::to('@base') ?>/poker/calc">
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
     function sort7(k1,k2,k3,k4,k5,k6,k7){
        var temp=0;
        var cardarr = [k1,k2,k3,k4,k5,k6,k7];
        for(i=0;i<6;i++){
            for(j=i+1;j<7;j++){
                if(cardarr[i]>=cardarr[j]){
                    temp = cardarr[i];
                    cardarr[i]=cardarr[j];
                    cardarr[j]=temp;
                }
            }
        }
        return cardarr;
    }
    
    function findpair7(k1,k2,k3,k4,k5,k6,k7){
        var sortedcard = new Array();
        sortedcard = sort6(k1,k2,k3,k4,k5,k6,k7);
        for(i=0;i<6;i++){
            for(j=i+1;j<7;j++)
                if(sortedcard[i]===sortedcard[j])
                    return sortedcard[i];
        }
        return 0;
    }
        function findtwopair7(k1,k2,k3,k4,k5,k6,k7){
        var sortedcard = new Array();
        var count = 0;
        var twopair = new Array();
        twopair[0]=0;
        twopair[1]=0;
        sortedcard = sort7(k1,k2,k3,k4,k5,k6,k7);
        for(i=0;i<7;i++){
            for(j=i+1;j<7;j++){
                if(sortedcard[i]===sortedcard[j]){
                    twopair[count]=sortedcard[i];
                    count++;
                }
            }
        }
        if (count>=2){
            if(twopair[0]<twopair[1]){
                count = twopair[0];
                twopair[0]=twopair[1];
                twopair[1]=count;
            }
           if(twopair[0]<twopair[1]){
                twopair[0]=0;
                twopair[1]=0;
            }
        }
        if( twopair[0]!=0)
            return twopair;
        else
            return 0;
    }
    function findset7(k1,k2,k3,k4,k5,k6,k7){
        var sortedcard = new Array();
        var count = 0;
        var count2 = 0;
        var set =0;
        sortedcard = sort7(k1,k2,k3,k4,k5,k6,k7);
        for(i=0;i<6;i++){
            count = 0;
            for(j=i+1;j<7;j++){
                if(sortedcard[i]===sortedcard[j]){
                    count++;
                }
                if(count>=2){
                    count2=count;
                    set=sortedcard[i];
                }
            }
        //var set = 0;
        }
        
        if (count2>=2)
            return set;
        return 0;
    }
    function findstreet7(k1,k2,k3,k4,k5,k6,k7){
        var sortedcard = new Array();
        var count = 0;
        var last = 0;
        sortedcard = sort7(k1,k2,k3,k4,k5,k6,k7);
        for(i=1; i<7; i++){
            if(sortedcard[0]+i === sortedcard[i]){
                count++;
                last = sortedcard[i];
            }
        }
        if(count>=4)
            return last;
        return 0;
    }
    function findflash7(k1,k2,k3,k4,k5,k6,k7){ // полную карту. фе 142
        var t = new Array();
        var count = 0;
        var count2 = 0;
        var pos = 0;
        var sortedcard = sort7(k1,k2,k3,k4,k5,k6,k7);
        var mast = new Array();
        mast = [(sortedcard[0])%10, (sortedcard[1])%10, (sortedcard[2])%10, (sortedcard[3])%10, (sortedcard[4])%10, (sortedcard[5])%10,(sortedcard[6])%10];
        for(i=0; i<4; i++){
            count=0;
            for(j=i+1;j<7;j++){
                if(mast[i] === mast[j]){
                    count=count+1;

                }
                 if(count>=4){
                     count2=count;
                     pos = j;
                     count=0;
                 }
            }
        }
    
        console.log(sortedcard);
        if(count2>=4){
            t[0]=(sortedcard[pos])%10;
            t[1]=sortedcard[pos];
           return sortedcard[pos];
         }
         else
             return 0;
            
    }
    
    function findfullhouse7(k1,k2,k3,k4,k5,k6,k7){
        
        var sortedcard = new Array();
        var count = 0;
        var count2 = 0;
        var set3 = 0;
        var set2 = 0;
        var t = new Array();
        t[0]=0;
        t[1]=0;
        sortedcard = sort7(k1,k2,k3,k4,k5,k6,k7);
        for(i=0;i<6;i++){
            count = 0;
            for(j=i+1;j<7;j++){
                if(sortedcard[i]===sortedcard[j]){
                    count++;
                }
                if(count>=2){
                    count2=count;
                    set3=sortedcard[i];
                }
            }
        //var set = 0;
        }       
        console.log(set3);
        for(i=0;i<6;i++){
            count = 0;
            for(j=i+1;j<7;j++){
                if(sortedcard[i]===sortedcard[j] && sortedcard[i]!==set3){
                    count++;
                }
                if(count>=1){
                    count2=count;
                    set2=sortedcard[i];
                }
            }
        //var set = 0;
        }
        if(set2!==0 && set3!==0){
            t[0]=set3;
            t[1]=set2;
            return t;
        }
        else
            return 0;
        
    }
</script>

<div id="top">
    <img id="r" onClick="zooml()" src="<?php echo Url::to('@img/btn_top.png'); ?>" width="40px" height="40px" style="display:none;right:50%;bottom:490px;position:absolute;z-index:5;">
    <img id="l" onClick="zoom()" src="<?php echo Url::to('@img/btn_dwn.png'); ?>" >
    <!--<iframe width="100%" height="100%" src="http://www.almabet.kz:8091/webcam2.mjpeg" frameborder="0" allowfullscreen></iframe>-->
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="100%" height="100%">
			<param name="movie" value="flashmovie.swf" />
			<param name="quality" value="high" />
			<param name="allowFullScreen" value="true" />
				<param name="menu" value="false" />
			<param name="wmode" value="transparent">
			<PARAM NAME="SCALE" VALUE="exactfit">
			<embed src="http://almagames.mypsx.net:8092/webcam3.swf" quality="high" type="application/x-shockwave-flash" width="100%" height="100%" SCALE="exactfit" pluginspage="http://www.macromedia.com/go/getflashplayer" />
		</object>
    
</div>
<div id="msg"  class="alert alert-info" style="display: none;position: absolute;top:45%;left:45%;z-index: 10;">
    <p>Ваша ставка принята!</p>
</div>
<div id="msg1"  class="alert alert-info" style="display: none;position: absolute;top:45%;left:45%;z-index: 10;">
    <p>Побидитель ИГРОК 2</p>
</div>
<div id="msg2"  class="alert alert-info" style="display: none;position: absolute;top:45%;left:45%;z-index: 10;">
    <p>Побидитель ИГРОК 4</p>
</div>
<div id="bottom" >
    <div class="section-tabs">
<!-- Nav tabs -->
        <ul class="nav nav-tabs nav-justified" role="tablist">
                <li role="presentation" class="active"><a  style="color:#fdd700" href="#nav18"  data-toggle="tab" class="aruki">Игроки</a></li>
            <li role="presentation"><a href="#nav19"  style="color:#fdd700" data-toggle="tab">Комбинации</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content clearfix">
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
                <div>
                        <img id="f5" width="50px" src="<?php echo Url::to('@img') ?>/01.png" >
                </div>
            </div>
            <br>

            <div role="tabpanel" class="tab-pane fade in active" id="nav18">
                <div class="col-sm-4 flip-container">
                    <div class="flipper">
                        <div class="product22 front">
                            <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 1  | кеф: <b class="p1" style =" color:#fdd700;"kef="1" stage="1"> </b> </p>
                            <p class='karta'>
                                <img id="r11" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img id="r12" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img class="chip" style="display:none;" src="<?php echo Url::to('@img') ?>/chip.gif"> 
                            </p>
                        </div><!-- /.product -->
                        
                    <!--------------- переворачивание обратная сторона--------------------->
                        <div class="product22 back">
                            <h6 style="color:#fdd700" > Выиграет игрок 1</h6>
                            <p style ="display: inline; color:#fdd700">коеф-т: &nbsp<b class="p1" style ="display: inline">4,1</b></p>  
                            <div  class="col-xs-12">
                                <input id="p1" type="text" class="col-xs-8" name="p1" value="" placeholder="введите сумму">
                                <input type="submit" class="col-xs-4 btn" value="ставка" onclick="bet(this)" alt="p1">
                            </div>
                        </div><!-- окончание блока с перевернутой стороной -->
                    </div><!--flipper-->
                </div>

                <div class="col-sm-4 flip-container">
                    <div class="flipper">
                        <div class="product22 front">
                            <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 2  | кеф: <b class="p2" style =" color:#fdd700;"kef="1" stage="1"> </b> </p>
                            <p class='karta'>
                                <img id="r21" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img id="r22" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img class="chip" style="display:none;" src="<?php echo Url::to('@img') ?>/chip.gif"> 
                            </p>
                        </div><!-- /.product -->
                <!--------------- переворачивание обратная сторона--------------------->
                        <div class="product22 back">
                            <h6 style="color:#fdd700"> Выиграет игрок 2</h6>
                            <p style ="display: inline; color:#fdd700">коеф-т: &nbsp<b class="p2" style ="display: inline"></b></p> 
                             <div  class="col-xs-12">
                                <input  id="p2" type="text" class="col-xs-8" name="p2" value="" placeholder="введите сумму">
                                <input type="submit" class="col-xs-4 btn" value="ставка" onclick="bet(this)" alt="p2">
                            </div>
                        </div><!-- окончание блока с перевернутой стороной -->
                    </div><!--flipper-->
                </div>

                <div class="col-sm-4 flip-container">
                    <div class="flipper">
                        <div class="product22 front">
                            <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 3  | кеф: <b class="p3" style =" color:#fdd700;"kef="1" stage="1"> </b> </p>
                            <p class='karta'>
                                <img id="r31" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img id="r32" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img class="chip" style="display:none;" src="<?php echo Url::to('@img') ?>/chip.gif"> 
                            </p>
                        </div><!-- /.product -->
                <!--------------- переворачивание обратная сторона--------------------->
                        <div class="product22 back">
                            <h6 style="color:#fdd700"> Выиграет игрок 3</h6>
                            <p style ="display: inline; color:#fdd700">коеф-т: &nbsp<b class="p3" style ="display: inline"></b></p>  
                             <div  class="col-xs-12">
                                <input id="p3" type="text" class="col-xs-8" name="name" value="" placeholder="введите сумму">
                                <input type="submit" class="col-xs-4 btn" value="ставка" onclick="bet(this)" alt="p3">
                               </div>
                        </div><!-- окончание блока с перевернутой стороной -->
                    </div><!--flipper-->
                </div>

                <div class="col-sm-4 flip-container">
                    <div class="flipper">
                        <div class="product22 front">
                            <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 4  | кеф: <b class="p4" style =" color:#fdd700;"kef="1" stage="1"> </b> </p>
                            <p class='karta'>
                                <img id="r41" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img id="r42" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img class="chip" style="display:none;" src="<?php echo Url::to('@img') ?>/chip.gif"> 
                            </p>
                        </div><!-- /.product -->
                <!--------------- переворачивание обратная сторона--------------------->
                        <div class="product22 back">
                            <h6 style="color:#fdd700"> Выиграет игрок 4</h6>
                            <p style ="display: inline; color:#fdd700">коеф-т: &nbsp <b class="p4" style ="display: inline"></b></p>  
                             <div  class="col-xs-12">
                                <input id="p4" type="text" class="col-xs-8" name="name" value="" placeholder="введите сумму">
                                <input type="submit" class="col-xs-4 btn" value="ставка" onclick="bet(this)" alt="p4">
                            </div>
                        </div><!-- окончание блока с перевернутой стороной -->
                    </div><!--flipper-->
                </div>

                <div class="col-sm-4 flip-container">
                    <div class="flipper">
                        <div class="product22 front">
                            <p  style="color:#fdd700" class="ruka-title"> Выиграет игрок 5 | кеф: <b class="p5" style =" color:#fdd700;"kef="1" stage="1"> </b> </p>
                            <p class='karta'>
                                <img id="r51" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img id="r52" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                                <img class="chip" style="display:none;" src="<?php echo Url::to('@img') ?>/chip.gif"> 
                            </p>
                            <!-- /.product-buy -->
                        </div><!-- /.product -->
                <!--------------- переворачивание обратная сторона--------------------->
                        <div class="product22 back">
                            <h6 style="color:#fdd700"> Выиграет игрок 5</h6>
                            <p style ="display: inline; color:#fdd700">коеф-т: &nbsp<b class="p5" style ="display: inline"></b></p>  
                             <div  class="col-xs-12"  style ="display: inline">
                                <input id="p5" type="text" class="col-xs-8" name="name" value="" placeholder="введите сумму">
                                <input type="submit" class="col-xs-4 btn" value="ставка" onclick="bet(this)" alt="p5">
                                
                            </div>
                        </div><!-- окончание блока с перевернутой стороной -->
                    </div><!--flipper-->
                </div><!--окончание цикла где выводиться контент блока игрок-->
                
            </div><!---окончание -блок открывается по клику игрок-->
        <!----------блок комбинации----------->				
            <div role="tabpanel" class="tab-pane" id="nav19">
                <div class="col-md-8" style="overflow-y: scroll; height:300px">
                    <div onclick="k1()" class="col-xs-12 comb " id="k1">Кикер выиграет <p  style="display: inline; text-align: center; float:right">к: <b>100</b>&nbsp&nbsp</p></div>
                    <div onclick="k2()" class="col-xs-12 comb " id="k2">Одна пара выиграет     <p  style="display: inline; text-align: center; float:right">к: 5.5&nbsp&nbsp</p></div>
                    <div onclick="k3()" class="col-xs-12 comb " id="k3">Две пары выиграет      <p  style="display: inline; text-align: center; float:right">к: 3.2&nbsp&nbsp</p></div>
                    <div onclick="k4()" class="col-xs-12 comb " id="k4">Сет выиграет           <p  style="display: inline; text-align: center; float:right">к: 6.7&nbsp&nbsp</p></div>
                    <div onclick="k5()" class="col-xs-12 comb " id="k5">Стрит выиграет         <p  style="display: inline; text-align: center; float:right">к: 5,5&nbsp&nbsp</p></div>
                    <div onclick="k6()" class="col-xs-12 comb " id="k6">Флэш выиграет          <p  style="display: inline; text-align: center; float:right">к: 8,8&nbsp&nbsp</p></div>
                    <div onclick="k7()" class="col-xs-12 comb " id="k7">Фул-xаус выиграет      <p  style="display: inline; text-align: center; float:right">к: 8,9&nbsp&nbsp</p></div>
                    <div onclick="k8()" class="col-xs-12 comb " id="k8">Каре  выиграет         <p  style="display: inline; text-align: center; float:right">к: 70&nbsp&nbsp&nbsp </p></div>
                    <div onclick="k9()" class="col-xs-12 comb " id="k9">Стрит-флэш выиграет    <p  style="display: inline; text-align: center; float:right">к: 100&nbsp</p></div>
                    <div onclick="k10()" class="col-xs-12 comb " id="k10">Роял-флэш выиграет    <p  style="display: inline; text-align: center; float:right">к: 100&nbsp</p></div>
                </div>

                <div class="col-xs-4 right">
                    <h6 id="igrok" style="color:#fdd700"></h6>
                     <div  class="col-xs-12">
                        <div><input type="text" class="col-xs-12" name="name" value="" placeholder="введите сумму"></div>
                        <div><input type="submit" class="col-xs-12 btn btn-danger" value="СДЕЛАТЬ СТАВКУ"  onclick="bet(this)" alt=""></div>
                    </div>
                </div>
            </div><!---конец блок комбинация--->
            <script type="text/javascript">
                 stop = setInterval(function(){showc()},1000);  
                    var kef;
                 function calc(gameid, hist){
                    var url = $("#calc").val();
                    
                    var data = {
                        "gameid":gameid,
                        "hist":hist,
                    };
                    $.ajax({
                        type: 'post',
                        url: url, 
                        data: data,
                        response: 'json',
                        success: function(result){
                                console.log(result);
                             //showc(arr);
                        }
                    });
                }   
                 function addkoef(){
                    var url = $("#koef").val();
                    
                    var data = {
                        "p1":url
                    };

                    $.ajax({
                        type: 'post',
                        url: url, 
                        data: data,
                        response: 'json',
                        success: function(result){
                             kef = JSON.parse(result);
                             var arr = new Array();
                             for(var i=0;i<4;i++){
                                 arr[i]=kef[i];
                                 
                             }
                             showc(arr[0],arr[1],arr[2],arr[3],arr[4]);
                             //showc(arr);
                        }
                    });
                }
                function balance(){
                    
                    var url = $("#balance").val();
                    var data = {
                        "price":price
                    };

                    $.ajax({
                        type: 'post',
                        url: url, 
                        data: data,
                        response: 'json',
                        success: function(result){
                            
                        }
                    });
                }
                function bet(Element){
                    var event = Element.alt;
                    var pr = "#"+event;
                    var pr1 = "."+event;
                    var url = $("#beturl").val();
                    var user = "<?= \Yii::$app->user->identity->id; ?>";
                    var kef =  $(pr1).attr('kef');
                    var stage =  $(pr1).attr('stage');
                    var gameid =  $(pr1).attr('gameid');
                    var price =  $(pr).val();
                    
                    var data = {
                        "price":price,
                        "event":event,
                        "user":user,
                        "kef":kef,
                        "stage":stage,
                        "gameid":gameid,
                    };

                    $.ajax({
                        type: 'post',
                        url: url, 
                        data: data,
                        response: 'json',
                        success: function(result){         
                            var uvedom = $("#msg");
                            uvedom.show("1000");
                            uvedom.delay("1000");
                            uvedom.hide("1000");
                        }
                    });
                }
                function showc(arr){
                    //alert('t' + typeof(arr[1]));
                   console.log('arr: '+arguments[0]);
                    //console.log('arr: '+array[0]);
                    var url = $("#showurl").val();
                    var data = {
                        "code":'price',
                    };
                    
                    $.ajax({
                        type: 'post',
                        url: url, 
                        data: data,
                        response: 'json',
                        success: function(result){
                            //console.log(result);
                            var nn = JSON.parse(result);
                            
                            var d=0;
                            while(nn[d].hand !== ''){
                                document.getElementById(nn[d].hand).src="<?php echo Url::to('@img') ?>/" + nn[d].ves + ".png";
                                if(nn[d].hand=='r11'){
                                    var elements = document.getElementsByClassName("chip");
                                    for(var i = 0, length = elements.length; i < length; i++) {
                                        
                                        if( elements[i].textContent === ''){
                                            elements[i].style.display = 'inline';
                                        }
                                    }  
                                    var elements2 = document.getElementsByClassName("p1");
                                    for(var i = 0, length = elements2.length; i < length; i++) {
                                        $(".p1").attr('gameid', nn[d].partiya);
                                        var $inputs = $('#p1,#p2,#p3,#p4,#p5');
                                        $inputs.attr('disabled', this.value == '' ? null : true);
                                            elements2[i].style.display = 'none';
                                        
                                    } 
                                    var elements2 = document.getElementsByClassName("p2");
                                    for(var i = 0, length = elements2.length; i < length; i++) {
                                        $(".p2").attr('gameid', nn[d].partiya);
                                            elements2[i].style.display = 'none';
                                        
                                    } 
                                    var elements2 = document.getElementsByClassName("p3");
                                    for(var i = 0, length = elements2.length; i < length; i++) {
                                       $(".p3").attr('gameid', nn[d].partiya);
                                            elements2[i].style.display = 'none';
                                        
                                    } 
                                    var elements2 = document.getElementsByClassName("p4");
                                    for(var i = 0, length = elements2.length; i < length; i++) {
                                        $(".p4").attr('gameid', nn[d].partiya);
                                            elements2[i].style.display = 'none';
                                        
                                    } 
                                    var elements2 = document.getElementsByClassName("p5");
                                    for(var i = 0, length = 2; i < length; i++) {
                                        $(".p5").attr('gameid', nn[d].partiya);
                                            elements2[i].style.display = 'none';
                                        
                                    } 
                                     var elements2 = document.getElementsByClassName("p6");
                                    for(var i = 0, length = elements2.length; i < length; i++) {
                                        
                                            elements2[i].style.display = 'none';
                                        
                                    }
                                }
                                if(nn[d].hand==='r52'){
                                    var elements = document.getElementsByClassName("chip");
                                    for(var i = 0, length = elements.length; i < length; i++) {
                                        if( elements[i].textContent === ''){
                                            elements[i].style.display = 'none';
                                        }
                                        var $inputs = $('#p1,#p2,#p3,#p4,#p5');
                                        $inputs.attr('disabled',null );
                                    } 
                                    if(nn[d].partiya%2===1){
                                        var elements2 = document.getElementsByClassName("p1");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent =nn[0].status2;
                                            $(".p1").attr('kef', elements2[i].textContent);
                                            $(".p1").attr('stage', "preflop");
                                                elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p2");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent =nn[1].status2;
                                             $(".p2").attr('stage', "preflop");
                                               $(".p2").attr('kef', elements2[i].textContent);
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p3");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                           elements2[i].textContent =nn[2].status2;
                                           $(".p3").attr('stage', "preflop");
                                               $(".p3").attr('kef', elements2[i].textContent); 
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p4");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent =nn[3].status2;
                                               $(".p4").attr('kef', elements2[i].textContent); 
                                               $(".p4").attr('stage', "preflop");
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p5");
                                        for(var i = 0, length = 2; i < length; i++) {
                                            elements2[i].textContent =nn[4].status2;
                                               $(".p5").attr('kef', elements2[i].textContent); 
                                               $(".p5").attr('stage', "preflop");
                                               elements2[i].style.display = 'inline';

                                        } 
                                    }
                                   /*else{
                                        var elements2 = document.getElementsByClassName("p1");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="4.23";
                                               $(".p1").attr('kef', elements2[i].textContent); 
                                               $(".p1").attr('stage', "preflop");
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p2");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="6.5";
                                               $(".p2").attr('kef', elements2[i].textContent);
                                               $(".p2").attr('stage', "preflop");
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p3");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                           elements2[i].textContent ="3.76";
                                               $(".p3").attr('kef', elements2[i].textContent); 
                                               $(".p3").attr('stage', "preflop");
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p4");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="4.29";
                                               $(".p4").attr('kef', elements2[i].textContent); 
                                               $(".p4").attr('stage', "preflop");
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p5");
                                        for(var i = 0, length = 2; i < length; i++) {
                                            elements2[i].textContent ="7.15";
                                               $(".p5").attr('kef', elements2[i].textContent);
                                               $(".p5").attr('stage', "preflop");
                                               elements2[i].style.display = 'inline';

                                        } 
                                        }*/
                                }
                                if(nn[d].hand=='f1'){
                                    addkoef();
                                    var elements = document.getElementsByClassName("chip");
                                    for(var i = 0, length = elements.length; i < length; i++) {
                                        var $inputs = $('#p1,#p2,#p3,#p4,#p5');
                                        $inputs.attr('disabled', this.value == '' ? null : true);
                                            elements[i].style.display = 'inline';
                                        
                                    }  
                                    
                                }
                                if(nn[d].hand=='f3'){
                                    var $inputs = $('#p1,#p2,#p3,#p4,#p5');
                                        $inputs.attr('disabled',null );
                                    if(nn[d].partiya%2==1){
                                        var elements = document.getElementsByClassName("chip");
                                        for(var i = 0, length = elements.length; i < length; i++) {
                                            if( elements[i].textContent === ''){
                                                elements[i].style.display = 'none';
                                            }
                                        } 
                                        var elements2 = document.getElementsByClassName("p1");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="3.93";
                                               $(".p1").attr('kef', elements2[i].textContent);
                                               $(".p1").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p2");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="1.45";
                                               $(".p2").attr('kef', elements2[i].textContent);
                                               $(".p2").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p3");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                           elements2[i].textContent ="29.00";
                                               $(".p3").attr('kef', elements2[i].textContent);
                                               $(".p3").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p4");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="14.00";
                                               $(".p4").attr('kef', elements2[i].textContent);
                                               $(".p4").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p5");
                                        for(var i = 0, length = 2; i < length; i++) {
                                            elements2[i].textContent ="40.00";
                                               $(".p5").attr('kef', elements2[i].textContent);
                                               $(".p5").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        }
                                    }
                                    else{
                                        var elements2 = document.getElementsByClassName("p1");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="9.23";
                                               $(".p1").attr('kef', elements2[i].textContent);
                                               $(".p1").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p2");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="65.00";
                                               $(".p2").attr('kef', elements2[i].textContent); 
                                               $(".p2").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p3");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                           elements2[i].textContent ="3.76";
                                               $(".p3").attr('kef', elements2[i].textContent);
                                               $(".p3").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p4");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="1.89";
                                               $(".p4").attr('kef', elements2[i].textContent);
                                               $(".p4").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p5");
                                        for(var i = 0, length = 2; i < length; i++) {
                                            elements2[i].textContent ="6.15";
                                               $(".p5").attr('kef', elements2[i].textContent); 
                                               $(".p5").attr('stage', 'flop');
                                               elements2[i].style.display = 'inline';

                                        } 
                                    }
                                }
                                if(nn[d].hand=='f4'){
                                    var $inputs = $('#p1,#p2,#p3,#p4,#p5');
                                        $inputs.attr('disabled',null );
                                    if(nn[d].partiya%2==1){
                                        var elements2 = document.getElementsByClassName("p1");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="8.25";
                                               $(".p1").attr('kef', elements2[i].textContent);
                                               $(".p1").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p2");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="1.23";
                                               $(".p2").attr('kef', elements2[i].textContent);
                                               $(".p2").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p3");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                           elements2[i].textContent ="Проиграл";
                                               $(".p3").attr('kef', elements2[i].textContent);
                                               $(".p3").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p4");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="Проиграл";
                                               $(".p4").attr('kef', elements2[i].textContent); 
                                               $(".p4").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p5");
                                        for(var i = 0, length = 2; i < length; i++) {
                                            elements2[i].textContent ="Проиграл";
                                               $(".p5").attr('kef', elements2[i].textContent);
                                               $(".p5").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        }
                                    }
                                    else{
                                        var elements2 = document.getElementsByClassName("p1");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="6.23";
                                               $(".p1").attr('kef', elements2[i].textContent);
                                               $(".p1").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p2");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="Проиграл";
                                               $(".p2").attr('kef', elements2[i].textContent);
                                               $(".p2").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p3");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                           elements2[i].textContent ="5.76";
                                               $(".p3").attr('kef', elements2[i].textContent); 
                                               $(".p3").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p4");
                                        for(var i = 0, length = elements2.length; i < length; i++) {
                                            elements2[i].textContent ="1.59";
                                               $(".p4").attr('kef', elements2[i].textContent); 
                                               $(".p4").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                        var elements2 = document.getElementsByClassName("p5");
                                        for(var i = 0, length = 2; i < length; i++) {
                                            elements2[i].textContent ="5.15";
                                               $(".p5").attr('kef', elements2[i].textContent);
                                               $(".p5").attr('stage', 'turn');
                                               elements2[i].style.display = 'inline';

                                        } 
                                    }
                                }
                                if(nn[d].hand==='f5'){
                                    var $inputs = $('#p1,#p2,#p3,#p4,#p5');
                                    var hist;
                                    $inputs.attr('disabled', this.value == '' ? null : true);
                                    clearInterval(stop);
                                    for(m=0;m<5;m++){
                                        if(findfullhouse7(Math.trunc(nn[(m)].ves/10),Math.trunc(nn[(m+5)].ves/10),Math.trunc(nn[10].ves/10),Math.trunc(nn[11].ves/10),Math.trunc(nn[12].ves/10),Math.trunc(nn[13].ves/10),Math.trunc(nn[14].ves/10))!=0){
                                            $('#msg1').text('Побидитель игрок '+(m+1)+'. Фуллхаус');
                                            hist="Fullhouse p"+(m+1);
                                            calc(nn[10].partiya, hist);
                                        }
                                        
                                        if(findflash7(Math.trunc(nn[(m)].ves),Math.trunc(nn[(m+5)].ves),Math.trunc(nn[10].ves),Math.trunc(nn[11].ves),Math.trunc(nn[12].ves),Math.trunc(nn[13].ves),Math.trunc(nn[14].ves))!=0){
                                            $('#msg1').text('Побидитель игрок '+(m+1)+'. Флэш');
                                            hist="Flash r1"+(m+1);
                                            calc(nn[10].partiya, hist);
                                        }
                                        if(findstreet7(Math.trunc(nn[(m)].ves),Math.trunc(nn[(m+5)].ves),Math.trunc(nn[10].ves),Math.trunc(nn[11].ves),Math.trunc(nn[12].ves),Math.trunc(nn[13].ves),Math.trunc(nn[14].ves))!=0){
                                            $('#msg1').text('Побидитель игрок '+(m+1)+'. Стрит');
                                            hist="Street r1"+(m+1);
                                            calc(nn[10].partiya, hist);
                                        }
                                        if(findset7(Math.trunc(nn[(m)].ves),Math.trunc(nn[(m+5)].ves),Math.trunc(nn[10].ves),Math.trunc(nn[11].ves),Math.trunc(nn[12].ves),Math.trunc(nn[13].ves),Math.trunc(nn[14].ves))!=0){
                                            $('#msg1').text('Побидитель игрок '+(m+1)+'. Сэт');
                                            hist="Set r1"+(m+1);
                                            calc(nn[10].partiya, hist);
                                        }
                                        if(findtwopair7(Math.trunc(nn[(m)].ves),Math.trunc(nn[(m+5)].ves),Math.trunc(nn[10].ves),Math.trunc(nn[11].ves),Math.trunc(nn[12].ves),Math.trunc(nn[13].ves),Math.trunc(nn[14].ves))!=0){
                                            $('#msg1').text('Побидитель игрок '+(m+1)+'. Две пары');
                                            hist="Two pair r1"+(m+1);
                                            calc(nn[10].partiya, hist);
                                        }
                                        if(findpair7(Math.trunc(nn[(m)].ves),Math.trunc(nn[(m+5)].ves),Math.trunc(nn[10].ves),Math.trunc(nn[11].ves),Math.trunc(nn[12].ves),Math.trunc(nn[13].ves),Math.trunc(nn[14].ves))!=0){
                                            $('#msg1').text('Побидитель игрок '+(m+1)+'. Пара');
                                            hist="Pair r1"+(m+1);
                                            calc(nn[10].partiya, hist);
                                        }
                                        var arr= findfullhouse7(Math.trunc(nn[(m)].ves/10),Math.trunc(nn[(m+5)].ves/10),Math.trunc(nn[10].ves/10),Math.trunc(nn[11].ves/10),Math.trunc(nn[12].ves/10),Math.trunc(nn[13].ves/10),Math.trunc(nn[14].ves/10));
                                        //var arr= findfullhouse7(Math.trunc(nn[(m)].ves),Math.trunc(nn[(m+5)].ves),Math.trunc(nn[10].ves),Math.trunc(nn[11].ves),Math.trunc(nn[12].ves),Math.trunc(nn[13].ves),Math.trunc(nn[14].ves));
                                        //var arr = findstreet6(nn[(m)].ves, nn[(m+5)].ves, nn[10].ves, nn[11].ves, nn[12].ves, nn[13].ves);
                                        //pair=findstreetflesh(arr[0],arr[1],arr[2],arr[3],arr[4]);
                                        
                                        console.log("log"+arr[0]+"; игрок "+(m+1));
                                        //console.log(pair);
                                    }
                                                                        calc(nn[10].partiya);

                                    var a = 0;
                                    if(nn[d].partiya%2==1 && a==0){
                                        var uvedom = $("#msg1");
                                        uvedom.show("2000");
                                        uvedom.delay("3000");
                                        uvedom.hide("1000");
                                        a=1;
                                    }
                                     if(nn[d].partiya%2==0 && a==0){
                                        var uvedom = $("#msg2");
                                        uvedom.show("2000");
                                        uvedom.delay("3000");
                                        uvedom.hide("1000"); 
                                        a=1;
                                    }
                                }
                                d++;
                                
                            }   
                        }
                    });
                }
                
            </script>
        </div>
    </div>
</div>
<script>
    
</script>
