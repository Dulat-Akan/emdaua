<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserpaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Открытие закрытие смены"';


$this->params['breadcrumbs'][] = $this->title;
?>

<script>
	$("#opensmen").click(function () {
		$("#opensmena").show();
	});
</script>
<input type="hidden" id="url" value="<?php echo Url::to('@base'); ?>/userpay/shift">
<input type="hidden" id="url2" value="<?php echo Url::to('@base'); ?>/userpay/opensmena">
<input type="hidden" id="url3" value="<?php echo Url::to('@base'); ?>/userpay/closesmena">
<input type="hidden" id="kaslog" value="<?php echo $kassirlogin;?>">

<div id="opened"  class="alert alert-info alert-with-icon" data-notify="container">
	<span data-notify="message">Смена открыта. Логин кассира : <?php echo $kassirlogin;?></span>
	&nbsp &nbsp <a href="#" id="closesmen" style="color:blue; text-decoration:underline">Закрыть смену</a>
</div>

<div id="closed"  class="alert alert-info alert-with-icon" data-notify="container">
	<span data-notify="message">Смена закрыта. Логин кассира: <?php echo $kassirlogin;?> </span>
	&nbsp &nbsp <a href="#" id="opensmen" style="color:blue; text-decoration:underline">Открыть смену</a>
</div>

<div class="card" id="opensmena" style="padding: 50px 0px">
	
	<div class="form-group" style="padding: 0px 50px">
		<label class="ital">Логин кассира</label>
		<input type="text" class="form-control border-input" value="" id="login">
	</div>
	
	<div class="form-group" style="padding: 0px 50px">
		<label  class="ital">Пароль</label>
		<input type="text" class="form-control border-input" value="" id="pass">
	</div>
	<div class="form-group"  style="padding: 0px 50px">
		<button id="getkassir" style="background-color: #93291b; border: 1px solid #333333; border-radius: 3px 3px 3px 3px; box-shadow: 0 0 1px #93291b inset; color: #f5f5f5; padding: 5px;">Открыть смену</button>
	</div>
</div>

<div class="card" id="closesmena" style="padding: 50px 0px">
	
	<div class="form-group" style="padding: 0px 50px">
		<label  class="ital">Логин кассира</label>
		<input type="text" class="form-control border-input" value="<?php echo $kassirlogin;?>" id="login" disabled>
	</div>
	<div class="form-group"  style="padding: 0px 50px">
		<label  class="ital">Пароль для  <?php echo $kassirlogin;?></label>
		<input type="text" class="form-control border-input" value="" id="pass2">
	</div>
	<div class="form-group"  style="padding: 0px 50px">
		<button id="getkassir2" style="background-color: #93291b; border: 1px solid #333333; border-radius: 3px 3px 3px 3px; box-shadow: 0 0 1px #93291b inset; color: #f5f5f5; padding: 5px;">Закрыть смену</button>
	</div>
	
	
</div>
	
<?php 
if($isopen == 1){
	echo '<script>$("#opensmena").hide();</script>' ;
	echo '<script>$("#closesmena").hide();</script>' ;
	echo '<script>$("#closed").hide();</script>' ;
}
else{
	echo '<script>$("#opensmena").hide();</script>' ;
	echo '<script>$("#closesmena").hide();</script>' ;
	echo '<script>$("#opened").hide();</script>' ;
}
?>

<script>
	$("#opensmen").click(function () {
		$("#opensmena").show();
	});
	$("#closesmen").click(function () {
		$("#closesmena").show();
	});
        $("#getkassir").click(function () {
            var login = $("#login").val();
			var pass = $("#pass").val();
			var url = $("#url2").val();
			
            var values = {
                "login":login,
                "pass":pass,
            };

            $.ajax({
                type: 'post',
                url: url, 
                data: values,
                dataType:"text", 
                response: 'text',
                success: function(result){
					if(result==1)
						alert("Новая смена открыта");
					if(result==0)
						alert("Не правильный пароль");
					
					
                    console.log("Opened successfull"+result);
					location.reload(true);
                   // window.location.reload();
                    
                },
                error: function(result){
					
                    console.log("Opened error"+result);
                }

            }); 
            
        });
		
		 $("#getkassir2").click(function () {
            var login = $("#kaslog").val();
			var pass = $("#pass2").val();
			var url = $("#url3").val();
			
            var values = {
                "login":login,
                "pass":pass,
            };

            $.ajax({
                type: 'post',
                url: url, 
                data: values,
                dataType:"text", 
                response: 'text',
                success: function(result){
					if(result==1)
						alert("Смена закрыта");
					if(result==0)
						alert("Не правильный пароль");
					
					
                    console.log("Closed successfull"+result);
					location.reload(true);
					//location.reload(true);
                   // window.location.reload();
                    
                },
                error: function(result){
					
                    console.log("Closed error"+result);
                }

            }); 
            
        }); 
    </script>