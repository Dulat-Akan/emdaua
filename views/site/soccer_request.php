<?php

use yii\helpers\Url;
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-4">
					
					

					<input class="btn btn-danger" id="par" type="button" value="парсинг">


			</div>


			<div class="col-md-2">
				
					<input class="btn btn-info" id="search" type="button" value="Поиск">

			</div>
		</div>
	</div>
</div> -->











<!-- <div class="container" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>

<div class="container" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-success" style="display:none;" id="uvedom"></div>

			</div>
		</div>
	</div>
</div> -->






<div class="container">
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/soccer.php');
				

			?>


	</div>
</div>



<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/soccer">

<input id="basetwo" type="hidden" value="<?php echo Url::to('@base'); ?>/site/soccerlive">

<input id="baseaction" type="hidden" value="<?php echo Url::to('@base'); ?>/site/soccerliveptwo">




<script>

function MySearch(){

		var arsearch = new Array();		/*"search name"*/
			var arsearchkoef = new Array();		/*"search koef"*/
			var arhref = new Array();		/*"ssilki na igri"*/
			var ar1 = new Array();		/*"title"*/
			var ar2 = new Array();		/*"name"*/
			var ar3 = new Array();		/*"main array"*/
			var ar5 = new Array();		/*"command_name"*/
			var ar6 = new Array();		/*"kommand2"*/


			
			var p1 = $("#pok_searh2");

		

			var kommand2 = $('.m_c').children("td").next();
			
var kommand2_name = $('.m_c').next().children("td").next().children("a");


			kommand2_name.each(function(index,element){

				var str = $(element);

				var string = str.text();

				ar5.push(string);


			});

			kommand2.each(function(index,element){

				var str = $(element);

				var string = str.text();

				ar6.push(string);


			});

			

			var line_date = $(".central_td").children("center").children("h1");

			line_date.each(function(index,element){

				var str = $(element);
				var string = str.text();

				var string2 = string.replace("Линия","Ставки");

				line_date = string2;


			});

			

			

			var name = $('[align="left"][valign="middle"]').children("a");	/*"td > a"*/

			/*alert(name.text());*/

			name.each(function(index,element){

				var str = $(element);

				var string = str.text();
				var href = str.attr("href");

				ar2.push(string);
				arhref.push(href);

			});


			var p = 0;
			var v = 0;
			

			var i;
			var j=0;
			var z = 0;


var r;
		
			for(i = 0;i < ar2.length;i++){


					if(ar5[j] == ar2[i]){
	var string5 =  '<div class="soccerpage text2"><div class="col-sm-4 line-date">' + line_date + '</div><div class="col-sm-4 title-red">' + ar6[j] + '</div><div class="button-click col-sm-4"><button type="button" class="btn btn-primary click">свернуть</button></div><br><br><div class="col-sm-12 ul-li"> <div class="col-sm-8 col-sm-offset-2"><p class="load load3 col-sm-10 col-sm-offset-2" v="' + arhref[i] + '">' + ar2[i] + '</p> </div>  </div></div>';

							p1.append(string5);
							
							j++;

							z++;


					}else{
var string6 =  '<div class="col-sm-12 ul-li"> <div class="col-sm-8 col-sm-offset-2"><p class="load load3 col-sm-10 col-sm-offset-2" v="' + arhref[i] + '">' + ar2[i] + '</p> </div>  </div>';
							
							p1.append($('.text2').append(string6));

							z++;
	
							
					}


			}


			var script = '<script> $(".load").click(function(){$("#download").show(); var v = $(this).attr("v"); var urltwo = $("#basetwo").val(); var baseaction = $("#baseaction").val(); var o = {"hid":v, }; $.ajax({"type":"POST", "url":urltwo, "datatype":"json html script", "data":o, "success":kx, "error":errorfunc }); function kx(result){if(result == "ok"){$("#download").hide(); window.location.href = baseaction; } } function errorfunc(){alert("oshibka zaprosa"); } });' + '</' + 'script>';

			p1.append(script);	


	};



	

	window.onload = function(){

	
                   MySearch();
                   

	};


	$("#search").click(function(){
			
		var arsearch = new Array();		/*"search name"*/
			var arsearchkoef = new Array();		/*"search koef"*/
			var arhref = new Array();		/*"ssilki na igri"*/
			var ar1 = new Array();		/*"title"*/
			var ar2 = new Array();		/*"name"*/
			var ar3 = new Array();		/*"main array"*/
			var ar5 = new Array();		/*"command_name"*/
			var ar6 = new Array();		/*"kommand2"*/


			
			var p1 = $("#pok_searh2").css({'display':'block'});

		

			var kommand2 = $('.m_c').children("td").next();


			

			var kommand2_name = $('.m_c').next().children("td").next().children("a");


			kommand2_name.each(function(index,element){

				var str = $(element);

				var string = str.text();

				ar5.push(string);


			});

			kommand2.each(function(index,element){

				var str = $(element);

				var string = str.text();

				ar6.push(string);


			});

			

			var line_date = $(".central_td").children("center").children("h1");

			line_date.each(function(index,element){

				var str = $(element);
				var string = str.text();

				var string2 = string.replace("Линия","Ставки");

				line_date = string2;


			});

			

			

			var name = $('[align="left"][valign="middle"]').children("a");	/*"td > a"*/

			/*alert(name.text());*/

			name.each(function(index,element){

				var str = $(element);

				var string = str.text();
				var href = str.attr("href");

				ar2.push(string);
				arhref.push(href);

			});


			var p = 0;
			var v = 0;
			

			var i;
			var j=0;
			var z = 0;



		
			for(i = 0;i < ar2.length;i++){


					if(ar5[j] == ar2[i]){

						var string5 =  '<div class="col-md-12 col-md-offset-4"> <h3 style="margin-left:50px;">' + line_date + '</h3> </div> <div style="margin-top:10px;color:red;" class="col-md-12 col-md-offset-5"> <h4 style="margin-left:0px;">' + ar6[j] + '</h4> </div> <div class="col-md-12 col-md-offset-2"> <div class="col-md-5"> <p class="load" v="' + arhref[i] + '">' + ar2[i] + '</p> </div>  </div>';

							p1.append(string5);
							
							j++;

							z++;


					}else{


							var string6 =  '<div class="col-md-12 col-md-offset-2"> <div class="col-md-5"><p class="load" v="' + arhref[i] + '">' + ar2[i] + '</p> </div>  </div>';
							
							p1.append(string6);

							z++;
	
							
					}


			}


			var script = '<script> $(".load").click(function(){$("#download").show(); var v = $(this).attr("v"); var urltwo = $("#basetwo").val(); var baseaction = $("#baseaction").val(); var o = {"hid":v, }; $.ajax({"type":"POST", "url":urltwo, "datatype":"json html script", "data":o, "success":kx, "error":errorfunc }); function kx(result){if(result == "ok"){$("#download").hide(); window.location.href = baseaction; } } function errorfunc(){alert("oshibka zaprosa"); } });' + '</' + 'script>';

			p1.append(script);	

	});



</script>


</body>
</html>