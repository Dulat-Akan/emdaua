<?php

use yii\helpers\Url;
 ?>
<!-- <div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-6 col-md-offset-4"><h1>Ставки Live</h1></div>
			</div>
		</div>
	</div> -->
	<!--
	<div class='header-middle'>

  <button style="" id="update" class="btn btn-primary btn-sm" type="button">обновить страницу</button>
  </div>
  --->
<hr/>


<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liverequest">

<input id="basetwo" type="hidden" value="<?php echo Url::to('@base'); ?>/site/live">

<input id="baseaction" type="hidden" value="<?php echo Url::to('@base'); ?>/site/livep">

<input id="baseupdate" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liveupdate">







<div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>

<div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-success" style="display:none;" id="uvedom"></div>

			</div>
		</div>
	</div>
</div>





<div class="" style="position:fixed;margin-top:100px;display:none;" id="download">
	<div class="row">
		<div class="col-md-12">

			<div class="col-md-1 col-md-offset-6"><img src="<?php echo Url::to('@img') ?>/3.gif" alt=""></div>

		</div>
	</div>
</div>






<div>
	<div class="row" style="display:none;" id="pok_res1">

		<div class="col-md-12">
				<?php 	
				echo Yii::$app->view->renderFile('@files/liverequest.php');
			?>

		</div>
		

			


	</div>
</div>

