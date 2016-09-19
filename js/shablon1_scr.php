

<!-- stranisa pokaza  -->

<input type="hidden" id="sha_scr" value="<?php echo base_url(); ?>">
<script>

$(".div_hl").click(function(){


   var tekushee_p = $("body").scrollTop();


      $("#scr_var").val(tekushee_p);    /*sohranie v peremennuyu polozhenie okna*/




  var myurl6 = $("#sha_scr").val();

	var v = $(this).attr("id");

	var data77 = {
	"zapros2":v,
					};

	


	$.ajaxSetup({

      "type":"POST",
      "url":myurl6 + "index.php/Pocaz_ob2/ob2",
      "success":kxx2
        });

function kxx2(result){


	

   $("#pokaz_poiska2").hide().delay(1000).show(1000, function(){




      





      var body = $("body");
      

     
      body.stop().animate({scrollTop:400},"400","swing");



   }).html(result);


   $("#pokaz_poiska").hide(500);

 


  
   




      						};
$.ajax({
  
    "data":data77,
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };



});


</script>	
