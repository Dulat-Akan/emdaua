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


	

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- <div class="col-md-6 col-md-offset-4"><h1>Футбол</h1></div> -->
			</div>
		</div>
	</div>


<div class="container">
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
</div>






<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/amer">

<input id="basetwo" type="hidden" value="<?php echo Url::to('@base'); ?>/site/amerlive">

<input id="baseaction" type="hidden" value="<?php echo Url::to('@base'); ?>/site/amerptwo">







<div class="container" style="margin-top: 15px;">
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
</div>





<div class="container">
			<div class="row">


				<!-- <div class="col-md-12 col-md-offset-4">
					
					<h3>Результаты игр</h3>
				
				
				</div>
				
				
				<div class="col-md-12 col-md-offset-2">
					
					<div class="col-md-5">
						
						<p>kommand1</p>
				
					</div>
				
					<div class="col-md-5">
						
						<p>222222222222222222</p>
				
					</div>
						
				
				</div> -->

				





			</div>
		</div>


<div class="container" style="position:fixed;margin-top:100px;display:none;" id="download">
	<div class="row">
		<div class="col-md-12">

			<div class="col-md-1 col-md-offset-6"><img src="<?php echo Url::to('@img') ?>/3.gif" alt=""></div>

		</div>
	</div>
</div>






<div class="container">
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				require_once("../views/site/amer.php");
				

			?>


	</div>
</div>




<div class="container" style="margin-top:30px;">
	<div class="row" id="pok_searh2">

		


	</div>
</div>



		


<!-- <div class="container" style="margin-top:30px;">
	<div class="row" id="pok_searh3">

		<p class="load" v="index.php?page=line&action=2&live[]=25421694">load</p>



	</div>
</div> -->




<script>


			
			$(".load").click(function(){

				$("#download").show();
				
				var v = $(this).attr("v");
					
					

				var urltwo = $("#basetwo").val();

				var baseaction = $("#baseaction").val();

				
				var o = {
						"hid":v,
						};

				 $.ajax({
                    "type":"POST",
                    "url":urltwo,
                  	
                    "datatype":"json html script",
                    "data":o,
                  
                    "success":kx,
                    "error":errorfunc
                    
                  });

                function kx(result){

					if(result == "ok"){

						$("#download").hide();
						window.location.href = baseaction;


					}
	
                              }

                   function errorfunc(){
                      alert("oshibka zaprosa");
                   }


				
				

			});


		</script>







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

			

			var name = $('[width="99%"]').children("a");	/*"td > a"*/

			

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


	};



	

	window.onload = function(){

			
			var url = $("#base").val();

			
			$("#download").show();
			/*var nachalo = $("#nachalo");

			nachalo.text("Внимание началось сканирование...");

			nachalo.show(2000);*/

			var status = 0;


			 $.ajax({
                    "type":"POST",
                    "url":url,
                  
                    "datatype":"json html script",
                    
                  
                    "success":kx,
                    "error":errorfunc
                    
                  });

                function kx(result){

               /*MySearch();*/
               	status = 1;

                

                 $("#download").hide();

   
					
                              }

                   function errorfunc(){
                      alert("oshibka zaprosa");
                   }


                   setInterval(function(){

                   		if(status == 1){

                   			/*p1.remove();*/
		                   	MySearch();
		                   	var p1 = $("#pok_searh2");

		                   	status = 0;
		                   }




                   },100);

                   
                   

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

			

			var name = $('[width="99%"]').children("a");	/*"td > a"*/

			

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

			p1.append(script)

			

	});



</script>


</body>
</html>