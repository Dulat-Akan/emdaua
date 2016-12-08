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
			var test15 = $(".tab").children("div").children();

						var c_count = 0;
			
						


			test15.each(function(index,element){


				//$('div:not(#bigBang)')



						var string21 = "";	//nazvanie komandi
						var string22 = "";	//1 koef
						var string23 = "";	//2 nazvanie komandi
						var string24 = "";	//2 koeffisient
						var string25 = "";	//3 string
						var string26 = "";	//4 koeffisient

						var fix50 = 0;
						var fix51 = 0;
						var fix52 = 0;
						var fix53 = 0;
						var fix54 = 0;
						var fix55 = 0;
						var fix56 = 0;
						

				var tt = $(element).not("b").html();
				var tt_title = $(element).children("i").html();
				
				
				if(tt != ""){	//filtr pustih

					if(tt != undefined){	//filtr undefined
						
						for(var i = 0;i <= tt.length;i++){		//nachalo fixatora 1
							if(tt[i] != "&"){
								string21 += tt[i];
								fix50 = i;
							}else{
								break;
							}
						}

						for(var i = fix50;i <= tt.length;i++){		//kones fixatora 2
							if((tt[i] == ">") && (tt[i-1] == "b") && (tt[i-2] == "<")){			//<b>

								if(fix51 == 0){
									fix51 = i;
								}
								
							}
						}


						for(var i = fix51;i <= tt.length;i++){	//kones fixatora 3
							if((tt[i] == "<") && (tt[i+1] == "/") && (tt[i+2] == "b")){			//</b>

								if(fix52 == 0){
									fix52 = i;
								}
								
							}
						}

						for(var i = fix51 + 1;i <= tt.length;i++){		//zapis koeffisienta 1
							
							if(i != fix52){
								string22 += tt[i];
							}else{
								break;
							}

						}

						for(var i = fix52;i <= tt.length;i++){	//zapis  1 fixatora stroki 2
							if(tt[i] > "s"){
								if(fix53 == 0){
									fix53 = i;
								}
							}
						}
						//Обе забьют: нет -&nbsp;
						for(var i = fix53;i <= tt.length;i++){
							if((tt[i] == "&") && (tt[i+1] == "n") && (tt[i+2] == "b")){	//<b>//zapis  2 fixatora stroki 2

								if(fix54 == 0){
									fix54 = i;
								}
								
							}
						}

						for(var i = fix53;i <= tt.length;i++){		//zapis 2 stroki
							
							if(i != fix54){

								if(tt[i] != undefined){
									if(fix53 != 0){
										string23 += tt[i];
									}
								}
								
							}else{
								break;
							}

						}

						for(var i = fix54;i < tt.length;i++){

							if((tt[i] == ">") && (tt[i - 1] == "b") && (tt[i-2] == "<")){
									if(fix55 == 0){
										fix55 = i;
									}
								}
						}

						for(var i = fix55 + 1;i < tt.length;i++){

								if((tt[i] == "<") && (tt[i + 1] == "/") && (tt[i+2] == "b")){
									if(fix56 == 0){
										fix56 = i;
									}
								}

						}


						for(var i = fix55 + 1;i < tt.length;i++){

							if(i < fix56){
								if(fix53 != 0){
									string24 += tt[i];
								}	
							}

						}

						for(var i = fix56;i < tt.length;i++){
							string25 += tt[i];
						}


					//	p1.append(fix51 + "<br>");
						//p1.append(fix52 + "<br>");
						//p1.append(string21 + "<br>");
						//p1.append(string22 + "<br>");
						//p1.append(tt + "<br>");
						//p1.append(fix55 + "<br>");
						//console.log(string25);
						//console.log(string24);
								
							
							//p1.append(string21 + string22 + " | " + string23 + string24 + "<br>");

var gr = '<div class="col-md-4 blok2-livep"> <div class="tit g" n="' + namear[0] + '"  ant="' + string21 + '" anttwo="' + string22 + '">' + string21 +' ' + string22 + '</div></div>';

var gr2 = '<div class="col-md-8 total"> <div class="tit" style="text-align:center" n="' + namear[0] + '"  ant="' + string23 + '" anttwo="' + string24 + '">' + string23 + ' ' + string24 + '</div></div>';
			p1.append(gr);


			if(string21){
				$('.blok2-livep').addClass('blok3-livep');		
     

     if(string23 != ""){
     		p1.append(gr2);
     }
			



			p1.append("<div class='clearfix'></div>");
			}
						

					}	//kones if

	
				}	//kones if

						if(tt_title != undefined){
							p1.append("<div class='clearfix'></div>");
							p1.append("<h3 class='title2'>" + tt_title + "</h3>");
							
						}
						


			});


				p1.append("<div class='clearfix'></div>");
				$('#pok_searh2').wrap('<div class="pok_searh12"></div>');


				var oi = '<script>$(".tit").click(function(){ant = $(this).attr("ant");anttwo = $(this).attr("anttwo"); n = $(this).attr("n"); game(ant,anttwo,n); $("#korzina").show(); });</' + 'script>';
				p1.append(oi);
			
				


};







</script>






	



