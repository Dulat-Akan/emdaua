$(document).ready(function(){


	var key = "number1";

	$(".y").click(function(){

		var t = $(this).attr("vv");

		var t2 = $(this);



		var ar = {
					"a":t,
					"b":key,
				}

				var url = $("#basex").val();

				$.ajax({
                    "type":"POST",
                    "url":url,
                  	"data":ar,
                    "datatype":"json html script",
                    
                  
                    "success":kx,
                    "error":errorfunc
                    
                  });

                function kx(result){

                		
                	var obj = jQuery.parseJSON(result);

                		//alert();
                		console.log(obj.a + "|" + obj.b);

                	}

                   function errorfunc(){
                      alert("oshibka zaprosa");
                   }


		

		

		

		//console.log(t);
	});



});



