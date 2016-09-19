jQuery(document).ready(function($){







var myurl = $("#myurl").val();







$("#text_poiska15").keyup(function(){
	var text_poiska = $("#text_poiska15").val();

var data15 = {
	"zapros":text_poiska,
};

		var base_url = myurl + "index.php/Pocaz_ob/ob";

		


$.ajaxSetup({

      "type":"POST",
      "url":base_url,
      "success":kx
        });

function kx(result){


	 $("#pokaz_poiska").hide().delay(1000).show().html(result);

	 $("#pokaz_poiska2").hide(500);


	/*var result = JSON.parse(result);

 $("#alert_message5").css("background","yellow").hide().delay(1000).show(3000).html(result.a);*/




      						};
$.ajax({
  
    "data":data15,
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };



});

/*block poisk*/













$('.dropdown-toggle').dropdown();

$('#myselect a').click(function(){	/*проверка поля городов*/
		var b = $(this).text();
		
		$("#ttt").val(b);
	});


$('#myselect2 a').click(function(){	/*проверка поля городов*/
		var b = $(this).text();
		
		$("#yyy").text(b);
	});


var arr = ["Астана","Косшы","Кокшетау","Зеренда",
"Щучинск","Алексеевка","Степногорск","Ерейментау",
"Талапкер","Шортанды","Атбасар","Акколь","Бурабай","Державинск","Макинск","Айдабул"
,"Акмолинская область","Алматинская область","Алматы","Талдыкорган","Каскелен","Талгар",
"Текели","Есик","Ушарал","Жаркент","Достык","Карабулак","Теректы","Ушконыр","Чимбулак",
"Абай","Бурундай","Жана Арна","Сарыозек","Сарканд","Карагандинская область",
"Караганда","Жезказган","Шахтинск","Темиртау","Каражал","Каркаралинск","Абай","Агадырь"
,"Актас","Балхаш","Ботакара","Бухар Жырау","Доскей","Дубовка","Жезды","Карабас"
,"Осакаровка","Приозерск","Сарань","Сатпаев","Топар","Шашубай","Восточно Казахстанская область"
,"Семипалатинск","Семей","Усть Каменогорск","Атыбай","Аягоз","Асу Булак","Глубоков","Зайсан"
,"Зыряновск","Кабалтау","Катон Карагай","Курчатов","Маканчи","Новая согра","Ново Хайрузовка"
,"Первомайский","Риддер","Серебрянск","Солнечное","Теремшамка","Тугул","Усть   Таловка"
,"Шар","Шемонаиха","Западно Казахстанская область","Актау","Уральск","Аксай","Дарьинск"
,"Жангала","Зачаганск","Казталовка","Каменка","Переметное","Сайхин","Тайпак"
,"Трекино","Федоровка","Чингирлау","Костанайская область","Костанай","Аркалык","Лисаковск"
,"Рудный","Алтынсарино","Аманкарагай","Аулиеколь","Буревестник","Денисовка","Жалгыскан"
,"Житикара","Заречный","Затобольск","Камысты","Карабалык","Карасу","Кушмурун","Новопавловка"
,"Приозёрный","Раздольный","Садовое","Сарыколь","Силантьевка","Тарановское","Узунколь"
,"Федоровка","Павлодарская область","Павлодар","Экибастуз","Аксу","Акжар","Актогай"
,"Ефремовка","Калкаман","Коктобе","Майкаин","Шидерты","Актюбинская область","Актобе"
,"Хромтау","Шалкар","Алга","Батамшинский","Кандыагаш","Карауылкелди","Каргалинское"
,"Мартук","Шубаркудук","Эмба","Атырауская область","Атырау","Ганюшкино","Дамба"
,"Жаскайрат","Индер","Кульсары","Махамбет","Тенгиз","Жамбылская область","Тараз"
,"Шу","Кордай","Айша Биби","Толе би","Ерназар","Жанатас","Каратау","Кулан"
,"Мерке","Мирный","село.Б.Момышулы","Степное","Татты","Шынты","Кзыл Ординская область"
,"Кызылорда","Байконур","Айтеке Би","Актан Батыр","Аральск","Жанакорган","Жосалы","Казалинск",
"Макпалколь","Тасбогет","Теренозек","Торебай Би","Шиели","Мангистауская область"
,"Актау","Актобе","Баскудук","Бейнеу","Жанаозен","Умирзак","Форт Шевченко","Шетпе",
"Акмолинская область"];

$("#submit").click(function(event){

	event.preventDefault();

	var z = $("#ttt").val();
	z = String(z);
	var y = false;

	for(var i = 0;i<arr.length;i++){
		if(z == arr[i]){
			y = true;
		}else{
			
		}

	};
		if(y){
			
			$(".altext").slideUp(2000);

			}else{
				$(".altext").show(2000).css({"display":"inline"});
			} 

});

$("#logo_main").mouseenter(function(){
	$(this).effect(
			"shake",			//bounce
			{
				direction:"up",		//down,left,right
				//mode:"hide",		//show
				distance:20,
				//times:10  	//количество колибаний

			},
			1000,
			function(){

			}
//
			);
});




$("#reg_ajax").click(function(event){

var form = $("#form").serializeArray();

$.ajaxSetup({

      "type":"POST",
      "url":myurl + "index.php/new_user/new_us",
      "success":yy
        });

function yy(res){
        $("#testing").css("background","yellow").hide().delay(1000).show(3000).html(res);
      						};
$.ajax({
  
    "data":form,
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };

$("#modal-1").modal('hide');

});	//zakritie click regajax

$("#zagol").tooltip();

$(".o>li").hover(function(){

		$(this).animate({
			 backgroundColor:"yellow",
			 color:"red"

		},200);
		
},function(){

		$(this).animate({
			 backgroundColor:"none",
			 color:"black"

		},200);
		
});

$(".inkl>li").hover(function(){

		$(this).animate({
			 backgroundColor:"yellow",
			 color:"red"

		},200);
		
},function(){

		$(this).animate({
			 backgroundColor:"none",
			 color:"black"

		},200);
		
});

$(".mod>li").hover(function(){

		$(this).animate({
			 backgroundColor:"yellow",
			 color:"red"

		},200);
		
},function(){

		$(this).animate({
			 backgroundColor:"none",
			 color:"black"

		},200);
		
});

$(".t5>li").hover(function(){

		$(this).animate({
			 backgroundColor:"yellow",
			 color:"red"

		},200);
		
},function(){

		$(this).animate({
			 backgroundColor:"none",
			 color:"black"

		},200);
		
});

/////razdel categorii

$("#cat").click(function(){

	
	$(".hai").css("display","inline");
	$("#spisok").show("explode", 500);
	$(".x99").show("explode", 1000);


});

//_________________________________________zakritie knopki

$("#p1").click(function(){

	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".i").css("display","inline");
	var r = $("#job");
	$("#test_block").append(r);



	
});



$("#p2").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".q").css("display","inline");

	var r = $("#uslugi");
	$("#test_block").append(r);
	
	
	

});

$("#p3").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".w").css("display","inline");
	$("#test_block").append($("#biznes"));
	

});
$("#p4").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".e").css("display","inline");
	$("#test_block").append($("#veshi"));
	

});

$("#p5").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".r").css("display","inline");
	$("#test_block").append($("#electric"));
	

});
$("#p6").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".r2").css("display","inline");
	$("#test_block").append($("#children"));
	

});

$("#p7").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".r3").css("display","inline");
	$("#test_block").append($("#animals"));
	

});

$("#p8").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".r4").css("display","inline");
	$("#test_block").append($("#dom"));
	

});

$("#p9").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".r5").css("display","inline");
	$("#test_block").append($("#hobby"));
	

});
$("#p10").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".r6").css("display","inline");
	$("#test_block").append($("#ruchnaya"));
	

});


$("#p1m").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".nedv1").css("display","inline");
	$("#test_block").append($("#nedv"));
	

});



$("#p2m").click(function(){
	$(".rez2").css("display","none");
	$(".rez").css("display","none");
	$(".av1").css("display","inline");
	$("#test_block").append($("#avvv"));
	

});

//-------------------zakritie 1 -go bloka

//otkritie job



$("#l1").click(function(){

	$(".rez2").css("display","none");
	$(".t1").css("display","inline");
	$("#block2").append($("#torg"));
	

});

$("#l2").click(function(){

	$(".rez2").css("display","none");
	$(".t2").css("display","inline");
	$("#block2").append($("#fin"));
	

});


$("#l3").click(function(){

	$(".rez2").css("display","none");
	$(".t3").css("display","inline");
	$("#block2").append($("#tran"));
	

});


$("#l4").click(function(){

	$(".rez2").css("display","none");
	$(".t4").css("display","inline");
	$("#block2").append($("#stroi"));
	

});


$("#l5").click(function(){

	$(".rez2").css("display","none");
	$(".t5").css("display","inline");
	$("#block2").append($("#urist"));
	

});
$("#l6").click(function(){

	$(".rez2").css("display","none");
	$(".t6").css("display","inline");
	$("#block2").append($("#ohr"));
	

});

$("#l7").click(function(){

	$(".rez2").css("display","none");
	$(".t7").css("display","inline");
	$("#block2").append($("#pers"));
	

});

$("#l8").click(function(){

	$(".rez2").css("display","none");
	$(".t8").css("display","inline");
	$("#block2").append($("#kras"));
	

});

$("#l9").click(function(){

	$(".rez2").css("display","none");
	$(".t9").css("display","inline");
	$("#block2").append($("#tur"));
	

});

$("#l10").click(function(){

	$(".rez2").css("display","none");
	$(".t10").css("display","inline");
	$("#block2").append($("#obr"));
	

});

$("#l11").click(function(){

	$(".rez2").css("display","none");
	$(".t11").css("display","inline");
	$("#block2").append($("#issk"));
	

});
$("#l12").click(function(){

	$(".rez2").css("display","none");
	$(".t12").css("display","inline");
	$("#block2").append($("#med"));
	

});

$("#l13").click(function(){

	$(".rez2").css("display","none");
	$(".t13").css("display","inline");
	$("#block2").append($("#it"));
	

});

$("#l14").click(function(){

	$(".rez2").css("display","none");
	$(".t14").css("display","inline");
	$("#block2").append($("#mar"));
	

});

$("#l15").click(function(){

	$(".rez2").css("display","none");
	$(".t15").css("display","inline");
	$("#block2").append($("#proizv"));
	

});
$("#l17").click(function(){

	$(".rez2").css("display","none");
	$(".t17").css("display","inline");
	$("#block2").append($("#adm"));
	

});

$("#l18").click(function(){

	$(".rez2").css("display","none");
	$(".t18").css("display","inline");
	$("#block2").append($("#stud"));
	

});

$("#l19").click(function(){

	$(".rez2").css("display","none");
	$(".t19").css("display","inline");
	$("#block2").append($("#raboch"));
	

});

$("#l20").click(function(){

	$(".rez2").css("display","none");
	$(".t20").css("display","inline");
	$("#block2").append($("#avtomob"));
	

});

$("#l21").click(function(){

	$(".rez2").css("display","none");
	$(".t21").css("display","inline");
	$("#block2").append($("#sir"));
	

});

$("#l22").click(function(){

	$(".rez2").css("display","none");
	$(".t22").css("display","inline");
	$("#block2").append($("#strahov"));
	

});

$("#l23").click(function(){

	$(".rez2").css("display","none");
	$(".t23").css("display","inline");
	$("#block2").append($("#drugiecf"));
	

});

$("#k1").click(function(){

	$(".rez2").css("display","none");
	$(".k1").css("display","inline");
	$("#block2").append($("#k_str"));
	

});

$("#k2").click(function(){

	$(".rez2").css("display","none");
	$(".k2").css("display","inline");
	$("#block2").append($("#k_obr"));
	

});

$("#k3").click(function(){

	$(".rez2").css("display","none");
	$(".k3").css("display","inline");
	$("#block2").append($("#k_rem"));
	

});
$("#k4").click(function(){

	$(".rez2").css("display","none");
	$(".k4").css("display","inline");
	$("#block2").append($("#k_urid"));
	

});

$("#k5").click(function(){

	$(".rez2").css("display","none");
	$(".k5").css("display","inline");
	$("#block2").append($("#k_prokat"));
	

});

$("#k6").click(function(){

	$(".rez2").css("display","none");
	$(".k6").css("display","inline");
	$("#block2").append($("#k_sp"));
	

});
$("#k7").click(function(){

	$(".rez2").css("display","none");
	$(".k7").css("display","inline");
	$("#block2").append($("#k_kr"));
	

});

$("#k8").click(function(){

	$(".rez2").css("display","none");
	$(".k8").css("display","inline");
	$("#block2").append($("#k_it"));
	

});

$("#b1").click(function(){

	$(".rez2").css("display","none");
	$(".b1").css("display","inline");
	$("#block2").append($("#b_sir"));
	

});
$("#b2").click(function(){

	$(".rez2").css("display","none");
	$(".b2").css("display","inline");
	$("#block2").append($("#b_obor"));
	

});

$("#b3").click(function(){

	$(".rez2").css("display","none");
	$(".b3").css("display","inline");
	$("#block2").append($("#b_prod"));
	

});

$("#b4").click(function(){

	$(".rez2").css("display","none");
	$(".b4").css("display","inline");
	$("#block2").append($("#b_promt"));
	

});

$("#b5").click(function(){

	$(".rez2").css("display","none");
	$(".b5").css("display","inline");
	$("#block2").append($("#b_prodazha"));
	

});


//////////zakritie job

//////////otkritie veshi

$("#v1").click(function(){

	$(".rez2").css("display","none");
	$(".v1").css("display","inline");
	$("#block2").append($("#v_odezhda"));
	

});

$("#v2").click(function(){

	$(".rez2").css("display","none");
	$(".v2").css("display","inline");
	$("#block2").append($("#v_obuv"));
	

});

$("#v3").click(function(){

	$(".rez2").css("display","none");
	$(".v3").css("display","inline");
	$("#block2").append($("#v_svad"));
	

});

$("#v4").click(function(){

	$(".rez2").css("display","none");
	$(".v4").css("display","inline");
	$("#block2").append($("#v_access"));
	

});

$("#v5").click(function(){

	$(".rez2").css("display","none");
	$(".v5").css("display","inline");
	$("#block2").append($("#v_cert"));
	

});

$("#v6").click(function(){

	$(".rez2").css("display","none");
	$(".v6").css("display","inline");
	$("#block2").append($("#v_kosmet"));
	

});

$("#v7").click(function(){

	$(".rez2").css("display","none");
	$(".v7").css("display","inline");
	$("#block2").append($("#v_chasi"));
	

});




//////////zakritie veshi

//////////otkritie electro

$("#n1").click(function(){

	$(".rez2").css("display","none");
	$(".n1").css("display","inline");
	$("#block2").append($("#n_komp"));
	

});

$("#n2").click(function(){

	$(".rez2").css("display","none");
	$(".n2").css("display","inline");
	$("#block2").append($("#n_bit"));
	

});

$("#n3").click(function(){

	$(".rez2").css("display","none");
	$(".n3").css("display","inline");
	$("#block2").append($("#n_fot"));
	

});

$("#n4").click(function(){

	$(".rez2").css("display","none");
	$(".n4").css("display","inline");
	$("#block2").append($("#n_tel"));
	

});
$("#n5").click(function(){

	$(".rez2").css("display","none");
	$(".n5").css("display","inline");
	$("#block2").append($("#n_tv"));
	

});

$("#n6").click(function(){

	$(".rez2").css("display","none");
	$(".n6").css("display","inline");
	$("#block2").append($("#n_igr"));
	
});

$("#n7").click(function(){

	$(".rez2").css("display","none");
	$(".n7").css("display","inline");
	$("#block2").append($("#n_ard"));
	
});


$("#n8").click(function(){

	$(".rez2").css("display","none");
	$(".n8").css("display","inline");
	$("#block2").append($("#n_ind"));
	
});

$("#n9").click(function(){

	$(".rez2").css("display","none");
	$(".n9").css("display","inline");
	$("#block2").append($("#n_org"));
	
});

$("#n10").click(function(){

	$(".rez2").css("display","none");
	$(".n10").css("display","inline");
	$("#block2").append($("#n_klima"));
	
});

$("#n11").click(function(){

	$(".rez2").css("display","none");
	$(".n11").css("display","inline");
	$("#block2").append($("#n_gps"));
	
});


$("#n12").click(function(){

	$(".rez2").css("display","none");
	$(".n12").css("display","inline");
	$("#block2").append($("#n_auto"));
	
});

$("#n13").click(function(){

	$(".rez2").css("display","none");
	$(".n13").css("display","inline");
	$("#block2").append($("#n_opt"));
	
});

$("#n14").click(function(){

	$(".rez2").css("display","none");
	$(".n14").css("display","inline");
	$("#block2").append($("#n_ohran"));
	
});

//////////zakritie electro


//////////otkritie children

$("#o1").click(function(){

	$(".rez2").css("display","none");
	$(".o1").css("display","inline");
	$("#block2").append($("#o_od"));
	
});

$("#o2").click(function(){

	$(".rez2").css("display","none");
	$(".o2").css("display","inline");
	$("#block2").append($("#o_ob"));
	
});

$("#o3").click(function(){

	$(".rez2").css("display","none");
	$(".o3").css("display","inline");
	$("#block2").append($("#o_meb"));
	
});

//////////zakritie children



//////////otkritie animals

$("#a1").click(function(){

	$(".rez2").css("display","none");
	$(".a1").css("display","inline");
	$("#block2").append($("#a_usl"));
	
});

$("#a2").click(function(){

	$(".rez2").css("display","none");
	$(".a2").css("display","inline");
	$("#block2").append($("#a_nah"));
	
});

//////////zakritie animals


//////////otkritie dom

$("#d1").click(function(){

	$(".rez2").css("display","none");
	$(".d1").css("display","inline");
	$("#block2").append($("#d_m"));
	
});

$("#d2").click(function(){

	$(".rez2").css("display","none");
	$(".d2").css("display","inline");
	$("#block2").append($("#d_r"));
	
});

$("#d3").click(function(){

	$(".rez2").css("display","none");
	$(".d3").css("display","inline");
	$("#block2").append($("#d_i"));
	
});

$("#d4").click(function(){

	$(".rez2").css("display","none");
	$(".d4").css("display","inline");
	$("#block2").append($("#d_rast"));
	
});

$("#d5").click(function(){

	$(".rez2").css("display","none");
	$(".d5").css("display","inline");
	$("#block2").append($("#d_dt"));
	
});

$("#d6").click(function(){

	$(".rez2").css("display","none");
	$(".d6").css("display","inline");
	$("#block2").append($("#d_bh"));
	
});

//////////zakritie dom


//////////otkritie hobby

$("#h1").click(function(){

	$(".rez2").css("display","none");
	$(".h1").css("display","inline");
	$("#block2").append($("#h_k"));
	
});

$("#h2").click(function(){

	$(".rez2").css("display","none");
	$(".h2").css("display","inline");
	$("#block2").append($("#h_m"));
	
});

$("#h3").click(function(){

	$(".rez2").css("display","none");
	$(".h3").css("display","inline");
	$("#block2").append($("#h_s"));
	
});

$("#h4").click(function(){

	$(".rez2").css("display","none");
	$(".h4").css("display","inline");
	$("#block2").append($("#h_ppp"));
	
});

$("#h5").click(function(){

	$(".rez2").css("display","none");
	$(".h5").css("display","inline");
	$("#block2").append($("#h_vel"));
	
});


$("#h6").click(function(){

	$(".rez2").css("display","none");
	$(".h6").css("display","inline");
	$("#block2").append($("#h_bil"));
	
});

$("#h7").click(function(){

	$(".rez2").css("display","none");
	$(".h7").css("display","inline");
	$("#block2").append($("#h_put"));
	
});

$("#h8").click(function(){

	$(".rez2").css("display","none");
	$(".h8").css("display","inline");
	$("#block2").append($("#h_cd"));
	
});

//////////zakritie hobby


//////////otkritie ruchnaya

$("#ruch1").click(function(){

	$(".rez2").css("display","none");
	$(".ru1").css("display","inline");
	$("#block2").append($("#ru_ukr"));
	
});


$("#ruch2").click(function(){

	$(".rez2").css("display","none");
	$(".ru2").css("display","inline");
	$("#block2").append($("#ru_igr"));
	
});


$("#ruch3").click(function(){

	$(".rez2").css("display","none");
	$(".ru3").css("display","inline");
	$("#block2").append($("#ru_dom"));
	
});


$("#ruch4").click(function(){

	$(".rez2").css("display","none");
	$(".ru4").css("display","inline");
	$("#block2").append($("#ru_od"));
	
});

$("#ruch5").click(function(){

	$(".rez2").css("display","none");
	$(".ru5").css("display","inline");
	$("#block2").append($("#ru_kaz"));
	
});

//////////zakritie ruchnaya


//////////otkritie nedv

$("#nnn1").click(function(){

	$(".rez2").css("display","none");
	$(".nedvv").css("display","inline");
	$("#block2").append($("#ned1"));
	
});
$("#nnn11").click(function(){

	$(".rez2").css("display","none");
	$(".nedvv").css("display","inline");
	$("#block2").append($("#ned1"));
	
});

$("#nnn111").click(function(){

	$(".rez2").css("display","none");
	$(".nedvv").css("display","inline");
	$("#block2").append($("#ned1"));
	
});

$("#nnn1111").click(function(){

	$(".rez2").css("display","none");
	$(".nedvv").css("display","inline");
	$("#block2").append($("#ned1"));
	
});

$("#nnn11111").click(function(){

	$(".rez2").css("display","none");
	$(".nedvv").css("display","inline");
	$("#block2").append($("#ned1"));
	
});



//////////zakritie nedvizhimost



//////////otkritie avto


$("#avt1").click(function(){

	$(".rez2").css("display","none");
	$(".av2").css("display","inline");
	$("#block2").append($("#avvv2"));
	
});
$("#avt11").click(function(){

	$(".rez2").css("display","none");
	$(".av2").css("display","inline");
	$("#block2").append($("#avvv2"));
	
});
$("#avt111").click(function(){

	$(".rez2").css("display","none");
	$(".av2").css("display","inline");
	$("#block2").append($("#avvv2"));
	
});

$("#avt2").click(function(){

	$(".rez2").css("display","none");
	$(".av3").css("display","inline");
	$("#block2").append($("#avvv3"));
	
});

$("#avt3").click(function(){

	$(".rez2").css("display","none");
	$(".av4").css("display","inline");
	$("#block2").append($("#avvv4"));
	
});

$("#avt4").click(function(){

	$(".rez2").css("display","none");
	$(".av5").css("display","inline");
	$("#block2").append($("#avvv5"));
	
});

