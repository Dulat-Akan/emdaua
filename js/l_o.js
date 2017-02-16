     $(document).ready(function(){

       // $("#mybut").click(function(){


       //        MyLink();
       //      });

            function MyLink(perenapravit,zapros,t){
				$("#download").show();

                        var data = {
                            "data":t,
                            "hid":"hid",
                        }

                        $.ajax({
                            "type":"POST",
                            "url":zapros,
                            "data":data,
                            "datatype":"json html script",
                           
                          
                            "success":kx,
                            "error":errorfunc
                            
                          });

                        function kx(result){



                            if(result){
                            
                              $("#download").hide();
							  //return false;
                              window.location.href = perenapravit;


                            }
  
                              }

                       function errorfunc(){
                          console.log("ошибка соединения с интернетом");
                       }


            };


                
                var link = $("#mylink").children("ul").children("li").children("a");
				

				
                link.click(function(event){
//console.log(8)
                    event.preventDefault();

                    var perenapravit = $(this).attr("href"); /*kuda perenapravit*/
                    var zapros = $(this).attr("r");    /*kuda otpravit zapros*/

                    
                    var t = $(this).text();

                    switch(t){
                        case "Футбол":
                        MyLink(perenapravit,zapros,t);

                        break;
                        case "Теннис":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Хоккей":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Американский футбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Бейсбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Биатлон":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Бокс":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Гандбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Гольф":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Горные лыжи":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Дартс":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Киберспорт":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Крикет":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Лыжи":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Мотоспорт":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Песапалло":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Прыжки с трамплина":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Ралли":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Регби-лига":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Регби-союз":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Снукер":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Формула 1":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "результаты":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "результаты Live":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "ставки LIVE":
                        MyLink(perenapravit,zapros,t);
                        break;
                    }
                    


                });




            });    /* kones ready*/

