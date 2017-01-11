<?php

use yii\helpers\Url;
 ?>
<div id="overlay"></div>
<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/livetwo">


<input id="basek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/k">


<input id="baseredirect" type="hidden" value="<?php echo Url::to('@base'); ?>/site/login">


<input id="baseupdatek" type="hidden" value="<?php echo Url::to('@base'); ?>/site/updatek">

<input id="baseupdatek2" type="hidden" value="<?php echo Url::to('@base'); ?>/site/liverequest">


<div class="" style="margin-top: 15px;">
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-8 col-md-offset-2">
				
				<div class="alert alert-warning" style="display:none;" id="nachalo"></div>

			</div>
		</div>
	</div>
</div>


	
		
		
				
				<div class="alert-info" style="display:none;" id="uvedom">

							<span>ставка добавлена!</span>

				</div>

		



<div class="">
	<div class="row" style="display:none;" id="pok_res1">
		

			<?php 

			
				echo Yii::$app->view->renderFile('@files/live.php');
				

			?>


	</div>
</div>



<div class="" style="">
	<div class="row" id="pok_searh3">

		


	</div>
</div>





<script>
	

function updategame(){

						var update = $("#baseupdatek").val();

						 $.ajax({
		                    "type":"POST",
		                    "url":update,          	
		                    "datatype":"json html script",
		                    "success":kx,
		                    "error":errorfunc
		                  });

		                function kx(result){

		                	/*alert(result);*/

							if(result == "ok"){

								window.location.reload();

							}else if(result == "false"){
								
							}
			
		                              }

		                   function errorfunc(){
		                      /*alert("oshibka zaprosa");*/
		                   }


			}


			function updategametwo(){

						var update = $("#baseupdatek2").val();

						 $.ajax({
		                    "type":"POST",
		                    "url":update,
		                  	
		                    "datatype":"json html script",
		                    /*"data":o,*/
		                  
		                    "success":kx,
		                    "error":errorfunc
		                    
		                  });

		                function kx(result){

							if(result){

							}else if(result == "false"){
								
							}
			
		                              }

		                   function errorfunc(){
		                      /*alert("oshibka zaprosa");*/
		                   }


			}

/*
			setInterval(function(){
				updategame();
			},8000);

			setInterval(function(){
				updategametwo();
			},5000);
*/

/*function srab pri dobavlenii stavki*/

function game(game,k,name){


				var ar = {
					"name":name,
					"game":game,
					"k":k,	
				}

				var url = $("#basek").val();

				var redirect = $("#baseredirect").val();

				$.ajax({
                    "type":"POST",
                    "url":url,
                  	"data":ar,
                    "datatype":"json html script",
                    
                  
                    "success":kx,
                    "error":errorfunc
                    
                  });

                function kx(result){

                	if(result == "ok"){
                		var uvedom = $("#uvedom");
                		uvedom.show("2000");
                		uvedom.delay("2000");
                		uvedom.hide("2000");
                	}else if(result == "false"){
                		window.location = redirect;

                	}
                		
                              }

                   function errorfunc(){
                      alert("oshibka zaprosa");
                   }



			};


/*function srab pri dobavlenii stavki*/

