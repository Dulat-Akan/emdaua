
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



	

	

	
	setInterval(function(){

		var zopim = $(".zopim");
		

		zopim.css("display","none");


		if(zopim.css("display") == "none"){

			exit;
		}

			


	},500);
