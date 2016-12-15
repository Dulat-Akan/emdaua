$(document).ready(function() {
	var time_start=60;//время ставок
	var seconds2=60;//время обратного отчета или блокировки
	var baza_check=2;//за две минуты до старта проверить базу, число 2 можно изменить
	
	
	
	var time_stop=seconds2//time_stop должно быть равно seconds2
	//alert($('.header-side').css('width'));
	var count1=-1;
	var count2=-1;
	var arrres=new Array();
	var arrnumber2= new Array();//массив для хранения выборки по двум числам
	var overlay=$("#overlay_r");
	var n;
		var number_arr=new Array();
	
	var obj = $('#cube .y');
	
	
/*----------------------------------начало считывания боковых 2 к 1----------------------------------------------------*/
var array_2k1 =	new Array();
array_2k1=[3,6,9,12,15,18,21,24,27,30,33,36,'k1'];

var array1_2k1 =	new Array();
array1_2k1=[2,5,8,11,14,17,20,23,26,29,32,35,'k1'];

var array2_2k1 =	new Array();
array2_2k1=[1,4,7,10,13,16,19,22,25,28,31,34,'k1'];

var arrnumber_2k1=new Array();
$('.header-side-in div').click(function(){
	var texts=$(this).text();
	texts=$.trim(texts);
	var attrid=$(this).attr('id');
	if(attrid){
		
		var lens=arrnumber_2k1.length;
	for(i=0; i < lens; i++){
	
		arrnumber_2k1.pop();
	}

	
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
	
	
	}
	resultetColor();
	resultarr_2k1()
})


	
	

	
	
	
	
	
	
	
	
/*--------------начало функции считывания двух чисел-----------------------------------*/	
	$('#cube .s .s-in').click(function(){
	
		
		//вычисление крайних чисел
		var obj_y1=$(this).parent().prev();
	var obj_y2=$(this).parent().next();
		var number1=obj_y1.text();//первое число
		var number2=obj_y2.text();//второе число
		var obj1=obj_y1.find('p');
		var obj2=obj_y2.find('p');

var lens=arrnumber_2k1.length;
	for(i=0; i < lens; i++){
	
		arrnumber_2k1.pop();
	}
    arrnumber_2k1[0] = number1;
	arrnumber_2k1[1]=number2;
	var pops='g2';	
	arrnumber_2k1.push(pops);	
		
	
resultetColor();
resultarr_2k1()	
		
			})
	
		
		
/*--------------окончание функции считывания двух чисел-----------------------------------*/	


/*----------------------------------------------функция считывания 6 цифр--------------------------------------------------*/
var dosen=new Array();
dosen=[3,6,9,12,2,5,8,11,1,4,7,10,'dosen'];

var dosen1=new Array();
dosen1=[15,18,21,24,14,17,20,23,13,16,19,22, 'dosen'];

var dosen2=new Array();
dosen2=[27,30,33,36,26,29,32,35,25,28,31,34, 'dosen'];



$('#cube .dozen').click(function(e){



//вычисление крайних чисел
		var obj_y1=$(this).parent().prev();
	var obj_y2=$(this).parent().next();
		var number1=obj_y1.text();//первое число
		var number2=obj_y2.text();//второе число
		var obj1=obj_y1.find('p');
		var obj2=obj_y2.find('p');

	var lens=arrnumber_2k1.length;
	for(i=0; i < lens; i++){
	
		arrnumber_2k1.pop();
	}
		
if(number1 == 1 && number2 == 4){
	for(var i=0; i < dosen.length; i++ ){
		arrnumber_2k1[i]=dosen[i];
		}
		}

	if(number1 == 4 && number2 == 7){
			for(var i=0; i < dosen.length; i++ ){
		      arrnumber_2k1[i]=dosen[i];
		}
	}
		if(number1 == 7 && number2 == 10){
			for(var i=0; i < dosen.length; i++ ){
		     arrnumber_2k1[i]=dosen[i];
		}
	}
	
/**/	
	if(number1 == 13 && number2 == 16){
			for(var i=0; i < dosen.length; i++ ){
		     arrnumber_2k1[i]=dosen1[i];
		}
	}
	if(number1 == 16 && number2 == 19){
			for(var i=0; i < dosen.length; i++ ){
		     arrnumber_2k1[i]=dosen1[i];
		}
	}
	if(number1 == 19 && number2 == 22){
			for(var i=0; i < dosen.length; i++ ){
		     arrnumber_2k1[i]=dosen1[i];
		}
	}
/**/
		if(number1 == 25 && number2 == 28){
			for(var i=0; i < dosen.length; i++ ){
		     arrnumber_2k1[i]=dosen2[i];
		}
	}
		if(number1 == 28 && number2 == 31){
			for(var i=0; i < dosen.length; i++ ){
		     arrnumber_2k1[i]=dosen2[i];
		}
	}
		if(number1 == 31 && number2 == 34){
			for(var i=0; i < dosen.length; i++ ){
		     arrnumber_2k1[i]=dosen2[i];
		}
	}
	
	
	
resultetColor();
resultarr_2k1()
		})
/*--------------------------------окончание считывания 6 цифр-----------------------------------------------------------------------------*/


	
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


//вычисление крайних чисел
		var obj_y1=$(this).parent().prev();
	var obj_y2=$(this).parent().next();
		var number1=obj_y1.text();//первое число
		var number2=obj_y2.text();//второе число
		var obj1=obj_y1.find('p');
		var obj2=obj_y2.find('p');
	//определение массива
	var lens=arrnumber_2k1.length;
	for(i=0; i < lens; i++){
	
		arrnumber_2k1.pop();
	}
	//alert(arrnumber_2k1.length);return false;
		if(number1 == 3 && number2 == 6){
			arrnumber_2k1[0]=arr1[0];
			arrnumber_2k1[1]=arr2[0];
			arrnumber_2k1[2]=arr3[0];
			arrnumber_2k1[3]=arr4[0];
			var pops='g4';
			arrnumber_2k1.push(pops);
		
			}
			if(number1 == 6 && number2 == 9){
			arrnumber_2k1[0]=arr1[1];
			arrnumber_2k1[1]=arr2[1];
			arrnumber_2k1[2]=arr3[1];
			arrnumber_2k1[3]=arr4[1];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 2 && number2 == 5){
			arrnumber_2k1[0]=arr1[2];
			arrnumber_2k1[1]=arr2[2];
			arrnumber_2k1[2]=arr3[2];
			arrnumber_2k1[3]=arr4[2];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 5 && number2 == 8){
			arrnumber_2k1[0]=arr1[3];
			arrnumber_2k1[1]=arr2[3];
			arrnumber_2k1[2]=arr3[3];
			arrnumber_2k1[3]=arr4[3];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 8 && number2 == 11){
			arrnumber_2k1[0]=arr1[4];
			arrnumber_2k1[1]=arr2[4];
			arrnumber_2k1[2]=arr3[4];
			arrnumber_2k1[3]=arr4[4];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}

			if(number1 == 9 && number2 == 12){
			arrnumber_2k1[0]=arr1[5];
			arrnumber_2k1[1]=arr2[5];
			arrnumber_2k1[2]=arr3[5];
			arrnumber_2k1[3]=arr4[5];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			
			if(number1 == 12 && number2 == 15){
			arrnumber_2k1[0]=arr1[6];
			arrnumber_2k1[1]=arr2[6];
			arrnumber_2k1[2]=arr3[6];
			arrnumber_2k1[3]=arr4[6];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 18 && number2 == 21){
			arrnumber_2k1[0]=arr1[7];
			arrnumber_2k1[1]=arr2[7];
			arrnumber_2k1[2]=arr3[7];
			arrnumber_2k1[3]=arr4[7];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
	if(number1 == 21 && number2 == 24){
			arrnumber_2k1[0]=arr1[8];
			arrnumber_2k1[1]=arr2[8];
			arrnumber_2k1[2]=arr3[8];
			arrnumber_2k1[3]=arr4[8];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
		if(number1 == 14 && number2 == 17){
			arrnumber_2k1[0]=arr1[9];
			arrnumber_2k1[1]=arr2[9];
			arrnumber_2k1[2]=arr3[9];
			arrnumber_2k1[3]=arr4[9];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
		if(number1 == 17 && number2 == 20){
			arrnumber_2k1[0]=arr1[10];
			arrnumber_2k1[1]=arr2[10];
			arrnumber_2k1[2]=arr3[10];
			arrnumber_2k1[3]=arr4[10];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 20 && number2 == 23){
			arrnumber_2k1[0]=arr1[11];
			arrnumber_2k1[1]=arr2[11];
			arrnumber_2k1[2]=arr3[11];
			arrnumber_2k1[3]=arr4[11];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 15 && number2 == 18){
			arrnumber_2k1[0]=arr1[12];
			arrnumber_2k1[1]=arr2[12];
			arrnumber_2k1[2]=arr3[12];
			arrnumber_2k1[3]=arr4[12];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 11 && number2 == 14){
			arrnumber_2k1[0]=arr1[13];
			arrnumber_2k1[1]=arr2[13];
			arrnumber_2k1[2]=arr3[13];
			arrnumber_2k1[3]=arr4[13];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 24 && number2 == 27){
			arrnumber_2k1[0]=arr1[14];
			arrnumber_2k1[1]=arr2[14];
			arrnumber_2k1[2]=arr3[14];
			arrnumber_2k1[3]=arr4[14];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 23 && number2 == 26){
			arrnumber_2k1[0]=arr1[15];
			arrnumber_2k1[1]=arr2[15];
			arrnumber_2k1[2]=arr3[15];
			arrnumber_2k1[3]=arr4[15];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 27 && number2 == 30){
			arrnumber_2k1[0]=arr1[16];
			arrnumber_2k1[1]=arr2[16];
			arrnumber_2k1[2]=arr3[16];
			arrnumber_2k1[3]=arr4[16];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 30 && number2 == 33){
			arrnumber_2k1[0]=arr1[17];
			arrnumber_2k1[1]=arr2[17];
			arrnumber_2k1[2]=arr3[17];
			arrnumber_2k1[3]=arr4[17];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 33 && number2 == 36){
			arrnumber_2k1[0]=arr1[18];
			arrnumber_2k1[1]=arr2[18];
			arrnumber_2k1[2]=arr3[18];
			arrnumber_2k1[3]=arr4[18];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 26 && number2 == 29){
			arrnumber_2k1[0]=arr1[19];
			arrnumber_2k1[1]=arr2[19];
			arrnumber_2k1[2]=arr3[19];
			arrnumber_2k1[3]=arr4[19];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 29 && number2 == 32){
			arrnumber_2k1[0]=arr1[20];
			arrnumber_2k1[1]=arr2[20];
			arrnumber_2k1[2]=arr3[20];
			arrnumber_2k1[3]=arr4[20];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			if(number1 == 32 && number2 == 35){
			arrnumber_2k1[0]=arr1[21];
			arrnumber_2k1[1]=arr2[21];
			arrnumber_2k1[2]=arr3[21];
			arrnumber_2k1[3]=arr4[21];
			var pops='g4';
			arrnumber_2k1.push(pops);
			}
			
 
resultetColor();	
resultarr_2k1();
	
})//click	
	
	
	
	




/*----------------------------------------------------------------------------------------------------------*/
		
/*-------------------выводим окно для ввода суммы- первая боковая 2k1----------------------------------*/		
	
			
	function resultarr_2k1(){
		
		if(arrnumber_2k1[0]){
			
			var vs=arrnumber_2k1.pop();
			
			var len=arrnumber_2k1.length;
			$('.modal_r-in').html("<p>вы выбрали" + len + " цифр:</p> ");
			
		var str=arrnumber_2k1.join(' ');
		
			$('.modalrspan').html(str);
			arrnumber_2k1.push(vs);
			overlay.addClass('overlay_a').css({'opacity':'0'});
			n=setInterval(timer,30);
			$('#modal_r').show();
			
			
		}
	}
	
function resultetColor(){
	//чистка
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
				
			})//чистка
	
	
	
	
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
	

		
	
			
//получаем сумму			
$('#modal_r-form').submit(function(e){
	e.preventDefault();
	var summanumber=$('#modal_r span').text();
	var arr = summanumber.split(" ");
	
	var summa=$('input[name=summamodalr]').val();
	var summa=$.trim(summa);
	var lennum= arr.length;
	
	
	var patch=$('.patchonlinepage').val();
				
	if(summa){
		
if(lennum==12){
			
	if(arrnumber_2k1[12]=='dosen'){		
arrnumber_2k1.pop();
/*дюжина*/
			if(arrnumber_2k1[11]==10){
				
			var arrnumber= arrnumber_2k1;
			
			var options='dozen';
			}
			
			if(arrnumber_2k1[11]==22){
			var arrnumber= arrnumber_2k1;
			
			var options='dozen1';
			}
			if(arrnumber_2k1[11]==34){
			var arrnumber= arrnumber_2k1;
			
			var options='dozen';
			}
	/*end дюжина*/

	
	}
	
		
if(arrnumber_2k1[12] == 'k1'){	
//alert(72222)	
arrnumber_2k1.pop();	
	if(arrnumber_2k1[11]==36){
			var arrnumber= arrnumber_2k1;
			//alert(7);return false;
			var options='number_2k1';
	}
	
		if(arrnumber_2k1[11]==35){
			var arrnumber= arrnumber_2k1;
			//alert(7);return false;
			var options='number_2k1_middle';
	}
	
			if(arrnumber_2k1[11]==34){
				
			var arrnumber= arrnumber_2k1;
			//alert(7);return false;
			var options='number_2k1_bottom';
	}
	}
	
	
	
	
}//4
if(arrnumber_2k1[4]=='g4')	{
	

	//arrnumber4[4]=summa;
	arrnumber_2k1.pop();
			var arrnumber= arrnumber_2k1;
			var options='number4';
}

	if(lennum==2){
		arrnumber_2k1.pop();
	//arrnumber2[2]=summa;
		var arrnumber=arrnumber_2k1;;
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
	
	return false;
	
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
		$('.time').html('делайте ставки '+seconds);
		if(seconds==time_start){
			clearInterval(time);
			
			seconds=-1;
			overlay.removeClass('overlay_a');
	       $('#modal_r').hide();
			
				$('.time').html("рулетка вращается..");
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
		if(seconds2 > baza_check){
		$('.time-wrap-in2').html('определение выигрышного числа....');
			$('.time-wrap-in1').html('определение результата');
		}else{
			
		}
		
		
		if(seconds2 == baza_check){//проверяем базу на наличие выигрышного номера
			          var patch=$('.patchonlinepage').val();
				$.ajax({
		                    "type":"POST",
		                    "url":patch,          	
		                    data:({'param2':'baza'}),
                                   text:this,
		                 success:function(data){
			
			if(data){
				//alert(data)
		var result = JSON.parse(data);
		if(result){
			
			if(result['param1']=='ok'){
			$('.time-wrap-in2').html("<div class='shar'><p>шарик упал на число </p>"+result['param2']+"</div>");	
			//return false;
			}
			if(result['param1']=='ok2'){
		//$('.time3').html(result['param3']);
		$('.time-wrap-in1').html(result['param4']);	
		$('.time-wrap-in2').html("<div class='shar'><p>шарик упал на число </p>"+result['param2']+"</div>");
		$('.time3').show("2000");
		$('.time3').delay("2000");
		$('.time3').hide("2000");
		
		
		
		
			$.ajax({
		                    "type":"POST",
		                    "url":patch,          	
		                    data:({'param2':'update'}),
                                   text:this,
		                 success:function(data){
							 
						 }
		
		
			})
		
		
		
		
		
		
			}
			
		}
	

			}
	}
		                    //"error":errorfunc
		                  });
			
		}
		
		
		if(seconds2==0){
			seconds2 = time_stop;
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