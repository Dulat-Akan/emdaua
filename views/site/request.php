<?php

use yii\helpers\Url;
 ?>









	


<!-- <div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2 col-md-offset-3">
					
					

					<input class="btn btn-danger" id="par" type="button" value="парсинг">


			</div>


			<div class="col-md-2">
				
					<input class="btn btn-info" id="search" type="button" value="Поиск">

			</div>
		</div>
	</div>
</div> -->






<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/parser">







<div style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>

<div  style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-success" style="display:none;" id="uvedom"></div>

			</div>
		</div>
	</div>
</div>





<div>
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






<div>
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/myfile.php');
				

			?>


	</div>
</div>






<div>
	<div class="row" id="pok_searh3">

		


	</div>
</div>









<script>

function MySearch(){

			var p1 = $("#pok_searh2");

			var p2 = $("#pok_searh3");

			var pokaz_result = $("#pok_res1");	/*poiskovaya chast*/

			var f1 = pokaz_result.find(".rs");	/*block schitivaniya 1*/
			

			

			var ar1 = new Array();
			var ar2 = new Array();
			var ar3 = new Array();
			var ar4 = new Array();
			var ar5 = new Array();

			var date = $('[width="35%"]');

			var empty = $('[style="WIDTH: 96%;"]');

			



			var dates = $('[width="35%"]').children("div").children("b");

			

			dates.each(function(index,element){

				var str = $(element);

				var string = str.html();
				
				ar5.push(string);
				
			});

			

			var title = $('[Align="center"][valign="middle"]');

			
			var oi = title.parent().next().children("td").children("table").children().find(".rs :first").children("b");

			oi.each(function(index, element){


				var ii = $(element);

				var ii3 = ii.html();

				ar4.push(ii3);


			});
			
			

			title.each(function(index,element){

				var str3 = $(element);

				var string3 = str3.html();
	
				ar3.push(string3);
				
			});


			date.each(function(index,element){

				var str = $(element);

				var string = str.html();
				
				ar1.push(string);
				
			});

			/*search date*/
			/*search command name*/

			/*search koeffisient*/
			var f2 = pokaz_result.find(".hi");	/*block schitivaniya 2*/

			var koef = $('[width="65%"]').children("b");

			koef.each(function(index2, element2){

				var str2 = $(element2);

				var string2 = str2.html();
		
				ar2.push(string2);

			});



			

			var i;
			var j=0;
			
					
			for(i = 0;i < ar1.length;i++){


					if(ar4[j] == ar5[i]){

						var string5 =  '<div style="margin-top:10px;" class="col-md-8 col-md-offset-3 h1"> <div style="margin-left:30px;">' + ar3[j] + '</div> </div> <div class="col-md-10 col-md-offset-2 x1"> <div class="col-md-4"> <p>' + ar1[i] + '</p> </div> <div style="margin-top:15px;" class="col-md-5 col-md-offset-2"> <p><b>' + ar2[i] + '</b></p> </div> </div>';

							p1.append(string5);
							
							j++;


					}else{


						var string6 =  '<div class="col-md-10 col-md-offset-2 x1"> <div class="col-md-4"> <p>' + ar1[i] + '</p> </div> <div style="margin-top:15px;" class="col-md-5 col-md-offset-2"> <p><b>' + ar2[i] + '</b></p> </div> </div>';
							
							p1.append(string6);
							
					}

					
					

	
			}


			var mystr = empty.text();

			var oo = mystr.indexOf("Отсутствуют");

			if(oo == 1){
				var string = "<h4 style='text-align:center; color:red;'>В данное время результатов нет..</h4>";
				p1.html(string);

			}


	};



	window.onload = function(){

		MySearch();
	}



	

	$("#par").click(function(){

			
			var url = $("#base").val();

			
			
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

			var p1 = $("#pok_searh2");

			var p2 = $("#pok_searh3");

			var pokaz_result = $("#pok_res1");	/*poiskovaya chast*/

			var f1 = pokaz_result.find(".rs");	/*block schitivaniya 1*/
			

			

			var ar1 = new Array();
			var ar2 = new Array();
			var ar3 = new Array();
			var ar4 = new Array();
			var ar5 = new Array();

			var date = $('[width="35%"]');

			var empty = $('[style="WIDTH: 96%;"]');

			



			var dates = $('[width="35%"]').children("div").children("b");

			

			dates.each(function(index,element){

				var str = $(element);

				var string = str.html();
				
				ar5.push(string);
				
			});

			

			var title = $('[Align="center"][valign="middle"]');

			
			var oi = title.parent().next().children("td").children("table").children().find(".rs :first").children("b");

			oi.each(function(index, element){


				var ii = $(element);

				var ii3 = ii.html();

				ar4.push(ii3);


			});
			
			

			title.each(function(index,element){

				var str3 = $(element);

				var string3 = str3.html();
	
				ar3.push(string3);
				
			});


			date.each(function(index,element){

				var str = $(element);

				var string = str.html();
				
				ar1.push(string);
				
			});

			/*search date*/
			/*search command name*/

			/*search koeffisient*/
			var f2 = pokaz_result.find(".hi");	/*block schitivaniya 2*/

			var koef = $('[width="65%"]').children("b");

			koef.each(function(index2, element2){

				var str2 = $(element2);

				var string2 = str2.html();
		
				ar2.push(string2);

			});



			

			var i;
			var j=0;
			
					
			for(i = 0;i < ar1.length;i++){


					if(ar4[j] == ar5[i]){

						var string5 =  '<div style="margin-top:10px;color:red;" class="col-md-12 col-md-offset-3"> <h4 style="margin-left:30px;">' + ar3[j] + '</h4> </div> <div class="col-md-12 col-md-offset-2 x1"> <div class="col-md-5"> <p>' + ar1[i] + '</p> </div> <div style="margin-top:15px;" class="col-md-5"> <p><b>' + ar2[i] + '</b></p> </div> </div>';

							p1.append(string5);
							
							j++;


					}else{


						var string6 =  '<div class="col-md-12 col-md-offset-2"> <div class="col-md-5"> <p>' + ar1[i] + '</p> </div> <div style="margin-top:15px;" class="col-md-5"> <p><b>' + ar2[i] + '</b></p> </div> </div>';
							
							p1.append(string6);
							
					}

					
					

	
			}


			var mystr = empty.text();

			var oo = mystr.indexOf("Отсутствуют");

			if(oo == 1){
				var string = "<h4 style='text-align:center; color:red;'>В данное время результатов нет..</h4>";
				p1.html(string);

			}


	});




	






	




</script>




