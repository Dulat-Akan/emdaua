$(document).ready(function() {
	var time_start=30;//время ставок
	var seconds2=60;//время обратного отчета или блокировки
	var baza_check=2;//за две минуты до старта проверить базу, число 2 можно изменить
	
	
	
	
	//alert($('.header-side').css('width'));
	var count1=-1;
	var count2=-1;
	var arrres=new Array();
	var arrnumber2= new Array();//массив для хранения выборки по двум числам
	var overlay=$("#overlay_r");
	var n;
		var number_arr=new Array();
	var arrnumber4=new Array();//массив для хранения выборки по четыре цифре
	var obj = $('#cube .y');
	
	
/*----------------------------------начало считывания боковых 2 к 1----------------------------------------------------*/
var array_2k1 =	new Array();
array_2k1=[3,6,9,12,15,18,21,24,27,30,33,36,36];

var array1_2k1 =	new Array();
array1_2k1=[2,5,8,11,14,17,20,23,26,29,32,35,35];

var array2_2k1 =	new Array();
array2_2k1=[1,4,7,10,13,16,19,22,25,28,31,34,34];

var arrnumber_2k1=new Array();
$('.header-side-in div').click(function(){
	var texts=$(this).text();
	texts=$.trim(texts);
	var attrid=$(this).attr('id');
	if(attrid){
	if($('#cube #'+attrid).index() == $(this).index()){
		
		if(attrid=='first'){
		for(var i=0; i < array_2k1.length; i++ ){
			arrnumber_2k1[i]=array_2k1[i];
		}
			
		}
		
		if(attrid=='middle'){
		for(var i=0; i < array1_2k1.length; i++ ){
			arrnumber_2k1[i]=array1_2k1[i];
		}
			
		}
		if(attrid=='bottom'){
		for(var i=0; i < array2_2k1.length; i++ ){
			arrnumber_2k1[i]=array2_2k1[i];
		}
			
		}
	
		
					//очищение экрана
		 $('div.y').each(function(){
				var rgb=$(this).find('p').css('backgroundColor');
		     var regV=/[\d]+/gi;
			 var result=$.trim(rgb.match(regV));
			 if(result == '255,0,0'){
					//alert(14)
				$(this).find('p').css({'backgroundColor':'#FE4332','border':'none'});
				
			}
			if(result == '0,0,0'){
				$(this).find('p').css({'backgroundColor':'#373636','border':'none'});
				
			}
				
			})
	
	 var counter=-1;
			 obj.each(function(){
			 counter++;
				
				var number=$(this).text();
					if(number== 36){
					//alert(counter);return false;
				}
				
				
		if(in_array($.trim(number),arrnumber_2k1)){
		
		
			var index = counter;
					var result_2k1=obj.eq(index).find('p');
					
	var rgb=result_2k1.css('backgroundColor');
	
		     var regV=/[\d]+/gi;
			 var result_color=$.trim(rgb.match(regV));
	
	
if(result_color == '254,67,50'){
			result_2k1.css({'backgroundColor':'red','border':'5px solid gold'});
			
		}
			if(result_color == '55,54,54'){
			result_2k1.css({'backgroundColor':'black','border':'5px solid gold'});
			
		}
		
		}
			
		})
	
	

		
		
	
		
	

		//arrnumber_2k1[i]=array_2k1[i];
		
	
			
	resultarr_2k1();
		
		
		
	}
	}
	


	
	
	
	
	
			
		
			
			
		
	
	
	
	
	
})


	
	

	
	
	
	
	
	
	
	
/*--------------начало функции считывания двух чисел-----------------------------------*/	
	$('#cube .s .s-in').click(function(){
	
	/*------здесь хранится числа считываемые с стола ------*/
		var number_prev=$(this).parent().prev().text();//первое число
		var number_next=$(this).parent().next().text();//второе число
		
		/*----  дальше идет вычисление для подсветки выбранных чисел  ---*/
		var prev=$(this).parent().prev().find('p');
		var next=$(this).parent().next().find('p');
		var rgb_prev=prev.css('backgroundColor');
		var rgb_next=next.css('backgroundColor');
	    var regV=/[\d]+/gi;
	    var results_prev=$.trim(rgb_prev.match(regV));
		 var results_next=$.trim(rgb_next.match(regV));
		 //alert(results);alert(results_next);
		
		//очищение экрана
		 $('div.y').each(function(){
				var rgb=$(this).find('p').css('backgroundColor');
		     var regV=/[\d]+/gi;
			 var result=$.trim(rgb.match(regV));
			 if(result == '255,0,0'){
					//alert(14)
				$(this).find('p').css({'backgroundColor':'#FE4332','border':'none'});
				
			}
			if(result == '0,0,0'){
				$(this).find('p').css({'backgroundColor':'#373636','border':'none'});
				
			}
				
			})
		
		//alert(results_next);
		
			if(results_prev == '255,0,0'){
		prev.css({'backgroundColor':'red','border':'5px solid gold'});
			
		}
			if(results_prev == '0,0,0'){
		prev.css({'backgroundColor':'black','border':'5px solid gold'});
			
		}
		
		
		if(results_next == '0,0,0'){
			next.css({'backgroundColor':'black','border':'5px solid gold'});
			
		}
			if(results_next == '255,0,0'){
			
			next.css({'backgroundColor':'red','border':'5px solid gold'});
		}
		
		
		
		
			if(results_next == '254,67,50'){
			next.css({'backgroundColor':'red','border':'5px solid gold'});
			
		}
			if(results_next == '55,54,54'){
			next.css({'backgroundColor':'black','border':'5px solid gold'});
			
		}
		
		
		if(results_prev == '254,67,50'){
		prev.css({'backgroundColor':'red','border':'5px solid gold'});
			
		}
	
		if(results_prev == '55,54,54'){
			prev.css({'backgroundColor':'black','border':'5px solid gold'});
			
		}
			
			
			//на выходе
				if(number_prev && number_next){
		
				var ttt=[number_prev, number_next];
		arrnumber2=ttt;
			
	resultarr2();
			
		}
		
		
		
	
		
		
		})
		//var t=new Array()
		//t[0]=25;
		//rr_number2[0]=t;
		
		
/*--------------окончание функции считывания двух чисел-----------------------------------*/	

	
	/*--------------начало функции считывания четырех чисел-----------------------------------*/
/*---------------------определяем пары по четыре-------------------*/
	var arr1= new Array();
	var arr2= new Array();
	var arr3= new Array();
	var arr4= new Array();
	arr1[0]=3;  
	arr2[0]=6;
	arr3[0]=2;
	arr4[0]=5;
	/**/
	arr1[1]=6;
	arr2[1]=9;
	arr3[1]=5;
	arr4[1]=8;
	/**/
    arr1[2]=2;
	arr2[2]=5;
	arr3[2]=1;
	arr4[2]=4;
	/**/
	arr1[3]=5;
	arr2[3]=8;
	arr3[3]=4;
	arr4[3]=7;
	/**/
	arr1[4]=8;
	arr2[4]=11;
	arr3[4]=7;
	arr4[4]=10;
	/**/
	arr1[5]=9;
	arr2[5]=12;
	arr3[5]=8;
	arr4[5]=11;
	/**/
	arr1[6]=12;
	arr2[6]=15;
	arr3[6]=11;
	arr4[6]=14;
		/**/
	arr1[7]=18;
	arr2[7]=21;
	arr3[7]=17;
	arr4[7]=20;
		/**/
    arr1[8]=21;
	arr2[8]=24;
	arr3[8]=20;
	arr4[8]=23;
		/**/
    arr1[9]=14;
	arr2[9]=17;
	arr3[9]=13;
	arr4[9]=16;
		/**/
    arr1[10]=17;
	arr2[10]=20;
	arr3[10]=16;
	arr4[10]=19;
		/**/
    arr1[11]=20;
	arr2[11]=23;
	arr3[11]=19;
	arr4[11]=22;
		/**/
    arr1[12]=15;
	arr2[12]=18;
	arr3[12]=14;
	arr4[12]=17;
	
	/**/
    arr1[13]=11;
	arr2[13]=14;
	arr3[13]=10;
	arr4[13]=13;
		/**/
    arr1[14]=24;
	arr2[14]=27;
	arr3[14]=23;
	arr4[14]=26;
		/**/
    arr1[15]=23;
	arr2[15]=26;
	arr3[15]=22;
	arr4[15]=25;
		/**/
    arr1[16]=27;
	arr2[16]=30;
	arr3[16]=26;
	arr4[16]=29;
			/**/
    arr1[17]=30;
	arr2[17]=33;
	arr3[17]=29;
	arr4[17]=32;
		/**/
    arr1[18]=33;
	arr2[18]=36;
	arr3[18]=32;
	arr4[18]=35;
		/**/
    arr1[19]=26;
	arr2[19]=29;
	arr3[19]=25;
	arr4[19]=28;
		/**/
    arr1[20]=29;
	arr2[20]=32;
	arr3[20]=28;
	arr4[20]=31;
			/**/
    arr1[21]=32;
	arr2[21]=35;
	arr3[21]=31;
	arr4[21]=34;
/*-------------------------------вычисляем подсветку для выделения выбранных 4 чисел--------------------------------------------------------*/	
	
$('#cube .s .ugol').click(function(){
	$('input[name=summamodalr]').val("");
	
	
		 $('div.y').each(function(){
				var rgb=$(this).find('p').css('backgroundColor');
		     var regV=/[\d]+/gi;
			 var result=$.trim(rgb.match(regV));
			 if(result == '255,0,0'){
					//alert(14)
				$(this).find('p').css({'backgroundColor':'#FE4332','border':'none'});
				
			}
			if(result == '0,0,0'){
				$(this).find('p').css({'backgroundColor':'#373636','border':'none'});
				
			}
				
			})
	
	
	var obj_y1=$(this).parent().prev();
	var obj_y2=$(this).parent().next();
		var number1=obj_y1.text();//первое число
		var number2=obj_y2.text();//второе число
		var obj1=obj_y1.find('p');
		var obj2=obj_y2.find('p');
		
	for(i=0; i < arr1.length; i++){
		
		if(arr1[i]==number1 && arr2[i]==number2){
			
	var number3=arr3[i]//третье число
	var number4=arr4[i];//четвертое число
			
		}
		
	}
			var count=-1;
		 obj.each(function(){
			 count++;
				//var rgb=$(this).find('p').css('backgroundColor');
				var number=$(this).text();
		     //var regV=/[\d]+/gi;
			 //var result=$.trim(rgb.match(regV));
		if(number == number3){
		
			indexs = count;
			//alert(indexs)
		}
			if(number == number4){
		
			indexs2 = count;
			
		}
		
		
				
			})
	var obj3=obj.eq(indexs).find('p');
	var obj4=obj.eq(indexs2).find('p');
		
		//находим цвет 
	
	var rgb1=obj1.css('backgroundColor');
	var rgb2=obj2.css('backgroundColor');
	var rgb3=obj3.css('backgroundColor');
	var rgb4=obj4.css('backgroundColor');
		
		//переводим цвет в удобочитаемый вид
	   var regV=/[\d]+/gi;
	     var results_obj1_rgb=$.trim(rgb1.match(regV));
	    var results_obj2_rgb=$.trim(rgb2.match(regV));
	   var results_obj3_rgb=$.trim(rgb3.match(regV));
	    var results_obj4_rgb=$.trim(rgb4.match(regV));
		//alert(results_obj3_rgb)
if(results_obj1_rgb=='255,0,0' || results_obj1_rgb=='0,0,0' || results_obj2_rgb=='0,0,0' || results_obj2_rgb=='255,0,0' || results_obj3_rgb=='0,0,0' || results_obj3_rgb=='255,0,0' || results_obj4_rgb=='255,0,0' || results_obj4_rgb=='0,0,0'){
//если хоть одна занята, тогда невозможно выбрать эту четверку	
}
	if(results_obj1_rgb=='255,0,0'){
		obj1.css({'backgroundColor':'red','border':'5px solid blue'});
	}
	if(results_obj1_rgb=='0,0,0'){
		obj1.css({'backgroundColor':'black','border':'5px solid blue'});
	}
	
	if(results_obj2_rgb=='255,0,0'){
		obj2.css({'backgroundColor':'red','border':'5px solid blue'});
	}
	if(results_obj2_rgb=='0,0,0'){
		obj2.css({'backgroundColor':'black','border':'5px solid blue'});
	}
		if(results_obj3_rgb=='255,0,0'){
		obj3.css({'backgroundColor':'red','border':'5px solid blue'});
	}
	if(results_obj3_rgb=='0,0,0'){
		obj3.css({'backgroundColor':'black','border':'5px solid blue'});
	}
	
		if(results_obj4_rgb=='255,0,0'){
		obj4.css({'backgroundColor':'red','border':'5px solid blue'});
	}
	if(results_obj4_rgb=='0,0,0'){
		obj4.css({'backgroundColor':'black','border':'5px solid blue'});
	}
	
	
	
	
		if(results_obj1_rgb == '254,67,50'){
			obj1.css({'backgroundColor':'red','border':'5px solid blue'});
			
		}
			if(results_obj1_rgb == '55,54,54'){
			obj1.css({'backgroundColor':'black','border':'5px solid blue'});
			
		}
		/*--для 2 числа--*/
	
	if(results_obj2_rgb == '254,67,50'){
			obj2.css({'backgroundColor':'red','border':'5px solid blue'});
			
		}
			if(results_obj2_rgb == '55,54,54'){
			obj2.css({'backgroundColor':'black','border':'5px solid blue'});
			
		}
	
	/*--для 3 числа--*/
	if(results_obj3_rgb == '254,67,50'){
			obj3.css({'backgroundColor':'red','border':'5px solid blue'});
			
		}
			if(results_obj3_rgb == '55,54,54'){
			obj3.css({'backgroundColor':'black','border':'5px solid blue'});
			
		}
	/*--для 4 числа--*/
		if(results_obj4_rgb == '254,67,50'){
			obj4.css({'backgroundColor':'red','border':'5px solid blue'});
			
		}
			if(results_obj4_rgb == '55,54,54'){
			obj4.css({'backgroundColor':'black','border':'5px solid blue'});
			
		}
	
	
	
	//на выходе
		if(number1 && number2 && number3 && number4){
	
	//запоминаем массив
	
	
	
	
	count2++;
	var ttt=[number1,number2,number3,number4]	
		arrnumber4=ttt;
		
		

		
		resultarr4();
		
	}

	




})//click	
	
	
	
	




/*----------------------------------------------------------------------------------------------------------*/
		
/*-------------------выводим окно для ввода суммы- первая боковая 2k1----------------------------------*/		
	
			
	function resultarr_2k1(){
		if(arrnumber_2k1[0]){
			
			arrnumber_2k1.pop();
			var len=arrnumber_2k1.length;
			$('.modal_r-in').html("<p>вы выбрали" + len + " цифр:</p> ");
			
		var str=arrnumber_2k1.join(' ');
		
			$('.modalrspan').html(str);
			
			overlay.addClass('overlay_a').css({'opacity':'0'});
			n=setInterval(timer,30);
			$('#modal_r').show();
			
		}
	}
	
	
	
/*-------------------выводим окно для ввода суммы-----------------------------------*/
/*--для двух чисел--*/
	function resultarr2(){
		
		if(arrnumber2[0]){
		var len=arrnumber2.length;
	         var number1=arrnumber2[0];
		     var number2=arrnumber2[1];
overlay.addClass('overlay_a').css({'opacity':'0'});
n=setInterval(timer,30);
$('.modal_r-in').html("<p>вы выбрали 2 цифры:</p> ");
$('.modalrspan').html(number1 + " " + number2);
$('#modal_r').show();
	}
	}
	
/*--для 4 чисел--*/	
	function resultarr4(){
		

if(arrnumber4[0]){
		var len=arrnumber4.length;
		var number1 = arrnumber4[0];
		var number2 = arrnumber4[1];
		var number3 = arrnumber4[2];
		var number4 = arrnumber4[3];
		
		overlay.addClass('overlay_a').css({'opacity':'0'});;
n=setInterval(timer,30);
$('.modal_r-in').html("<p>вы выбрали 4 цифры:</p> ");
$('.modalrspan').html(number1 + " " + number2 + " " + number3 + " " + number4);
 $('#modal_r').show();

		
		}
		
				
	
	}
		
	
			
//получаем сумму			
$('#modal_r-form').submit(function(e){
	e.preventDefault();
	var summanumber=$('#modal_r span').text();
	var arr = summanumber.split(" ");
	
	var summa=$('input[name=summamodalr]').val();
	var summa=$.trim(summa);
	var lennum= arr.length;
	var len = arrnumber4.length;
	
	var patch=$('.patchonlinepage').val();
				
	if(summa){
		
		if(lennum==12){
			
	//arrnumber4[4]=summa;
	if(arrnumber_2k1[0]==3){
			var arrnumber= arrnumber_2k1;
			//alert(7);return false;
			var options='number_2k1';
	}
	
		if(arrnumber_2k1[0]==2){
			var arrnumber= arrnumber_2k1;
			//alert(7);return false;
			var options='number_2k1_middle';
	}
	
			if(arrnumber_2k1[0]==1){
				
			var arrnumber= arrnumber_2k1;
			//alert(7);return false;
			var options='number_2k1_bottom';
	}
	
	
			
}//4
		
	if(lennum==4){
	//arrnumber4[4]=summa;
			var arrnumber= arrnumber4;
			var options='number4';
			
}//4
	if(lennum==2){
	//arrnumber2[2]=summa;
		var arrnumber=arrnumber2;
		var options='number2';
	}
	
	}//summa
		
			$.ajax({
		                    "type":"POST",
		                    "url":patch,          	
		                    data:({'param':arrnumber,'param2':options,'summa':summa}),
                                   text:this,
		                 success:function(data){
			
			if(data){
				//alert(data);return false;
				if(data=='nouser'){
					var login=$('.nouser').val();
					window.location.href = login;
				}else{
				$('#modal_r').hide("2000",function(){
					overlay.removeClass('overlay_a');
					});
				}
    
			//alert(data);
			}
	}
		                    //"error":errorfunc
		                  });
	
	
	
})
/*-------------------------------------------вывод статистики--------------------------------------------------*/
	$('.statistika').click(function(e){
		e.preventDefault();
		
			var patch=$('.patchonlinepage').val();
			 $.ajax({
		                    "type":"POST",
		                    "url":patch,          	
		                    data:({'param2':'statistika'}),
                                   text:this,
		                 success:function(data){
			
			if(data){
				//alert(data);return false;
				  showCart(data); 
       //alert(data);return false;
			}
	}
		                    //"error":errorfunc
		                  });
			
		
		
		
		
	})		
			    function showCart(data){
        $('#cart .modal-body').html(data);
        $('#cart').modal();
    }

	/*-------------------------------------------очистка экрана--------------------------------------------------*/
	$('.clear-cube').click(function(e){
		e.preventDefault();
			 $('div.y').each(function(){
				var rgb=$(this).find('p').css('backgroundColor');
		     var regV=/[\d]+/gi;
			 var result=$.trim(rgb.match(regV));
			 if(result == '255,0,0'){
					//alert(14)
				$(this).find('p').css({'backgroundColor':'#FE4332','border':'none'});
				
			}
			if(result == '0,0,0'){
				$(this).find('p').css({'backgroundColor':'#373636','border':'none'});
				
			}
				
			})
		
	})
	
	
	
	
	
	
	/*---------------------------------далее вспомогательные функции----------------------------------------------------------*/
	var count=0;
var n;
	var settings = {
		
			block: 			'block',	// Ѕлок к которому примен¤м lightbox
			buttom: 		'buttom',	//  нопка 1
			blockButtom: 	'close',	//  нопка на блоке
			overlay: 		'overlay',	// <div id="overlay"></div>
			speed: 			78,			// ¬рем¤ интервала
			step: 			5,			// Ўаг измени¤ прозрачности
			maxOp: 			0.9			// ћаксимальна¤ прозрачность
		}




function timer(){
	
op=overlay.css('opacity');

if(overlay.css('opacity')<=1){

op = op * 100;
op = op + 5;
op = op /100;

	if (op.toFixed(2) <= settings.maxOp){

$('#overlay_r').css({'opacity':op})
	}
	
if ((op.toFixed(2) % settings.maxOp) == 0){

//если значение прозрачности сравн¤лось с максимальным, то останавливаем интервал
							clearInterval(n);
							return false;
						}
						
						
			if (op.toFixed(2) > settings.maxOp){
//если значение прозрачности больше максимальной прозрачности, то останавливаем интервал
						clearInterval(n);
							return false;
					}					
	
}else{
	overlay.css({'opacity':1})
							clearInterval(n);
							return false;
}


}
$('.modal_r-logout').click(function(){
		 $('div.y').each(function(){
				var rgb=$(this).find('p').css('backgroundColor');
		     var regV=/[\d]+/gi;
			 var result=$.trim(rgb.match(regV));
			 if(result == '255,0,0'){
					//alert(14)
				$(this).find('p').css({'backgroundColor':'#FE4332','border':'none'});
				
			}
			if(result == '0,0,0'){
				$(this).find('p').css({'backgroundColor':'#373636','border':'none'});
				
			}
				
			})
	overlay.removeClass('overlay_a');
	$('#modal_r').hide();
})
	
	
	var seconds=-1;
	var time=setInterval(timeseconds,1000);
				
	
	
	
	function timeseconds(){
		seconds++;
		$('.time').html(seconds);
		if(seconds==time_start){
			clearInterval(time);
			
			seconds=-1;
			overlay.removeClass('overlay_a');
	       $('#modal_r').hide();
			
				$('.time').html("ставки завершены");
				secondsresult();
		}
	}

function secondsresult(){
		$('.cubeoverlay').addClass('cube-overlay');
		$('.cubeoverlay').html('<span>идет подсчет результатов...<span>');
		
var time2=setInterval(timeseconds2,1000);//	вызываем функцию обратного отчета

	function timeseconds2(){
		seconds2--;
		$('.time2').html('<span>до начало ставок </span>'+seconds2);
		
		if(seconds2==baza_check){//проверяем базу на наличие выигрышного номера
			          var patch=$('.patchonlinepage').val();
				$.ajax({
		                    "type":"POST",
		                    "url":patch,          	
		                    data:({'param2':'baza'}),
                                   text:this,
		                 success:function(data){
			
			if(data){
		//alert(data)
		if(data == 'ok2'){
		$('.time3').text("результаты определены");
		$('.time3').show("2000");
		$('.time3').delay("2000");
		$('.time3').hide("2000");
		
			}
			}
	}
		                    //"error":errorfunc
		                  });
			
		}
		
		
		if(seconds2==0){
			seconds2=10;
		$('.time2').html('');	
			clearInterval(time2);
		$('.cubeoverlay').removeClass('cube-overlay');
		$('.cubeoverlay').html('');
		
		
		
			ajaxstarttest();
			
			return false;
		}
		
	}	
	function ajaxstarttest(){
		time=setInterval(timeseconds,1000);
	}
	
	

	
		
	}	
	
	function in_array(value, array) {
    for(var i=0; i<array.length; i++){
        if(value == array[i]) return true;
    }
    return false;
}
})//ready