$(document).ready(function() {
	//сворачивание и разворачивание по клику

	
$('body').on('click','.click',box204);
  function box204(){
	 
	  var elem=$(this).parents('.text2').find('.ul-li');
        var display=$(this).parents('.text2').find('.ul-li').css('display');
		  if(display=='block'){
			elem.hide();
			$(this).text('развернуть');
			$(this).parents('.text2').css({'border':'1px solid #ccc'})
		 }else{
			elem.show();
			$(this).parents('.text2').css({'border':'none'})
			$(this).text('свернуть');
		     }
       };

	
	
})//ready