window.onload = function(){

			var p1 = $("#pok_searh2");

			var p2 = $("#pok_searh3");

			var pokaz_result = $("#pok_res1");	/*poiskovaya chast*/

			var name = $(".hi").children("td").next();	//nazvaniya komand



			var namear = new Array();

         	var two = $(".hi").next().children("td").children("div").children("nobr");	//pervie goli

         	

			var date = $(".hi").children("td:first");

			var k_name = $('[class="smwndcap"][width="90%"]');	//title

			var string_date = date.text();


			var zagol = $("td").children("div").children("div").children("b").children("i");//zagolovki sobitii

			var zagolArray = new Array();

			zagol.each(function(index, element){


					var str = $(element);

					var string = str.text();

					zagolArray.push(string);

			});


			var y = "";
			var y2 = "";

			var stop = "";
			for(var i = 0;i < string_date.length;i++){

				if(string_date[i + 1] == "О"){
						stop = i;
				}				
			}

			for(var i = 0;i < string_date.length;i++){

						if(i <= stop){
							y += string_date[i];	
						}
						if(i > stop){
							y2 += string_date[i];	
						}
				
			}

			/*function otvechaet za datu*/

            var a = "";
			var b = "";
			var c = "";


           name.each(function(index,element){

					var str = $(element);

					var string = str.text();

					


					for(var i = 0;i < string.length;i++){


						for(var z = 0; z < string.length; z++){

							if(x == 1){
									break;
								}
						if((string[i] == z) && (string[i] != " ")){

							
								a = i;
								
								var x = 1;

							
							
						}

						}

					}

					for(var i = 0;i < a-2;i++){

						b += string[i];


					}

					

					for(var i = 0;i < string.length;i++){

						if(i >= a){

							if(string[i] != '"'){
								c += string[i];
							}

						}

					}
					

					namear.push(b);
					namear.push(c);
				});


           k_name.each(function(index,element){

           		var fix = "";
           		var mystr = "";

           		var str = $(element).text();

           		var str2 = str.replace(/Live/g,"");

           		var str3 = str2.replace(/\./g," -");

           		var str4 = str3.replace(/^\s\-/g,"");

           		for(var i = 0;i < str4.length;i++){

           			if(fix == 1){
           				break;
           			}

           			mystr += str4[i];

           			if(str4[i] == "-"){
           				fix = 1;
           			}

           		}

           		var newmystr = mystr.replace(/\-/g,"");

           		var str5 = str4.replace(newmystr,newmystr + "(LIVE) ");

           		var str6 = str5.replace(/\-/,"- (");

           		var f1 = "";
           		
           		for(var i = 0; i < str6.length;i++){

           			if(str6[i] == "-"){
           				f1 = i;
           			}
           		}

           		var f2str = "";
           		for(var i = 0;i < str6.length;i++){

           			if(i >= f1){
						f2str += str6[i];
           			}

           		}

           		var str7 = str6.replace(f2str,f2str + " )");

           		var u = '<div class="col-md-12 title-red livep"><div>' + str7 + " - " + y + " , " + y2 + '</div></div>';

				p1.append(u);


           });



var h = '<div class="col-md-12 title2"><div class="col-md-12"><h3 class="title2">' + namear[0]+ ' ,счет '  + namear[1] + " минута" + '</h3></div></div>';

					p1.append(h);

			var stopping = 0;

            /*polnii sikl verhnei chasti*/
            
var mycount=0;
            two.each(function(index,element){

            	var str = $(element).html();
            	var str2 = $(element).html();

            	var checkx = 0;
	            var fix = 0;

	            for(var i = 0;i < str.length;i++){

	                if(checkx == 1){
	                    break;
	                }

	                if(str[i] == "&"){
	                    fix = i;
	                    checkx = 1;             
	                }
	                
	            }
	            var string10 = "";

	            for(var i = 0;i < fix;i++){
	                string10 += str[i];
	            }



	            var string12 = "";
	            var fix1 = 0;
         		var fix2 = 0;

	            for(var i = 0;i < str.length;i++){

                if((str[i - 1] == ">") && (str[i - 2] == "b") && (str[i - 3] == "<")){
                    fix1 += 1;
                }

                if((str[i] == "<") && (str[i + 1] == "/") && (str[i + 2] == "b") && (str[i + 3] == ">")){
                    fix2 += 1;
                }

                if((fix1 >= 1) && fix2 < 1){
                    string12 += str[i];
                }

            }
            /*koeffisient nahozhdenie koeffisientov*/
            

            	/*Б*/
            	var fix5 = 0;
            	var fix6 = 0;
            	var string15 = "";
            	for(var i = 0;i < str2.length;i++){

            		if(str2[i] == "Б"){
            			fix5 = 1; 	
            		}

            		

            		if((fix5 == 1)){
						
						if(str2[i] == "&"){
            				fix6 = 1;
            			}

            			if(fix6 != 1){
            				string15 += str2[i];
            			}

            		}
            	}

            	/*Б*/

            	/*koef Б*/

            	var fix5 = 0;
            	var fix6 = 0;
            	var fix7 = 0;
            	var fix8 = 0;
            	var string16 = "";
            	for(var i = 0;i < str2.length;i++){

            		if(str2[i] == "Б"){
            			fix5 = 1; 	
            		}

            		if((fix5 == 1)){
						
						

            			if((str2[i - 1] == ">") && (str2[i - 2] == "b") && (str2[i - 3] == "<")){
		                    fix7 += 1;
		                }

		                if((str2[i] == "<") && (str2[i + 1] == "/") && (str2[i + 2] == "b") && (str2[i + 3] == ">")){
		                    fix8 += 1;
		                }

		                if((fix7 >= 1) && fix8 < 1){
		                    string16 += str[i];
		                }
            				

            		}
            	}
            	/*koef Б*/


            	var grone = '<div class="col-md-4 blok1-livep"> <div class="tit g" n="' + namear[0] + '"  ant="' + string10 + '" anttwo="' + string12 + '">' + string10 + ' ' + string12 + '</div></div>';
				

            	if(string15 != ""){

            		var grtwo = '<div class="col-md-4 blok1-livep"> <div class="tit g" n="' + namear[0] + '"  ant="' + string15 + '" anttwo="' + string16 + '">' + string15 + ' ' + string16 + '</div></div>';

            		p1.append(grtwo);

            	}
				
            		stopping = 1;
					p1.append(grone);//первый столбец с результатом

            });
p1.append("<div class='clearfix'></div>");
            	
 if(stopping == 0){var s = '<div class="col-md-8 col-md-offset-4 "> <div class="col-md-5">' + '<h3 class="jp">Ставки завершены..!</h3>' + '</div></div>';

            	p1.append(s);
            }
            
			
			/*polnii sikl verhnei chasti*/

			/*nizhniyya chast koeffisientov*/

			/*p1.append(test6.html());*/

			

			// var test5 = $(".tab").children("div").children();

			// test5.each(function(index,element){

			// 	var tt = $(element).children("i").html();

			// 	console.log(tt);



			// });



			var test1 = $(".tab").children("div").children("nobr");
			
			
			/*polnii sikl*/
			var fix55 = 0;
			var fix56 = 0;
			var fix57 = 0;
			var fix58 = 0;
			var fix59 = 0;
			var fix60 = 0;
			var fix61 = 0;
			var fix62 = 0;
			var fix63 = 0;
			var fix64 = 0;
			var fix65 = 0;
			var fix66 = 0;
			var fix67 = 0;
			var fix68 = 0;
			var fix69 = 0;
			var fix70 = 0;
			var fix71 = 0;
			var fix72 = 0;
			var fix73 = 0;
			var fix74 = 0;
			var fix75 = 0;
			var fix76 = 0;
			var fix77 = 0;
			var fix78 = 0;
			var fix79 = 0;
			var fix80 = 0;
			var fix81 = 0;
			var fix82 = 0;
			var fix83 = 0;
			var fix84 = 0;
			var fix85 = 0;
			var fix86 = 0;
			var fix87 = 0;
			var fix88 = 0;
			var fix89 = 0;
			var fix90 = 0;
			var fix91 = 0;
			var fix92 = 0;
			var fix93 = 0;
			var fix94 = 0;
			var fix95 = 0;
			
			var fixed20;
			var fixed21;
			var fixed22;
			var fixed23;
			var fixed24;
			var fixed25;
			var fixed26;
			var fixed27;
			var fixed28;
			var fixed29;

			var revarr = new Array();
			
			
			var doubleone = 0;

			test1.each(function(index,element){

			var str = $(element).html();


			

			var checkx = 0;
			var fix = 0;
			for(var i = 0;i < str.length;i++){

				if(checkx == 1){
					break;
				}

				if(str[i] == "&"){
					fix = i;
					checkx = 1;				
				}
				
			}
			var string10 = "";

			for(var i = 0;i < fix;i++){
				string10 += str[i];
			}

			

			for(var i = 0;i < str.length;i++){

				if(checkx == 1){
					break;
				}

				if(test1_str[i] == "&"){
					fix = i;
					checkx = 1;				
				}
				
			}

			/*3,4*/
			var countfix = 0;
			var countfix2 = 0;
			var string11 = "";
			for(var i = 0;i < str.length;i++){
				if(str[i] == "&"){
					countfix += 1;
				}

				if(countfix > 2){

						if(str[i - 1] == ";"){
							countfix2 += 1;
						}
						
				}

					if((countfix2 >= 1) && countfix < 4){

						string11 += str[i];						
						
					}

				
			}


			/*nahozhdenie koeffisientov*/

			var fix1 = 0;
			var fix2 = 0;
			var string12 = "";
			var string13 = "";


			for(var i = 0;i < str.length;i++){

				if((str[i - 1] == ">") && (str[i - 2] == "b") && (str[i - 3] == "<")){
					fix1 += 1;
				}

				if((str[i] == "<") && (str[i + 1] == "/") && (str[i + 2] == "b") && (str[i + 3] == ">")){
					fix2 += 1;
				}

				if((fix1 >= 1) && fix2 < 1){
					string12 += str[i];
				}

				if((fix1 >= 2) && fix2 < 2){
					string13 += str[i];
				}

				

			}
			/*koeffisient nahozhdenie koeffisientov*/

			var b = '<div class="col-md-9 col-md-offset-3"> <div class="col-md-4"><b>';
			var b2 = "</b></div></div>";

			var reg = /Тотал \(\d\.\d;\d\.\d\)/gi;		/*aziatskii total*/

			var schet = /\d\:\d\s\-/gi;

			var goli = /[\wа-я][\wа-я][\wа-я][\wа-я][\wа-я][\wа-я]\:\s[\wа-я][\wа-я]\s\-/gi;

			var indiv = /[\wа-я]+\s*[\wа-я]*\s*\(*[\wа-я]*\)*\s*\(\d\.*\d*\)\s[\wа-я][\wа-я][\wа-я]/gi;

			var goli_po_command = /[\wа-я]+\s*\(*[\wа-я]*\)*\:\s\d\s[\wа-я][\wа-я][\wа-я][\wа-я][\wа-я]\s\-/gi;

			var dop_total = /Тотал\s\(\-*\d\.*\d*\)\s[\wа-я][\wа-я][\wа-я]\s\-/gi;

			var total_matcha = /Чет\s\-/gi;

			var pobeda_s_uchetom = /[\wа-я]+\s*[\wа-я]*\s*\(*[\wа-я]*\)*\s\(\-*\d\.*\d*\)\s\-/gi;
			
			var sled_gol = /\d\-[\wа-я]\s[\wа-я][\wа-я][\wа-я]\s[\wа-я]+\s*[\wа-я]*\s*[\wа-я]*\s*\(*[\wа-я]*\)*\s\-/gi;

			var resultativnost = /Тотал\s[\wа-я]\s\d\-[\wа-я]\s[\wа-я]+\s[\wа-я]+\,\s[\wа-я]+\s[\wа-я]+\s\d\-[\wа-я]\s\-/gi;

			var time_sled_gol = /\d\-[\wа-я]\s[\wа-я][\wа-я][\wа-я]\s[\wа-я]\s\d\d\-[\wа-я]\s[\wа-я][\wа-я]\s\d\d\-[\wа-я]\s[\wа-я][\wа-я][\wа-я]\s\-|\d\-[\wа-я]\s[\wа-я]+\s[\wа-я]+\s\d\d\-[\wа-я]\s[\wа-я]+\s\-/gi;

			var tochnoe = /^\d\s[\wа-я]+\s\-/gi;	//1 гол - 

			var ugl = /Тотал\s\(\d\d*\)\s[\wа-я][\wа-я][\wа-я]\s\-/gi;

			var kol_ugl = /\d\d*\-\d\d*\s\-/gi;

			var ish_po_time = /П1\s[\wа-я]\s\d\-[\wа-я]\s[\wа-я]+\s\-/gi;

			var ishod_one_time = /[\wа-я]\d\,[\wа-я]\d\s\-/gi;

			var uglovie = /Тотал\s\(\d\.\d\)\s[\wа-я][\wа-я][\wа-я]\s\-/gi;

			var itogi_turnira = /[\wа-я]+\s*[\wа-я]*\s\(*[\wа-я]+\)\s\-/gi;

			var aziatskii_total = /Тотал\s\(\d\.\d\;\d\.\d\)\s[\wа-я]+\s\-/gi;

			var raznisa_golov = /[\wа-я]+\s\([\wа-я]+\)\s[\wа-я]+\s[\wа-я]+\s\:\s[\wа-я]+\s\-/gi;

			var pobeda_s_uchetom_for_free = /[\wа-я]+\s\([\wа-я]+\)\s\(\-[1]\)\s\-|[\wа-я]+\s\([\wа-я]+\)\s\(\+[2]\)\s\-/gi;

			var azia_for = /[\wа-я]+\s\([0]\)\s\-/gi;

			var goli_v_time = /\d\-[\wа-я]\s[\wа-я]+\s[\wа-я]\s\d\-[\wа-я]\s[\wа-я]+\s[\wа-я]+\s*[\wа-я]*/gi;	
								//1-й гол в 1-м тайме Вилларалбо
			
			var ind_total_first = /^[\wа-я]+\s[\wа-я]*\s\(\d\.\d\)\s[\wa-я]+\s\-/gi;
			
									//neft   bugast       
			//Нефтехимик Бургас (0.5) мен - 

			var tochnoe_gol_first_time = /^[\wа-я]+\:\s[0]\s[\wа-я]+\s\-/gi;
			//Нефтехимик Бургас: 0 головshayir_9090@mail.resultativnost//
			//Вилларалбо: 0 голов

			var kol_gol_first_time = /[0]\-[1]\s[\wа-я]+\s\-/gi;

			var pobeda_and_total = /[\wа-я]+\s\([\wа-я]+\)\s[\wа-я]+\s[\wа-я]\s[\wа-я]+\s\(\d\.*\d*\)\s[\wа-я]+\s\-/gi;

			var pob_matcha = /[\wа-я]+\s[\wа-я]+\s\([\wа-я]+\)\s\-\s[\wа-я]\s[\wа-я]+\s[\wа-я]+\s\-/gi;

			var p_o = /П1\s[\wа-я]\s[\wа-я]+\s[\wа-я]+\s\-/gi;

			var p_v_techenii_matcha = /\d\-\d\d\s[\wа-я]+\s\-/gi;

			var fori_v_techenii_m = /\d\-\d\d\s[\wа-я]+\s\-/gi;

			var tital_v_techenii_m = /\d\-\d\d\s[\wа-я]+\s\—/gi;

			var tital_matcha_po_comandam = /Тотал\s[\wа-я]+\s\([\wа-я]+\)\s[\wа-я]+\s\-/gi;

			var kak_opredel = /[\wА-Я][\wа-я]+\s\-\s[\wа-я]\s[\wа-я]+\s[\wа-я]+\s\-/gi;

			var one_set_two_game = /^[\Wа-я]+\s\W\./g;

			/*if(index == zagolArray[index]){

				
			}*/

			// if($(element).text() != ){
			// 	p1.append(zagolArray[index]);
			// }
			

			
			if((string10.match(goli)) && (fix63 <= 0)){
	p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Голы:</h3>");

				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-1-");
				}
				
				
				fix63 += 1;
			}else if((string10.match(indiv)) && (fix55 <= 0)){
				p1.append("<div class='clearfix'></div>");
				//p1.append("<h3 class='title2'>Индивидуальный тотал:</h3>");//индивидуальный тотал
				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-2-");
				}
				fix55 += 1;
			}else if((string10.match(goli_po_command))  && (fix56 <= 0)){
	p1.append("<div class='clearfix'></div>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-3-");
				}
				
				fix56 += 1;

				
			}else if((string10.match(schet))  && (fix60 <= 0)){
				p1.append("<div class='clearfix'></div>");
				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-4-");
				}
				fix60 += 1;
			}else if((string10.match(dop_total))  && (fix57 <= 0)){
					p1.append("<div class='clearfix'></div>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-5-");
				}
				
				fix57 += 1;
			}else if((string10.match(total_matcha)) && (fix64 <= 0)){
					p1.append("<div class='clearfix'></div>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-6-");
				}
				fix64 += 1;

			}else if((string10.match(total_matcha)) && (fix74 <= 0) && (index > fixed22)){
						p1.append("<div class='clearfix'></div>");
              //p1.append("<h3 class='title2'>Тотал 1-го тайма:</h3>");
              if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-7-");
				}
				
				
				fix74 += 1;
			}else if((string10.match(pobeda_s_uchetom)) && (fix58 <= 0)){
				p1.append("<div class='clearfix'></div>");
				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-8-");
				}
				fix58 += 1;
			}else if((string10.match(pobeda_s_uchetom_for_free)) && (fix81 <= 0)){
					p1.append("<div class='clearfix'></div>");
              p1.append("<h3 class='title2'>Победа с учетом форы 3 исхода:</h3>");
				
				
				fix81 += 1;
			}else if((string10.match(ish_po_time)) && (fix72 <= 0)){
				p1.append("<div class='clearfix'></div>");
              if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-9-");
				}
				fix72 += 1;
				fixed24 = index;
				

			}else if((string10.match(goli_v_time)) && (fix83 <= 0)){		//ish_po_time

				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-10-");
				}
				fix83 += 1;

			}else if((string10.match(resultativnost)) && (fix71 <= 0)){
	p1.append("<div class='clearfix'></div>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-11-");
				}
				fix71 += 1;
				fixed22 = index;

			}else if((string10.match(sled_gol)) && (fix66 <= 0)){

				p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Следующий гол:</h3>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-12-");
				}
			
				fix66 += 1;

			}else if((string10.match(time_sled_gol)) && (fix67 <= 0)){
	p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Время следующего гола:</h3>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-13-");
				}
				
				fix67 += 1;

			// }else if((string10.match(tochnoe)) && (fix68 <= 0) && (fix67 == 1)){
			}else if((string10.match(tochnoe)) && (fix68 <= 0)){
					// console.log(1);
	p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Точное количество голов:</h3>");
			if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-14-");
				}

			fix68 += 1;
			fixed20 = index;

			
			}else if((string10.match(kol_ugl)) && (fix70 <= 0)){
p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Количество угловых:</h3>");
	p1.append("-15-");
			

			fix70 += 1;

			}else if((string10.match(schet))&& (fix73 <= 0) && (index > fixed24)){
				p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Счет 1-го тайма:</h3>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-16-");
				}
				fix73 += 1;
			}else if((string10.match(ishod_one_time)) && (fix76 <= 0)){
				
					p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Исход 1-го тайма и всего матча:</h3>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-17-");
				}
				
				
				fix76 += 1;
			}else if((string10.match(uglovie)) && (fix77 <= 0) && (index > fixed20) && (fix68 != 1)){

		p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Угловые:</h3>");
						p1.append("-18-");
					
					fix77 += 1;
				
				
			}else if((string10.match(itogi_turnira)) && (fix78 <= 0)){
				//p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Итоги турнира:</h3>");
				
				fix78 += 1;
			}else if((string10.match(aziatskii_total)) && (fix79 <= 0)){
							p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Азиатские тоталы:</h3>");
	p1.append("-19-");
				
				
				fix79 += 1;
			}else if((string10.match(raznisa_golov)) && (fix80 <= 0)){
		p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Разница голов:</h3>");
				fix80 += 1;
				p1.append("-20-");
			}else if((string10.match(azia_for)) && (fix82 <= 0)){
											//p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Азиатские форы:</h3>");
				
				fix82 += 1;
			}else if((string10.match(ind_total_first)) && (fix84 <= 0) && (index > fixed22)){
				p1.append("<div class='clearfix'></div>");
				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-21-");
				}
				fix84 += 1;
				fixed23 = index;

			// }else if((string10.match(tochnoe_gol_first_time)) && (fix85 <= 0) && (index > fixed23)){
			}else if((string10.match(tochnoe_gol_first_time)) && (fix85 <= 0)){
							p1.append("<div class='clearfix'></div>");
	//p1.append("<h3 class='title2'>Точное количество голов в 1-м тайме:</h3>");
				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-22-");
				}
				
				
				fix85 += 1;
			}else if((string10.match(kol_gol_first_time)) && (fix86 <= 0) && (index > fixed23)){
			
				p1.append("<div class='clearfix'></div>");//*
				//p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
	if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-23-");
				}
				fix86 += 1;
				fixed24 = index;
			}else if((string10.match(pobeda_and_total)) && (fix87 <= 0)){
					p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Победа и тотал:</h3>");
				p1.append("-24-");
				
				
				fix87 += 1;
				
			}else if((string10.match(pob_matcha)) && (fix88 <= 0)){
	p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Как определится победитель матча:</h3>");
					p1.append("-25-");
				
				//p1.append(b + "Как определится победитель матча:" + b2 + "<br>");
				fix88 += 1;
				
			}else if((string10.match(p_o)) && (fix89 <= 0)){
				
					p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Победа и обе забьют:</h3>");
				p1.append("-26-");
				
				
				fix89 += 1;
				
			}else if((string10.match(p_v_techenii_matcha)) && (fix90 <= 0)){

								p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Победа в течение матча:</h3>");
				p1.append("-27-");
				
				fix90 += 1;
				fixed25 = index;

			}else if((string10.match(fori_v_techenii_m)) && (fix91 <= 0) && (index > fixed25+11)){
				
			p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Форы в течение матча:</h3>");
					p1.append("-28-");
				
				fix91 += 1;
				fixed26 = index;
			}else if((string10.match(tital_v_techenii_m)) && (fix92 <= 0) && (index > fixed26+21)){
				
					p1.append("<div class='clearfix'></div>");
	p1.append("<h3 class='title2'>Тотал в течение матча:</h3>");
				p1.append("-29-");
				
				fix92 += 1;
				fixed27 = index;
			}else if((string10.match(tital_matcha_po_comandam)) && (fix93 <= 0) && (index > fixed27)){
				p1.append(b + "Тотал матча по командам:" + b2 + "<br>");
				fix93 += 1;
					p1.append("-30-");

				
			}else if((string10.match(kak_opredel)) && (fix94 <= 0)){
				p1.append(b + "Как определится победитель:" + b2 + "<br>");
				fix94 += 1;
				p1.append("-31-");

				
			}else if((string10.match(one_set_two_game)) && (fix95 <= 0)){		//tennis 1й сет 2й гейм:
				p1.append("<div class='clearfix'></div>");
				if(zagolArray[doubleone] != undefined){
					p1.append("<h3 class='title2'>" + zagolArray[doubleone] + "</h3>");
					doubleone++;
					p1.append("-32-");
				}
				fix94 += 1;
	
			}



			//alert(string10);

			var gr = '<div class="col-md-4 blok2-livep"> <div class="tit g" n="' + namear[0] + '"  ant="' + string10 + '" anttwo="' + string12 + '">' + string10 +' ' + string12 + '</div></div>';

			var gr2 = '<div class="col-md-8 total"> <div class="tit" style="text-align:center" n="' + namear[0] + '"  ant="' + string11 + '" anttwo="' + string13 + '">' + string11 + ' ' + string13 + '</div></div>';
			p1.append(gr);
			
			revarr.push(1);
			if(string11){
				$('.blok2-livep').addClass('blok3-livep');		
     
			p1.append(gr2);
			p1.append("<div class='clearfix'></div>");
			}
			


			

			});

	p1.append("<div class='clearfix'></div>");
$('#pok_searh2').wrap('<div class="pok_searh12"></div>');


				var oi = '<script>$(".tit").click(function(){ant = $(this).attr("ant");anttwo = $(this).attr("anttwo"); n = $(this).attr("n"); game(ant,anttwo,n); $("#korzina").show(); });</' + 'script>';
				p1.append(oi);


				

			
			
			


};


for(var i = 0;i < 20;i++){
				console.log(11);
			}







</script>






	



