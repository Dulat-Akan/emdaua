
			
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

		                	/*console.log(result);*/

							if(result == "ok"){

								/*window.location.reload();*/

							}else if(result == "false"){
								
							}
			
		                              }

		                   function errorfunc(){
		                      /*console.log("oshibka zaprosa");*/
		                   }


			}


			setInterval(function(){
				updategame();
			},5000);

			$("#update").click(function(){
				window.location.reload();
			});
				
			

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
                      console.log("oshibka zaprosa");
                   }


				
				

			});




function MySearch(){
			
			/*arrays*/
			var arsearch = new Array();		/*"search name"*/
			var arsearchkoef = new Array();		/*"search koef"*/
			var arhref = new Array();		/*"ssilki na igri"*/
			var ar1 = new Array();		/*"title"*/
			var ar4 = new Array();		/*"title_first_name"*/
			var ar5 = new Array();		/*"new name kommand"*/
			var ar6 = new Array();		/*"new name koeffisient"*/

			var center = new Array();

			/*arrays*/
			
			var p1 = $("#pok_searh2");		/*contant*/

			var title = $("tr").children('td [colspan="3"]').children("a").children("b"); /*title kommand*/
			var next = $("tr").find('td [colspan="3"]').children("a").children("b");	/*first name of command*/

			title.each(function(index,element){	/*search and filtering title*/

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
						//console.log(string);
						z = 1;
					}
	
			});

			/*first name of command*/
			var title_name = $('a').parent().parent().prev().children().children().next().children("b").parent().parent().parent().next().children().next().children("a");

			title_name.each(function(index,element){		/*filtering and putting array4*/

				var str = $(element);
				var string = str.text();

				if(string != ""){
					ar4.push(string);
				}

			});

			var name = $('[align="left"]').children("a");	/*"td > a nazvaniya komand"*/

			name.each(function(index,element){

				var str = $(element);

				var string = str.text();
				var href = str.attr("href");


				arhref.push(href);

			});


			var name_new = $('[align="left"]');	/*"new name of komand"*/

			//new function

			var betta_fix = 0;
			var num = 0;

			name_new.each(function(index,element){

				var str = $(element).html();
				

				//filtration 
				var kommand_filtration = /\>[\wа-я]+\s*[\wа-я]*\<\/\u|\>[\wа-я]+\s*\<\/\a\>|>Қазақша|>中文|>ქართული|>Español|>Français|>Українська|>Português|>Română|\>\<b\>[\wа-я]+\s[\wа-я]+\<\/b\>\<\/\a\>|^\>Türkçe\<\/a\>$|\>\s\<a\shref\=\"\/\"\sid\=\"olimp\_logo\"\>\<img\ssrc\=\"\/img\/logo\_L0\.gif\"\sborder\=\"\d\"\>\<\/a\>\s\<\/div\>|\>Включить\sнумерацию\sматчей\sв\sлинии\<\/b\>/gi;	
				//filtration 

				var f1 = 0;	//fixed variable
				var f2 = 0;	//fixed variable
				
				var stringify = "";		//collect letters


				for(var i = 0;i < str.length;i++){

					//start filtration

					if(str[i] == ">"){
				
							f1 = i;

					}
					//start filtration


					//stop filtration

					if(str[i] == "<"){

						if(str[i+1] == "/"){

							if(str[i+2] == "f"){
								f2 = i;
							}
							
						}
						

					}

					//stop filtration


					if(f1 != 0){

						if(f2 != 1){

							stringify += str[i];
							//p1.append(str[i]);

						}
						
					}


				}

				if(!stringify.match(kommand_filtration)){

								var f5 = 0;
								var string_k = "";

								//p1.append(stringify);
																		//fixator komand
								for(var i = 0;i < stringify.length;i++){
									if(stringify[i] == "<"){

										if(f5 == 0){
											f5 = i;
										}
										
									}


								}

								for(var i = 1;i < stringify.length;i++){
									
									if(i < f5){

										string_k += stringify[i];

										if(betta_fix == 0){
											num = index;
											betta_fix++;
										}

									}

								}

								//fixator komand

								//fixator resultatov
								var f6 = 0;
								var f7 = 0;
								var f8 = 0;
								var f9 = 0;
								var f10 = 0;
								var f11 = 0;
								var string_koef = "";
								for(var i = 0;i < stringify.length - 25;i++){
									if(stringify[i] == ">"){
	
											//f6 = i;
									
									}

								}

								for(var i = stringify.length;i > 0 ;i--){
									if(stringify[i] == ">"){
											
											//p1.append(stringify[i]);

												f10 += 1;

											
									
									}

									if(f10 == 1){
										f6 = i - 1;	//standart
									}

									if(f10 == 2){
										f11 = i - 1;//kogda pusto
									}

								}

								for(var i = f6 + 1;i < stringify.length;i++){	//standartnii poisk

									if(stringify[i] == "<"){
										break;
									}
									if(stringify[i] != '"'){

												string_koef += stringify[i];

									}

								}

								for(var i = f11 + 1;i < stringify.length;i++){	//nahodit gde pusto

									if(stringify[i] == "<"){
										break;
									}
									if(stringify[i] != '"'){
											
												string_koef += stringify[i];

									}

								}


								//fixator resultatov

								ar5.push(string_k);
								ar6.push(string_koef);
								
								

							}
	

			});

			//new function
			
			var j=0;
			var z = 0;
			var s = num;
		var cot=-1;
			for(var i = 0;i < ar5.length;i++){

					//comparison first command and name command
					if(ar4[j] == ar5[i]){	//1 - nazvanie zagolovka == 2 - nazvaniya pervih kommand

					cot++
						var string5 =  '<div class="text2 text4'+cot+' slive"><div class="title-red col-sm-6"><p class="col-sm-offset-6">' + ar1[j] + '</p></div><div class="button-click col-sm-6 col-sm-6"><button type="button" class="btn btn-primary col-sm-pull-6 click">развернуть</button></div>  <div class="col-sm-10 col-sm-offset-1 ul-li"> <div class="col-sm-6"> <p class="load col-sm-10 col-sm-offset-1" v="' + arhref[s] + '">' + ar5[z] + '</p> </div> <div class="col-sm-6"> <p class="load2 col-sm-10 col-sm-offset-1"><b>' + ar6[z] + '</b></p> </div> </div></div>';


						


							//p1.append(string5);	//show content
       p1.append(string5);
							//center.push(string5);
						
							j++;

							z++;
							s++;


					}else{

							var string6 =   '<div class="col-sm-10 col-sm-offset-1 ul-li"> <div class="col-sm-6"> <p class="load col-sm-10 col-sm-offset-1" v="' + arhref[s] + '">' + ar5[z] + '</p> </div> <div class="col-sm-6 "> <p class="load2 col-sm-10 col-sm-offset-1"><b>' + ar6[z] + '</b></p> </div> </div>';



							//p1.append(string6);	//show content
							p1.append($('.text4'+cot).append(string6));
							//center.push(string6);

							z++;
							s++;
			
					}


			}

			var script = '<script> $(".load").click(function(){$("#download").show(); var v = $(this).attr("v"); var urltwo = $("#basetwo").val(); var baseaction = $("#baseaction").val(); var o = {"hid":v, }; $.ajax({"type":"POST", "url":urltwo, "datatype":"json html script", "data":o, "success":kx, "error":errorfunc }); function kx(result){if(result == "ok"){$("#download").hide(); window.location.href = baseaction; } } function errorfunc(){console.log("oshibka zaprosa"); } });' + '</' + 'script>';

			p1.append(script);	/*click*/
			center.push(script);


			for(var i = 0;i < center.length;i++){

				var p1 = $("#pok_searh2");		/*content*/

				//p1.append(center[i]);

			}

	};


	/*show content*/


	


	/*show content*/


	window.onload = function(){

		MySearch();


	};