//////////zakritie avto



//viborka categorii

$(".rez2 > li").click(function(){

	var g = $(this).text();
	$("#free").empty().append(g);
	$("#23x").empty().append(g);
	$("#modal-2").modal('hide');
	

});


$(".zap_prochee").click(function(){

$("#modal-2").modal('hide');

});

$(".inkl > li").click(function(){

	var y = $(this).text();
	$("#free").empty().append(y);
	$("#23x").empty().append(y);
	$("#22x").empty().append("-");
	$("#modal-2").modal('hide');
	

});

$(".mod > li").click(function(){

	var y = $(this).text();
	$("#5x").empty().append(y);
	$("#21x").empty().append(y);
	$("#free").empty();
	$("#23x").empty();
	
	$("#razdell").empty();
	$("#22x").empty();

});

$(".iii > li").click(function(){

	var y = $(this).text();
	$("#5x").empty().append(y);
	$("#21x").empty().append(y);
	$("#free").empty();
	$("#23x").empty();

	$("#razdell").empty();
	$("#22x").empty();


	switch(y){
		case 'Работа(вакансии для людей)':
		$("#z_p99").show(2000);
		$("#sena2x").prop("disabled",true);

		break;

		default:
		$("#z_p99").hide(1000);
		$("#sena2x").removeAttr("disabled");
		break;

	}






});

$(".rez > li").click(function(){

	var y = $(this).text();
	$("#razdell").empty().append(y);
	$("#22x").empty().append(y);
	$("#free").empty();
	$("#23x").empty();
	

});

//viborka categorii

/*vsplitie ob podachi ob kvart*/

$("#kv10").click(function(){

	$(".hai").hide("explode",500);




});

/*vsplitie ob podachi ob kvart*/


/*spisok_city*/

$("#ee1").click(function(){

$(".t5").css("display","none");
$(".lll1").css("display","inline");


});

$("#ee2").click(function(){

$(".t5").css("display","none");
$(".lll2").css("display","inline");


});

$("#ee3").click(function(){

$(".t5").css("display","none");
$(".lll3").css("display","inline");


});

$("#ee4").click(function(){

$(".t5").css("display","none");
$(".lll4").css("display","inline");


});

$("#ee5").click(function(){

$(".t5").css("display","none");
$(".lll5").css("display","inline");


});

$("#ee6").click(function(){

$(".t5").css("display","none");
$(".lll6").css("display","inline");


});

$("#ee7").click(function(){

$(".t5").css("display","none");
$(".lll7").css("display","inline");


});


$("#ee8").click(function(){

$(".t5").css("display","none");
$(".lll8").css("display","inline");


});

$("#ee9").click(function(){

$(".t5").css("display","none");
$(".lll9").css("display","inline");


});


$("#ee10").click(function(){

$(".t5").css("display","none");
$(".lll10").css("display","inline");


});

$("#ee11").click(function(){

$(".t5").css("display","none");
$(".lll11").css("display","inline");


});

$("#ee12").click(function(){

$(".t5").css("display","none");
$(".lll12").css("display","inline");


});

/*verh podskaz*/

$("#spisok_strani>li").click(function(){

var u = $(this).text();
/*$("#15x").empty().append(u);*/
$("#41x").empty().append(u);
$("#country_cl").text(u);
$("#hid_obl").val(u);
$("#hid_obl2").val(u);

$("#hid_obl3").val(u);
$("#hid_obl4").val(u);
$("#hid_obl5").val(u);
$("#hid_obl6").val(u);
$("#hid_obl7").val(u);
$("#hid_obl8").val(u);
$("#hid_obl9").val(u);

$("#hid_obl10").val(u);
$(".hid_obl11").val(u);
$("#hid_obl12").val(u);
$("#hid_obl13").val(u);
$("#hid_obl14").val(u);
$("#hid_obl15").val(u);
$("#hid_obl16").val(u);
$("#hid_obl17").val(u);
$("#hid_obl18").val(u);
$("#hid_obl19").val(u);
$("#hid_obl20").val(u);
$("#hid_obl21").val(u);
$("#hid_obl22").val(u);





});




$(".t5>li").click(function(){

var u = $(this).text();
/*$("#16x").empty().append(u);*/
$("#42x").empty().append(u);
$("#hid_city").val(u);
$("#hid_city2").val(u);
$("#hid_city3").val(u);
$("#hid_city4").val(u);
$("#hid_city5").val(u);
$("#hid_city6").val(u);
$("#hid_city7").val(u);
$("#hid_city8").val(u);
$("#hid_city9").val(u);
$("#hid_city10").val(u);
$(".hid_city11").val(u);
$("#hid_city12").val(u);
$("#hid_city13").val(u);
$("#hid_city14").val(u);
$("#hid_city15").val(u);
$("#hid_city16").val(u);
$("#hid_city17").val(u);
$("#hid_city18").val(u);
$("#hid_city19").val(u);
$("#hid_city20").val(u);
$("#hid_city21").val(u);
$("#hid_city22").val(u);
$("#city_cl").text(u);
$("#modal-3").modal('hide');
$("#modal-4").modal('hide');





var betta = $("#23x").text();

if(u == "Астана"){

	

	if(betta == "квартиру"){

		$(".raion").hide();
		$("#astana_raion").show(1000);
	}else{
		$(".raion").hide();
	}

	}else if(u == "Алматы"){

			if(betta == "квартиру"){

			$(".raion").hide();
			$("#almaty_raion").show(1000);
			}else{
				$(".raion").hide();
			}

	}else{
			$(".raion").hide();
	}
	
	
	
	

});

/*verh podskaz*/


/*spisok_city*/

/*instagram*/

$("#istag").click(function(){

	$("#instagram").show(2000);

});

$("#ist").click(function(){

	$("#instagram").hide(2000);

});

$("#vk").click(function(){

	$("#vkn").show(2000);

});

$("#vkk").click(function(){

	$("#vkn").hide(2000);

});

$("#sknu").click(function(){

	$("#skype").show(2000);

});

$("#skn").click(function(){

	$("#skype").hide(2000);

});

$("#maill").click(function(){

	$("#mail").show(2000);

});

$("#mailll").click(function(){

	$("#mail").hide(2000);

});

$("#googlel").click(function(){

	$("#google").show(2000);

});

$("#googlell").click(function(){

	$("#google").hide(2000);

});

$("#other1").click(function(){

	$("#other").show(2000);

});

$("#other2").click(function(){

	$("#other").hide(2000);

});







/*instagram*/


/*vidvigayushie bloki*/


$(".pr_kvartiri").click(function(){
	$(".prx1").hide(1000);
	$("#pr_kv").show(2000);

});

$(".pr_dom").click(function(){
	
	$(".prx1").hide(1000);
	$("#pr_domov").show(2000);

});

$(".pr_ofi").click(function(){

	$("#dop_nedv").hide(1000);
	$(".prx1").hide(1000);
	$("#pr_of").show(2000);

});

$(".pr_dachi1").click(function(){
	$("#dop_nedv").hide(1000);
	$(".prx1").hide(1000);
	$("#pr_dachi2").show(2000);

});


$(".pr_uchastka").click(function(){

	$("#dop_nedv").hide(1000);
	$(".prx1").hide(1000);
	$("#pr_uchastka1").show(2000);

});

$(".pr_pom").click(function(){

	$("#dop_nedv").hide(1000);
	$(".prx1").hide(1000);
	$("#pr_pomesh").show(2000);

});

$(".pr_zdaniya").click(function(){

	$("#dop_nedv").hide(1000);
	$(".prx1").hide(1000);
	$("#pr_zd").show(2000);

});

$(".pr_mag").click(function(){

	$("#dop_nedv").hide(1000);
	$(".prx1").hide(1000);
	$("#pr_mag").show(2000);

});

/*etot block otvechaet za scritie nedvizhimosti*/

$(".narnii").click(function(){
	$(".prx1").hide(1000);
	$("#srok_sdachi1").hide(1000);
	$("#kupit1").hide(2000);
	$("#dop_nedv").hide(2000);
});

/*etot block otvechaet za scritie nedvizhimosti*/


/*etot blok otvechaet za vsplitie arendi*/

$(".sd_sdat").click(function(){
	$("#kupit1").hide(1000);
	$("#srok_sdachi1").show(2000);

});

$(".narnii2").click(function(){

	$("#srok_sdachi1").hide(1000);
	$("#kupit1").hide(2000);
	$("#dop_nedv").hide(2000);

});

/*etot blok otvechaet za vsplitie arendi*/


/*etot blok otvechaet za vsplitie kupit*/

$(".kupit2").click(function(){

	$("#kupit1").show(2000);

});

/*etot blok otvechaet za vsplitie kupit*/


/*etot blok otvechaet za dop nedvizhimost*/

$("#dop_info5").click(function(){

		$("#dop_nedv").show(2000);


});


$("#dop_info6").click(function(){

		$("#dop_nedv").hide(1000);


});

$(".d_info5").click(function(){

		$("#dop_nedv").show(2000);


});


$(".d_info6").click(function(){

		$("#dop_nedv").hide(1000);


});

/*etot blok otvechaet za dop nedvizhimost*/

/*vidvigayushie bloki*/


/*auto click*/

$(".g555 option").click(function(){			//eto otvechaet za otobrazhenie vibora modeli

	var u = $(this).text();
	$("#car_models").empty().append(u);
});


$(".cars_mark1 option").click(function(){	//eto otvechaet za otobrazhenie vibora marki

	var u = $(this).text();
	$("#car_identificator").empty().append(u);
});


$(".bmw").click(function(){

	$(".g555").hide();
	$(".bmw1").show(1000);

});


$(".acura").click(function(){

	$(".g555").hide();
	$(".acura1").show(1000);

});

$(".alfa-romeo").click(function(){

	$(".g555").hide();
	$(".alfa-romeo1").show(1000);

});

$(".aston-martin").click(function(){

	$(".g555").hide();
	$(".aston-martin1").show(1000);

});

$(".audi").click(function(){

	$(".g555").hide();
	$(".audi1").show(1000);

});

$(".byd").click(function(){

	$(".g555").hide();
	$(".byd1").show(1000);

});

$(".cadillac").click(function(){

	$(".g555").hide();
	$(".cadillac1").show(1000);

});


$(".bentley").click(function(){

	$(".g555").hide();
	$(".bentley1").show(1000);

});

$(".bugatti").click(function(){

	$(".g555").hide();
	$(".bugatti1").show(1000);

});

$(".chery").click(function(){

	$(".g555").hide();
	$(".chery1").show(1000);

});

$(".chevrolet").click(function(){

	$(".g555").hide();
	$(".chevrolet1").show(1000);

});

$(".chrysler").click(function(){

	$(".g555").hide();
	$(".chrysler1").show(1000);

});

$(".citroen").click(function(){

	$(".g555").hide();
	$(".citroen1").show(1000);

});

$(".daewoo").click(function(){

	$(".g555").hide();
	$(".daewoo1").show(1000);

});

$(".daihatsu").click(function(){

	$(".g555").hide();
	$(".daihatsu1").show(1000);

});

$(".dodge").click(function(){

	$(".g555").hide();
	$(".dodge1").show(1000);

});

$(".donfeng").click(function(){

	$(".g555").hide();
	$(".donfeng1").show(1000);

});

$(".faw").click(function(){

	$(".g555").hide();
	$(".faw1").show(1000);

});

$(".ferrari").click(function(){

	$(".g555").hide();
	$(".ferrari1").show(1000);

});

$(".fiat").click(function(){

	$(".g555").hide();
	$(".fiat1").show(1000);

});

$(".ford").click(function(){

	$(".g555").hide();
	$(".ford1").show(1000);

});

$(".gaz").click(function(){

	$(".g555").hide();
	$(".gaz1").show(1000);

});

$(".geely").click(function(){

	$(".g555").hide();
	$(".geely1").show(1000);

});

$(".gmc").click(function(){

	$(".g555").hide();
	$(".geely1").show(1000);

});

$(".honda").click(function(){

	$(".g555").hide();
	$(".honda1").show(1000);

});

$(".hummer").click(function(){

	$(".g555").hide();
	$(".hummer1").show(1000);

});

$(".hyundai").click(function(){

	$(".g555").hide();
	$(".hyundai1").show(1000);

});

$(".infiniti").click(function(){

	$(".g555").hide();
	$(".infiniti1").show(1000);

});

$(".isuzu").click(function(){

	$(".g555").hide();
	$(".isuzu1").show(1000);

});

$(".izh").click(function(){

	$(".g555").hide();
	$(".izh1").show(1000);

});

$(".jaguar").click(function(){

	$(".g555").hide();
	$(".jaguar1").show(1000);

});

$(".jeep").click(function(){

	$(".g555").hide();
	$(".jeep1").show(1000);

});

$(".jmc").click(function(){

	$(".g555").hide();
	$(".jmc1").show(1000);

});

$(".kia").click(function(){

	$(".g555").hide();
	$(".kia1").show(1000);

});

$(".lamborghini").click(function(){

	$(".g555").hide();
	$(".lamborghini1").show(1000);

});

$(".lexus").click(function(){

	$(".g555").hide();
	$(".lexus1").show(1000);

});

$(".landrover").click(function(){

	$(".g555").hide();
	$(".landrover1").show(1000);

});


$(".landrover").click(function(){

	$(".g555").hide();
	$(".landrover1").show(1000);

});

$(".lifan").click(function(){

	$(".g555").hide();
	$(".lifan1").show(1000);

});

$(".lincoln").click(function(){

	$(".g555").hide();
	$(".lincoln1").show(1000);

});

$(".lotus").click(function(){

	$(".g555").hide();
	$(".lotus1").show(1000);

});

$(".luaz").click(function(){

	$(".g555").hide();
	$(".luaz1").show(1000);

});

$(".maybach").click(function(){

	$(".g555").hide();
	$(".maybach1").show(1000);

});

$(".mazda").click(function(){

	$(".g555").hide();
	$(".mazda1").show(1000);

});

$(".mers-maybach").click(function(){

	$(".g555").hide();
	$(".mers-maybach1").show(1000);

});

$(".mercedes").click(function(){

	$(".g555").hide();
	$(".mercedes1").show(1000);

});

$(".mini").click(function(){

	$(".g555").hide();
	$(".mini1").show(1000);

});

$(".mitsubishi").click(function(){

	$(".g555").hide();
	$(".mitsubishi1").show(1000);

});

$(".nissan").click(function(){

	$(".g555").hide();
	$(".nissan1").show(1000);

});

$(".opel").click(function(){

	$(".g555").hide();
	$(".opel1").show(1000);

});

$(".peugeot").click(function(){

	$(".g555").hide();
	$(".peugeot1").show(1000);

});

$(".plymouth").click(function(){

	$(".g555").hide();
	$(".plymouth1").show(1000);

});

$(".pontiac").click(function(){

	$(".g555").hide();
	$(".pontiac1").show(1000);

});

$(".porshe").click(function(){

	$(".g555").hide();
	$(".porshe1").show(1000);

});

$(".renault").click(function(){

	$(".g555").hide();
	$(".renault1").show(1000);

});

$(".rover").click(function(){

	$(".g555").hide();
	$(".rover1").show(1000);

});

$(".retro").click(function(){

	$(".g555").hide();
	$(".retro1").show(1000);

});

$(".saab").click(function(){

	$(".g555").hide();
	$(".saab1").show(1000);

});

$(".rools-rouse").click(function(){

	$(".g555").hide();
	$(".rools-rouse1").show(1000);

});

$(".sumsung").click(function(){

	$(".g555").hide();
	$(".sumsung1").show(1000);

});

$(".santana").click(function(){

	$(".g555").hide();
	$(".santana1").show(1000);

});

$(".saturn").click(function(){

	$(".g555").hide();
	$(".saturn1").show(1000);

});

$(".seat").click(function(){

	$(".g555").hide();
	$(".seat1").show(1000);

});

$(".skoda").click(function(){

	$(".g555").hide();
	$(".skoda1").show(1000);

});


$(".smart").click(function(){

	$(".g555").hide();
	$(".smart1").show(1000);

});


$(".sang").click(function(){

	$(".g555").hide();
	$(".sang1").show(1000);

});

$(".subaru").click(function(){

	$(".g555").hide();
	$(".subaru1").show(1000);

});

$(".suzuki").click(function(){

	$(".g555").hide();
	$(".suzuki1").show(1000);

});

$(".Tesla").click(function(){

	$(".g555").hide();
	$(".Tesla1").show(1000);

});

$(".toyota").click(function(){

	$(".g555").hide();
	$(".toyota1").show(1000);

});

$(".volvo").click(function(){

	$(".g555").hide();
	$(".volvo1").show(1000);

});

$(".volkswagen").click(function(){

	$(".g555").hide();
	$(".volkswagen1").show(1000);

});

$(".lada").click(function(){

	$(".g555").hide();
	$(".lada1").show(1000);

});

$(".vic").click(function(){

	$(".g555").hide();
	$(".vic1").show(1000);

});

$(".uaz").click(function(){

	$(".g555").hide();
	$(".uaz1").show(1000);

});

$(".zaz").click(function(){

	$(".g555").hide();
	$(".zaz1").show(1000);

});

$(".vortex").click(function(){

	$(".g555").hide();
	$(".vortex1").show(1000);

});


/*etot block otvechaet za vivod razdela avto*/

$("#avt1").click(function(){

$("#avto_block").show(2000);

});

$(".grw").click(function(){

	$("#avto_block").hide(2000);

});




$(".g5s").click(function(){			/*sentralnii block kategorii*/

	$("#avto_block").hide(2000);
	$("#spes_block").hide(2000);
	$(".zapchasti1c").hide(2000);
	$(".zapclass").hide(2000);

});

/*etot block otvechaet za vivod razdela avto*/

/*etot block otvechaet za vivod razdela spes*/

$(".spes_teh").click(function(){

	$("#spes_block").show(2000);

});


$(".mmml").click(function(){

	$("#spes_block").hide(2000);

});


$(".nn5s > option").click(function(){

	var z = $(this).text();

	$("#sp_identificator").empty().append(z);

});


$(".nmpdef").click(function(){


$("#modal-2").modal('hide');


});



/*etot block otvechaet za vivod razdela spes*/


/*tip tehniki*/


$("#jjjfl a").click(function(){		/*etot block otvechaet za vsplitie tipa tehniki*/

	var y = $(this).text();
	switch(y){
		case 'Автобусы':
		$(".glx7").hide();
		$(".fx1").show(2000);
		break;
		case 'Автовышки':
		$(".glx7").hide();
		$(".fx2").show(2000);
		break;
		case 'Автодома':
		$(".glx7").hide();
		$(".fx3").show(2000);
		break;

		case 'Автокраны':
		$(".glx7").hide();
		$(".fx4").show(2000);
		break;

		case 'Автоцистерны':
		$(".glx7").hide();
		$(".fx5").show(2000);
		break;

		case 'Бетононасосы':
		$(".glx7").hide();
		$(".fx6").show(2000);
		break;

		case 'Бетоносмесители(Миксеры)':
		$(".glx7").hide();
		$(".fx7").show(2000);
		break;

		case 'Бульдозеры':
		$(".glx7").hide();
		$(".fx8").show(2000);
		break;

		case 'Грузовики':
		$(".glx7").hide();
		$(".fx9").show(2000);
		break;

		case 'Катки':
		$(".glx7").hide();
		$(".fx8").show(2000);
		break;

		case 'Погрузчики вилочные':
		$(".glx7").hide();
		$(".fx10").show(2000);
		break;

		case 'Погрузчики фронтальные':
		$(".glx7").hide();
		$(".fx11").show(2000);
		break;

		case 'Прицепы и полуприцепы':
		$(".glx7").hide();
		$(".fx9").show(2000);
		break;

		case 'Тракторы и сельхозтехника':
		$(".glx7").hide();
		$(".fx12").show(2000);
		break;

		case 'Экскаваторы':
		$(".glx7").hide();
		$(".fx11").show(2000);
		break;

		case 'Манипуляторы':
		$(".glx7").hide();
		$(".fx4").show(2000);
		break;

		case 'другое':
		$(".glx7").hide(1000);
		break;

		default:
		$(".glx7").hide(1000);
		break;
	
	}


});







$("#selev_audit a").click(function(){		/*etot block otvechaet za aux*/

	var y = $(this).text();
	switch(y){
		case 'ограниченному количеству участников':
		$("#kol_uch").show(1000);
		$(".inject7").text(y);
		break;

		default:
		$("#kol_uch").hide(1000);
		$(".inject7").text(y);
		break;
	
	}


});


$("#auxnet a").click(function(){		/*etot block otvechaet za aux*/

	var y = $(this).text();
	switch(y){
		case 'да':
		$("#auxion777").show(1000);
		break;

		default:
		$("#auxion777").hide(1000);
		break;
	
	}


});






$("#jjjfl a").click(function(){			/*block zameni teksta v tipe tehniki*/

	var r = $(this).text();
	
	$("#kk2x").empty().append(r);


});




/*tip tehniki*/



/*auto click*/


/*auto view*/

$(".gflex1 > option").click(function(){

var t = $(this).text();


$(".u7x").empty().append(t);

});

$(".g555 > option").click(function(){

var i = $(this).text();

$(".i2x").empty().append(i);


});

$(".legkovih").click(function(){

$(".legk7x").hide();
$("#nnn1x").show(2000);


});

$(".spestt").click(function(){

$(".legk7x").hide();
$("#nnn2x").show(2000);


});




/*auto view*/


/*spes teh otobrazh*/

$(".nn5s > option").click(function(){

var o = $(this).text();

$(".idmyx").empty().append(o);

});


/*spes teh otobrazh*/



/*zapchasti*/


$(".rez2 > li").click(function(){

	var p = $(this).text();

	switch(p){

		case 'Продажа запчастей':
		$(".zapclass").hide(1000);
		$("#zapchasti2x").show(2000);
		break;

		case 'авторазбор':
		$(".zapclass").hide(1000);
		$("#zapchasti2x").show(2000);
		break;

		case 'Магазины запчастей':
		$(".zapclass").hide(1000);
		$("#zapchasti2x").show(2000);
		break;

		case 'Аксессуары и мультимедиа':
		$(".zapclass").hide(1000);
		$("#zapchasti2x").show(2000);
		break;

		case 'Расходники':
		$(".zapclass").hide(1000);
		$("#zapchasti2x").show(2000);
		break;

		case 'Авто на запчасти':
		$(".zapclass").hide(1000);
		$("#zapchasti2x").show(2000);
		break;

		case 'Шины':
		$(".zapclass").hide(1000);
		$("#id_shina").show(2000);
		break;

		case 'ищу запчасть':
		$(".zapclass").hide(1000);
		$("#kupit1").show(2000);
		break;

		case 'Диски':
		$(".zapclass").hide(1000);
		$("#disk7777").show(2000);
		break;

	}


$(".zapchx2").click(function(){			/*scritie zapchastei*/

$(".zapchasti1c").hide(1000);
$(".zapclass").hide(1000);

});

});




