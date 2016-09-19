$("#search").click(function(){

			var p1 = $("#pok_searh2");

			var p2 = $("#pok_searh3");

			var pokaz_result = $("#pok_res1");	/*poiskovaya chast*/

			var f1 = pokaz_result.find(".rs");	/*block schitivaniya 1*/
			

			/*net resultatov*/


			/*var table_cancel = pokaz_result.find(".smallwnd2");

			alert(table_cancel.attr("width"));*/

			/*net resultatov*/



			/*search command name*/
			/*nazvanie igr*/
			/*search date*/

			var ar1 = new Array();
			var ar2 = new Array();

			var date = $('[width="35%"]');

			date.each(function(index,element){

				var str = $(element);

				var string = str.html();
				
				ar1.push(string);
				
			});

			/*search date*/
			/*search command name*/

			/*search koeffisient*/
			var f2 = pokaz_result.find(".hi");	/*block schitivaniya 2*/

			var koef = $('[width="65%"]').children("b");

			koef.each(function(index2, element2){

				var str2 = $(element2);

				var string2 = str2.html();
		
				ar2.push(string2);

			});
			

			var i;
			var z = 0;
			for(i = 0;i < ar1.length;i++){

				var string5 = "<tr><td>" + ar1[i] + "</td><td>" + "<b>" + ar2[z] + "</b>" + "</td><tr>";

					p1.append(string5);

					z++;
	
			}

			/*search koeffisient*/

	});






















	$content = file_get_contents('http://olimp.kz/result');