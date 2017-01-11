
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
			var dategame = new Array();

         	var two = $(".hi").next().children("td").children("div").children("nobr");	//pervie goli
         	//var two = $(".hi");	//pervie goli

         	

			var dateline = $("tr").children("td").children("center").children("h1").html();

			var ffix = 0;//Линия на 12.12.2016 
			for(var i = 0;i < dateline.length;i++){
				if((dateline[i] == "н") && (dateline[i + 1] == "а")){
					ffix = i;
				}			
			}
			var newdateline = "";
			for(var i = ffix + 3;i < dateline.length;i++){
				newdateline += dateline[i];
			}

			console.log(newdateline);

			var date = $(".hi").children("td");

			date.each(function(index,element){
				var d = $(element).html();
				var fix = 0;
				var newstr = "";
				for(var i = 0;i < d.length;i++){
					if((d[i] == "/") && (d[i + 1] == "d")){
						fix = i;
					}
				}

				for(var i = fix + 5; i < d.length;i++){
						newstr += d[i];
				}
				if(newstr != ""){
					//console.log(newstr);
					dategame.push(newstr);
				}
				
			});

			var k_name = $('[class="smwndcap"][width="90%"]');	//title
			//var k_name = $(".hi").children("td").children("div").children("font").children("b");	//title

			


			var zagol = $("td").children("div").children("div").children("b").children("i");//zagolovki sobitii

			var zagolArray = new Array();

			zagol.each(function(index, element){


					var str = $(element);

					var string = str.text();

					zagolArray.push(string);

			});

			

			
			

			/*function otvechaet za datu*/

            var a = "";
			var b = "";
			

			//otv za nazvaniya kommand
           name.each(function(index,element){

           			var c = "";

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
					

					//namear.push(b);
					//console.log(c);
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

           		var u = '<div class="col-md-12 title-red livep"><div>' + str7 + " расписание " + "" + " на " + newdateline + '</div></div>';

				p1.append(u);


           });





			var stopping = 0;

            /*polnii sikl verhnei chasti*/
            
			var mycount=0;

            two.each(function(index,element){

            	var str = $(element).html();
            	//var str = $(element).next().children("td").children("div").children("nobr").html();
            	var str2 = $(element).html();
            	//var str2 = $(element).next().children("td").children("div").children("nobr").html();

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

            	var megafix = 0;

					if(string10 == "П1 -"){
						var h = '<div class="col-md-12 title2"><div class="col-md-12"><h3 class="title2">' + namear[mycount]  + ": ставка на " + dategame[mycount] + '</h3></div></div>';

							p1.append(h);
							megafix = 1;
					}


var grone = '<div class="col-md-4 blok1-livep"> <div class="tit g" n="' + namear[mycount] + '"  ant="' + string10 + '" anttwo="' + string12 + '">' + string10 + ' ' + string12 + '</div></div>';


				

            	if(string15 != ""){

var grtwo = '<div class="col-md-4 blok1-livep"> <div class="tit g" n="' + namear[mycount] + '"  ant="' + string15 + '" anttwo="' + string16 + '">' + string15 + ' ' + string16 + '</div></div>';

            		p1.append(grtwo);

            	}
				
					if(megafix == 1){
						mycount++;
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
			
						


				p1.append("<div class='clearfix'></div>");
				$('#pok_searh2').wrap('<div class="pok_searh12"></div>');


var oi = '<script>$(".tit").click(function(){ant = $(this).attr("ant");anttwo = $(this).attr("anttwo"); n = $(this).attr("n"); game(ant,anttwo,n); $("#korzina").show(); });</' + 'script>';
				p1.append(oi);
			
				


};


