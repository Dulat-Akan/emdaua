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
			

			<div class="col-sm-9 col-sm-offset-3" style="top:200px;">
				

					<div class="col-sm-2"  style="padding: 5px;">

						
						<button v="n" style="margin-left:50px;" class="s btn btn-info">дилер готов</button>
						<button v="o" class="s btn btn-danger">остановить игру</button>
						<button v="p" class="s btn btn-primary">технический перерыв</button>
						

					</div>

		

		<div class="col-sm-12">
			<div class="col-sm-3">
				
				<h1 style="display:none;margin-left: 100px;" id="start"></h1>

			</div>
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