/*zapchasti*/



/*za vsplitie kem vi yavlyaetes*/


$(".hello_name a").click(function(){

	var gretto = $(this).text();

	switch(gretto){
		case 'частное лицо':
		$(".bz_name").hide(1000);
		$("#xdw-1").show(2000);
		break;

		case 'компания':
		$(".bz_name").hide(1000);
		$("#xdw-2").show(2000);
		break;

		case 'бизнес':
		$(".bz_name").hide(1000);
		$("#xdw-3").show(2000);
		break;

		case 'агенство':
		$(".bz_name").hide(1000);
		$("#xdw-4").show(2000);
		break;

		case 'магазин':
		$(".bz_name").hide(1000);
		$("#xdw-5").show(2000);
		break;

		case 'другое':
		$(".bz_name").hide(1000);
		$("#xdw-5").show(2000);
		break;
	}


});



/*za vsplitie kem vi yavlyaetes*/


/*dorabotka mater sten*/
$(".lll4x a").click(function(){

var ii = $(this).text();

$(".lll3x").text(ii);

});
/*dorabotka mater sten*/

/*dorabotka tip doma*/

$(".type4x a").click(function(){

var ii = $(this).text();

$(".type3x").text(ii);

});


/*dorabotka tip doma*/

$("#kem7777 a").click(function(){

var grettoy = $(this).text();
var grettoyy = $(".kem777").text(grettoy);
var grettoyy = $(".kem777").val(grettoy);

});


/*$("#sub_upl").click(function(event){

event.preventDefault();

});
*/


var numberfiles = 0;
var arrOfname = new Array();
var globalsrc;
var globalsrc2;





/*________________________revo_func*/ /*peredelannii variant*/




var control = document.getElementById("myfile");

