<?php

use yii\helpers\Url;
 ?>
<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/parserlive">
<<<<<<< HEAD
<input id="rec" type="hidden" value="<?php echo Url::to('@base'); ?>/site/recordbd">

=======
>>>>>>> 63bc5ab860047cf530c289ff5ef7cc6136c2a4dd
<div class="" style="margin-top: 15px;">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-warning" style="display:none;" id="nachalo"></div>
            </div>
        </div>
    </div>
</div>

<div class="" style="margin-top: 15px;">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-8 col-md-offset-2">
                <div class="alert alert-success" style="display:none;" id="uvedom"></div>
            </div>
	</div>
    </div>
</div>

<div class="">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-12"  id="new">
                <!-- iframe с другого домена -->
            </div>
	</div>
    </div>
</div>

<div class="">
<<<<<<< HEAD
    <div class="row" style="display:none;" id="pok_res1">
        <?php 
            echo Yii::$app->view->renderFile('@files/myfile_live.php');
	?>
    </div>
=======
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/myfile_live.php');
				

			?>
</div>
>>>>>>> 63bc5ab860047cf530c289ff5ef7cc6136c2a4dd
</div>

<div class="" style="margin-top:30px;">
	<div class="row" id="pok_searh3"></div>
</div>

<<<<<<< HEAD
<script>

    function MySearch(){
	var ar1 = new Array();	/*"title"*/
	var ar2 = new Array();	/*status title*/
	var ar3 = new Array();	/*koeffis*/
	var ar4 = new Array();	/*status*/
	var ar5 = new Array();	/*name*/
	var ar6 = new Array();	/*date*/
	var ar7 = new Array();	/*obeed string*/
	var ar8 = new Array();	/*titlenext*/
	var ar9 = new Array();	/*obr ar8*/
        var ar_name1 = new Array();
        var ar_name2 = new Array();
                        
	var p1 = $("#pok_searh2");
	var p2 = $("#pok_searh3");
	var title = $('[class="TH"][colspan="4"][align="Left"]');
	var statustitle = $('[class="TH"][colspan="4"][align="Left"]').next();
	var koeffis = $('[nowrap]').next().next().next();
	var status = $('[nowrap]').next().next().next().next();
	var names = $('[class="Names"]');
	var date = $('[nowrap]');
	var titlenext = $('[class="TH"][colspan="4"][align="Left"]').parent().parent().next().children().children("td").next(".Names");
			
	titlenext.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar8.push(string);	
	});

    	for(var q = 0;q < ar8.length;q++){
            var z;
            var k;
            if(q % 2 == 0){
		z = ar8[q];
            }else if(q == 0){
		z = ar8[q];
            }
            if((q > 0) && (q % 2 == 1)){
                k = ar8[q];
		var l = z + " | " + k;
		ar9.push(l);
            }
	}

	title.each(function(index,element){
            var str = $(element);
            var string = str.text();
            ar1.push(string);	
	});

	statustitle.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar2.push(string);
	});

	koeffis.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar3.push(string);	
	});

	status.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar4.push(string);	
	});
                        
	names.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar5.push(string);	
	});
                        
	date.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar6.push(string);	
	});
	
        for(var p = 0;p < ar5.length;p++){
            var z;
            var k;
            if(p % 2 == 0){
                z = ar5[p];
            }
            else if(p == 0){
                z = ar5[p];
            }

            if((p > 0) && (p % 2 == 1)){
                k = ar5[p];
		var l = z + " | " + k;
		ar7.push(l);
                ar_name1.push(z);
                ar_name2.push(k);
            }
	}
        
	var i;
	var j=0;
	for(i = 0;i < ar7.length;i++){
            if(ar9[j] == ar7[i]){
                var string5 =  '<div style="margin-top:10px;color:red;" class="col-md-10 col-md-offset-2 h2"> <div style="margin-left:30px;">' + ar1[j] + '*1</div> </div> <div class="col-md-12   text1"> <div class="col-md-2"> <p><b>' + ar6[i] + '*6</b></p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '*7</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '*3</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '*4</b></p> </div> </div>';
		p1.append(string5);
		j++;
            }else{
                var string6 =  '<div class="col-md-12 text1"> <div class="col-md-2"> <p><b>' + ar6[i] + '</b></p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '*7</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '</b></p> </div> </div>';
		p1.append(string6);
            }
	}
        
         $(document).ready(function() {
            var url = $("#rec").val();
            var data1 = {
                "zogolovok":ar1,
                "datetime":ar6,
                "comand1":ar_name1,
                "comand2":ar_name2,
                "schet":ar3,
                "time":ar4
            }

        // if(input != ""){
            $.ajax({
                "type":"POST",
                "url":url,
                "data":data1,
                "datatype":"text",
                "success":kx15,
                "error":errorfunc
            });
            function kx15(result){
                alert(result);
            };
            function errorfunc(){
                alert("Неправильные данные");
            }
        });
    };
        

    window.onload = function(){
        MySearch();
       
    };
    
    $("#par").click(function(){
        var url = $("#base").val();
        var text = $("#new").html();
        var nachalo = $("#nachalo");
        nachalo.text("Внимание началось сканирование...");
        nachalo.show(2000);
        var status = 0;
        $.ajax({
            "type":"POST",
            "url":url,
            "datatype":"json html script",
            "success":kx,
            "error":errorfunc
        });

        function kx(result){
            nachalo.hide();
            var uv = $("#uvedom");
            uv.text("Скрипт обновлен показ результатов..");
            uv.show(2000);
            uv.delay(3000);
            uv.hide(1000);
            status = 1;
            $("#pok_res1").html(result);
        }

        function errorfunc(){
            alert("oshibka zaprosa");
        }

        setInterval(function(){
            if(status == 1){
                MySearch();
		status = 0;
            }
        },100)
    });
    $("#search").click(function(){
        var ar1 = new Array();	/*"title"*/
	var ar2 = new Array();	/*status title*/
	var ar3 = new Array();	/*koeffis*/
	var ar4 = new Array();	/*status*/
	var ar5 = new Array();	/*name*/
	var ar6 = new Array();	/*date*/
	var ar7 = new Array();	/*obeed string*/
	var ar8 = new Array();	/*titlenext*/
	var ar9 = new Array();	/*obr ar8*/
        
        var p1 = $("#pok_searh2");
        var p2 = $("#pok_searh3");
        var title = $('[class="TH"][colspan="4"][align="Left"]');
        
        var statustitle = $('[class="TH"][colspan="4"][align="Left"]').next();
        
        var koeffis = $('[nowrap]').next().next().next();
        var status = $('[nowrap]').next().next().next().next();
        var names = $('[class="Names"]');

	var date = $('[nowrap]');
        var titlenext = $('[class="TH"][colspan="4"][align="Left"]').parent().parent().next().children().children("td").next(".Names");
        
        titlenext.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar8.push(string);
        });


	for(var q = 0;q < ar8.length;q++){
            var z;
            var k;
            if(q % 2 == 0){
                z = ar8[q];
            }else if(q == 0){
                z = ar8[q];
            }

            if((q > 0) && (q % 2 == 1)){
                k = ar8[q];
		var l = z + " | " + k;
		ar9.push(l);
            }
        }
        
        title.each(function(index,element){
            var str = $(element);
            var string = str.text();
            ar1.push(string);
	});

	statustitle.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar2.push(string);
	});

	koeffis.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar3.push(string);
	});

	status.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar4.push(string);
	});

	names.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar5.push(string);
	});

	date.each(function(index,element){
            var str = $(element);
            var string = str.html();
            ar6.push(string);
	});
        
        for(var p = 0;p < ar5.length;p++){
            var z;
            var k;
            if(p % 2 == 0){
                z = ar5[p];
            }else if(p == 0){
                z = ar5[p];
            }
            if((p > 0) && (p % 2 == 1)){
                k = ar5[p];
                var l = z + " | " + k;
                ar7.push(l);
                ar_name1.push(z);
                ar_name2.push(k);
            }
        }
        
        var i;
	var j=0;
	for(i = 0;i < ar7.length;i++){
            if(ar9[j] == ar7[i]){
                var string5 =  '<div style="margin-top:10px;color:red;" class="col-md-12 col-md-offset-3"> <h4 style="margin-left:30px;">' + ar1[j] + '*1</h4> </div> <div class="col-md-12  col-md-offset-1"> <div class="col-md-2"> <p>' + ar6[i] + '*6</p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '*7</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '*3</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '*4</b></p> </div> </div>';
                p1.append(string5);
		j++;
            }else{
		var string6 =  '<div class="col-md-12  col-md-offset-1"> <div class="col-md-2"> <p>' + ar6[i] + '*6</p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '*7</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '*3</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '4444</b></p> </div> </div>';
		p1.append(string6);
            }
	}
    });
    
    setInterval(function(){
        var zopim = $(".zopim");
	zopim.css("display","none");
	if(zopim.css("display") == "none"){
            exit;
	}
    },500);
    
</script>
=======







<script src="<?php echo Url::to('@jquery') ?>/r_l.js"></script>
>>>>>>> bf8600088b9c99071fdac349cd11aa19eef1816b







