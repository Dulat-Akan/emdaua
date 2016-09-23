$(document).ready(function() {
	//сворачивание и разворачивание по клику
$('body').on('click','.click',box204);
  function box204(){
	 
	  var elem=$(this).parents('.text2').find('.ul-li');
        var display=$(this).parents('.text2').find('.ul-li').css('display');
		  if(display=='block'){
			elem.hide();
			$(this).text('развернуть');
		 }else{
			elem.show();
			$(this).text('свернуть');
		     }
       };

	
	
})//ready