if(control){




control.addEventListener("change", function(event) {
    // Когда происходит изменение элементов управления, значит появились новые файлы
    var i = 0,
        files = control.files,
        len = files.length;
 
    for (; i < len; i++) {
        var formData = new FormData();

formData.append("myfile", files[i]);



/*_____________*/
var d = files[i];
var filename = files[i].name;
var filesize = files[i].size;
var filetype = files[i].type;

			var reader = new FileReader();
			       		 reader.onload = function(e) {
			            	globalsrc = e.target.result
			            	
			            	
			        	}

			        	reader.readAsDataURL(d);
			        	var photo_path = filename;
			        	

			        	

			        	for(var i = 0; i < arrOfname.length; i++){

								if(arrOfname[i] == filename){
									var mm5m = "фотография с таким именем уже существует!"
			        				$("#info_page").hide().delay(1000).show(1000).html(mm5m);
			        				$("#info_page").delay(3000).hide(1000);	
									exit;

								}

						}

						arrOfname.push(filename);

			        	
			        	if(numberfiles != 8){

			        		numberfiles +=1;
			    			formData.append("countupload", numberfiles);

						} /*kones if numberfiles*/
			        	else{
			        		var mm = "Больше 8 фотографий и видео не допустимо для загрузки!"
			        			$("#info_page").hide().delay(1000).show(1000).html(mm);
			        				$("#info_page").delay(3000).hide(1000);	
			        			
			        			exit;
			        	}

			        	
			        	function myvalidjpeg(string){


								var arr = new Array("image/pjpeg","image/jpeg","image/gif","image/png","image/x-png");
								for(var i = 0; i < arr.length;i++){
									if(string == arr[i]){
										return true;
									}
								}


								};



						function myvalidvideo(string){


								var arr2 = new Array("video/mpeg","video/mp4","video/msvideo","video/avi","application/x-troff-msvideo","video/x-msvideo");
								for(var j = 0; j < arr2.length;j++){
									if(string == arr2[j]){
										return true;
									}
								}


								};

								


			        	if(myvalidjpeg(filetype) == true){
			        		
			        		/*_____________*/

			        		if(filesize > 5000000){
									var mm7m = "Размер фото не должен превышать 5mb"
			        				$("#info_page").hide().delay(1000).show(1000).html(mm7m);
			        				$("#info_page").delay(3000).hide(1000);
			        				numberfiles -= 1;
									exit;
								}


function yy(res){

		if(res == "ошибка загрузки фото"){
			res = "ошибка загрузки фото, фото не удовлетворяет требованиям";
			$("#info_page").hide().delay(1000).show(1000).html(res);
        	$("#info_page").delay(3000).hide(1000);
        	numberfiles -= 1;
			exit;
		}

        	/*________________*/

        $("#info_page").hide().delay(1000).show(1000).html(res);
        $("#info_page").delay(3000).hide(1000);
        	/*________________*/

        		/*________________*/
        		

        		var numberArr5 = {
    						"atr1":"photo1",
    						"atr2":"photo2",
    						"atr3":"photo3",
    						"atr4":"photo4",
    						"atr5":"photo5",
    						"atr6":"photo6",
    						"atr7":"photo7",
    						"atr8":"photo8",
    					};


    					$.each(numberArr5,function(key, value){

    						var lllll = '#' + value;


    						var g1 = $(lllll);


    						

    						if(g1.css("display") == "none"){

    							g1.css("display","block");

    							var img15 = g1.children("img");
    							img15.attr("v","1");
    							img15.attr("src",globalsrc);
    							img15.attr("alt",numberfiles);
    							img15.attr("title",photo_path);
    							var iconss = img15.next();
    							iconss.after('<i style="color:#5bc0de; margin-left:5px;" class="glyphicon glyphicon-ok"></i>');

    							return false;

    						}

    					});

        	/*________________*/
      						};
$.ajax({
	"type":"POST",
      processData: false,
      contentType: false,
      "url":myurl + "index.php/upload/do_upload",
     
      "success":yy,
  
    "data":formData ,
     xhr:function(){
      		var xhr = $.ajaxSettings.xhr();		// получаем объект XMLHttpRequest
      		// Устанавливаем обработчик подгрузки
      		xhr.addEventListener('progress',function(evt){

      			if(evt.lengthComputable){
      				var percentComplete = Math.ceil(evt.loaded / evt.total * 100);

      				$('#progress').show();

      				$('.progress-bar').css(
			            'width',
			            percentComplete + '%'
			        						);

      				if(percentComplete == 100){
      					$('#progress').delay(1000).hide(1000);
      				}

      			}

      		}, false);
      		return xhr;
      },
 
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };
				/*_________________________*/



			        	}else if(myvalidvideo(filetype) == true){


			        		if(filesize > 500000000){
									var mm7m = "Размер видео не должен превышать 500mb"
			        				$("#info_page").hide().delay(1000).show(1000).html(mm7m);
			        				$("#info_page").delay(3000).hide(1000);
			        				numberfiles -= 1;
									exit;
								}
			        		
			        		/*_____________*/

     

function yx(res){

		if(res == "ошибка загрузки фото"){
			res = "ошибка загрузки видео видео не удовлетворяет требованиям";
			$("#info_page").hide().delay(1000).show(1000).html(res);
        	$("#info_page").delay(3000).hide(1000);
        	numberfiles -= 1;
			exit;
		}


        	/*________________*/

        $("#info_page").hide().delay(1000).show(1000).html(res);
        $("#info_page").delay(3000).hide(1000);
        	/*________________*/

        		/*________________*/

        		var numberArr6 = {
    						"atr11":"video1",
    						"atr12":"video2",
    						
    					};


    					$.each(numberArr6,function(key, value){

    						var lllll2 = '#' + value;

    						var g2 = $(lllll2);

    						

    						if(g2.css("display") == "none"){

    							g2.css("display","block");

    							var img16 = g2.children("video");
    							
    							img16.attr("v","2");
    							img16.attr("src",globalsrc);
    							img16.attr("alt",numberfiles);
    							img16.attr("title",photo_path);
    							var iconss = img16.next();
    							iconss.after('<i style="color:#5bc0de; margin-left:5px;" class="glyphicon glyphicon-ok"></i>');
    							return false;

    						}

    					});

        	/*________________*/
      						};
$.ajax({
	"type":"POST",
      processData: false,
      contentType: false,
      "url":myurl + "index.php/Upload_v/do_upload",
     
      "success":yx,
  
    "data":formData ,
     xhr:function(){
      		var xhr = $.ajaxSettings.xhr();		// получаем объект XMLHttpRequest
      		// Устанавливаем обработчик подгрузки
      		xhr.addEventListener('progress',function(evt){

      			if(evt.lengthComputable){
      				var percentComplete = Math.ceil(evt.loaded / evt.total * 100);

      				$('#progress').show();

      				$('.progress-bar').css(
			            'width',
			            percentComplete + '%'
			        						);

      				if(percentComplete == 100){
      					$('#progress').delay(1000).hide(1000);
      				}

      			}

      		}, false);
      		return xhr;
      },
 
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };
				/*_________________________*/


			        	}else{

			        		alert("false");
			        		exit;
			        	}








    }		/*kones for*/


    
 
}, false);


}


/*________________________revo_func*/
/*peredelannii variant*/


var total = 0;
var total2 = 0;
var total3 = 0;
var total4 = 0;
var total5 = 0;
var total6 = 0;
var total7 = 0;
var total8 = 0;

$(".den").click(function(){


	var image = $(this).next();

	var path = image.attr("alt");

	

 	var ed_photo = myurl + "index.php/Perev_photo/perev2";

 	var form999={
 		"ident":path,
 		"hidden":"hidden",
 	}



$.ajaxSetup({

      "type":"POST",
      "url":ed_photo,
      "success":kxnj
        });


function kxnj(res){

	var result = JSON.parse(res);

	if(result.b == "фотография перевернута.."){


			if(path == "1"){

				total += 90;
				image.css("transition","all 3s");
				var rotate = "rotate(" + total + "deg)";
				image.css("transform",rotate);

			}else if(path == "2"){

				total2 += 90;
				image.css("transition","all 3s");
				var rotate2 = "rotate(" + total2 + "deg)";
				image.css("transform",rotate2);


			}else if(path == "3"){

				total3 += 90;
				image.css("transition","all 3s");
				var rotate3 = "rotate(" + total3 + "deg)";
				image.css("transform",rotate3);


			}else if(path == "4"){

				total4 += 90;
				image.css("transition","all 3s");
				var rotate4 = "rotate(" + total4 + "deg)";
				image.css("transform",rotate4);


			}else if(path == "5"){

				total5 += 90;
				image.css("transition","all 3s");
				var rotate5 = "rotate(" + total5 + "deg)";
				image.css("transform",rotate5);


			}else if(path == "6"){

				total6 += 90;
				image.css("transition","all 3s");
				var rotate6 = "rotate(" + total6 + "deg)";
				image.css("transform",rotate6);


			}else if(path == "7"){

				total7 += 90;
				image.css("transition","all 3s");
				var rotate7 = "rotate(" + total7 + "deg)";
				image.css("transform",rotate7);


			}else if(path == "8"){

				total8 += 90;
				image.css("transition","all 3s");
				var rotate8 = "rotate(" + total8 + "deg)";
				image.css("transform",rotate8);


			}

		 $("#info_page").hide().delay(500).show(500).html(result.b);
		 $("#info_page").delay(3000).hide(1000);
	}else{
		 $("#info_page").hide().delay(500).show(500).html(result.b);
		 $("#info_page").delay(3000).hide(1000);
	}



      						};
$.ajax({
  
    "data":form999,
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };




 	


});




/*var rezervsecure = new Array();*/

$(".remove_photo").click(function(e){

	e.preventDefault();

	var text_image = $(this).prev();

	var src_image = text_image.attr("alt");

	var typeimage = text_image.attr("v");

	var delete_filename = text_image.attr("title");

	var icons7 = text_image.next().next();
	
	icons7.remove();




	

	var form10 = {
		"photoname" : src_image,
		"typeimage"	: typeimage,
	};
	


$.ajaxSetup({

      "type":"POST",
      "url":myurl + "index.php/upload/remove_photo",
      "success":pp
        });

function pp(res){
        $("#info_page").hide().delay(1000).show(1000).html(res);
        $("#info_page").delay(3000).hide(1000);
      						};
$.ajax({
  
    "data":form10,
    "error":errorfuncn
    
  });

   function errorfuncn(){
   		alert("oshibka zaprosa");
   };



   var divscr = text_image.parent("div");
   	divscr.css("display","none");

   	numberfiles -= 1;



   	
   	for(var i = 0;i < arrOfname.length;i++){

   			if(arrOfname[i] == delete_filename){
   				arrOfname.splice(i,1);

   			}


   	}



});




$(".remove_video").click(function(e){

	e.preventDefault();

	var text_image = $(this).prev();

	var src_image = text_image.attr("alt");

	var typeimage = text_image.attr("v");

	var delete_filename = text_image.attr("title");


	var icons8 = text_image.next().next();
	
	icons8.remove();



	/*var formData = new FormData();
	formData.append("photoname", src_image);*/
	
	var form11 = {
		"photoname" : src_image,
		"typeimage"	: typeimage,
	};


$.ajaxSetup({

      "type":"POST",
      "url":myurl + "index.php/upload_v/remove_photo",
      "success":np
        });

function np(resp){
	

		var string = "удаление фото завершено..";

		var string2 = resp.substring(1);
		
		if(string2 == string){
				var string3 = "удаление видео завершено..";
				$("#info_page").hide().delay(1000).show(1000).html(string3);
        		$("#info_page").delay(3000).hide(1000);
		}else{
			$("#info_page").hide().delay(1000).show(1000).html(resp);
        	$("#info_page").delay(3000).hide(1000);
		}


		
		
	
		
	
        
      						};
	
$.ajax({
  
    "data":form11,
    "error":errorfuncn
    
  });

   function errorfuncn(){
   		alert("oshibka zaprosa");
   };



   var divscr = text_image.parent("div");
   	divscr.css("display","none");

   	numberfiles -= 1;



   	
   	for(var i = 0;i < arrOfname.length;i++){

   			if(arrOfname[i] == delete_filename){
   				arrOfname.splice(i,1);

   			}


   	}



});



 /*block vivoda dopolnitelnoi informasii v glavnoi informasii*/

$("#dop_inform99x  a").click(function(){


	var a = $(this).text();

	
	
	if(a == "да"){
		$("#dopol_dannie78x").show(1000);

		
	}else{
		$("#dopol_dannie78x").hide(1000);

	}



});

 /*block vivoda dopolnitelnoi informasii v glavnoi informasii*/








/*-----------proverka telefona---*/


$("#optionsRadios21").click(function(){


	$("#sena2x").prop("disabled",true);
	
	

	
	


});
$("#optionsRadios22").click(function(){


	$("#sena2x").prop("disabled",true);
	
	

});

$("#optionsRadios20").click(function(){


	$("#sena2x").removeAttr("disabled");
	var sena1 = $("#sena2x").val();


});




	 $("#telephone2x").mask("9(999) 999-9999");

	 $("#ob_sist14x").mask("9.9");
	 $("#ob_sis414x").mask("9.9");
	 $("#ob_kov514x").mask("9.9");
	 $("#obem_spes13x").mask("9.9");
	 $("#obem12x").mask("9.9");
	 

	


	




/*-----------proverka telefona---*/




var xen1 = true;

var pathpred = myurl + "index.php/Pred_ob/prin_fail";



$("#pred2x").click(function(){



	var xen1 = true;		/*upravlyayushaya peremennaya*/


	function myloadfunc(form1){


		form1['r_alm'] = r_alm;
		form1['city_alm'] = city_alm;
		form1['r_astana'] = r_astana;
		form1['city_ast'] = city_ast;

		form1['vremya_nachala_auxion'] = vremya_nachala_auxion;
		form1['vremya_okonch_auxion'] = vremya_okonch_auxion;

	


		$.ajaxSetup({

      "type":"POST",
      "url":pathpred,
      "success":kxx
        });

function kxx(res){

        $("#pred_pokaz_ob").hide().delay(500).show(500).html(res);
        $("#form_1").hide(500);


        
      						};
$.ajax({
  
    "data":form1,
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };





	}
	


var zagolovok56x = $("#zagolovok56x").val();

var one = $("#21x").text();

var two = $("#22x").text();

var three = $("#23x").text();

var sena1 = $("#sena2x").val();

if(!sena1){
	sena1 = "0";
}

var dis = $("#sena2x").attr("disabled");

if(dis){
	sena1 = "0";
}

var dop_dannie_kolich = $("#dop_dannie_kolich").val();


if(!dop_dannie_kolich){
	dop_dannie_kolich = "0";
}



var valyuta1 = $("#tg2x").val();



var dog = $("input:radio[name=optionsRadios]:checked").val();

var nalichii1 = $("input:radio[name=optionsRadios20]:checked").val();

var obmen17x = $("input:checkbox[name=inter_obmen]:checked").val();

var opisanie = $("#opisanie2x").val();

var strana = $("#41x").text();

var city1 = $("#42x").text();

var email17x = $("#email2x").val();

var telephone17x = $("#telephone2x").val();

var watsapp = $("input:checkbox[name=watsapp]:checked").val();

var viber = $("input:checkbox[name=viber]:checked").val();


//_____________________________________otvechaet za other
//_____________________________________otvechaet za other
var other17 = $("#other").css("display");
if(other17  == "block"){
	var other18 = $("#other input:text").val();
}else{
	var other18 = "нет";
}


//_____________________________________otvechaet za google

var google17 = $("#google").css("display");
if(google17  == "block"){
	var google18 = $("#google input:text").val();
}else{
	var google18 = "нет";
}
//_____________________________________otvechaet za google



//_____________________________________otvechaet za mail

var mail17 = $("#mail").css("display");
if(mail17  == "block"){
	var mail18 = $("#mail input:text").val();
}else{
	var mail18 = "нет";
}
//_____________________________________otvechaet za mail



//_____________________________________otvechaet za skype

var skype17 = $("#skype").css("display");
if(skype17  == "block"){
	var skype18 = $("#skype input:text").val();
}else{
	var skype18 = "нет";
}

//_____________________________________otvechaet za vk


var vkn17 = $("#vkn").css("display");
if(vkn17 == "block"){
	var vkn18 = $("#vkn input:text").val();
}else{
	var vkn18 = "нет";
}

//_________________________________otvechaet za instagramm


var insta17 = $("#instagram").css("display");
if(insta17 == "block"){
	var insta18 = $("#instagram input:text").val();
}else{
	var insta18 = "нет";
}



//_______________________________//otvechaet za checkbox watsapp

if(watsapp){
		watsapp = "да";
}else{
	watsapp = "нет";
}

if(viber){
	viber = "да";
}else{
	viber = "нет";
}



//______________________________

if(obmen17x){						//otvechaet za checkbox obmen
	obmen17x = "интересует обмен";
}else{
	obmen17x = "нет";
}

//_____________________

if(dog == "цена"){				//otvechaet za formirovanie vibora seni
	dog = sena1;	
}else if(dog == "договорная"){
	dog = "777";
}else if(dog == "отдам даром"){
	dog = "999";
}

//________________________________________________otvechaet za kem yavlyaetsya podavaemoe liso
var chast17 = $("#xdw-1").css("display");
if(chast17 == "block"){
	var chast18 = $("#xdw-1 input:text").val();
}else{
	var chast18 = "нет";
}


var company17 = $("#xdw-2").css("display");
if(company17 == "block"){
	var company18 = $("#xdw-2 input:text").val();
}else{
	var company18 = "нет";
}

var biznes17 = $("#xdw-3").css("display");
if(biznes17 == "block"){
	var biznes18 = $("#xdw-3 input:text").val();
}else{
	var biznes18 = "нет";
}

var agent17 = $("#xdw-4").css("display");
if(agent17 == "block"){
	var agent18 = $("#xdw-4 input:text").val();
}else{
	var agent18 = "нет";
}

var naimenov17 = $("#xdw-5").css("display");
if(naimenov17 == "block"){
	var naimenov18 = $("#xdw-5 input:text").val();
}else{
	var naimenov18 = "нет";
}

//________________________________________________otvechaet za kem yavlyaetsya podavaemoe liso

var comment21x = $("#comment2x").val();

//________________________________________________otvechaet za kem yavlyaetsya podavaemoe liso


var kol_komnat1 = $("#kol_kom3x").val();
var obsh_s1 = $("#obsh_plosh3x").val();
var etazh1 = $("#etazh3x").val();
var mat_sten1 = $(".lll3x").text();
var tip_doma20x = $(".type3x").text();
var et_v_dome20x = $("#et_v_dome3x").val();
var year_build20x = $("#year_build3x").val();


//______________________________________________etot block otvechaet za schitivanie dopolnitel'noi informasii
var ufx = $("#dop_nedv").css("display");
if(ufx == "block"){

//___________________________________________________block schitivaniya blokov
	var sostoyanie22x = $("#sostoyanie_3x").val();
	var sanuzel22x = $("#sanuzel_3x").val();
	var dver22x = $("#dver_3x").val();
	var poli22x = $("#poli_3x").val();
	var telephone22x = $("#telephone_3x3x").val();
	var balkon22x = $("#balkon_3x").val();
	var parkovka22x = $("#parkovka3x").val();
	var steni22x = $("#steni_3x").val();
	var internet22x = $("#internet_3x").val();
	var balkon_osteklennii22x = $("#balkon_osteklennii_3x").val();
	var mebel22x = $("#mebel_3x").val();
	var otoplenie22x = $("#otoplenie_3x").val();
//___________________________________________________block schitivaniya blokov

//_______________________________________________________________________________block schitivaniya checkboxov
	var signalizasiya22x = $("input:checkbox[name=bez1x]:checked").val();
	var videonabl22x = $("input:checkbox[name=bez2x]:checked").val();
	var konserzh22x = $("input:checkbox[name=bez3x]:checked").val();
	var domofon22x = $("input:checkbox[name=bez4x]:checked").val();
	var ohrana22x = $("input:checkbox[name=bez5x]:checked").val();
	var kodov_zamok22x = $("input:checkbox[name=bez6x]:checked").val();
	var reshetki_na_oknah22x = $("input:checkbox[name=bez7x]:checked").val();
	var datchik_dvizh22x = $("input:checkbox[name=bez8x]:checked").val();
	var video_domof22x = $("input:checkbox[name=bez9x]:checked").val();
	var udobno_pod_kommers22x = $("input:checkbox[name=bez10x]:checked").val();
	var neuglov22x = $("input:checkbox[name=bez11x]:checked").val();
	var plastik_okna22x = $("input:checkbox[name=bez12x]:checked").val();
	var kuhnya_studiya22x = $("input:checkbox[name=bez13x]:checked").val();
	var uluchshennaya22x = $("input:checkbox[name=bez14x]:checked").val();
	var komn_izol22x = $("input:checkbox[name=bez15x]:checked").val();
	var new_santehn22x = $("input:checkbox[name=bez16x]:checked").val();
	var vstroen_kuhnya22x = $("input:checkbox[name=bez17x]:checked").val();
	var imeetsya_kladov22x = $("input:checkbox[name=bez18x]:checked").val();
	var schetchiki22x = $("input:checkbox[name=bez19x]:checked").val();
	var tihii_dvor22x = $("input:checkbox[name=bez20x]:checked").val();
	var konditioner22x = $("input:checkbox[name=bez21x]:checked").val();

	if(signalizasiya22x){
		signalizasiya22x = "сигнализация";
	}else{
		signalizasiya22x = "нет";
	}

	if(videonabl22x){
		videonabl22x = "видеонаблюдение";
	}else{
		videonabl22x = "нет";
	}

	if(konserzh22x){
		konserzh22x = "консьерж";
	}else{
		konserzh22x = "нет";
	}

	if(domofon22x){
		domofon22x = "домофон";
	}else{
		domofon22x = "нет";
	}

	if(ohrana22x){
		ohrana22x = "охрана";
	}else{
		ohrana22x = "нет";
	}

	if(kodov_zamok22x){
		kodov_zamok22x = "кодовый замок";
	}else{
		kodov_zamok22x = "нет";
	}

	if(reshetki_na_oknah22x){
		reshetki_na_oknah22x = "решетки на окнах";
	}else{
		reshetki_na_oknah22x = "нет";
	}

	if(datchik_dvizh22x){
		datchik_dvizh22x = "датчик движения";
	}else{
		datchik_dvizh22x = "нет";
	}

	if(video_domof22x){
		video_domof22x = "видеодомофон";
	}else{
		video_domof22x = "нет";
	}

	if(udobno_pod_kommers22x){
		udobno_pod_kommers22x = "удобно по коммерцию";
	}else{
		udobno_pod_kommers22x = "нет";
	}

	if(neuglov22x){
		neuglov22x = "неугловая";
	}else{
		neuglov22x = "нет";
	}

	if(plastik_okna22x){
		plastik_okna22x = "пластиковые окна";
	}else{
		plastik_okna22x = "нет";
	}

	if(kuhnya_studiya22x){
		kuhnya_studiya22x = "кухня студия";
	}else{
		kuhnya_studiya22x = "нет";
	}

	if(uluchshennaya22x){
		uluchshennaya22x = "улучшенная";
	}else{
		uluchshennaya22x = "нет";
	}

	if(komn_izol22x){
		komn_izol22x = "комнаты изолированные";
	}else{
		komn_izol22x = "нет";
	}

	if(new_santehn22x){
		new_santehn22x = "новая сантехника";
	}else{
		new_santehn22x = "нет";
	}

	if(vstroen_kuhnya22x){
		vstroen_kuhnya22x = "встроенная кухня";
	}else{
		vstroen_kuhnya22x = "нет";
	}

	if(imeetsya_kladov22x){
		imeetsya_kladov22x = "имеется кладовая";
	}else{
		imeetsya_kladov22x = "нет";
	}

	if(schetchiki22x){
		schetchiki22x = "наличие всех счетчиков";
	}else{
		schetchiki22x = "нет";
	}

	if(tihii_dvor22x){
		tihii_dvor22x = "тихий двор";
	}else{
		tihii_dvor22x = "нет";
	}

	if(konditioner22x){
		konditioner22x = "кондиционер";
	}else{
		konditioner22x = "нет";
	}
//_______________________________________________________________________________block schitivaniya checkboxov

}else{
	var sostoyanie22x = "нет";
	var sanuzel22x = "нет";
	var dver22x = "нет";
	var poli22x = "нет";
	var telephone22x = "нет";
	var balkon22x = "нет";
	var parkovka22x = "нет";
	var steni22x = "нет";
	var internet22x = "нет";
	var balkon_osteklennii22x = "нет";
	var mebel22x = "нет";
	var otoplenie22x = "нет";

//_______________________________________________________________________________block schitivaniya checkboxov
	if(signalizasiya22x){
		signalizasiya22x = "сигнализация";
	}else{
		signalizasiya22x = "нет";
	}

	if(videonabl22x){
		videonabl22x = "видеонаблюдение";
	}else{
		videonabl22x = "нет";
	}

	if(konserzh22x){
		konserzh22x = "консьерж";
	}else{
		konserzh22x = "нет";
	}

	if(domofon22x){
		domofon22x = "домофон";
	}else{
		domofon22x = "нет";
	}

	if(ohrana22x){
		ohrana22x = "охрана";
	}else{
		ohrana22x = "нет";
	}

	if(kodov_zamok22x){
		kodov_zamok22x = "кодовый замок";
	}else{
		kodov_zamok22x = "нет";
	}

	if(reshetki_na_oknah22x){
		reshetki_na_oknah22x = "решетки на окнах";
	}else{
		reshetki_na_oknah22x = "нет";
	}

	if(datchik_dvizh22x){
		datchik_dvizh22x = "датчик движения";
	}else{
		datchik_dvizh22x = "нет";
	}

	if(video_domof22x){
		video_domof22x = "видеодомофон";
	}else{
		video_domof22x = "нет";
	}

	if(udobno_pod_kommers22x){
		udobno_pod_kommers22x = "удобно по коммерцию";
	}else{
		udobno_pod_kommers22x = "нет";
	}

	if(neuglov22x){
		neuglov22x = "неугловая";
	}else{
		neuglov22x = "нет";
	}

	if(plastik_okna22x){
		plastik_okna22x = "пластиковые окна";
	}else{
		plastik_okna22x = "нет";
	}

	if(kuhnya_studiya22x){
		kuhnya_studiya22x = "кухня студия";
	}else{
		kuhnya_studiya22x = "нет";
	}

	if(uluchshennaya22x){
		uluchshennaya22x = "улучшенная";
	}else{
		uluchshennaya22x = "нет";
	}

	if(komn_izol22x){
		komn_izol22x = "комнаты изолированные";
	}else{
		komn_izol22x = "нет";
	}

	if(new_santehn22x){
		new_santehn22x = "новая сантехника";
	}else{
		new_santehn22x = "нет";
	}

	if(vstroen_kuhnya22x){
		vstroen_kuhnya22x = "встроенная кухня";
	}else{
		vstroen_kuhnya22x = "нет";
	}

	if(imeetsya_kladov22x){
		imeetsya_kladov22x = "имеется кладовая";
	}else{
		imeetsya_kladov22x = "нет";
	}

	if(schetchiki22x){
		schetchiki22x = "наличие всех счетчиков";
	}else{
		schetchiki22x = "нет";
	}

	if(tihii_dvor22x){
		tihii_dvor22x = "тихий двор";
	}else{
		tihii_dvor22x = "нет";
	}

	if(konditioner22x){
		konditioner22x = "кондиционер";
	}else{
		konditioner22x = "нет";
	}
	//_______________________________________________________________________________block schitivaniya checkboxov
}

//__________________________block schitivaniya prodazha domov

var rasst_ot_goroda25x = $("#rasst_ot_goroda4x").val();
var s_doma25x = $("#s_doma4x").val();
var type_doma25x = $("#type_doma_4x option:selected").text();
var year_build25x = $("#year_build4x").val();

//__________________________block schitivaniya prodazha domov
//__________________________block schitivaniya prodazha dachi

var rasst_ot_goroda26x = $("#rass_ot_goroda_dachi5x").val();
var s_doma26x = $("#s_doma5x").val();
var s_uchastka26x = $("#s_uchastka5x").val();
var type_doma26x = $("#type_doma_5x option:selected").text();



//__________________________block schitivaniya prodazha dachi

//____________________________block schitivaniya prodazha uchastka

var rasst_ot_goroda27x = $("#prod_uch6x").val();
var s_uchastka27x = $("#s_uch6x").val();

//____________________________block schitivaniya prodazha uchastka

//____________________________block schitivaniya prodazha ofisa

var kol_komnat28x = $("#kol_komn7x").val();
var s_obsh28x = $("#obsh_s_7x").val();
var etazh28x = $("#et7x").val();
var et_v_zdanii28x = $("#et_v_zd7x").val();
var type_ofisa28x = $("#type_ofisa_7x option:selected").text();


//____________________________block schitivaniya prodazha ofisa

//____________________________block schitivaniya prodazha pomesheniya

var s_obsh29x = $("#osh_s9x").val();
var etazh29x = $("#et9x").val();
var et_v_zdanii29x = $("#et_v_zd9x").val();
var type_pomesheniya29x = $("#type_pomesheniya_9x option:selected").text();


//____________________________block schitivaniya prodazha pomesheniya

//____________________________block schitivaniya prodazha zdaniya

var year_build30x = $("#year_build10x").val();
var s_obsh30x = $("#s_obsh10x").val();
var et_v_dome30x = $("#et_v_dome10x").val();
var mat_sten30x = $("#mat_sten10x option:selected").text();
var type_zdaniya30x = $("#type_zdaniya_10x option:selected").text();


//____________________________block schitivaniya prodazha zdaniya


//____________________________block schitivaniya prodazha butika i drugie




var s_obsh31x = $("#s_plosh8x").val();
var type_pomesheniya31x = $("#type_pomesheniya_8x option:selected").text();

//____________________________block schitivaniya prodazha butika i drugie

//____________________________block sdat kvartiru
var srok_sdachi32x = $("#srok_sdachi_11x option:selected").text();

//____________________________block sdat kvartiru


//____________________________block kupit

var kupit_ot33x = $("#senaot_3x").val();
var kupit_do33x = $("#sena_do_3x").val();
var valyuta33x = $("#valyuta3x option:selected").text();




//____________________________block kupit




		/*element.removeClass("has-success").addClass("has-error");
		element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		element3.removeClass("has-success").addClass("has-error");
		element4.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");*/



var marka40x = $("#marka_avto12x option:selected").text();
/*var model40x = $("#model_auto12x option:selected").text();*/

var model40x = $("#car_models").text();


/*___________________________block otvechayushii za proverku car*/

var mark9 = $(".auto_r").css("display");

if(mark9 != "none"){

if(marka40x){
	
	$("#cars_warning").removeClass("has-error").addClass("has-success");

}else{

$("#cars_warning").removeClass("has-success").addClass("has-error");

xen1 = false;

}

if(model40x){
	
	$("#mod_warn").removeClass("has-error").addClass("has-success");
	
}else{

$("#mod_warn").removeClass("has-success").addClass("has-error");

xen1 = false;

}


}

/*___________________________block otvechayushii za proverku car*/


var year_build40x = $("#year_build_12x").val();
var probeg40x = $("#probeg12x").val();
var obem40x = $("#obem12x").val();

var korobka40x = $("input:radio[name=optionsRadios111]:checked").val();

var bezdokov40x = $("input:checkbox[name=rmk40]:checked").val();
var bit_ili_na_zak40x = $("input:checkbox[name=rmk41]:checked").val();
var prodazha_po_zapchast40x = $("input:checkbox[name=rmk42]:checked").val();
var trebuyutsya_vlozheniya40x = $("input:checkbox[name=rmk43]:checked").val();
var eta_mash_na_zakaz40x = $("input:checkbox[name=rmk44]:checked").val();
var mash_prosh_tuning40x = $("input:checkbox[name=rmk45]:checked").val();

if(bezdokov40x){

}else{
	var bezdokov40x = "нет";
}

if(bit_ili_na_zak40x){

}else{
	var bit_ili_na_zak40x = "нет";
}

if(prodazha_po_zapchast40x){

}else{
	var prodazha_po_zapchast40x = "нет";
}

if(trebuyutsya_vlozheniya40x){

}else{
	var trebuyutsya_vlozheniya40x = "нет";
}

if(eta_mash_na_zakaz40x){

}else{
	var eta_mash_na_zakaz40x = "нет";
}

if(mash_prosh_tuning40x){

}else{
	var mash_prosh_tuning40x = "нет";
}


var rul40x = $("input:radio[name=inlineRadioOptions5]:checked").val();
var toplivo40x = $("input:radio[name=optionsRadios7]:checked").val();
var privod40x = $("input:radio[name=optionsRadios33]:checked").val();
var svet40x = $("#svet12x option:selected").text();
var sostoyanie_mash40x = $("#sost12x option:selected").text();


var marka_spes45x = $("#spedt13x option:selected").text();
var model45x = $("#model_spes13x").val();



/*___________________________block otvechayushii za proverku spes*/

var mark15 = $(".auto_s").css("display");

if(mark15 != "none"){


if(marka_spes45x){
	
	$(".cars_mark1").removeClass("has-error").addClass("has-success");

}else{

$(".cars_mark1").removeClass("has-success").addClass("has-error");

xen1 = false;

}




}

/*___________________________block otvechayushii za proverku spes*/



var probeg45x = $("#probeg_spes13x").val();
var obem45x = $("#obem_spes13x").val();

var korobka45x = $("input:radio[name=korobka1111]:checked").val();

var bezdokov45x = $("input:checkbox[name=rmk50]:checked").val();
var bit_ili_na_zak45x = $("input:checkbox[name=rmk51]:checked").val();
var prodazha_po_zapchast45x = $("input:checkbox[name=rmk52]:checked").val();
var trebyutsya_vlozheniya45x = $("input:checkbox[name=rmk53]:checked").val();
var eta_mash_na_zakaz45x = $("input:checkbox[name=rmk54]:checked").val();


if(bezdokov45x){

}else{
	var bezdokov45x = "нет";
}

if(bit_ili_na_zak45x){

}else{
	var bit_ili_na_zak45x = "нет";
}

if(prodazha_po_zapchast45x){

}else{
	var prodazha_po_zapchast45x = "нет";
}

if(trebyutsya_vlozheniya45x){

}else{
	var trebyutsya_vlozheniya45x = "нет";
}

if(eta_mash_na_zakaz45x){

}else{
	var eta_mash_na_zakaz45x = "нет";
}

/*var sostoyanie_mash45x = $("#sost_sp13x").val();*/
var rul45x = $("input:radio[name=inlineRadioOptions77]:checked").val();
var toplivo45x = $("input:radio[name=optionsRadios99]:checked").val();
var privod45x = $("input:radio[name=optionsRadios56]:checked").val();
var svet45x = $("#svet45x option:selected").text();
var sostoyanie_mash45x = $("#sost_sp13x option:selected").text();
var year_build45x = $("#year_build45x").val();





var one_blockfx1 = $(".fx1").css("display");
if(one_blockfx1 == "block"){
	var kol_mest50x = $("#kol_mest14x").val();
}else{
	var kol_mest50x = "нет";
}

var one_blockfx2 = $(".fx2").css("display");
if(one_blockfx2 == "block"){
	var nar50x = $("#narabotka14x").val();
	var vis_vish50x = $("#vis_vish14x").val();
}else{
	var nar50x = "нет";
	var vis_vish50x = "нет";
}

var one_blockfx4 = $(".fx4").css("display");
if(one_blockfx4 == "block"){
	var nar50x2 = $("#narab214x").val();
	var vis_vish50x2 = $("#visota_pod14x").val();
	var gruzop50x2 = $("#gruzopod14x").val();
}else{
	var nar50x2 = "нет";
	var vis_vish50x2 = "нет";
	var gruzop50x2 = "нет";
}

var one_blockfx5 = $(".fx5").css("display");
if(one_blockfx5 == "block"){
	var ob_sist51x = $("#ob_sist14x").val();
}else{
	var ob_sist51x = "нет";
}

var one_blockfx6 = $(".fx6").css("display");
if(one_blockfx6 == "block"){
	var narab50x3 = $("#narab314x").val();
	var vis_pod50x3 = $("#vis_pod214x").val();
}else{
	var narab50x3 = "нет";
	var vis_pod50x3 = "нет";
}

var one_blockfx7 = $(".fx7").css("display");
if(one_blockfx7 == "block"){
	var narab50x4 = $("#narab414x").val();
	var ob_sist414x = $("#ob_sis414x").val();
}else{
	var narab50x4 = "нет";
	var ob_sist414x = "нет";
}

var one_blockfx8 = $(".fx8").css("display");
if(one_blockfx8 == "block"){
	var narab50x5 = $("#narab514x").val();
	var massa214x = $("#massa214x").val();
}else{
	var narab50x5 = "нет";
	var massa214x = "нет";
}

var one_blockfx9 = $(".fx9").css("display");
if(one_blockfx9 == "block"){
	var gruzop214x = $("#gruzop214x").val();
}else{
	var gruzop214x = "нет";
}

var one_blockfx10 = $(".fx10").css("display");
if(one_blockfx10 == "block"){
	var narab614x = $("#narab614x").val();
	var gruzop614x = $("#gruzop614x").val();
	var massa814x = $("#massa814x").val();
}else{
	var narab614x = "нет";
	var gruzop614x = "нет";
	var massa814x = "нет";
}

var one_blockfx11 = $(".fx11").css("display");
if(one_blockfx11 == "block"){
	var narab914x = $("#narab914x").val();
	var ob_kov514x = $("#ob_kov514x").val();
	var massa1014x = $("#massa1014x").val();
}else{
	var narab914x = "нет";
	var ob_kov514x = "нет";
	var massa1014x = "нет";
}

var one_blockfx12 = $(".fx12").css("display");
if(one_blockfx12 == "block"){
	var narab1114x = $("#narab1114x").val();
	var mosh1414x = $("#mosh1414x").val();
}else{
	var narab1114x = "нет";
	var mosh1414x = "нет";
}



var ganga1x = $("#nnn1x").css("display");
if(ganga1x == "block"){
	
	var marka_legk67x = $("#car_identificator").text();
	var model67x = $("#car_models").text();
	var sost_zapch_legk77 = $("#sost_zapch15x option:selected").text();
	
	
}else{
	var marka_legk67x = "нет";
	var model67x = "нет";
	var sost_zapch_legk77 = "нет";
}


/*___________________________block otvechayushii za proverku car_zapch*/

var mark25 = $(".legk7x").css("display");

if(mark25 != "none"){


if(marka_legk67x){

	$(".cars_mark1").removeClass("has-error").addClass("has-success");

}else{

$(".cars_mark1").removeClass("has-success").addClass("has-error");

xen1 = false;

}

if(model67x){

	
	$(".jui").removeClass("has-error").addClass("has-success");
	
}else{

$(".jui").removeClass("has-success").addClass("has-error");

xen1 = false;

}


}

/*___________________________block otvechayushii za proverku zapch*/


var ganga2x = $("#nnn2x").css("display");
if(ganga2x == "block"){
	
	var marka_zapch_spes68x = $("#sp_identificator").text();
	var sost_zapch_spes75 = $("#zapch_spest99x option:selected").text();
	
	
}else{
	var marka_zapch_spes68x = "нет";
	var sost_zapch_spes75 = "нет";
}



/*___________________________block otvechayushii za proverku zapchas_spes*/

var mark35 = $("#nnn2x").css("display");


if(mark35 != "none"){


if(marka_zapch_spes68x){
	
	$(".idl5").removeClass("has-error").addClass("has-success");

}else{

$(".idl5").removeClass("has-success").addClass("has-error");

xen1 = false;

}




}

/*___________________________block otvechayushii za proverku zapchast_spes*/





var type_shina55x = $("input:radio[name=options8_shina]:checked").val();

var marka_shini55x = $("#marka_shini16x option:selected").text();

var protector55x = $("#protector16x option:selected").text();

var year_build_shina55x = $("#year_build_shina16x option:selected").text();

var diam_shina55x = $("#diam16x option:selected").text();

var iznos_shina55x = $("#iznos16x option:selected").text();

var kol_shtuk55x = $("#kol_shtuk16x").val();


var type_disk56x = $("input:radio[name=options8_type]:checked").val();

var model_diska56x = $("#model_diska17x option:selected").text();

var type_diska217x56x = $("#type_diska217x option:selected").text();

var year_disk17x56x = $("#year_disk17x option:selected").text();

var diam_diska17x56x = $("#diam_diska17x option:selected").text();

var iznos_diska17x56x = $("#iznos_diska17x option:selected").text();

var kol_shtuk_diskov17x56x = $("#kol_shtuk_diskov17x").val();



/*--------------*/
var date_start_aux777 = $("#data_nachala_auxion").val();

var date_finish_aux777 = $("#srok_auxion").val();	
	
var selev_auditor777 = $(".inject7").text();

var kol_uchastn777 = $("#aux_kol_uch").val();

var dostavka777 = $("#dostavka7x option:selected").val();


var block_aux777 = $(".auxion55").css("display");

if(block_aux777 == "block"){

	if(!date_start_aux777){
		date_start_aux777 = 0;
	}

	if(!date_finish_aux777){
		date_finish_aux777 = 1;
	}

	if(selev_auditor777 == "для всех участников" || selev_auditor777 == "ограниченному количеству участников"){
					var element17 = $(".inject7").parents(".qx15");
					var element18 = element17.find(".qx16");
					element17.addClass("has-success").removeClass("has-error");
					element18.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");
	}else{
		selev_auditor777 = "нет";

					var element15 = $(".inject7").parents(".qx15");
					var element16 = element15.find(".qx16");


					element15.removeClass("has-success").addClass("has-error");
					element16.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					var text_sel_au = "Выберите целевую аудиторию людей! ..";
					$("#testing5").hide().delay(1000).show(1000).html(text_sel_au);
					$("#testing5").delay(3000).hide(1000);	
					xen1 = false;
	}

	if(selev_auditor777 == "для всех участников"){
		kol_uchastn777 = 0;
	}

	if(!kol_uchastn777){
		kol_uchastn777 = 0;
	}

	

}else{
	date_start_aux777 = 0;
	date_finish_aux777 = 0;
	selev_auditor777 = "нет";
	kol_uchastn777 = 0;
}











	

	






var array1 = ["zagolovok56x","opisanie2x","telephone2x","email2x"];
var array2 = [insta18,vkn18,skype18,mail18,google18,other18,chast18,company18,biznes18,agent18,naimenov18];









if(dog != "777"){

	if(dog != "999"){

		
		$("#sena2x").each(function(){

			if(this.checkValidity()){

		
		
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");

		element.addClass("has-success").removeClass("has-error");
		element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		element3.addClass("has-success").removeClass("has-error");
		element4.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		

		






}else{

	
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");
		

		element.removeClass("has-success").addClass("has-error");
		element2.addClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		element3.removeClass("has-success").addClass("has-error");
		element4.addClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		xen1 = false;

		
		



}

		});

		
		
	}else{
		$("#sena2x").val("");
		$("#ddd5x").removeClass("has-error");
		$("#ddd5x").removeClass("has-success");
		$("#chl5x").removeClass("glyphicon glyphicon-remove");
		$("#chl5x").removeClass("glyphicon glyphicon-ok");

		


		
	}
	}else{
		$("#sena2x").val("");
		$("#ddd5x").removeClass("has-error");
		$("#ddd5x").removeClass("has-success");
		$("#chl5x").removeClass("glyphicon glyphicon-remove");
		$("#chl5x").removeClass("glyphicon glyphicon-ok");
		


		
	}

for(var i = 0; i < array1.length; i++){

var arrname = "#" + array1[i];	




$(arrname).each(function(){



if(this.checkValidity()){

		
		
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");

		element.addClass("has-success").removeClass("has-error");
		element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		element3.addClass("has-success").removeClass("has-error");
		element4.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		

		






}else{

	
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");
		

		element.removeClass("has-success").addClass("has-error");
		element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		element3.removeClass("has-success").addClass("has-error");
		element4.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		xen1 = false;

		
		

		






}




});


}

var sostoyanie99x = $("#sostoyanie99x option:selected").val();

var svet_dopolnit = $("#svet_dopolnit option:selected").val();


/*-------------zapasnie peremennie----*/

var res_peremen_string1 = sostoyanie99x;
var res_peremen_string2 = svet_dopolnit;
var res_peremen_string3 = "нет";

var res_peremen_chisl4 = dop_dannie_kolich;
var res_peremen_chisl5 = 0;
var res_peremen_chisl6 = 0;


/*-----------------*/
/*------------rab1-----*/
var zp_ot3x = $("#zpot_3x").val();


if(!zp_ot3x){
	zp_ot3x = "0";
}

var zp_do_3x = $("#zp_do_3x").val();

if(!zp_do_3x){
	zp_do_3x = "0";
}

if(zp_ot3x && zp_do_3x){
	if(Number(zp_ot3x) > Number(zp_do_3x)){
		xen1 = false;
		alert("Уровень з/п от - не должен превышать уровня з/п до");
	}
}

var valyuta75x = $("#valyuta75x > option:selected").text();

res_peremen_string3 = valyuta75x;
res_peremen_chisl5 = zp_ot3x;
res_peremen_chisl6 = zp_do_3x;


if(Number(zp_ot3x) < "0" || Number(zp_do_3x) < "0"){
	alert("введите действительные положительные числа");
	xen1 = false;
}




	


var ar1 = [".bz_name","#pr_kv","#pr_domov","#pr_dachi2","#pr_uchastka1","#pr_of","#pr_mag","#pr_pomesh","#pr_zd",
			"#kupit1",".auto_r",".glx7",".shina11",".diski111","#instagram","#vkn","#skype","#mail","#google","#other","#z_p99"];

	for(var i = 0; i <= ar1.length; i++){

		

		var x1 = $(ar1[i]);

		x1.each(function(){


		var z1 = $(this);

		if(z1.css("display") != "none"){
			var name1 = z1.find("input");
			
			
			name1.each(function(){

				if(this.checkValidity()){
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					

					element.addClass("has-success").removeClass("has-error");
					element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

					
					
					
				}else{
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					
					

					element.removeClass("has-success").addClass("has-error");
					element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
						xen1 = false;
						
						
					
					
				}
			});
		}

		});


	}
/*block proverki select raionov*/

var r_alm = $("#r_almaty option:selected").text();
var city_alm = $("#city_alm option:selected").text();
var r_astana = $("#r_astana option:selected").text();
var city_ast = $("#city_ast option:selected").text();

if(!r_alm){
	var r_alm = "нет";
}

if(!city_alm){
	var city_alm = "нет";
}

if(!r_astana){
	var r_astana = "нет";
}

if(!city_ast){
	var city_ast = "нет";
}








		



	var ar1 = ["#almaty_raion","#astana_raion"];

	for(var i = 0; i <= ar1.length; i++){

		

		var x1 = $(ar1[i]);

		x1.each(function(){


		var z1 = $(this);

		if(z1.css("display") != "none"){
			var name1 = z1.find("select");
			
			
			name1.each(function(){

				if(this.checkValidity()){
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					

					element.addClass("has-success").removeClass("has-error");
					element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");


					if(($(this).attr("id") == "r_almaty") || ($(this).attr("id") == "city_alm")){
				            r_astana = "нет";
				            city_ast = "нет";
				          }

				          if(($(this).attr("id") == "r_astana") || ($(this).attr("id") == "city_ast")){
				            r_alm = "нет";
				            city_alm = "нет"; 
				          }



					
					
					
				}else{
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					
					

					element.removeClass("has-success").addClass("has-error");
					element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
						xen1 = false;
						
						
					
					
				}
			});
		}

		});


	}


/*block proverki select raionov*/


/*___________________block proverki seni_______*/

if(sena1 < 0){
	xen1 = false;
}


var valuta_prov = $("#tg2x option:selected").text();

if(valuta_prov == "$" || valuta_prov == "€"){
	if(sena1 > 1000000){
		
		$("#tg2x :nth-child(1)").attr("selected", "selected");
		valyuta1 = "тг";
	}
}



/*_______________block proverki seni___________*/


/*-----------------*/


/*--------odinochnie inputi---------*/


var vremya_nachala_auxion = $("#vremya_nachala_auxion").val();
if(!vremya_nachala_auxion){
	var vremya_nachala_auxion = 0;
}

var vremya_okonch_auxion = $("#vremya_okonch_auxion").val();
if(!vremya_okonch_auxion){
	var vremya_okonch_auxion = 0;
}





var ar7 = ["#data_nachala_auxion","#srok_auxion","#vremya_nachala_auxion","#vremya_okonch_auxion"];

	for(var i = 0; i <= ar7.length; i++){

		

		var x9 = $(ar7[i]);

		x9.each(function(){


		var z9 = $(this).parents("#auxion777");

		var z10 = $(this);

		if(z9.css("display") != "none"){
			
			
			if(date_start_aux777 > date_finish_aux777){
	
					var text_date = "Дата начала аукциона не может быть больше даты окончания аукциона!..";
					$("#testing5").hide().delay(1000).show(1000).html(text_date);
					$("#testing5").delay(15000).hide(1000);	

					var trid1 = $("#data_nachala_auxion").parents(".input-group");
					var trid2 = trid1.find(".form-control-feedback");

					trid1.removeClass("has-success").addClass("has-error");
					trid2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");


					var trid3 = $("#srok_auxion").parents(".input-group");
					var trid4 = trid1.find(".form-control-feedback");

					trid3.removeClass("has-success").addClass("has-error");
					trid4.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					xen1 = false;

					
	
	
				}else{


					z10.each(function(){

				if(this.checkValidity()){
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					

					element.addClass("has-success").removeClass("has-error");
					element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

					
					
					
				}else{
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					
					

					element.removeClass("has-success").addClass("has-error");
					element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
						xen1 = false;
						
						
					
					
				}
			});


				}
			

			
			
			
			
		}

		});


	}



/*-----------------*/


/*-----------------block s dopolnitel'noi filtrasiei dlya spes bloka__otdel'nim elementam*/ 


var ar1 = [".auto_s","#kol_uch","#dopol_dannie78x"];					

	for(var i = 0; i <= ar1.length; i++){

		

		var x1 = $(ar1[i]);

		x1.each(function(){


		var z1 = $(this);

		if(z1.css("display") != "none"){
			
			var name1 = z1.find("input");

			name1.each(function(){


				var t1 = $(this);
				

				if(t1.attr("title") != "заполнить"){
					var t2 = t1.val();

					t1.each(function(){


						if(this.checkValidity()){


							var element = $(this).parents(".input-group");
							var element2 = element.find(".form-control-feedback");

					

							element.addClass("has-success").removeClass("has-error");
							element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");
						}else{

							var element = $(this).parents(".input-group");
							var element2 = element.find(".form-control-feedback");

					
					

							element.removeClass("has-success").addClass("has-error");
							element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
							xen1 = false;
						}


					});
				}

			});
			
				
		}


			
			
			
			

		});


	}



	if((one == "Медицина") || (one == "Салоны красоты") || (one == "Мода") || (one == "кафе,караоке,ночные клубы") || (one == "Банки Коммерческие организации") 
		|| (one == "Банки Коммерческие организации") || (one == "Спортивные товары")){
			two = "нет";
			three = "нет";

	}

/*	_____________________*/


if(one == "-" || three == "-"){
	

	
	var mm5x2x = "выберите  категорию!";

	$("#viv2").addClass("alert alert-danger");

	$("#viv2").hide().delay(1000).show(1000).html(mm5x2x);

	$("#viv2").delay(3000).hide(1000);

	$("#vib_cat99x").css("border","2px solid red");

	xen1 = false;							

	





	

		
}else{
	$("#viv2").removeClass("alert alert-danger");
							
	$("#vib_cat99x").css("border","0px");

}

if(strana == "-"){
	
var mm5x2x = "выберите страну!";

	$("#viv3").addClass("alert alert-danger");

	$("#viv3").hide().delay(1000).show(1000).html(mm5x2x);

	$("#viv3").delay(3000).hide(1000);

	$("#but99").css("border","2px solid red");

	xen1 = false;		

}else{
	$("#viv3").removeClass("alert alert-danger");
							
	$("#but99").css("border","0px");

}



/*--------------*/

/*proverka na zapolnenie lisa*/

var whatname = $(".kem777").val();

if(whatname == "кем"){
	
	var mm5x2 = "выберите кем вы являетесь!";

	$("#viv").addClass("alert alert-danger");

	$("#viv").hide().delay(1000).show(1000).html(mm5x2);

	$("#viv").delay(3000).hide(1000);

	$(".kem777").css("border","2px solid red");

	xen1 = false;							

	


}else{


	$("#viv").removeClass("alert alert-danger");
							
	$(".kem777").css("border","0px");
}
/*proverka na zapolnenie lisa*/






/*--------------*/





/*--------------*/




if(xen1 == true){



if((one == "Недвижимость" && two == "Продать" && three == "квартиру") || (one == "Недвижимость" && two == "Снять" && three == "квартиру") || (one == "Недвижимость" && two == "Обменять" && three == "квартиру")){		//otvechaet za formirovanie schitivaniya ob'yavlenii
	

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"komnat":kol_komnat1,
		"obsh_ploshad":obsh_s1,
		"etazh":etazh1,
		"mat_sten":mat_sten1,
		"tip_doma":tip_doma20x,
		"et_v_dome":et_v_dome20x,
		"year_build":year_build20x,
		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,


		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",
		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

	}


	myloadfunc(form1);



}else if((one == "Недвижимость" && two == "Продать" && three == "дом") || (one == "Недвижимость" && two == "Снять" && three == "дом") || (one == "Недвижимость" && two == "Обменять" && three == "дом")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda25x":rasst_ot_goroda25x,
		"s_doma25x":s_doma25x,
		"type_doma25x":type_doma25x,
		"year_build25x":year_build25x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



	}

	myloadfunc(form1);

}else if((one == "Недвижимость" && two == "Продать" && three == "дачу") || (one == "Недвижимость" && two == "Снять" && three == "дачу") || (one == "Недвижимость" && two == "Обменять" && three == "дачу")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"rasst_ot_goroda26x":rasst_ot_goroda26x,
		"s_doma26x":s_doma26x,
		"s_uchastka26x":s_uchastka26x,
		"type_doma26x":type_doma26x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





		

	}

	myloadfunc(form1);

}else if((one == "Недвижимость" && two == "Продать" && three == "участок") || (one == "Недвижимость" && two == "Снять" && three == "участок") || (one == "Недвижимость" && two == "Обменять" && three == "участок")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda27x":rasst_ot_goroda27x,
		"s_uchastka27x":s_uchastka27x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",


		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}


	myloadfunc(form1);

}else if((one == "Недвижимость" && two == "Продать" && three == "офис") || (one == "Недвижимость" && two == "Снять" && three == "офис") || (one == "Недвижимость" && two == "Обменять" && three == "офис")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"kol_komnat28x":kol_komnat28x,
		"s_obsh28x":s_obsh28x,
		"etazh28x":etazh28x,
		"et_v_zdanii28x":et_v_zdanii28x,
		"type_ofisa28x":type_ofisa28x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",


		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc(form1);


}else if((one == "Недвижимость" && two == "Продать" && three == "помещение") || (one == "Недвижимость" && two == "Снять" && three == "помещение") || (one == "Недвижимость" && two == "Обменять" && three == "помещение")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh29x":s_obsh29x,
		"etazh29x":etazh29x,
		"et_v_zdanii29x":et_v_zdanii29x,
		"type_pomesheniya29x":type_pomesheniya29x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",


		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,






	}

	myloadfunc(form1);


}else if((one == "Недвижимость" && two == "Продать" && three == "здание") || (one == "Недвижимость" && two == "Снять" && three == "здание") || (one == "Недвижимость" && two == "Обменять" && three == "здание")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"year_build30x":year_build30x,
		"s_obsh30x":s_obsh30x,
		"et_v_dome30x":et_v_dome30x,
		"mat_sten30x":mat_sten30x,
		"type_zdaniya30x":type_zdaniya30x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",


		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc(form1);


}else if((one == "Недвижимость" && two == "Продать" && three == "магазин") || (one == "Недвижимость" && two == "Продать" && three == "бутик") || (one == "Недвижимость" && two == "Продать" && three == "промбазу") || (one == "Недвижимость" && two == "Продать" && three == "склад") || (one == "Недвижимость" && two == "Продать" && three == "прочую недвижимость") || (one == "Недвижимость" && two == "Снять" && three == "магазин") || (one == "Недвижимость" && two == "Снять" && three == "бутик") || (one == "Недвижимость" && two == "Снять" && three == "промбазу") || (one == "Недвижимость" && two == "Снять" && three == "склад") || (one == "Недвижимость" && two == "Снять" && three == "прочую недвижимость") || (one == "Недвижимость" && two == "Обменять" && three == "магазин") || (one == "Недвижимость" && two == "Обменять" && three == "бутик") || (one == "Недвижимость" && two == "Обменять" && three == "промбазу") || (one == "Недвижимость" && two == "Обменять" && three == "склад") || (one == "Недвижимость" && two == "Обменять" && three == "прочую недвижимость")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh31x":s_obsh31x,
		"type_pomesheniya31x":type_pomesheniya31x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",


		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc(form1);


	
}else if(one == "Недвижимость" && two == "Сдать" && three == "квартиру"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"komnat":kol_komnat1,
		"obsh_ploshad":obsh_s1,
		"etazh":etazh1,
		"mat_sten":mat_sten1,
		"tip_doma":tip_doma20x,
		"et_v_dome":et_v_dome20x,
		"year_build":year_build20x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,

		"srok_sdachi":srok_sdachi32x,

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc(form1);


	
}else if(one == "Недвижимость" && two == "Сдать" && three == "дом"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda25x":rasst_ot_goroda25x,
		"s_doma25x":s_doma25x,
		"type_doma25x":type_doma25x,
		"year_build25x":year_build25x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,







	}

	myloadfunc(form1);



}else if(one == "Недвижимость" && two == "Сдать" && three == "дачу"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"rasst_ot_goroda26x":rasst_ot_goroda26x,
		"s_doma26x":s_doma26x,
		"s_uchastka26x":s_uchastka26x,
		"type_doma26x":type_doma26x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",


		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

	

	}

	myloadfunc(form1);



}else if(one == "Недвижимость" && two == "Сдать" && three == "участок"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda27x":rasst_ot_goroda27x,
		"s_uchastka27x":s_uchastka27x,
		"srok_sdachi":srok_sdachi32x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",



		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc(form1);


}else if(one == "Недвижимость" && two == "Сдать" && three == "офис"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"kol_komnat28x":kol_komnat28x,
		"s_obsh28x":s_obsh28x,
		"etazh28x":etazh28x,
		"et_v_zdanii":et_v_zdanii28x,
		"type_ofisa28x":type_ofisa28x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",


		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

myloadfunc(form1);


}else if(one == "Недвижимость" && two == "Сдать" && three == "помещение"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh29x":s_obsh29x,
		"etazh29x":etazh29x,
		"et_v_zdanii29x":et_v_zdanii29x,
		"type_pomesheniya29x":type_pomesheniya29x,
		"srok_sdachi":srok_sdachi32x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,






	}

	myloadfunc(form1);


}else if(one == "Недвижимость" && two == "Сдать" && three == "здание"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"year_build30x":year_build30x,
		"s_obsh30x":s_obsh30x,
		"et_v_dome30x":et_v_dome30x,
		"mat_sten30x":mat_sten30x,
		"type_zdaniya30x":type_zdaniya30x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",


		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc(form1);


}else if((one == "Недвижимость" && two == "Сдать" && three == "магазин") || (one == "Недвижимость" && two == "Сдать" && three == "бутик") || (one == "Недвижимость" && two == "Сдать" && three == "промбазу") || (one == "Недвижимость" && two == "Сдать" && three == "склад") || (one == "Недвижимость" && two == "Сдать" && three == "прочую недвижимость")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh31x":s_obsh31x,
		"type_pomesheniya31x":type_pomesheniya31x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

	}

	myloadfunc(form1);


	
}else if(one == "Недвижимость" && two == "Купить" && three == "квартиру"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,


		"komnat":kol_komnat1,
		"obsh_ploshad":obsh_s1,
		"etazh":etazh1,
		"mat_sten":mat_sten1,
		"tip_doma":tip_doma20x,
		"et_v_dome":et_v_dome20x,
		"year_build":year_build20x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



		

	}
