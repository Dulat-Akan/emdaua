<?php
use yii\helpers\Url;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>





<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/dealercall">
	<div class="container">



		
		<div class="row">

			<div class="col-md-12">
				<div class="col-md-4 col-md-offset-4">
					<h1 style="text-align: center;">www.almabet.kz</h1>
				</div>
			</div>
			

			<div class="col-md-12" style="top:50px;">


					<div class="col-md-7">
						
						<img style="user-select: none; cursor: zoom-in;" src="http://192.168.3.150:8090/webcam.mjpeg" width="100%">


					</div>
				

					<div class="col-md-2 col-md-offset-1" style="margin-top:5px;margin-left: 10px;padding: 5px;">

						<button v="n" style="" class="s btn btn-info">дилер готов</button>
						<button v="o" class="s btn btn-danger">остановить игру</button>
						<button v="p" class="s btn btn-primary">технический перерыв</button>
						

					</div>





					</div>

		

		<div class="col-md-12">
			<div class="col-md-3">
				
				<h1 style="display:none;margin-left: 100px;" id="start"></h1>

			</div>
		</div>

			
		</div>
	</div>
	
</body>
</html>

<script>
	
	$(".s").click(function(){


			var start = $("#start");

			var r = $(this).attr("v");
			//alert(r);

				var ar = {
					"a":r,
				}

				var url = $("#base").val();

				

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

                	if(obj.a == "ok"){

                		if(obj.b == "n"){
                			start.text("Игра началась..").show("2000");
                		}else if(obj.b == "o"){
                			start.hide("2000").text("Игра остановлена..").show("2000");
                		}else if(obj.b == "p"){
                			start.hide("2000").text("Технический перерыв..").show("2000");
                		}else{
                			location.reload();
                		}

                              }



                	}

                   function errorfunc(){
                      alert("oshibka zaprosa");
                   }




	});



</script>