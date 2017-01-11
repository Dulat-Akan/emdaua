function MySearch(){

		var arsearch = new Array();		/*"search name"*/
			var arsearchkoef = new Array();		/*"search koef"*/
			var arhref = new Array();		/*"ssilki na igri"*/
			var ar1 = new Array();		/*"title"*/
			var ar2 = new Array();		/*"name"*/
			var ar3 = new Array();		/*"main array"*/
			var ar5 = new Array();		/*"command_name"*/
			var ar6 = new Array();		/*"kommand2"*/


			
			var p1 = $("#pok_searh2");

		

			var kommand2 = $('.m_c').children("td").next();
			
var kommand2_name = $('.m_c').next().children("td").next().children("a");


			kommand2_name.each(function(index,element){

				var str = $(element);

				var string = str.text();

				ar5.push(string);


			});

			kommand2.each(function(index,element){

				var str = $(element);

				var string = str.text();

				ar6.push(string);


			});

			

			var line_date = $(".central_td").children("center").children("h1");

			line_date.each(function(index,element){

				var str = $(element);
				var string = str.text();

				var string2 = string.replace("Линия","Ставки");

				line_date = string2;


			});

			

			

			var name = $('[align="left"][valign="middle"]').children("a");	/*"td > a"*/

			/*alert(name.text());*/

			name.each(function(index,element){

				var str = $(element);

				var string = str.text();
				var href = str.attr("href");

				ar2.push(string);
				arhref.push(href);

			});


			var p = 0;
			var v = 0;
			

			var i;
			var j=0;
			var z = 0;


var r;
		
			for(i = 0;i < ar2.length;i++){


					if(ar5[j] == ar2[i]){
	var string5 =  '<div class="soccerpage text2" style="border:none"><div class="col-sm-4 line-date">' + line_date + '</div><div class="col-sm-4 title-red">' + ar6[j]+ '</div><div class="button-click col-sm-4"><button type="button" class="btn btn-primary click">свернуть</button></div><br><br><div class="col-sm-12 ul-li"> <div class="col-sm-8 col-sm-offset-2"><p class="load load3" v="' + arhref[i] + '">' +'<span class="col-sm-offset-3 ">'+ ar2[i] +'</span>'+ '</p> </div>  </div></div>';

							p1.append(string5);
							
							j++;

							z++;


					}else{
var string6 =  '<div class="col-sm-12 ul-li"> <div class="col-sm-8 col-sm-offset-2"><p class="load load3" v="' + arhref[i] + '">' + '<span class="col-sm-offset-3">'+ar2[i] + '</span>'+'</p> </div>  </div>';
							
							p1.append($('.text2').append(string6));

							z++;
	
							
					}


			}

//otpr
var script = '<script> $(".load").click(function(){$("#download").show();var v = $(this).attr("v"); var urltwo = $("#basetwo").val(); var baseaction = $("#baseaction").val(); var o = {"hid":v, }; $.ajax({"type":"POST", "url":urltwo, "datatype":"json html script", "data":o, "success":kx, "error":errorfunc }); function kx(result){if(result == "ok"){$("#download").hide(); window.location.href = baseaction; } } function errorfunc(){alert("oshibka zaprosa"); } });' + '</' + 'script>';

			p1.append(script);	


	};



	

	window.onload = function(){

	
                   MySearch();
                   

	};