<script>



			function updategame(){


						var update = $("#baseupdate").val();

						
						/*var o = {
								"hid":v,
								};*/

						 $.ajax({
		                    "type":"POST",
		                    "url":update,
		                  	
		                    "datatype":"json html script",
		                    /*"data":o,*/
		                  
		                    "success":kx,
		                    "error":errorfunc
		                    
		                  });

		                function kx(result){

		                	/*alert(result);*/

							if(result == "ok"){

								/*window.location.reload();*/

							}else if(result == "false"){
								
							}
			
		                              }

		                   function errorfunc(){
		                      /*alert("oshibka zaprosa");*/
		                   }


			}


			/*setInterval(function(){
				updategame();
			},5000);

			$("#update").click(function(){
				window.location.reload();
			});*/
				
			











			
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
			var ar3 = new Array();		/*"koeffisient"*/
			var ar4 = new Array();		/*"title_name"*/
			
			var p1 = $("#pok_searh2");

			//var title = $("tr").children('td [colspan="2"]').children("a").children("b");
			var title = $("tr").children('td [colspan="3"]').children("a").children("b"); /*nazvaniya kommand*/

			//alert(title.text());


			var next = $("tr").find('td [colspan="3"]').children("a").children("b");	/*sledyushie nazvanie kommand*/


			title.each(function(index,element){

				var str = $(element);

				var string = str.text();

				arsearch[0] = "Ставки Live";
				arsearch[1] = "BetGamesTV";
				arsearch[2] = "ЕВРО-2016";
				arsearch[3] = "Долгосрочные ставки";

				var z = 1;
				for(var i = 0; i < arsearch.length;i++){
					if(string.indexOf(arsearch[i]) >= 0){
						/*p1.append(arsearch[i]);*/
						z = 0;
					}else{
						
					}

					}

					if(z == 1){
						ar1.push(string);
						//alert(string);
						z = 1;
					}
	
			});




			var title_name = $('a').parent().parent().prev().children().children().next().children("b").parent().parent().parent().next().children().next().children("a");


			
			title_name.each(function(index,element){

				var str = $(element);
				var string = str.text();

				

				if(string != ""){
					ar4.push(string);
					//alert(string);
				}
				

			});

			var name = $('[align="left"]').children("a");	/*"td > a nazvaniya komand"*/



			var koef = $('[align="left"]').children("font");	/*"td > font" koeffisienti*/



			name.each(function(index,element){

				var str = $(element);

				var string = str.text();
				var href = str.attr("href");

				ar2.push(string);
				arhref.push(href);

			});


			var p = 0;
			var v = 0;
			
			koef.each(function(index,element){

				var str = $(element);
				var string = str.text();

				arsearchkoef[0] = "Live";
				arsearchkoef[1] = "www";
				
				var check = 0;
				for(var a = 0;a < arsearchkoef.length;a++){
					if(string == arsearchkoef[a]){
						check = 1;
					}
				}

				if(string == "Приостановлен"){

					var count = p - 1;
					var stringstar = ar3[count];
					var newstring = stringstar + " " + string;
					ar3[count] = newstring;
				}else{

					if(check == 0){
						var string3 = "";
						var string2 = string.split("");

						for(var u = 0; u < string2.length;u++){
							if(string2[u] != '"'){
								if(string2[u] != '-'){
									string3 += string2[u];
								}
								
							}
						}

					ar3.push(string3);

					v++;
					p = v;
					}

				}

			});


			var i;
			var j=0;
			var z = 0;
		
			for(i = 0;i < ar2.length;i++){


					if(ar4[j] == ar2[i]){

					
var string5 =  '<div class="text2 slive"><div class="title-red col-sm-6 col-md-6">' +'<button type="button" class="">'+ar1[j]+'</button>'+'</div><div class="button-click col-sm-6"><button type="button" class="btn btn-primary col-sm-pull-6 click">развернуть</button></div>  <div class="col-sm-10 col-sm-offset-1 ul-li"> <div class="col-sm-6"> <p class="load col-sm-10 col-sm-offset-1" v="' + arhref[i] + '">'+ ar2[i] + '</p> </div> <div class="col-sm-6"> <p class="load2 col-sm-10 col-sm-offset-1"><b>' + ar3[z] + '</b></p> </div> </div></div>';

							p1.append(string5);
							
							j++;

							z++;


					}else{


						if(ar2[i] == "Победитель ЕВРО 2016"){

							var string6 =  '<div class="col-sm-12 col-sm-offset-2"> <div class="col-sm-5"> <p class="load" v="' + arhref[i] + '">' + ar2[i] + '</p> </div>  </div>';
							
							p1.append(string6);

							

						}else{

							var string6 =   '<div class="col-sm-10 col-sm-offset-1 ul-li"> <div class="col-sm-6"> <p class="load col-sm-10 col-sm-offset-1" v="' + arhref[i] + '">' + ar2[i] + '</p> </div> <div class="col-sm-6 "> <p class="load2 col-sm-10 col-sm-offset-1"><b>' + ar3[z] + '</b></p> </div> </div>';
							p1.append($('.text2').append(string6));


							z++;
							

						}

						
							
					}


			}


			var script = '<script> $(".load").click(function(){$("#download").show(); var v = $(this).attr("v"); var urltwo = $("#basetwo").val(); var baseaction = $("#baseaction").val(); var o = {"hid":v, }; $.ajax({"type":"POST", "url":urltwo, "datatype":"json html script", "data":o, "success":kx, "error":errorfunc }); function kx(result){if(result == "ok"){$("#download").hide(); window.location.href = baseaction; } } function errorfunc(){alert("oshibka zaprosa"); } });' + '</' + 'script>';


			
			p1.append(script);


	};


	window.onload = function(){

		MySearch();


	};




	

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

			var arsearch = new Array();		/*"search name"*/
			var arsearchkoef = new Array();		/*"search koef"*/
			var arhref = new Array();		/*"ssilki na igri"*/
			var ar1 = new Array();		/*"title"*/
			var ar2 = new Array();		/*"name"*/
			var ar3 = new Array();		/*"koeffisient"*/
			var ar4 = new Array();		/*"title_name"*/
			
			var p1 = $("#pok_searh2");

			var title = $("tr").children('td [colspan="2"]').children("a").children("b");

			var next = $("tr").find('td [colspan="2"]').children("a").children("b");

			title.each(function(index,element){

				var str = $(element);

				var string = str.text();

				arsearch[0] = "Ставки";
				arsearch[1] = "BetGamesTV";
				arsearch[2] = "ЕВРО-2016";
				arsearch[3] = "Долгосрочные ставки";

					if(string.indexOf(arsearch[index]) >= 0){	
					}else{
						ar1.push(string);
					}
	
			});

			var title_name = $('a').parent().parent().prev().children().children().next().children("b").parent().parent().parent().next().children().next().children("a");
			
			title_name.each(function(index,element){

				var str = $(element);
				var string = str.text();

				ar4.push(string);

			});

			var name = $('[width="99%"]').children("a");	/*"td > a"*/

			var koef = $('[width="99%"]').children("font");	/*"td > font"*/

			name.each(function(index,element){

				var str = $(element);

				var string = str.text();
				var href = str.attr("href");

				ar2.push(string);
				arhref.push(href);

			});


			var p = 0;
			var v = 0;
			
			koef.each(function(index,element){

				var str = $(element);
				var string = str.text();

				arsearchkoef[0] = "Live";
				arsearchkoef[1] = "www";
				
				var check = 0;
				for(var a = 0;a < arsearchkoef.length;a++){
					if(string == arsearchkoef[a]){
						check = 1;
					}
				}

				if(string == "Приостановлен"){

					var count = p - 1;
					var stringstar = ar3[count];
					var newstring = stringstar + " " + string;
					ar3[count] = newstring;
				}else{

					if(check == 0){
						var string3 = "";
						var string2 = string.split("");

						for(var u = 0; u < string2.length;u++){
							if(string2[u] != '"'){
								if(string2[u] != '-'){
									string3 += string2[u];
								}
								
							}
						}

					ar3.push(string3);
					v++;
					p = v;
					}

				}

			});


			var i;
			var j=0;
			var z = 0;
		
			for(i = 0;i < ar2.length;i++){


					if(ar4[j] == ar2[i]){

						var string5 =  '<div class="col-md-4 col-md-offset-4"> <h4 class="title1" style="margin-left:30px;">' + ar1[j] + '</h4> </div> <div class="col-md-12 col-md-offset-2"> <div class="col-md-5"> <p class="load" v="' + arhref[i] + '">' + ar2[i] + '</p> </div> <div style="" class="col-md-5"> <p><b>' + ar3[z] + '</b></p> </div> </div>';

							/*p1.append(string5);*/
							
							j++;

							z++;


					}else{


						if(ar2[i] == "Победитель ЕВРО 2016"){

							var string6 =  '<div class="col-md-12 col-md-offset-2"> <div class="col-md-5"> <p class="load" v="' + arhref[i] + '">' + ar2[i] + '</p> </div>  </div>';
							
						/*	p1.append(string6);*/

							

						}else{

							var string6 =  '<div class="col-md-12 col-md-offset-2 blue"> <div class="col-md-5"><p class="load" v="' + arhref[i] + '">' + ar2[i] + '</p> </div> <div style="" class="col-md-5"> <p><b>' + ar3[z] + '</b></p> </div> </div>';
							
							/*p1.append(string6);*/

							z++;
							

						}

						
							
					}


			}


			var script = '<script> $(".load").click(function(){$("#download").show(); var v = $(this).attr("v"); var urltwo = $("#basetwo").val(); var baseaction = $("#baseaction").val(); var o = {"hid":v, }; $.ajax({"type":"POST", "url":urltwo, "datatype":"json html script", "data":o, "success":kx, "error":errorfunc }); function kx(result){if(result == "ok"){$("#download").hide(); window.location.href = baseaction; } } function errorfunc(){alert("oshibka zaprosa"); } });' + '</' + 'script>';

			/*p1.append(script);*/

	});



</script>




