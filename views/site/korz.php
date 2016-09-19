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
	

<div class="container">
<div class="col-md-12" style="margin-bottom:30px;font-size:18px;">
	

<div class="col-md-2">Дата</div>

<div class="col-md-4">играющие команды</div>

<div class="col-md-2">коэффициент</div>

<div class="col-md-2">сумма</div>

<div class="col-md-2"><a class="btn btn-info" href="<?php echo Url::to('@control/historykorzina'); ?>">история ставок</a></div>

</div>


<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/updatekorzina">


<div class="col-md-8" style="display:none;" id="uvedomlenie">
	
	<div class="col-md-3 col-md-offset-4">
		
		<div class="alert alert-success">
 				<h4 style="margin-left:8px;">ставка принята</h4>
		</div>
	</div>


</div>


<div class="col-md-8" style="display:none;" id="uvedomlenie2">
	
	<div class="col-md-3 col-md-offset-4">
		
		<div class="alert alert-error">
 				<h4 style="margin-left:8px;">Внимание вы допустили ошибку!..</h4>
		</div>
	</div>


</div>



<?php 
foreach ($model as $row) {
 ?>

<div class="col-md-12">
	
<hr>

<div class="col-md-2"><?php echo $row['date_stavki']; ?>-<?php echo $row['time_stavki']; ?></div>

<div class="col-md-3"><?php echo $row['name_kommand']; ?></div>

<div class="col-md-3"><?php echo $row['ishod']; ?>  <?php echo $row['k']; ?></div>

<div class="col-md-2">

	<div class="input-group">
    <input class="form-control" type="number" max="1-100" required>
    <span class="form-control-feedback"></span>
    </div>
    <span class="help-inline" style="display:none;">заполните!</span>
  

 
	</div>


<div class="col-md-2"><input type="submit"  id="<?php echo $row['id']; ?>" r="<?php echo $row['res_id']; ?>" class="btn btn-danger" value="поставить"></div>

</div>

<?php 
}
 ?>


<script>
	
$(".btn").click(function(){

				var check = true;

				var input = $(this).parent().prev().children().children('[class="form-control"]');

				var element = $(this).parent().prev().children();

				var parent = $(this).parent().parent('[class="col-md-12"]');

				var message = $(this).parent().prev().children("span");

				var element2 = $(this).parent().prev().children().children('[class="form-control-feedback"]');
				
				var sum = input.val();

				var id = $(this).attr("id");
				var resid = $(this).attr("r");


				/*alert(resid);*/

				input.each(function(){


						if(this.checkValidity()){


							element.addClass("has-success").removeClass("has-error");
							element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

							message.hide(1000);

						}else{
							
							element.removeClass("has-success").addClass("has-error");
							element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

							message.show(1000);

							check = false;
							
						}


					});


				if(check){

				var ar = {
					"sum":sum,
					"id":id,
					"resid":resid,	
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

                	if(result == "ok"){
						
                		$("#uvedomlenie").show(1000);
                		$("#uvedomlenie").delay(2000);
                		$("#uvedomlenie").hide(1000);
                		parent.hide(1000);
                	}else{
                		$("#uvedomlenie2").show(1000);
                		$("#uvedomlenie2").delay(2000);
                		$("#uvedomlenie2").hide(1000);
                	}

                  

					
					
                              }

                   function errorfunc(){
                      alert("oshibka zaprosa");
                   }


                   }

			



});




</script>

</div>

</body>
</html>