myloadfunc(form1);


	
}else if(one == "Недвижимость" && two == "Купить" && three == "дом"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda25x":rasst_ot_goroda25x,
		"s_doma25x":s_doma25x,
		"type_doma25x":type_doma25x,
		"year_build25x":year_build25x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,

		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "дачу"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"rasst_ot_goroda26x":rasst_ot_goroda26x,
		"s_doma26x":s_doma26x,
		"s_uchastka26x":s_uchastka26x,
		"type_doma26x":type_doma26x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,



		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",



		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

		

	}

	myloadfunc(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "участок"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda27x":rasst_ot_goroda27x,
		"s_uchastka27x":s_uchastka27x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",


		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,








	}

	myloadfunc(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "офис"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"kol_komnat28x":kol_komnat28x,
		"s_obsh28x":s_obsh28x,
		"etazh28x":etazh28x,
		"et_v_zdanii":et_v_zdanii28x,
		"type_ofisa28x":type_ofisa28x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",


		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc(form1);



}else if(one == "Недвижимость" && two == "Купить" && three == "помещение"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh29x":s_obsh29x,
		"etazh29x":etazh29x,
		"et_v_zdanii29x":et_v_zdanii29x,
		"type_pomesheniya29x":type_pomesheniya29x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",


		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "здание"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"year_build30x":year_build30x,
		"s_obsh30x":s_obsh30x,
		"et_v_dome30x":et_v_dome30x,
		"mat_sten30x":mat_sten30x,
		"type_zdaniya30x":type_zdaniya30x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",


		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",



		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc(form1);


}else if((one == "Недвижимость" && two == "Купить" && three == "магазин") || (one == "Недвижимость" && two == "Купить" && three == "бутик") || (one == "Недвижимость" && two == "Купить" && three == "промбазу") || (one == "Недвижимость" && two == "Купить" && three == "склад") || (one == "Недвижимость" && two == "Купить" && three == "прочую недвижимость")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh31x":s_obsh31x,
		"type_pomesheniya31x":type_pomesheniya31x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,


	}

	myloadfunc(form1);


	
}else if((one == "Авто и мото" && two == "продать машину" && three == "легковая с пробегом") || (one == "Авто и мото" && two == "продать машину" && three == "легковая новая") || (one == "Авто и мото" && two == "продать машину" && three == "легковая с автосалона") || (one == "Авто и мото" && two == "продать машину" && three == "легковая из зарубежа") || (one == "Авто и мото" && two == "продать машину" && three == "легковая на заказ") || (one == "Авто и мото" && two == "продать машину" && three == "мотоциклы") || (one == "Авто и мото" && two == "продать машину" && three == "квадроциклы") || (one == "Авто и мото" && two == "продать машину" && three == "катера и лодки") || (one == "Авто и мото" && two == "продать машину" && three == "другие машины")){

var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"marka40x":marka40x,
		"model40x":model40x,
		"year_build_car":year_build40x,
		"probeg40x":probeg40x,
		"obem40x":obem40x,
		"korobka40x":korobka40x,
		"bezdokov40x":bezdokov40x,
		"bit_ili_na_zak40x":bit_ili_na_zak40x,
		"prodazha_po_zapchast40x":prodazha_po_zapchast40x,
		"trebuyutsya_vlozheniya40x":trebuyutsya_vlozheniya40x,
		"eta_mash_na_zakaz40x":eta_mash_na_zakaz40x,
		"mash_prosh_tuning40x":mash_prosh_tuning40x,
		"rul40x":rul40x,
		"toplivo40x":toplivo40x,
		"privod40x":privod40x,
		"svet40x":svet40x,
		"sostoyanie_mash40x":sostoyanie_mash40x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",


		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



	}

	myloadfunc(form1);




}else if((one == "Авто и мото" && two == "спецтехника" && three == "Спецтехника,Автобусы и др.") || (one == "Авто и мото" && two == "спецтехника" && three == "Аренда") || (one == "Авто и мото" && two == "спецтехника" && three == "Продавцы спецтехники")){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"marka_spes45x":marka_spes45x,
		"model45x":model45x,
		"probeg45x":probeg45x,
		"obem45x":obem45x,
		"korobka45x":korobka45x,
		"bezdokov45x":bezdokov45x,
		"bit_ili_na_zak45x":bit_ili_na_zak45x,
		"prodazha_po_zapchast45x":prodazha_po_zapchast45x,
		"trebyutsya_vlozheniya45x":trebyutsya_vlozheniya45x,
		"eta_mash_na_zakaz45x":eta_mash_na_zakaz45x,
		"sostoyanie_mash45x":sostoyanie_mash45x,
		"rul45x":rul45x,
		"toplivo45x":toplivo45x,
		"privod45x":privod45x,
		"svet45x":svet45x,
		
		"year_build45x":year_build45x,
		"kol_mest50x":kol_mest50x,
		"nar50x":nar50x,
		"vis_vish50x":vis_vish50x,
		"nar50x2":nar50x2,
		"vis_vish50x2":vis_vish50x2,
		"gruzop50x2":gruzop50x2,
		"ob_sist51x":ob_sist51x,
		"narab50x3":narab50x3,
		"vis_pod50x3":vis_pod50x3,
		"narab50x4":narab50x4,
		"ob_sist414x":ob_sist414x,
		"narab50x5":narab50x5,
		"massa214x":massa214x,
		"gruzop214x":gruzop214x,
		"narab614x":narab614x,
		"gruzop614x":gruzop614x,
		"massa814x":massa814x,
		"narab914x":narab914x,
		"ob_kov514x":ob_kov514x,
		"massa1014x":massa1014x,
		"narab1114x":narab1114x,
		"mosh1414x":mosh1414x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",



		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,






	}

	myloadfunc(form1);



}else if((one == "Авто и мото" && two == "запчасти" && three == "Продажа запчастей") || (one == "Авто и мото" && two == "запчасти" && three == "авторазбор") || (one == "Авто и мото" && two == "запчасти" && three == "Магазины запчастей") || (one == "Авто и мото" && two == "запчасти" && three == "Аксессуары и мультимедиа") || (one == "Авто и мото" && two == "запчасти" && three == "Расходники") || (one == "Авто и мото" && two == "запчасти" && three == "Авто на запчасти")){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"marka_legk67x":marka_legk67x,
		"model67x":model67x,
		"sost_zapch_legk77":sost_zapch_legk77,
		"marka_zapch_spes68x":marka_zapch_spes68x,
		"sost_zapch_spes75":sost_zapch_spes75,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",


		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,







	}

	myloadfunc(form1);



}else if(one == "Авто и мото" && two == "запчасти" && three == "ищу запчасть"){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"sena_ot_zap":kupit_ot33x,
		"sena_do_zap":kupit_do33x,
		"valyuta_zapch":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",



		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,


	}

	myloadfunc(form1);




}else if(one == "Авто и мото" && two == "запчасти" && three == "Шины"){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,


		"type_shina55x":type_shina55x,
		"marka_shini55x":marka_shini55x,
		"protector55x":protector55x,
		"year_build_shina55x":year_build_shina55x,
		"diam_shina55x":diam_shina55x,
		"iznos_shina55x":iznos_shina55x,
		"kol_shtuk55x":kol_shtuk55x,



		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",



		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



	}

	myloadfunc(form1);





}else if(one == "Авто и мото" && two == "запчасти" && three == "Диски"){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"type_disk56x":type_disk56x,
		"model_diska56x":model_diska56x,
		"type_diska217x56x":type_diska217x56x,
		"year_disk17x56x":year_disk17x56x,
		"diam_diska17x56x":diam_diska17x56x,
		"iznos_diska17x56x":iznos_diska17x56x,
		"kol_shtuk_diskov17x56x":kol_shtuk_diskov17x56x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",

		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc(form1);

   

		

}else{







var form1 = {					//obichnoe schitivanie
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,


	}


 		


/*-----------------*/


myloadfunc(form1);





}



}else{
	res = "Заполните все данные";

	$("#testing2").show(1000).html(res);
	$("#testing2").delay(4000).hide(1000);

	 
}










});	/*kones button pred*/











