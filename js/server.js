	
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

		                	/*alert(result);*/

							if(result == "ok"){

								//window.location.reload();

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


			setInterval(function(){
				//updategame();
			},2000);

			setInterval(function(){
				//updategametwo();
			},2000);

			/*upravlenie vremenem ruletki*/

				


			/*ajax send function*/
										/*Sendgamestatus*/
			function sendajax(st){

				var url = $("#sa").val();

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
                      //alert(result);
      
                                  }

                       function errorfunc(){
                          alert("oshibka zaprosa v statuse");
                       }

               }/*kones function*/


               function sendajax2(){

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
                      //alert(result7);
                      console.log(result7);
      
                                  }

                       function errorfunc7(){
                          alert("oshibka zaprosa v statuse");
                       }

               }/*kones function*/






			/*ajax function*/




			var gamestatus = 1;

			var updatetime;

			var date = Math.round(new Date().getTime() / 1000);

			function updatetimer(){

				date = Math.round(new Date().getTime() / 1000);

				blocktable = date + blocktabletime;

				blocksystem = date + blocktabletime + blocksystemtime;

				loading = date + loadingtime;

				unblock = date + unblocktime;

			}

			var blocktabletime = 10;	/*60*/

			var blocksystemtime = 2;	/*10*/

			var loadingtime = 15;		/*125*/

			var unblocktime = 20;		/*130*/

			// var blocktabletime = 58;

			// var blocksystemtime = 10;

			// var loadingtime = 112;		

			// var unblocktime = 118;

			var blocktable = date + blocktabletime;

			var blocksystem = date + blocktabletime + blocksystemtime;

			var loading = date + loadingtime;

			var unblock = date + unblocktime;

			

			setInterval(function(){

				

				updatetime = Math.round(new Date().getTime() / 1000);

				if(updatetime == blocktable){
					sendajax(3);
					console.log("время блокировки клиента ..");
				}else if(updatetime == blocksystem){
					sendajax(2);	

					//esli status 3 to klientu nuzhno otpravit resultati		
					//pri statuse 0 zabrat vse resultati	//esli status 3 nuzhno zablochit clienta
					//pri statuse 1 razblokirovat clienta
					//pri statuse 4 ot dilera texnicheskii pereriv dilera

					console.log("время блокировки системы ..");
				}else if(updatetime == loading){
					sendajax2();
					console.log("обработка результатов ..");
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
	                          alert("oshibka vW");
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

