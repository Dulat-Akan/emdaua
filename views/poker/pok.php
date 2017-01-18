<?php use yii\helpers\Url; ?>

<input type="hidden" id="url" value="<?php echo Url::to('@basepath') ?>/poker/findcart">
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
    <img id="r" onClick="zooml()" src="<?php echo Url::to('@img/btn_top.png'); ?>" width="40px" height="40px" style="display:none;right:50%;bottom:490px;position:absolute;z-index:5;">
    <img id="l" onClick="zoom()" src="<?php echo Url::to('@img/btn_dwn.png'); ?>" >
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/uNN6Pj06Cj8" frameborder="0" allowfullscreen></iframe>
    <!--<img style="user-select: none; cursor: zoom-in;top:2000px;" src="http://192.168.1.150:8092/webcam3.mjpeg" width="100%" height="100%">
    -->
</div>
<div id="msg"  class="alert alert-info" style="display: none;position: absolute;top:45%;left:45%;z-index: 10;">
          <p>Ваша ставка принята!</p>
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
                        <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 1 </p>
                        <p class='karta'>
                            <img id="r11" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                            <img id="r12" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                        </p>
                        <p class="p1" style ="display: none; color:#fdd700"></p><img class="chip" style="display:none" src="<?php echo Url::to('@img') ?>/chip.gif"> <!-- /.product-buy -->
                    </div><!-- /.product -->
                <!--------------- переворачивание обратная сторона--------------------->
                    <div class="product22 back">
                        <h6 style="color:#fdd700" > Выиграет игрок 1</h6>
                        <p style ="display: inline; color:#fdd700">коеф-т: 4.1&nbsp<p: class="p1" style ="display: inline"></p></p>  
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
                        <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 2 </p>
                        <p class='karta'>
                            <img id="r21" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                            <img id="r22" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                        </p>
                        <p class="p2" style ="display: none; color:#fdd700"></p><img class="chip" style="display:none" src="<?php echo Url::to('@img') ?>/chip.gif"><!-- /.product-buy -->
                    </div><!-- /.product -->
            <!--------------- переворачивание обратная сторона--------------------->
                    <div class="product22 back">
                        <h6 style="color:#fdd700"> Выиграет игрок 2</h6>
                        <p style ="display: inline; color:#fdd700">коеф-т: 4.1&nbsp<p: class="p2" style ="display: inline"></p></p>  
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
                        <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 3 </p>
                        <p class='karta'>
                            <img id="r31" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                            <img id="r32" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                        </p>
                        <p class="p3" style ="display: none; color:#fdd700"></p><img class="chip" style="display:none" src="<?php echo Url::to('@img') ?>/chip.gif"> <!-- /.product-buy -->
                    </div><!-- /.product -->
            <!--------------- переворачивание обратная сторона--------------------->
                    <div class="product22 back">
                        <h6 style="color:#fdd700"> Выиграет игрок 3</h6>
                        <p style ="display: inline; color:#fdd700">коеф-т: 4.1&nbsp<p: class="p3" style ="display: inline"></p></p>  
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
                        <p style="color:#fdd700" class="ruka-title"> Выиграет игрок 4 </p>
                        <p class='karta'>
                            <img id="r41" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                            <img id="r42" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                        </p>
                        <p class="p4" style ="display: none; color:#fdd700"></p><img class="chip" style="display:none" src="<?php echo Url::to('@img') ?>/chip.gif"> <!-- /.product-buy -->
                    </div><!-- /.product -->
            <!--------------- переворачивание обратная сторона--------------------->
                    <div class="product22 back">
                        <h6 style="color:#fdd700"> Выиграет игрок 4</h6>
                        <p style ="display: inline; color:#fdd700">коеф-т: 4.1&nbsp<p: class="p4" style ="display: inline"></p></p>  
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
                        <p  style="color:#fdd700" class="ruka-title"> Выиграет игрок 5 </p>
                        <p class='karta'>
                            <img id="r51" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                            <img id="r52" width="50px" src="<?php echo Url::to('@img') ?>/01.png"/>
                        </p>
                        <p class="p5" style ="display: none; color:#fdd700"></p><img class="chip" style="display:none" src="<?php echo Url::to('@img') ?>/chip.gif"> <!-- /.product-buy -->
                    </div><!-- /.product -->
            <!--------------- переворачивание обратная сторона--------------------->
                    <div class="product22 back">
                        <h6 style="color:#fdd700"> Выиграет игрок 5</h6>
                        <p style ="display: inline; color:#fdd700">коеф-т: 4.1&nbsp<p: class="p5" style ="display: inline"></p></p>  
                         <div  class="col-xs-12">
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
                    function bet(Element){
                              var event = Element.alt;
                              var pr = "#"+event;
                              var url = $("#beturl").val();
                              var user = "<?= \Yii::$app->user->identity->id; ?>";
                              var status = 0;
                              var price =  $(pr).val();
                              var data = {
                                        "price":price,
                                        "event":event,
                                        "user":user,
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
                 
    
                function hid(){
                    $(".chip").display = none ;
                }
                p1=0;p2=0;p3=0;p4=0;p5=0;p11=0;p12=0;p13=0;p14=0;p15=0;     
                ch1=0;ch2=0;ch3=0;ch4=0;ch5=0; 
                
                for(d=0;d<15;d++){
                    
                    if(nn[d].hand!==''){
                        document.getElementById(nn[d].hand).src="<?php echo Url::to('@img') ?>/"+nn[d].ves+".png";
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
                        chance();
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
                
                function chance(){
                
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
                
            }
            
        },
        error: function(){
        }
        });
           $("#barcodeEntry").val('');
            
      }
    }
</script>
    </div>
</div>
</div>
