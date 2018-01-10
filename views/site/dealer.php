<?php
use yii\helpers\Url;
 ?>


<!-- background-size: 100%;background: url(<?php echo  Url::to('@img'); ?>/mobile/casinor1.jpg) no-repeat; -->

<div data-role="page" id="main" style="">			<!-- glavnaya stranisa -->
	
 

    

	<div data-role="header" data-position="fixed" data-theme="b">
			
			<h1>www.almabet.kz</h1>


	</div>



	<div role="main" class="ui-content" >
			
			         
				
					<div class="ui-grid-solo">
					    <div class="ui-block-a"><a href="#" style="font-size:16px;" id="command" class="ui-btn ui-shadow ui-corner-all ui-btn-b">до запуска осталось</a></div>
					</div>

					<div class="ui-grid-solo">
					    <div class="ui-block-a"><a href="#" id="timer" style="color:red;font-size:25px;" class="ui-btn ui-shadow ui-corner-all ui-btn-b"></a></div>
					</div>

					<div class="ui-grid-solo">
					    <div class="ui-block-a"><a href="#" id="start" class="ui-btn ui-shadow ui-corner-all ui-btn-b">статус игры</a></div>
					</div>


			<div class="ui-grid-solo">
                <div class="ui-block-a"><button v="5" class="ui-shadow ui-btn ui-corner-all s">продолжить игру</button></div>
            </div>

            <div class="ui-grid-solo">
                <div class="ui-block-a"><button v="4" class="ui-shadow ui-btn ui-corner-all s">технический перерыв</button></div>
			   
			</div>
            

           
				
				


	</div>


	<div data-role="footer" data-theme="b" >
		

        <p style="text-align: center;">email разработчика: "astana7777777@gmail.com"</p>
            
	</div>


        
 

</div>







<input id="base" type="hidden" value="<?php echo Url::to('@base'); ?>/site/dealercall">

<input id="base2" type="hidden" value="<?php echo Url::to('@base'); ?>/site/gamestatusclient">

			




<script>

	var fixtime = 0; 

	var command = $("#command");

	var timer = $("#timer");



	var gl = 120;

	function updatetimer(){

		gl--;

		timer.text(gl);

		if(gl == 0){
			gl = 120;
		}

	}


	var fixmissing = 0;

	function gamestatus(){


				var url2 = $("#base2").val();

				

				$.ajax({
                    "type":"POST",
                    "url":url2,
                  	
                    "datatype":"json html script",
                    
                  
                    "success":kx2,
                    "error":errorfunc2
                    
                  });

                function kx2(result){

                	
                		//console.log(result);

                		if(fixgames == 0){

                		if(result == "1"){

                			if(fixmissing == 0){
                			command.text("до запуска осталось..!");
                			
                			command.css("color","white");
                			gl = 120;
                			fixtime = 1;
                			fixmissing = 1;
                			}

                		}else if(result == "3"){

                			if(fixmissing == 1){
                			fixtime = 0; 
                			timer.empty();
                			command.text("запустите шарик..!");
                			command.css("color","#5bc0de");
                            fixmissing = 0;
                			}
                		}



                		}else if(fixgames == 1){
                			command.text("остановлено");
                			timer.text("остановлено");
                			
                		}

                	}

                   function errorfunc2(){
                      console.log("oshibka zaprosa");
                   }


	}



	setInterval(function(){

		if(fixtime == 1){
			updatetimer();
		}
		

		gamestatus();

	},1000);



var fixgames = 0;


	
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

                		if(obj.b == "5"){
                			start.hide("2000").text("игра началась..").show("2000");
                			command.text("до запуска осталось...");
                			timer.text("ожидание..");
                			fixgames = 0;
                			
                		}else if(obj.b == "4"){
                			start.hide("2000").text("игра остановлена..").show("2000");
                			fixgames = 1;
                		}else if(obj.b == "5"){
                			start.hide("2000").text("технический перерыв..").show("2000");
                			fixgames = 1;
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