/*kones pred*/










/*osnovnaya podacha*/
















//zahvat dannih

var pathob = myurl + "index.php/Obr_ob/prin_fail";


$("#podat_ob2x").click(function(e){



	var xen1 = true;		/*upravlyayushaya peremennaya*/


	function myloadfunc2(form1){



		form1['r_alm'] = r_alm;
		form1['city_alm'] = city_alm;
		form1['r_astana'] = r_astana;
		form1['city_ast'] = city_ast;

		form1['vremya_nachala_auxion'] = vremya_nachala_auxion;
		form1['vremya_okonch_auxion'] = vremya_okonch_auxion;


		


		$.ajaxSetup({

      "type":"POST",
      "url":pathob,
      "success":kx
        });

function kx(res){
        $("#testing2").css("background","yellow").hide().delay(1000).show(3000).html(res);

        if(res == "объявление подано"){
        	var url = 'ob_success/success2';
        	document.location.href = url;
        }
      						};
$.ajax({
  
    "data":form1,
    "error":errorfunc
    
  });

   function errorfunc(){
   		alert("oshibka zaprosa");
   };





	}
	


var zagolovok56x = $("#zagolovok56x").val();

var one = $("#21x").text();

var two = $("#22x").text();

var three = $("#23x").text();

var sena1 = $("#sena2x").val();

if(!sena1){
	sena1 = "0";
}

var dis = $("#sena2x").attr("disabled");

if(dis){
	sena1 = "0";
}

var dop_dannie_kolich = $("#dop_dannie_kolich").val();


if(!dop_dannie_kolich){
	dop_dannie_kolich = 0;
}



var valyuta1 = $("#tg2x").val();



var dog = $("input:radio[name=optionsRadios]:checked").val();




var nalichii1 = $("input:radio[name=optionsRadios20]:checked").val();

var obmen17x = $("input:checkbox[name=inter_obmen]:checked").val();

var opisanie = $("#opisanie2x").val();

var strana = $("#41x").text();

var city1 = $("#42x").text();

var email17x = $("#email2x").val();

var telephone17x = $("#telephone2x").val();

var watsapp = $("input:checkbox[name=watsapp]:checked").val();

var viber = $("input:checkbox[name=viber]:checked").val();


//_____________________________________otvechaet za other
//_____________________________________otvechaet za other
var other17 = $("#other").css("display");
if(other17  == "block"){
	var other18 = $("#other input:text").val();
}else{
	var other18 = "нет";
}


//_____________________________________otvechaet za google

var google17 = $("#google").css("display");
if(google17  == "block"){
	var google18 = $("#google input:text").val();
}else{
	var google18 = "нет";
}
//_____________________________________otvechaet za google



//_____________________________________otvechaet za mail

var mail17 = $("#mail").css("display");
if(mail17  == "block"){
	var mail18 = $("#mail input:text").val();
}else{
	var mail18 = "нет";
}
//_____________________________________otvechaet za mail



//_____________________________________otvechaet za skype

var skype17 = $("#skype").css("display");
if(skype17  == "block"){
	var skype18 = $("#skype input:text").val();
}else{
	var skype18 = "нет";
}

//_____________________________________otvechaet za vk


var vkn17 = $("#vkn").css("display");
if(vkn17 == "block"){
	var vkn18 = $("#vkn input:text").val();
}else{
	var vkn18 = "нет";
}

//_________________________________otvechaet za instagramm


var insta17 = $("#instagram").css("display");
if(insta17 == "block"){
	var insta18 = $("#instagram input:text").val();
}else{
	var insta18 = "нет";
}



//_______________________________//otvechaet za checkbox watsapp

if(watsapp){
		watsapp = "да";
}else{
	watsapp = "нет";
}

if(viber){
	viber = "да";
}else{
	viber = "нет";
}



//______________________________

if(obmen17x){						//otvechaet za checkbox obmen
	obmen17x = "интересует обмен";
}else{
	obmen17x = "нет";
}

//_____________________

if(dog == "цена"){				//otvechaet za formirovanie vibora seni
	dog = sena1;	
}else if(dog == "договорная"){
	dog = "777";
}else if(dog == "отдам даром"){
	dog = "999";
}





//________________________________________________otvechaet za kem yavlyaetsya podavaemoe liso
var chast17 = $("#xdw-1").css("display");
if(chast17 == "block"){
	var chast18 = $("#xdw-1 input:text").val();
}else{
	var chast18 = "нет";
}


var company17 = $("#xdw-2").css("display");
if(company17 == "block"){
	var company18 = $("#xdw-2 input:text").val();
}else{
	var company18 = "нет";
}

var biznes17 = $("#xdw-3").css("display");
if(biznes17 == "block"){
	var biznes18 = $("#xdw-3 input:text").val();
}else{
	var biznes18 = "нет";
}

var agent17 = $("#xdw-4").css("display");
if(agent17 == "block"){
	var agent18 = $("#xdw-4 input:text").val();
}else{
	var agent18 = "нет";
}

var naimenov17 = $("#xdw-5").css("display");
if(naimenov17 == "block"){
	var naimenov18 = $("#xdw-5 input:text").val();
}else{
	var naimenov18 = "нет";
}

//________________________________________________otvechaet za kem yavlyaetsya podavaemoe liso

var comment21x = $("#comment2x").val();

//________________________________________________otvechaet za kem yavlyaetsya podavaemoe liso


var kol_komnat1 = $("#kol_kom3x").val();
var obsh_s1 = $("#obsh_plosh3x").val();
var etazh1 = $("#etazh3x").val();
var mat_sten1 = $(".lll3x").text();
var tip_doma20x = $(".type3x").text();
var et_v_dome20x = $("#et_v_dome3x").val();
var year_build20x = $("#year_build3x").val();


//______________________________________________etot block otvechaet za schitivanie dopolnitel'noi informasii
var ufx = $("#dop_nedv").css("display");
if(ufx == "block"){

//___________________________________________________block schitivaniya blokov
	var sostoyanie22x = $("#sostoyanie_3x").val();
	var sanuzel22x = $("#sanuzel_3x").val();
	var dver22x = $("#dver_3x").val();
	var poli22x = $("#poli_3x").val();
	var telephone22x = $("#telephone_3x3x").val();
	var balkon22x = $("#balkon_3x").val();
	var parkovka22x = $("#parkovka3x").val();
	var steni22x = $("#steni_3x").val();
	var internet22x = $("#internet_3x").val();
	var balkon_osteklennii22x = $("#balkon_osteklennii_3x").val();
	var mebel22x = $("#mebel_3x").val();
	var otoplenie22x = $("#otoplenie_3x").val();
//___________________________________________________block schitivaniya blokov

//_______________________________________________________________________________block schitivaniya checkboxov
	var signalizasiya22x = $("input:checkbox[name=bez1x]:checked").val();
	var videonabl22x = $("input:checkbox[name=bez2x]:checked").val();
	var konserzh22x = $("input:checkbox[name=bez3x]:checked").val();
	var domofon22x = $("input:checkbox[name=bez4x]:checked").val();
	var ohrana22x = $("input:checkbox[name=bez5x]:checked").val();
	var kodov_zamok22x = $("input:checkbox[name=bez6x]:checked").val();
	var reshetki_na_oknah22x = $("input:checkbox[name=bez7x]:checked").val();
	var datchik_dvizh22x = $("input:checkbox[name=bez8x]:checked").val();
	var video_domof22x = $("input:checkbox[name=bez9x]:checked").val();
	var udobno_pod_kommers22x = $("input:checkbox[name=bez10x]:checked").val();
	var neuglov22x = $("input:checkbox[name=bez11x]:checked").val();
	var plastik_okna22x = $("input:checkbox[name=bez12x]:checked").val();
	var kuhnya_studiya22x = $("input:checkbox[name=bez13x]:checked").val();
	var uluchshennaya22x = $("input:checkbox[name=bez14x]:checked").val();
	var komn_izol22x = $("input:checkbox[name=bez15x]:checked").val();
	var new_santehn22x = $("input:checkbox[name=bez16x]:checked").val();
	var vstroen_kuhnya22x = $("input:checkbox[name=bez17x]:checked").val();
	var imeetsya_kladov22x = $("input:checkbox[name=bez18x]:checked").val();
	var schetchiki22x = $("input:checkbox[name=bez19x]:checked").val();
	var tihii_dvor22x = $("input:checkbox[name=bez20x]:checked").val();
	var konditioner22x = $("input:checkbox[name=bez21x]:checked").val();

	if(signalizasiya22x){
		signalizasiya22x = "сигнализация";
	}else{
		signalizasiya22x = "нет";
	}

	if(videonabl22x){
		videonabl22x = "видеонаблюдение";
	}else{
		videonabl22x = "нет";
	}

	if(konserzh22x){
		konserzh22x = "консьерж";
	}else{
		konserzh22x = "нет";
	}

	if(domofon22x){
		domofon22x = "домофон";
	}else{
		domofon22x = "нет";
	}

	if(ohrana22x){
		ohrana22x = "охрана";
	}else{
		ohrana22x = "нет";
	}

	if(kodov_zamok22x){
		kodov_zamok22x = "кодовый замок";
	}else{
		kodov_zamok22x = "нет";
	}

	if(reshetki_na_oknah22x){
		reshetki_na_oknah22x = "решетки на окнах";
	}else{
		reshetki_na_oknah22x = "нет";
	}

	if(datchik_dvizh22x){
		datchik_dvizh22x = "датчик движения";
	}else{
		datchik_dvizh22x = "нет";
	}

	if(video_domof22x){
		video_domof22x = "видеодомофон";
	}else{
		video_domof22x = "нет";
	}

	if(udobno_pod_kommers22x){
		udobno_pod_kommers22x = "удобно по коммерцию";
	}else{
		udobno_pod_kommers22x = "нет";
	}

	if(neuglov22x){
		neuglov22x = "неугловая";
	}else{
		neuglov22x = "нет";
	}

	if(plastik_okna22x){
		plastik_okna22x = "пластиковые окна";
	}else{
		plastik_okna22x = "нет";
	}

	if(kuhnya_studiya22x){
		kuhnya_studiya22x = "кухня студия";
	}else{
		kuhnya_studiya22x = "нет";
	}

	if(uluchshennaya22x){
		uluchshennaya22x = "улучшенная";
	}else{
		uluchshennaya22x = "нет";
	}

	if(komn_izol22x){
		komn_izol22x = "комнаты изолированные";
	}else{
		komn_izol22x = "нет";
	}

	if(new_santehn22x){
		new_santehn22x = "новая сантехника";
	}else{
		new_santehn22x = "нет";
	}

	if(vstroen_kuhnya22x){
		vstroen_kuhnya22x = "встроенная кухня";
	}else{
		vstroen_kuhnya22x = "нет";
	}

	if(imeetsya_kladov22x){
		imeetsya_kladov22x = "имеется кладовая";
	}else{
		imeetsya_kladov22x = "нет";
	}

	if(schetchiki22x){
		schetchiki22x = "наличие всех счетчиков";
	}else{
		schetchiki22x = "нет";
	}

	if(tihii_dvor22x){
		tihii_dvor22x = "тихий двор";
	}else{
		tihii_dvor22x = "нет";
	}

	if(konditioner22x){
		konditioner22x = "кондиционер";
	}else{
		konditioner22x = "нет";
	}
//_______________________________________________________________________________block schitivaniya checkboxov

}else{
	var sostoyanie22x = "нет";
	var sanuzel22x = "нет";
	var dver22x = "нет";
	var poli22x = "нет";
	var telephone22x = "нет";
	var balkon22x = "нет";
	var parkovka22x = "нет";
	var steni22x = "нет";
	var internet22x = "нет";
	var balkon_osteklennii22x = "нет";
	var mebel22x = "нет";
	var otoplenie22x = "нет";

//_______________________________________________________________________________block schitivaniya checkboxov
	if(signalizasiya22x){
		signalizasiya22x = "сигнализация";
	}else{
		signalizasiya22x = "нет";
	}

	if(videonabl22x){
		videonabl22x = "видеонаблюдение";
	}else{
		videonabl22x = "нет";
	}

	if(konserzh22x){
		konserzh22x = "консьерж";
	}else{
		konserzh22x = "нет";
	}

	if(domofon22x){
		domofon22x = "домофон";
	}else{
		domofon22x = "нет";
	}

	if(ohrana22x){
		ohrana22x = "охрана";
	}else{
		ohrana22x = "нет";
	}

	if(kodov_zamok22x){
		kodov_zamok22x = "кодовый замок";
	}else{
		kodov_zamok22x = "нет";
	}

	if(reshetki_na_oknah22x){
		reshetki_na_oknah22x = "решетки на окнах";
	}else{
		reshetki_na_oknah22x = "нет";
	}

	if(datchik_dvizh22x){
		datchik_dvizh22x = "датчик движения";
	}else{
		datchik_dvizh22x = "нет";
	}

	if(video_domof22x){
		video_domof22x = "видеодомофон";
	}else{
		video_domof22x = "нет";
	}

	if(udobno_pod_kommers22x){
		udobno_pod_kommers22x = "удобно по коммерцию";
	}else{
		udobno_pod_kommers22x = "нет";
	}

	if(neuglov22x){
		neuglov22x = "неугловая";
	}else{
		neuglov22x = "нет";
	}

	if(plastik_okna22x){
		plastik_okna22x = "пластиковые окна";
	}else{
		plastik_okna22x = "нет";
	}

	if(kuhnya_studiya22x){
		kuhnya_studiya22x = "кухня студия";
	}else{
		kuhnya_studiya22x = "нет";
	}

	if(uluchshennaya22x){
		uluchshennaya22x = "улучшенная";
	}else{
		uluchshennaya22x = "нет";
	}

	if(komn_izol22x){
		komn_izol22x = "комнаты изолированные";
	}else{
		komn_izol22x = "нет";
	}

	if(new_santehn22x){
		new_santehn22x = "новая сантехника";
	}else{
		new_santehn22x = "нет";
	}

	if(vstroen_kuhnya22x){
		vstroen_kuhnya22x = "встроенная кухня";
	}else{
		vstroen_kuhnya22x = "нет";
	}

	if(imeetsya_kladov22x){
		imeetsya_kladov22x = "имеется кладовая";
	}else{
		imeetsya_kladov22x = "нет";
	}

	if(schetchiki22x){
		schetchiki22x = "наличие всех счетчиков";
	}else{
		schetchiki22x = "нет";
	}

	if(tihii_dvor22x){
		tihii_dvor22x = "тихий двор";
	}else{
		tihii_dvor22x = "нет";
	}

	if(konditioner22x){
		konditioner22x = "кондиционер";
	}else{
		konditioner22x = "нет";
	}
	//_______________________________________________________________________________block schitivaniya checkboxov
}

//__________________________block schitivaniya prodazha domov

var rasst_ot_goroda25x = $("#rasst_ot_goroda4x").val();
var s_doma25x = $("#s_doma4x").val();
var type_doma25x = $("#type_doma_4x option:selected").text();
var year_build25x = $("#year_build4x").val();

//__________________________block schitivaniya prodazha domov
//__________________________block schitivaniya prodazha dachi

var rasst_ot_goroda26x = $("#rass_ot_goroda_dachi5x").val();
var s_doma26x = $("#s_doma5x").val();
var s_uchastka26x = $("#s_uchastka5x").val();
var type_doma26x = $("#type_doma_5x option:selected").text();



//__________________________block schitivaniya prodazha dachi

//____________________________block schitivaniya prodazha uchastka

var rasst_ot_goroda27x = $("#prod_uch6x").val();
var s_uchastka27x = $("#s_uch6x").val();

//____________________________block schitivaniya prodazha uchastka

//____________________________block schitivaniya prodazha ofisa

var kol_komnat28x = $("#kol_komn7x").val();
var s_obsh28x = $("#obsh_s_7x").val();
var etazh28x = $("#et7x").val();
var et_v_zdanii28x = $("#et_v_zd7x").val();
var type_ofisa28x = $("#type_ofisa_7x option:selected").text();


//____________________________block schitivaniya prodazha ofisa

//____________________________block schitivaniya prodazha pomesheniya

var s_obsh29x = $("#osh_s9x").val();
var etazh29x = $("#et9x").val();
var et_v_zdanii29x = $("#et_v_zd9x").val();
var type_pomesheniya29x = $("#type_pomesheniya_9x option:selected").text();


//____________________________block schitivaniya prodazha pomesheniya

//____________________________block schitivaniya prodazha zdaniya

var year_build30x = $("#year_build10x").val();
var s_obsh30x = $("#s_obsh10x").val();
var et_v_dome30x = $("#et_v_dome10x").val();
var mat_sten30x = $("#mat_sten10x option:selected").text();
var type_zdaniya30x = $("#type_zdaniya_10x option:selected").text();


//____________________________block schitivaniya prodazha zdaniya


//____________________________block schitivaniya prodazha butika i drugie




var s_obsh31x = $("#s_plosh8x").val();
var type_pomesheniya31x = $("#type_pomesheniya_8x option:selected").text();

//____________________________block schitivaniya prodazha butika i drugie

//____________________________block sdat kvartiru
var srok_sdachi32x = $("#srok_sdachi_11x option:selected").text();

//____________________________block sdat kvartiru


//____________________________block kupit

var kupit_ot33x = $("#senaot_3x").val();
var kupit_do33x = $("#sena_do_3x").val();
var valyuta33x = $("#valyuta3x option:selected").text();




//____________________________block kupit




		/*element.removeClass("has-success").addClass("has-error");
		element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		element3.removeClass("has-success").addClass("has-error");
		element4.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");*/



var marka40x = $("#marka_avto12x option:selected").text();
/*var model40x = $("#model_auto12x option:selected").text();*/

var model40x = $("#car_models").text();


/*___________________________block otvechayushii za proverku car*/

var mark9 = $(".auto_r").css("display");

if(mark9 != "none"){

if(marka40x){
	
	$("#cars_warning").removeClass("has-error").addClass("has-success");

}else{

$("#cars_warning").removeClass("has-success").addClass("has-error");

xen1 = false;

}

if(model40x){
	
	$("#mod_warn").removeClass("has-error").addClass("has-success");
	
}else{

$("#mod_warn").removeClass("has-success").addClass("has-error");

xen1 = false;

}


}

/*___________________________block otvechayushii za proverku car*/


var year_build40x = $("#year_build_12x").val();
var probeg40x = $("#probeg12x").val();
var obem40x = $("#obem12x").val();

var korobka40x = $("input:radio[name=optionsRadios111]:checked").val();

var bezdokov40x = $("input:checkbox[name=rmk40]:checked").val();
var bit_ili_na_zak40x = $("input:checkbox[name=rmk41]:checked").val();
var prodazha_po_zapchast40x = $("input:checkbox[name=rmk42]:checked").val();
var trebuyutsya_vlozheniya40x = $("input:checkbox[name=rmk43]:checked").val();
var eta_mash_na_zakaz40x = $("input:checkbox[name=rmk44]:checked").val();
var mash_prosh_tuning40x = $("input:checkbox[name=rmk45]:checked").val();

if(bezdokov40x){

}else{
	var bezdokov40x = "нет";
}

if(bit_ili_na_zak40x){

}else{
	var bit_ili_na_zak40x = "нет";
}

if(prodazha_po_zapchast40x){

}else{
	var prodazha_po_zapchast40x = "нет";
}

if(trebuyutsya_vlozheniya40x){

}else{
	var trebuyutsya_vlozheniya40x = "нет";
}

if(eta_mash_na_zakaz40x){

}else{
	var eta_mash_na_zakaz40x = "нет";
}

if(mash_prosh_tuning40x){

}else{
	var mash_prosh_tuning40x = "нет";
}


var rul40x = $("input:radio[name=inlineRadioOptions5]:checked").val();
var toplivo40x = $("input:radio[name=optionsRadios7]:checked").val();
var privod40x = $("input:radio[name=optionsRadios33]:checked").val();
var svet40x = $("#svet12x option:selected").text();
var sostoyanie_mash40x = $("#sost12x option:selected").text();


var marka_spes45x = $("#spedt13x option:selected").text();
var model45x = $("#model_spes13x").val();



/*___________________________block otvechayushii za proverku spes*/

var mark15 = $(".auto_s").css("display");

if(mark15 != "none"){


if(marka_spes45x){
	
	$(".cars_mark1").removeClass("has-error").addClass("has-success");

}else{

$(".cars_mark1").removeClass("has-success").addClass("has-error");

xen1 = false;

}




}

/*___________________________block otvechayushii za proverku spes*/



var probeg45x = $("#probeg_spes13x").val();
var obem45x = $("#obem_spes13x").val();

var korobka45x = $("input:radio[name=korobka1111]:checked").val();

var bezdokov45x = $("input:checkbox[name=rmk50]:checked").val();
var bit_ili_na_zak45x = $("input:checkbox[name=rmk51]:checked").val();
var prodazha_po_zapchast45x = $("input:checkbox[name=rmk52]:checked").val();
var trebyutsya_vlozheniya45x = $("input:checkbox[name=rmk53]:checked").val();
var eta_mash_na_zakaz45x = $("input:checkbox[name=rmk54]:checked").val();


if(bezdokov45x){

}else{
	var bezdokov45x = "нет";
}

if(bit_ili_na_zak45x){

}else{
	var bit_ili_na_zak45x = "нет";
}

if(prodazha_po_zapchast45x){

}else{
	var prodazha_po_zapchast45x = "нет";
}

if(trebyutsya_vlozheniya45x){

}else{
	var trebyutsya_vlozheniya45x = "нет";
}

if(eta_mash_na_zakaz45x){

}else{
	var eta_mash_na_zakaz45x = "нет";
}

/*var sostoyanie_mash45x = $("#sost_sp13x").val();*/
var rul45x = $("input:radio[name=inlineRadioOptions77]:checked").val();
var toplivo45x = $("input:radio[name=optionsRadios99]:checked").val();
var privod45x = $("input:radio[name=optionsRadios56]:checked").val();
var svet45x = $("#svet45x option:selected").text();
var sostoyanie_mash45x = $("#sost_sp13x option:selected").text();
var year_build45x = $("#year_build45x").val();





var one_blockfx1 = $(".fx1").css("display");
if(one_blockfx1 == "block"){
	var kol_mest50x = $("#kol_mest14x").val();
}else{
	var kol_mest50x = "нет";
}

var one_blockfx2 = $(".fx2").css("display");
if(one_blockfx2 == "block"){
	var nar50x = $("#narabotka14x").val();
	var vis_vish50x = $("#vis_vish14x").val();
}else{
	var nar50x = "нет";
	var vis_vish50x = "нет";
}

var one_blockfx4 = $(".fx4").css("display");
if(one_blockfx4 == "block"){
	var nar50x2 = $("#narab214x").val();
	var vis_vish50x2 = $("#visota_pod14x").val();
	var gruzop50x2 = $("#gruzopod14x").val();
}else{
	var nar50x2 = "нет";
	var vis_vish50x2 = "нет";
	var gruzop50x2 = "нет";
}

var one_blockfx5 = $(".fx5").css("display");
if(one_blockfx5 == "block"){
	var ob_sist51x = $("#ob_sist14x").val();
}else{
	var ob_sist51x = "нет";
}

var one_blockfx6 = $(".fx6").css("display");
if(one_blockfx6 == "block"){
	var narab50x3 = $("#narab314x").val();
	var vis_pod50x3 = $("#vis_pod214x").val();
}else{
	var narab50x3 = "нет";
	var vis_pod50x3 = "нет";
}

var one_blockfx7 = $(".fx7").css("display");
if(one_blockfx7 == "block"){
	var narab50x4 = $("#narab414x").val();
	var ob_sist414x = $("#ob_sis414x").val();
}else{
	var narab50x4 = "нет";
	var ob_sist414x = "нет";
}

var one_blockfx8 = $(".fx8").css("display");
if(one_blockfx8 == "block"){
	var narab50x5 = $("#narab514x").val();
	var massa214x = $("#massa214x").val();
}else{
	var narab50x5 = "нет";
	var massa214x = "нет";
}

var one_blockfx9 = $(".fx9").css("display");
if(one_blockfx9 == "block"){
	var gruzop214x = $("#gruzop214x").val();
}else{
	var gruzop214x = "нет";
}

var one_blockfx10 = $(".fx10").css("display");
if(one_blockfx10 == "block"){
	var narab614x = $("#narab614x").val();
	var gruzop614x = $("#gruzop614x").val();
	var massa814x = $("#massa814x").val();
}else{
	var narab614x = "нет";
	var gruzop614x = "нет";
	var massa814x = "нет";
}

var one_blockfx11 = $(".fx11").css("display");
if(one_blockfx11 == "block"){
	var narab914x = $("#narab914x").val();
	var ob_kov514x = $("#ob_kov514x").val();
	var massa1014x = $("#massa1014x").val();
}else{
	var narab914x = "нет";
	var ob_kov514x = "нет";
	var massa1014x = "нет";
}

var one_blockfx12 = $(".fx12").css("display");
if(one_blockfx12 == "block"){
	var narab1114x = $("#narab1114x").val();
	var mosh1414x = $("#mosh1414x").val();
}else{
	var narab1114x = "нет";
	var mosh1414x = "нет";
}



var ganga1x = $("#nnn1x").css("display");
if(ganga1x == "block"){
	
	var marka_legk67x = $("#car_identificator").text();
	var model67x = $("#car_models").text();
	var sost_zapch_legk77 = $("#sost_zapch15x option:selected").text();
	
	
}else{
	var marka_legk67x = "нет";
	var model67x = "нет";
	var sost_zapch_legk77 = "нет";
}


/*___________________________block otvechayushii za proverku car_zapch*/

var mark25 = $(".legk7x").css("display");

if(mark25 != "none"){


if(marka_legk67x){

	$(".cars_mark1").removeClass("has-error").addClass("has-success");

}else{

$(".cars_mark1").removeClass("has-success").addClass("has-error");

xen1 = false;

}

if(model67x){

	
	$(".jui").removeClass("has-error").addClass("has-success");
	
}else{

$(".jui").removeClass("has-success").addClass("has-error");

xen1 = false;

}


}

/*___________________________block otvechayushii za proverku zapch*/


var ganga2x = $("#nnn2x").css("display");
if(ganga2x == "block"){
	
	var marka_zapch_spes68x = $("#sp_identificator").text();
	var sost_zapch_spes75 = $("#zapch_spest99x option:selected").text();
	
	
}else{
	var marka_zapch_spes68x = "нет";
	var sost_zapch_spes75 = "нет";
}



/*___________________________block otvechayushii za proverku zapchas_spes*/

var mark35 = $("#nnn2x").css("display");


if(mark35 != "none"){


if(marka_zapch_spes68x){
	
	$(".idl5").removeClass("has-error").addClass("has-success");

}else{

$(".idl5").removeClass("has-success").addClass("has-error");

xen1 = false;

}




}

/*___________________________block otvechayushii za proverku zapchast_spes*/





var type_shina55x = $("input:radio[name=options8_shina]:checked").val();

var marka_shini55x = $("#marka_shini16x option:selected").text();

var protector55x = $("#protector16x option:selected").text();

var year_build_shina55x = $("#year_build_shina16x option:selected").text();

var diam_shina55x = $("#diam16x option:selected").text();

var iznos_shina55x = $("#iznos16x option:selected").text();

var kol_shtuk55x = $("#kol_shtuk16x").val();


var type_disk56x = $("input:radio[name=options8_type]:checked").val();

var model_diska56x = $("#model_diska17x option:selected").text();

var type_diska217x56x = $("#type_diska217x option:selected").text();

var year_disk17x56x = $("#year_disk17x option:selected").text();

var diam_diska17x56x = $("#diam_diska17x option:selected").text();

var iznos_diska17x56x = $("#iznos_diska17x option:selected").text();

var kol_shtuk_diskov17x56x = $("#kol_shtuk_diskov17x").val();



/*--------------*/
var date_start_aux777 = $("#data_nachala_auxion").val();

var date_finish_aux777 = $("#srok_auxion").val();	
	
var selev_auditor777 = $(".inject7").text();

var kol_uchastn777 = $("#aux_kol_uch").val();

var dostavka777 = $("#dostavka7x option:selected").val();


var block_aux777 = $(".auxion55").css("display");

if(block_aux777 == "block"){

	if(!date_start_aux777){
		date_start_aux777 = 0;
	}

	if(!date_finish_aux777){
		date_finish_aux777 = 1;
	}

	if(selev_auditor777 == "для всех участников" || selev_auditor777 == "ограниченному количеству участников"){
					var element17 = $(".inject7").parents(".qx15");
					var element18 = element17.find(".qx16");
					element17.addClass("has-success").removeClass("has-error");
					element18.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");
	}else{
		selev_auditor777 = "нет";

					var element15 = $(".inject7").parents(".qx15");
					var element16 = element15.find(".qx16");


					element15.removeClass("has-success").addClass("has-error");
					element16.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					var text_sel_au = "Выберите целевую аудиторию людей! ..";
					$("#testing5").hide().delay(1000).show(1000).html(text_sel_au);
					$("#testing5").delay(3000).hide(1000);	
					xen1 = false;
	}

	if(selev_auditor777 == "для всех участников"){
		kol_uchastn777 = 0;
	}

	if(!kol_uchastn777){
		kol_uchastn777 = 0;
	}

	

}else{
	date_start_aux777 = 0;
	date_finish_aux777 = 0;
	selev_auditor777 = "нет";
	kol_uchastn777 = 0;
}











	

	






var array1 = ["zagolovok56x","opisanie2x","telephone2x","email2x"];
var array2 = [insta18,vkn18,skype18,mail18,google18,other18,chast18,company18,biznes18,agent18,naimenov18];









if(dog != "777"){

	if(dog != "999"){

		
		$("#sena2x").each(function(){

			if(this.checkValidity()){

		
		
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");

		element.addClass("has-success").removeClass("has-error");
		element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		element3.addClass("has-success").removeClass("has-error");
		element4.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		

		






}else{

	
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");
		

		element.removeClass("has-success").addClass("has-error");
		element2.addClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		element3.removeClass("has-success").addClass("has-error");
		element4.addClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		xen1 = false;

		
		



}

		});

		
		
	}else{
		$("#sena2x").val("");
		$("#ddd5x").removeClass("has-error");
		$("#ddd5x").addClass("has-success");
		$("#chl5x").removeClass("glyphicon glyphicon-remove");
		$("#chl5x").addClass("glyphicon glyphicon-ok");

		


		
	}
	}else{
		$("#sena2x").val("");
		$("#ddd5x").removeClass("has-error");
		$("#ddd5x").addClass("has-success");
		$("#chl5x").removeClass("glyphicon glyphicon-remove");
		$("#chl5x").addClass("glyphicon glyphicon-ok");
		


		
	}

for(var i = 0; i < array1.length; i++){

var arrname = "#" + array1[i];	




$(arrname).each(function(){



if(this.checkValidity()){

		
		
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");

		element.addClass("has-success").removeClass("has-error");
		element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		element3.addClass("has-success").removeClass("has-error");
		element4.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

		

		






}else{

	
		var element = $(this).parents(".input-group");
		var element2 = element.find(".form-control-feedback");

		var element3 = $(this).parents(".op2x");
		var element4 = element3.find(".form-control-feedback");
		

		element.removeClass("has-success").addClass("has-error");
		element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		element3.removeClass("has-success").addClass("has-error");
		element4.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

		xen1 = false;

		
		

		






}




});


}

var sostoyanie99x = $("#sostoyanie99x option:selected").val();

var svet_dopolnit = $("#svet_dopolnit option:selected").val();


/*-------------zapasnie peremennie----*/

var res_peremen_string1 = sostoyanie99x;
var res_peremen_string2 = svet_dopolnit;
var res_peremen_string3 = "нет";

var res_peremen_chisl4 = dop_dannie_kolich;
var res_peremen_chisl5 = 0;
var res_peremen_chisl6 = 0;


/*-----------------*/
/*-----------------*/

var zp_ot3x = $("#zpot_3x").val();


if(!zp_ot3x){
	zp_ot3x = "0";
}

var zp_do_3x = $("#zp_do_3x").val();

if(!zp_do_3x){
	zp_do_3x = "0";
}

if(zp_ot3x && zp_do_3x){
	if(Number(zp_ot3x) > Number(zp_do_3x)){
		xen1 = false;
		alert("Уровень з/п от - не должен превышать уровня з/п до");
	}
}

var valyuta75x = $("#valyuta75x > option:selected").text();

res_peremen_string3 = valyuta75x;
res_peremen_chisl5 = zp_ot3x;
res_peremen_chisl6 = zp_do_3x;

if(Number(zp_ot3x) < "0" || Number(zp_do_3x) < "0"){
	alert("введите действительные положительные числа");
	xen1 = false;
}





var ar1 = [".bz_name","#pr_kv","#pr_domov","#pr_dachi2","#pr_uchastka1","#pr_of","#pr_mag","#pr_pomesh","#pr_zd",
			"#kupit1",".auto_r",".glx7",".shina11",".diski111","#instagram","#vkn","#skype","#mail","#google","#other","#z_p99"];

	for(var i = 0; i <= ar1.length; i++){

		

		var x1 = $(ar1[i]);

		x1.each(function(){


		var z1 = $(this);

		if(z1.css("display") != "none"){
			var name1 = z1.find("input");
			
			
			name1.each(function(){

				if(this.checkValidity()){
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					

					element.addClass("has-success").removeClass("has-error");
					element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

					
					
					
				}else{
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					
					

					element.removeClass("has-success").addClass("has-error");
					element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
						xen1 = false;
						
						
					
					
				}
			});
		}

		});


	}



/*___________________block proverki seni_______*/

if(sena1 < 0){
	xen1 = false;
}


var valuta_prov = $("#tg2x option:selected").text();

if(valuta_prov == "$" || valuta_prov == "€"){
	if(sena1 > 1000000){
		
		$("#tg2x :nth-child(1)").attr("selected", "selected");
		valyuta1 = "тг";
	}
}



/*_______________block proverki seni___________*/

/*___________________*/


/*block proverki select raionov*/
	
var r_alm = $("#r_almaty option:selected").text();
var city_alm = $("#city_alm option:selected").text();
var r_astana = $("#r_astana option:selected").text();
var city_ast = $("#city_ast option:selected").text();

if(!r_alm){
	var r_alm = "нет";
}

if(!city_alm){
	var city_alm = "нет";
}

if(!r_astana){
	var r_astana = "нет";
}

if(!city_ast){
	var city_ast = "нет";
}








		



	var ar1 = ["#almaty_raion","#astana_raion"];

	for(var i = 0; i <= ar1.length; i++){

		

		var x1 = $(ar1[i]);

		x1.each(function(){


		var z1 = $(this);

		if(z1.css("display") != "none"){
			var name1 = z1.find("select");
			
			
			name1.each(function(){

				if(this.checkValidity()){
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					if(($(this).attr("id") == "r_almaty") || ($(this).attr("id") == "city_alm")){
						r_astana = "нет";
						city_ast = "нет";
					}

					if(($(this).attr("id") == "r_astana") || ($(this).attr("id") == "city_ast")){
						r_alm = "нет";
						city_alm = "нет";	
					}

					

					element.addClass("has-success").removeClass("has-error");
					element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");



					
					
					
				}else{
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					
					

					element.removeClass("has-success").addClass("has-error");
					element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
						xen1 = false;
						
						
					
					
				}
			});
		}

		});


	}


/*block proverki select raionov*/


/*-----------------*/


/*--------odinochnie inputi---------*/


var vremya_nachala_auxion = $("#vremya_nachala_auxion").val();
if(!vremya_nachala_auxion){
	var vremya_nachala_auxion = 0;
}

var vremya_okonch_auxion = $("#vremya_okonch_auxion").val();
if(!vremya_okonch_auxion){
	var vremya_okonch_auxion = 0;
}


var ar7 = ["#data_nachala_auxion","#srok_auxion","#vremya_nachala_auxion","#vremya_okonch_auxion"];

	for(var i = 0; i <= ar7.length; i++){

		

		var x9 = $(ar7[i]);

		x9.each(function(){


		var z9 = $(this).parents("#auxion777");

		var z10 = $(this);

		if(z9.css("display") != "none"){
			
			
			if(date_start_aux777 >= date_finish_aux777){
	
					var text_date = "Дата начала аукциона не может быть больше даты окончания аукциона!..";
					$("#testing5").hide().delay(1000).show(1000).html(text_date);
					$("#testing5").delay(15000).hide(1000);	

					var trid1 = $("#data_nachala_auxion").parents(".input-group");
					var trid2 = trid1.find(".form-control-feedback");

					trid1.removeClass("has-success").addClass("has-error");
					trid2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");


					var trid3 = $("#srok_auxion").parents(".input-group");
					var trid4 = trid1.find(".form-control-feedback");

					trid3.removeClass("has-success").addClass("has-error");
					trid4.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					xen1 = false;

					
	
	
				}else{


					z10.each(function(){

				if(this.checkValidity()){
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					

					element.addClass("has-success").removeClass("has-error");
					element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");

					
					
					
				}else{
					var element = $(this).parents(".input-group");
					var element2 = element.find(".form-control-feedback");

					
					

					element.removeClass("has-success").addClass("has-error");
					element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
						xen1 = false;
						
						
					
					
				}
			});


				}
			

			
			
			
			
		}

		});


	}



/*-----------------*/


/*-----------------block s dopolnitel'noi filtrasiei dlya spes bloka__otdel'nim elementam*/ 


var ar1 = [".auto_s","#kol_uch","#dopol_dannie78x"];					

	for(var i = 0; i <= ar1.length; i++){

		

		var x1 = $(ar1[i]);

		x1.each(function(){


		var z1 = $(this);

		if(z1.css("display") != "none"){
			
			var name1 = z1.find("input");

			name1.each(function(){


				var t1 = $(this);
				

				if(t1.attr("title") != "заполнить"){
					var t2 = t1.val();

					t1.each(function(){


						if(this.checkValidity()){


							var element = $(this).parents(".input-group");
							var element2 = element.find(".form-control-feedback");

					

							element.addClass("has-success").removeClass("has-error");
							element2.addClass("glyphicon glyphicon-ok").removeClass("glyphicon glyphicon-remove");
						}else{

							var element = $(this).parents(".input-group");
							var element2 = element.find(".form-control-feedback");

					
					

							element.removeClass("has-success").addClass("has-error");
							element2.removeClass("glyphicon glyphicon-ok").addClass("glyphicon glyphicon-remove");

					
							xen1 = false;
						}


					});
				}

			});
			
				
		}


			
			
			
			

		});


	}


	if((one == "Медицина") || (one == "Салоны красоты") || (one == "Мода") || (one == "кафе,караоке,ночные клубы") || (one == "Банки Коммерческие организации") 
		|| (one == "Банки Коммерческие организации") || (one == "Спортивные товары")){
			two = "нет";
			three = "нет";
	}

/*	_____________________*/


if(one == "-" || three == "-"){
	

	
	var mm5x2x = "выберите  категорию!";

	$("#viv2").addClass("alert alert-danger");

	$("#viv2").hide().delay(1000).show(1000).html(mm5x2x);

	$("#viv2").delay(3000).hide(1000);

	$("#vib_cat99x").css("border","2px solid red");

	xen1 = false;							

	





	

		
}else{
	$("#viv2").removeClass("alert alert-danger");
							
	$("#vib_cat99x").css("border","0px");

}

if(strana == "-"){
	
var mm5x2x = "выберите страну!";

	$("#viv3").addClass("alert alert-danger");

	$("#viv3").hide().delay(1000).show(1000).html(mm5x2x);

	$("#viv3").delay(3000).hide(1000);

	$("#but99").css("border","2px solid red");

	xen1 = false;		

}else{
	$("#viv3").removeClass("alert alert-danger");
							
	$("#but99").css("border","0px");

}



/*--------------*/

/*proverka na zapolnenie lisa*/

var whatname = $(".kem777").val();

if(whatname == "кем"){
	
	var mm5x2 = "выберите кем вы являетесь!";

	$("#viv").addClass("alert alert-danger");

	$("#viv").hide().delay(1000).show(1000).html(mm5x2);

	$("#viv").delay(3000).hide(1000);

	$(".kem777").css("border","2px solid red");

	xen1 = false;							

	


}else{


	$("#viv").removeClass("alert alert-danger");
							
	$(".kem777").css("border","0px");
}
/*proverka na zapolnenie lisa*/






/*--------------*/





/*--------------*/




if(xen1 == true){



if((one == "Недвижимость" && two == "Продать" && three == "квартиру") || (one == "Недвижимость" && two == "Снять" && three == "квартиру") || (one == "Недвижимость" && two == "Обменять" && three == "квартиру")){		//otvechaet za formirovanie schitivaniya ob'yavlenii
	

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"komnat":kol_komnat1,
		"obsh_ploshad":obsh_s1,
		"etazh":etazh1,
		"mat_sten":mat_sten1,
		"tip_doma":tip_doma20x,
		"et_v_dome":et_v_dome20x,
		"year_build":year_build20x,
		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,


		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",
		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

	}


	myloadfunc2(form1);



}else if((one == "Недвижимость" && two == "Продать" && three == "дом") || (one == "Недвижимость" && two == "Снять" && three == "дом") || (one == "Недвижимость" && two == "Обменять" && three == "дом")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda25x":rasst_ot_goroda25x,
		"s_doma25x":s_doma25x,
		"type_doma25x":type_doma25x,
		"year_build25x":year_build25x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



	}

	myloadfunc2(form1);

}else if((one == "Недвижимость" && two == "Продать" && three == "дачу") || (one == "Недвижимость" && two == "Снять" && three == "дачу") || (one == "Недвижимость" && two == "Обменять" && three == "дачу")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"rasst_ot_goroda26x":rasst_ot_goroda26x,
		"s_doma26x":s_doma26x,
		"s_uchastka26x":s_uchastka26x,
		"type_doma26x":type_doma26x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





		

	}

	myloadfunc2(form1);

}else if((one == "Недвижимость" && two == "Продать" && three == "участок") || (one == "Недвижимость" && two == "Снять" && three == "участок") || (one == "Недвижимость" && two == "Обменять" && three == "участок")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda27x":rasst_ot_goroda27x,
		"s_uchastka27x":s_uchastka27x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",


		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}


	myloadfunc2(form1);

}else if((one == "Недвижимость" && two == "Продать" && three == "офис") || (one == "Недвижимость" && two == "Снять" && three == "офис") || (one == "Недвижимость" && two == "Обменять" && three == "офис")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"kol_komnat28x":kol_komnat28x,
		"s_obsh28x":s_obsh28x,
		"etazh28x":etazh28x,
		"et_v_zdanii28x":et_v_zdanii28x,
		"type_ofisa28x":type_ofisa28x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",


		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc2(form1);


}else if((one == "Недвижимость" && two == "Продать" && three == "помещение") || (one == "Недвижимость" && two == "Снять" && three == "помещение") || (one == "Недвижимость" && two == "Обменять" && three == "помещение")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh29x":s_obsh29x,
		"etazh29x":etazh29x,
		"et_v_zdanii29x":et_v_zdanii29x,
		"type_pomesheniya29x":type_pomesheniya29x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",


		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,






	}

	myloadfunc2(form1);


}else if((one == "Недвижимость" && two == "Продать" && three == "здание") || (one == "Недвижимость" && two == "Снять" && three == "здание") || (one == "Недвижимость" && two == "Обменять" && three == "здание")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"year_build30x":year_build30x,
		"s_obsh30x":s_obsh30x,
		"et_v_dome30x":et_v_dome30x,
		"mat_sten30x":mat_sten30x,
		"type_zdaniya30x":type_zdaniya30x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",


		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc2(form1);


}else if((one == "Недвижимость" && two == "Продать" && three == "магазин") || (one == "Недвижимость" && two == "Продать" && three == "бутик") || (one == "Недвижимость" && two == "Продать" && three == "промбазу") || (one == "Недвижимость" && two == "Продать" && three == "склад") || (one == "Недвижимость" && two == "Продать" && three == "прочую недвижимость") || (one == "Недвижимость" && two == "Снять" && three == "магазин") || (one == "Недвижимость" && two == "Снять" && three == "бутик") || (one == "Недвижимость" && two == "Снять" && three == "промбазу") || (one == "Недвижимость" && two == "Снять" && three == "склад") || (one == "Недвижимость" && two == "Снять" && three == "прочую недвижимость") || (one == "Недвижимость" && two == "Обменять" && three == "магазин") || (one == "Недвижимость" && two == "Обменять" && three == "бутик") || (one == "Недвижимость" && two == "Обменять" && three == "промбазу") || (one == "Недвижимость" && two == "Обменять" && three == "склад") || (one == "Недвижимость" && two == "Обменять" && three == "прочую недвижимость")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh31x":s_obsh31x,
		"type_pomesheniya31x":type_pomesheniya31x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",


		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc2(form1);


	
}else if(one == "Недвижимость" && two == "Сдать" && three == "квартиру"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"komnat":kol_komnat1,
		"obsh_ploshad":obsh_s1,
		"etazh":etazh1,
		"mat_sten":mat_sten1,
		"tip_doma":tip_doma20x,
		"et_v_dome":et_v_dome20x,
		"year_build":year_build20x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,

		"srok_sdachi":srok_sdachi32x,

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc2(form1);


	
}else if(one == "Недвижимость" && two == "Сдать" && three == "дом"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda25x":rasst_ot_goroda25x,
		"s_doma25x":s_doma25x,
		"type_doma25x":type_doma25x,
		"year_build25x":year_build25x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,







	}

	myloadfunc2(form1);



}else if(one == "Недвижимость" && two == "Сдать" && three == "дачу"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"rasst_ot_goroda26x":rasst_ot_goroda26x,
		"s_doma26x":s_doma26x,
		"s_uchastka26x":s_uchastka26x,
		"type_doma26x":type_doma26x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",


		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

	

	}

	myloadfunc2(form1);



}else if(one == "Недвижимость" && two == "Сдать" && three == "участок"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda27x":rasst_ot_goroda27x,
		"s_uchastka27x":s_uchastka27x,
		"srok_sdachi":srok_sdachi32x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",



		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc2(form1);


}else if(one == "Недвижимость" && two == "Сдать" && three == "офис"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"kol_komnat28x":kol_komnat28x,
		"s_obsh28x":s_obsh28x,
		"etazh28x":etazh28x,
		"et_v_zdanii":et_v_zdanii28x,
		"type_ofisa28x":type_ofisa28x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",


		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

myloadfunc2(form1);


}else if(one == "Недвижимость" && two == "Сдать" && three == "помещение"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh29x":s_obsh29x,
		"etazh29x":etazh29x,
		"et_v_zdanii29x":et_v_zdanii29x,
		"type_pomesheniya29x":type_pomesheniya29x,
		"srok_sdachi":srok_sdachi32x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,






	}

	myloadfunc2(form1);


}else if(one == "Недвижимость" && two == "Сдать" && three == "здание"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"year_build30x":year_build30x,
		"s_obsh30x":s_obsh30x,
		"et_v_dome30x":et_v_dome30x,
		"mat_sten30x":mat_sten30x,
		"type_zdaniya30x":type_zdaniya30x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",


		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc2(form1);


}else if((one == "Недвижимость" && two == "Сдать" && three == "магазин") || (one == "Недвижимость" && two == "Сдать" && three == "бутик") || (one == "Недвижимость" && two == "Сдать" && three == "промбазу") || (one == "Недвижимость" && two == "Сдать" && three == "склад") || (one == "Недвижимость" && two == "Сдать" && three == "прочую недвижимость")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh31x":s_obsh31x,
		"type_pomesheniya31x":type_pomesheniya31x,
		"srok_sdachi":srok_sdachi32x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",


		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

	}

	myloadfunc2(form1);


	
}else if(one == "Недвижимость" && two == "Купить" && three == "квартиру"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,


		"komnat":kol_komnat1,
		"obsh_ploshad":obsh_s1,
		"etazh":etazh1,
		"mat_sten":mat_sten1,
		"tip_doma":tip_doma20x,
		"et_v_dome":et_v_dome20x,
		"year_build":year_build20x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



		

	}
