<?php use yii\helpers\Url; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/number">



<input style="top:500px;left:500px;position: relative;" id="n" type="button" class="btn btn-info" value="тест">


<script>
	
			$("#n").click(function(){


					var t = 8855;
					var data = {
                            "number":t,
                        }
                     var base = $("#base").val();
                        $.ajax({
                            "type":"POST",
                            "url":base,
                            "data":data,
                            "datatype":"json html script",
                           
                          
                            "success":kx,
                            "error":errorfunc
                            
                          });


                         function kx(result){



							if(result == "1"){

								alert(1);

							}
			
		                              }

		                   function errorfunc(){
		                      /*alert("oshibka zaprosa");*/
		                   }


                        });


</script>
	
</body>
</html>