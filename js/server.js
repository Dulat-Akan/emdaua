	
$(document).ready(function(){

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

		                	/*console.log(result);*/

							if(result == "ok"){

								//window.location.reload();

							}else if(result == "false"){
								
							}
			
		                              }

		                   function errorfunc(){
		                      /*console.log("oshibka zaprosa");*/
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
		                      /*console.log("oshibka zaprosa");*/
		                   }


			}


			// setInterval(function(){
			// 	updategame();
			// },2000);

			// setInterval(function(){
			// 	updategametwo();
			// },2000);

			/*upravlenie vremenem ruletki*/

				


			/*ajax send function*/
										/*Sendgamestatus*/
			function sendajax(st){

				var url = $("#sa").val();		/*sendgamestatus*/

				var o = {
                      "data":st,
                      };

                   $.ajax({
                              "type":"POST",
                              "url":url,
                              
                              "datatype":"json html script",
                              "data":o,
                            
                              "success":kx,
                              "error":errorfunc
                        
                        });

                    function kx(result){

                      
                    	//console.log(result);
                      //console.log(result);
      
                                  }

                       function errorfunc(){
                          console.log("oshibka zaprosa v statuse");
                       }

               }/*kones function*/


               function sendajax2(){		//rouletteresult

				var urlk = $("#rs").val();

				/*var o = {
                      "data":st,
                      };*/

                   $.ajax({
                              "type":"POST",
                              "url":urlk,
                              
                              "datatype":"json html script",
                              /*"data":o,*/
                            
                              "success":kx7,
                              "error":errorfunc7
                        
                        });

                    function kx7(result7){

                      
                    	//console.log(result);
                      //console.log(result7);
                      //console.log(result7);
      
                                  }

                       function errorfunc7(){
                          console.log("oshibka zaprosa v statuse2");
                       }

               }/*kones function*/


               var fixupdateball = 0;

               function sendajax3(){			/*proverka statusa stavok*/

				var urlkk = $("#ball_update").val();

				/*var o = {
                      "data":st,
                      };*/

                   $.ajax({
                              "type":"POST",
                              "url":urlkk,
                              
                              "datatype":"json html script",
                              /*"data":o,*/
                            
                              "success":kx9,
                              "error":errorfunc9
                        
                        });

                    function kx9(result9){

                    	console.log(result9);

                      if(result9 == "7"){	

                      		//console.log("7");
                      		fixupdateball = 1;
                      		

                      }else if(result9 == "6")
      						
      						//console.log("ставки были");
      						fixupdateball = 0;
      						

                                  }

                       function errorfunc9(){
                          console.log("oshibka zaprosa v statuse");
                       }

               }/*kones function*/


               function deleteuserst(){			/*proverka statusa stavok*/

				var del = $("#delete_st").val();

				/*var o = {
                      "data":st,
                      };*/

                   $.ajax({
                              "type":"POST",
                              "url":del,
                              
                              "datatype":"json html script",
                              /*"data":o,*/
                            
                              "success":kxd,
                              "error":errorfuncd
                        
                        });

                    function kxd(resultd){

                    	if(resultd == "1"){
                    		console.log("удалены не прошедшие ставки");
                    	}else if(resultd == "2"){
                    		console.log("не прошедших ставок не было");
                    	}

                                  }

                       function errorfuncd(){
                          console.log("oshibka zaprosa v statuse");
                       }

               }/*kones function*/






			/*ajax function*/




			var gamestatus = 1;

			var updatetime;

			var date = Math.round(new Date().getTime() / 1000);

			function updatetimer(){

				date = Math.round(new Date().getTime() / 1000);

				startdealer = date + blockdealertime;

				blocktable = date + blocktabletime;

				protectballstatus2 = date + protectballstatus;

				blocksystem = date + blocksystemtime + blocktabletime;

				loading = date + loadingtime;

				unblock = date + unblocktime;

			}

			// var blocktabletime = 10;	/*60*/		/*время блокировки клиента*/

			// var blocksystemtime = 2;	/*10*/		/*vremya  blokirovki sistemi*/

			// var protectballstatus = 20;	//60	proverka statusa obnovleniya sharika

			// var loadingtime = 22;		/*125*/		/*vremya podscheta stavok*/

			// var unblocktime = 25;		/*130*/		/*vremya razblokirovki*/

			var blockdealertime = 46;	//time to start dealer
			//var blockdealertime = 43;	//time to start dealer

			var blocktabletime = 57; //time to block players

			var blocksystemtime = 7;	//90 sec

			//var protectballstatus = 167;	//60	proverka statusa obnovleniya sharika
			//var protectballstatus = 107;	//60	proverka statusa obnovleniya sharika
			//var protectballstatus = 112;	//60	proverka statusa obnovleniya sharika
			var protectballstatus = 95;	//60	proverka statusa obnovleniya sharika

			//var loadingtime = 170;		
			//var loadingtime = 110;		
			//var loadingtime = 114;		//obsaya obrabotka resultatov
			var loadingtime = 97;		//obsaya obrabotka resultatov

			//var unblocktime = 177;
			//var unblocktime = 117;
			//var unblocktime = 117;
			var unblocktime = 102;

			var startdealer = date + blockdealertime;

			var blocktable = date + blocktabletime;

			var blocksystem = date + blocksystemtime + blocktabletime;	/*beretsya iz rascheta ot vremeni blokirovki clienta*/

			var protectballstatus2 = date + protectballstatus;	/*proverka obnovleniya sharika*/

			var loading = date + loadingtime;

			var unblock = date + unblocktime;

			

			setInterval(function(){

				

				updatetime = Math.round(new Date().getTime() / 1000);

				if(updatetime == startdealer){

						sendajax(7);
						console.log("старт диллера ..");

				}else if(updatetime == blocktable){

					
						sendajax(3);
						console.log("время блокировки клиента ..");
					
					
				}else if(updatetime == blocksystem){

					
						sendajax(2);	
						console.log("время блокировки системы ..");
					
					//esli status 3 to klientu nuzhno otpravit resultati		
					//pri statuse 0 zabrat vse resultati	//esli status 3 nuzhno zablochit clienta
					//pri statuse 1 razblokirovat clienta
					//pri statuse 4 ot dilera texnicheskii pereriv dilera

					
				}else if(updatetime == protectballstatus2){

					
					sendajax3();
					console.log("проверка шара");
					

				}else if(updatetime == loading){

					if(fixupdateball == 1){

						sendajax(1);	/*status perekrutki ruletki*/
						updatetimer();
						console.log("шарик не обновился ..");
						deleteuserst();

					}else if(fixupdateball == 0){ //vremya vichisleniya dlya clientov
						sendajax2();
						console.log("обработка результатов ..");
					}
					
				}else if((updatetime == unblock) && (gamestatus != 4)){
					sendajax(1);
					updatetimer();
					console.log("система разблокирована ..");
				}else if(gamestatus == 4){
						console.log("ждем дилера");
				}

				
				//console.log(updatetime);

			},1000);
					/*upravlenie vremenem ruletki*/
			



			


			/*ajax update server*/

				var checkx = 0;
					

               function updatedealerstatus(){


					var urll = $("#ds").val();

					/*var j = {
	                      "data":st,
	                      };*/

	                   $.ajax({
	                              "type":"POST",
	                              "url":urll,
	                              
	                              "datatype":"json html script",
	                              /*"data":j,*/
	                            
	                              "success":kxx,
	                              "error":errorfuncv
	                        
	                        });

	                    function kxx(result2){

	                      			if(result2 == "4"){
	                      				gamestatus = 4;		//ostanovka raboti dilera
	                      				checkx = 0;
	                      			}

	                      			if(result2 == "5"){
	                      									//prodolzhenie raboti dilera
	                      				gamestatus = 1;
	                      				if(checkx == 0){
	                      					updatetimer();
	                      					checkx = 1;
	                      				}

	                      			}
	      
	                                  }

	                       function errorfuncv(){
	                          console.log("oshibka vW");
	                       }



				}
               
				

				setInterval(function(){
						updatedealerstatus();
				},1000);

				/*ajax update server*/


				/*upravlenie vremenem ruletki*/


				$("#status").click(function(){

					//sendajax(1);
					//updatedealerstatus();
					//sendajax2();


			});


				




});

