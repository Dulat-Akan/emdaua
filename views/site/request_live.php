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






<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/parserlive">







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


		<script>
			
			

		</script>

		



<div class="">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-12" style="display:;" id="new">
				
				

  			  <!-- iframe с другого домена -->

   				 
				

				

				



			</div>
		</div>
	</div>
</div>



<div class="">
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

				
				echo Yii::$app->view->renderFile('@files/myfile_live.php');
				

			?>





			


	</div>
</div>




<!-- <div class="container" style="margin-top:30px;">
	<div class="row" id="pok_searh2">

		


	</div>
</div> -->


<div class="" style="margin-top:30px;">
	<div class="row" id="pok_searh3">

		

		


	</div>
</div>








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
				}


			}

			

			var i;
			var j=0;
			
					
			for(i = 0;i < ar7.length;i++){


					if(ar9[j] == ar7[i]){

						var string5 =  '<div style="margin-top:10px;color:red;" class="col-md-10 col-md-offset-2 h2"> <div style="margin-left:30px;">' + ar1[j] + '</div> </div> <div class="col-md-12   text1"> <div class="col-md-2"> <p><b>' + ar6[i] + '</b></p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '</b></p> </div> </div>';

							p1.append(string5);
							
							j++;


					}else{


						var string6 =  '<div class="col-md-12   text1"> <div class="col-md-2"> <p><b>' + ar6[i] + '</b></p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '</b></p> </div> </div>';
							
							p1.append(string6);
							
					}
					

	
			}

			

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
				}


			}

			

			var i;
			var j=0;
			
					
			for(i = 0;i < ar7.length;i++){


					if(ar9[j] == ar7[i]){

						var string5 =  '<div style="margin-top:10px;color:red;" class="col-md-12 col-md-offset-3"> <h4 style="margin-left:30px;">' + ar1[j] + '</h4> </div> <div class="col-md-12  col-md-offset-1"> <div class="col-md-2"> <p>' + ar6[i] + '</p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '</b></p> </div> </div>';

							p1.append(string5);
							
							j++;


					}else{


						var string6 =  '<div class="col-md-12  col-md-offset-1"> <div class="col-md-2"> <p>' + ar6[i] + '</p> </div> <div style="" class="col-md-5"> <p><b>' + ar7[i] + '</b></p> </div> <div style="" class="col-md-3"> <p><b>' + ar3[i] + '</b></p> </div> <div style="" class="col-md-2"> <p><b>' + ar4[i] + '</b></p> </div> </div>';
							
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