myloadfunc2(form1);


	
}else if(one == "Недвижимость" && two == "Купить" && three == "дом"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda25x":rasst_ot_goroda25x,
		"s_doma25x":s_doma25x,
		"type_doma25x":type_doma25x,
		"year_build25x":year_build25x,


		"sostoyanie22x":sostoyanie22x,
		"sanuzel22x":sanuzel22x,
		"dver22x":dver22x,
		"poli22x":poli22x,
		"telephone22x":telephone22x,
		"balkon22x":balkon22x,
		"parkovka22x":parkovka22x,
		"steni22x":steni22x,
		"internet22x":internet22x,
		"balkon_osteklennii22x":balkon_osteklennii22x,
		"mebel22x":mebel22x,
		"otoplenie22x":otoplenie22x,
		"signalizasiya22x":signalizasiya22x,
		"videonabl22x":videonabl22x,
		"konserzh22x":konserzh22x,
		"domofon22x":domofon22x,
		"ohrana22x":ohrana22x,
		"kodov_zamok22x":kodov_zamok22x,
		"reshetki_na_oknah":reshetki_na_oknah22x,
		"datchik_dvizh22x":datchik_dvizh22x,
		"video_domof22x":video_domof22x,
		"udobno_pod_kommers22x":udobno_pod_kommers22x,
		"neuglov22x":neuglov22x,
		"plastik_okna22x":plastik_okna22x,
		"kuhnya_studiya22x":kuhnya_studiya22x,
		"uluchshennaya22x":uluchshennaya22x,
		"komn_izolir22x":komn_izol22x,
		"new_santehnika22x":new_santehn22x,
		"vstroennaya_kuhnya22x":vstroen_kuhnya22x,
		"imeetsya_kladov22x":imeetsya_kladov22x,
		"schetchiki22x":schetchiki22x,
		"tihii_dvor22x":tihii_dvor22x,
		"konditioner22x":konditioner22x,

		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc2(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "дачу"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"rasst_ot_goroda26x":rasst_ot_goroda26x,
		"s_doma26x":s_doma26x,
		"s_uchastka26x":s_uchastka26x,
		"type_doma26x":type_doma26x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,



		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",



		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,

		

	}

	myloadfunc2(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "участок"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"rasst_ot_goroda27x":rasst_ot_goroda27x,
		"s_uchastka27x":s_uchastka27x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",


		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",


		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,








	}

	myloadfunc2(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "офис"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"kol_komnat28x":kol_komnat28x,
		"s_obsh28x":s_obsh28x,
		"etazh28x":etazh28x,
		"et_v_zdanii":et_v_zdanii28x,
		"type_ofisa28x":type_ofisa28x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",


		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc2(form1);



}else if(one == "Недвижимость" && two == "Купить" && three == "помещение"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh29x":s_obsh29x,
		"etazh29x":etazh29x,
		"et_v_zdanii29x":et_v_zdanii29x,
		"type_pomesheniya29x":type_pomesheniya29x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",


		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,




	}

	myloadfunc2(form1);


}else if(one == "Недвижимость" && two == "Купить" && three == "здание"){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,
		
		"year_build30x":year_build30x,
		"s_obsh30x":s_obsh30x,
		"et_v_dome30x":et_v_dome30x,
		"mat_sten30x":mat_sten30x,
		"type_zdaniya30x":type_zdaniya30x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",


		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",



		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc2(form1);


}else if((one == "Недвижимость" && two == "Купить" && three == "магазин") || (one == "Недвижимость" && two == "Купить" && three == "бутик") || (one == "Недвижимость" && two == "Купить" && three == "промбазу") || (one == "Недвижимость" && two == "Купить" && three == "склад") || (one == "Недвижимость" && two == "Купить" && three == "прочую недвижимость")){
	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"s_obsh31x":s_obsh31x,
		"type_pomesheniya31x":type_pomesheniya31x,


		"kupit_ot33x":kupit_ot33x,
		"kupit_do33x":kupit_do33x,
		"valyuta33x":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"srok_sdachi":"нет",


		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,


	}

	myloadfunc2(form1);


	
}else if((one == "Авто и мото" && two == "продать машину" && three == "легковая с пробегом") || (one == "Авто и мото" && two == "продать машину" && three == "легковая новая") || (one == "Авто и мото" && two == "продать машину" && three == "легковая с автосалона") || (one == "Авто и мото" && two == "продать машину" && three == "легковая из зарубежа") || (one == "Авто и мото" && two == "продать машину" && three == "легковая на заказ") || (one == "Авто и мото" && two == "продать машину" && three == "мотоциклы") || (one == "Авто и мото" && two == "продать машину" && three == "квадроциклы") || (one == "Авто и мото" && two == "продать машину" && three == "катера и лодки") || (one == "Авто и мото" && two == "продать машину" && three == "другие машины")){

var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"marka40x":marka40x,
		"model40x":model40x,
		"year_build_car":year_build40x,
		"probeg40x":probeg40x,
		"obem40x":obem40x,
		"korobka40x":korobka40x,
		"bezdokov40x":bezdokov40x,
		"bit_ili_na_zak40x":bit_ili_na_zak40x,
		"prodazha_po_zapchast40x":prodazha_po_zapchast40x,
		"trebuyutsya_vlozheniya40x":trebuyutsya_vlozheniya40x,
		"eta_mash_na_zakaz40x":eta_mash_na_zakaz40x,
		"mash_prosh_tuning40x":mash_prosh_tuning40x,
		"rul40x":rul40x,
		"toplivo40x":toplivo40x,
		"privod40x":privod40x,
		"svet40x":svet40x,
		"sostoyanie_mash40x":sostoyanie_mash40x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",


		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



	}

	myloadfunc2(form1);




}else if((one == "Авто и мото" && two == "спецтехника" && three == "Спецтехника,Автобусы и др.") || (one == "Авто и мото" && two == "спецтехника" && three == "Аренда") || (one == "Авто и мото" && two == "спецтехника" && three == "Продавцы спецтехники")){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"marka_spes45x":marka_spes45x,
		"model45x":model45x,
		"probeg45x":probeg45x,
		"obem45x":obem45x,
		"korobka45x":korobka45x,
		"bezdokov45x":bezdokov45x,
		"bit_ili_na_zak45x":bit_ili_na_zak45x,
		"prodazha_po_zapchast45x":prodazha_po_zapchast45x,
		"trebyutsya_vlozheniya45x":trebyutsya_vlozheniya45x,
		"eta_mash_na_zakaz45x":eta_mash_na_zakaz45x,
		"sostoyanie_mash45x":sostoyanie_mash45x,
		"rul45x":rul45x,
		"toplivo45x":toplivo45x,
		"privod45x":privod45x,
		"svet45x":svet45x,
		
		"year_build45x":year_build45x,
		"kol_mest50x":kol_mest50x,
		"nar50x":nar50x,
		"vis_vish50x":vis_vish50x,
		"nar50x2":nar50x2,
		"vis_vish50x2":vis_vish50x2,
		"gruzop50x2":gruzop50x2,
		"ob_sist51x":ob_sist51x,
		"narab50x3":narab50x3,
		"vis_pod50x3":vis_pod50x3,
		"narab50x4":narab50x4,
		"ob_sist414x":ob_sist414x,
		"narab50x5":narab50x5,
		"massa214x":massa214x,
		"gruzop214x":gruzop214x,
		"narab614x":narab614x,
		"gruzop614x":gruzop614x,
		"massa814x":massa814x,
		"narab914x":narab914x,
		"ob_kov514x":ob_kov514x,
		"massa1014x":massa1014x,
		"narab1114x":narab1114x,
		"mosh1414x":mosh1414x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",



		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",



		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,






	}

	myloadfunc2(form1);



}else if((one == "Авто и мото" && two == "запчасти" && three == "Продажа запчастей") || (one == "Авто и мото" && two == "запчасти" && three == "авторазбор") || (one == "Авто и мото" && two == "запчасти" && three == "Магазины запчастей") || (one == "Авто и мото" && two == "запчасти" && three == "Аксессуары и мультимедиа") || (one == "Авто и мото" && two == "запчасти" && three == "Расходники") || (one == "Авто и мото" && two == "запчасти" && three == "Авто на запчасти")){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"marka_legk67x":marka_legk67x,
		"model67x":model67x,
		"sost_zapch_legk77":sost_zapch_legk77,
		"marka_zapch_spes68x":marka_zapch_spes68x,
		"sost_zapch_spes75":sost_zapch_spes75,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",


		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,







	}

	myloadfunc2(form1);



}else if(one == "Авто и мото" && two == "запчасти" && three == "ищу запчасть"){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"sena_ot_zap":kupit_ot33x,
		"sena_do_zap":kupit_do33x,
		"valyuta_zapch":valyuta33x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",



		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,


	}

	myloadfunc2(form1);




}else if(one == "Авто и мото" && two == "запчасти" && three == "Шины"){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,


		"type_shina55x":type_shina55x,
		"marka_shini55x":marka_shini55x,
		"protector55x":protector55x,
		"year_build_shina55x":year_build_shina55x,
		"diam_shina55x":diam_shina55x,
		"iznos_shina55x":iznos_shina55x,
		"kol_shtuk55x":kol_shtuk55x,



		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",



		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,



	}

	myloadfunc2(form1);





}else if(one == "Авто и мото" && two == "запчасти" && three == "Диски"){

	var form1 = {
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"type_disk56x":type_disk56x,
		"model_diska56x":model_diska56x,
		"type_diska217x56x":type_diska217x56x,
		"year_disk17x56x":year_disk17x56x,
		"diam_diska17x56x":diam_diska17x56x,
		"iznos_diska17x56x":iznos_diska17x56x,
		"kol_shtuk_diskov17x56x":kol_shtuk_diskov17x56x,


		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",

		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,





	}

	myloadfunc2(form1);

   

		

}else{







var form1 = {					//obichnoe schitivanie
		"zagolovok56x":zagolovok56x,
		"category":one,
		"category2":two,
		"category3":three,
		"sena1":dog,
		"valyuta1":valyuta1,
		"nalichii1":nalichii1,
		"opisanie":opisanie,
		"strana":strana,
		"city":city1,
		"email":email17x,
		"telephone":telephone17x,
		"obmen":obmen17x,
		"watsapp":watsapp,
		"viber":viber,
		"instagram":insta18,
		"vk":vkn18,
		"skype":skype18,
		"mail":mail18,
		"google":google18,
		"other":other18,
		"chastn_liso":chast18,
		"kompaniya":company18,
		"biznes":biznes18,
		"agenstvo":agent18,
		"naimenovanie":naimenov18,
		"commentarii":comment21x,

		"komnat":"0",
		"obsh_ploshad":"0",
		"etazh":"0",
		"mat_sten":"нет",
		"tip_doma":"нет",
		"et_v_dome":"0",
		"year_build":"0",

		
		"sostoyanie22x":"нет",
		"sanuzel22x":"нет",
		"dver22x":"нет",
		"poli22x":"нет",
		"telephone22x":"0",
		"balkon22x":"нет",
		"parkovka22x":"нет",
		"steni22x":"нет",
		"internet22x":"нет",
		"balkon_osteklennii22x":"нет",
		"mebel22x":"нет",
		"otoplenie22x":"нет",
		"signalizasiya22x":"нет",
		"videonabl22x":"нет",
		"konserzh22x":"нет",
		"domofon22x":"нет",
		"ohrana22x":"нет",
		"kodov_zamok22x":"нет",
		"reshetki_na_oknah":"нет",
		"datchik_dvizh22x":"нет",
		"video_domof22x":"нет",
		"udobno_pod_kommers22x":"нет",
		"neuglov22x":"нет",
		"plastik_okna22x":"нет",
		"kuhnya_studiya22x":"нет",
		"uluchshennaya22x":"нет",
		"komn_izolir22x":"нет",
		"new_santehnika22x":"нет",
		"vstroennaya_kuhnya22x":"нет",
		"imeetsya_kladov22x":"нет",
		"schetchiki22x":"нет",
		"tihii_dvor22x":"нет",
		"konditioner22x":"нет",

		"rasst_ot_goroda25x":"0",
		"s_doma25x":"0",
		"type_doma25x":"нет",
		"year_build25x":"0",

		"rasst_ot_goroda26x":"0",
		"s_doma26x":"0",
		"s_uchastka26x":"0",
		"type_doma26x":"нет",

		"rasst_ot_goroda27x":"0",
		"s_uchastka27x":"0",

		"kol_komnat28x":"0",
		"s_obsh28x":"0",
		"etazh28x":"0",
		"et_v_zdanii28x":"0",
		"type_ofisa28x":"нет",

		"s_obsh29x":"0",
		"etazh29x":"0",
		"et_v_zdanii29x":"0",
		"type_pomesheniya29x":"нет",

		"year_build30x":"0",
		"s_obsh30x":"0",
		"et_v_dome30x":"0",
		"mat_sten30x":"нет",
		"type_zdaniya30x":"нет",

		"s_obsh31x":"0",
		"type_pomesheniya31x":"нет",

		"srok_sdachi":"нет",

		"kupit_ot33x":"0",
		"kupit_do33x":"0",
		"valyuta33x":"нет",

		"marka40x":"нет",
		"model40x":"нет",
		"year_build_car":"0",
		"probeg40x":"0",
		"obem40x":"0",
		"korobka40x":"нет",
		"bezdokov40x":"нет",
		"bit_ili_na_zak40x":"нет",
		"prodazha_po_zapchast40x":"нет",
		"trebuyutsya_vlozheniya40x":"нет",
		"eta_mash_na_zakaz40x":"нет",
		"mash_prosh_tuning40x":"нет",
		"rul40x":"нет",
		"toplivo40x":"нет",
		"privod40x":"нет",
		"svet40x":"нет",
		"sostoyanie_mash40x":"нет",

		"marka_spes45x":"нет",
		"model45x":"нет",
		"probeg45x":"0",
		"obem45x":"0",
		"korobka45x":"нет",
		"bezdokov45x":"нет",
		"bit_ili_na_zak45x":"нет",
		"prodazha_po_zapchast45x":"нет",
		"trebyutsya_vlozheniya45x":"нет",
		"eta_mash_na_zakaz45x":"нет",
		"sostoyanie_mash45x":"нет",
		"rul45x":"нет",
		"toplivo45x":"нет",
		"privod45x":"нет",
		"svet45x":"нет",

		"year_build45x":"0",
		"kol_mest50x":"0",
		"nar50x":"0",
		"vis_vish50x":"0",
		"nar50x2":"0",
		"vis_vish50x2":"0",
		"gruzop50x2":"0",
		"ob_sist51x":"0",
		"narab50x3":"0",
		"vis_pod50x3":"0",
		"narab50x4":"0",
		"ob_sist414x":"0",
		"narab50x5":"0",
		"massa214x":"0",
		"gruzop214x":"0",
		"narab614x":"0",
		"gruzop614x":"0",
		"massa814x":"0",
		"narab914x":"0",
		"ob_kov514x":"0",
		"massa1014x":"0",
		"narab1114x":"0",
		"mosh1414x":"0",

		"marka_legk67x":"нет",
		"model67x":"нет",
		"sost_zapch_legk77":"нет",
		"marka_zapch_spes68x":"нет",
		"sost_zapch_spes75":"нет",

		"sena_ot_zap":"0",
		"sena_do_zap":"0",
		"valyuta_zapch":"нет",

		"type_shina55x":"нет",
		"marka_shini55x":"нет",
		"protector55x":"нет",
		"year_build_shina55x":"0",
		"diam_shina55x":"0",
		"iznos_shina55x":"нет",
		"kol_shtuk55x":"0",


		"type_disk56x":"нет",
		"model_diska56x":"нет",
		"type_diska217x56x":"нет",
		"year_disk17x56x":"0",
		"diam_diska17x56x":"0",
		"iznos_diska17x56x":"нет",
		"kol_shtuk_diskov17x56x":"0",


		"date_start_aux777":date_start_aux777,
		"date_finish_aux777":date_finish_aux777,
		"selev_auditor777":selev_auditor777,
		"kol_uchastn777":kol_uchastn777,
		"dostavka777":dostavka777,
		"res_peremen_string1":res_peremen_string1,
		"res_peremen_string2":res_peremen_string2,
		"res_peremen_string3":res_peremen_string3,
		"res_peremen_chisl4":res_peremen_chisl4,
		"res_peremen_chisl5":res_peremen_chisl5,
		"res_peremen_chisl6":res_peremen_chisl6,


	}


 		


/*-----------------*/


myloadfunc2(form1);





}



}else{
	res = "Заполните все данные";

	$("#testing2").show(1000).html(res);
	$("#testing2").delay(4000).hide(1000);

	 
}










}); /*kones button*/

//zahvat dannih











});	//kones jQuery

