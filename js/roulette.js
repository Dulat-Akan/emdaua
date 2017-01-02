$(document).ready(function(){


  var copyimage;
  var nominal = "no";
  var nominalnumber = 0;
  var nominalmultiply = 0;

  var arnumber = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36];

  var arnumbercombination = ["1x12","2x12","3x12","3x2x1","3x6x2x5x1x4","6x5x4","6x9x5x8x4x7","9x8x7","9x12x8x11x7x10","12x11x10","12x15x11x14x10x13","15x14x13",
  "15x18x14x17x13x16","18x17x16","18x21x17x20x16x19","21x20x19","21x24x20x23x19x22","24x23x22","24x27x23x26x22x25","27x26x25","27x30x26x29x25x28","30x29x28","30x33x29x32x28x31",
  "33x32x31","33x36x32x35x31x34","36x35x34","3x6","6x9","9x12","12x15","15x18","18x21","21x24","24x27","27x30","30x33","33x36","2k1-1","3x2","3x6x2x5","6x5","6x9x5x8","9x8",
  "9x12x8x11","12x11","12x15x11x14","15x14","15x18x14x17","18x17","18x21x17x20","21x20","21x24x20x23","24x23","24x27x23x26","27x26","27x30x26x29","30x29","30x33x29x32",
  "32x33","33x36x32x35","36x35","2x5","5x8","8x11","11x14","14x17","17x20","20x23","23x26","26x29","29x32","32x35","2k1_2","2x1","2x5x1x4","5x4","5x8x4x7","8x7","8x11x7x10",
  "11x10","11x14x10x13","14x13","14x17x13x16","17x16","17x20x16x19","20x19","20x23x19x22","23x22","23x26x22x25","26x25","26x29x25x28","29x28","29x32x28x31","32x31","32x35x31x34",
  "35x34","1x4","4x7","7x10","10x13","13x16","16x19","19x22","22x25","25x28","28x31","31x34","2k1_3","3x2x1","1x2x3x4x5x6","4x5x6","4x5x6x9x8x7","7x8x9","7x8x9x10x11x12","10x11x12",
  "10x13x11x14x12x15","13x14x15","13x16x14x17x15x18","16x17x18","16x19x17x20x18x21","19x20x21","19x22x20x23x21x24","22x23x24","22x25x23x26x24x27","25x26x27","25x26x27x28x29x30",
  "28x29x30","28x31x29x32x30x33","31x32x33","31x34x32x35x33x36","34x35x36","1to18","even","red","black","odd","19to36","no","ntwo","nthree","nf","bs","ss","orp","zs"];

  var arnumbersearchcombination = ["3x2x1","3x6x2x5x1x4","6x5x4","6x9x5x8x4x7","9x8x7","9x12x8x11x7x10","12x11x10","12x15x11x14x10x13","15x14x13",
  "15x18x14x17x13x16","18x17x16","18x21x17x20x16x19","21x20x19","21x24x20x23x19x22","24x23x22","24x27x23x26x22x25","27x26x25","27x30x26x29x25x28","30x29x28","30x33x29x32x28x31",
  "33x32x31","33x36x32x35x31x34","36x35x34","3x6","6x9","9x12","12x15","15x18","18x21","21x24","24x27","27x30","30x33","33x36","3x2","3x6x2x5","6x5","6x9x5x8","9x8",
  "9x12x8x11","12x11","12x15x11x14","15x14","15x18x14x17","18x17","18x21x17x20","21x20","21x24x20x23","24x23","24x27x23x26","27x26","27x30x26x29","30x29","30x33x29x32",
  "32x33","33x36x32x35","36x35","2x5","5x8","8x11","11x14","14x17","17x20","20x23","23x26","26x29","29x32","32x35","2x1","2x5x1x4","5x4","5x8x4x7","8x7","8x11x7x10",
  "11x10","11x14x10x13","14x13","14x17x13x16","17x16","17x20x16x19","20x19","20x23x19x22","23x22","23x26x22x25","26x25","26x29x25x28","29x28","29x32x28x31","32x31","32x35x31x34",
  "35x34","1x4","4x7","7x10","10x13","13x16","16x19","19x22","22x25","25x28","28x31","31x34","3x2x1","1x2x3x4x5x6","4x5x6","4x5x6x9x8x7","7x8x9","7x8x9x10x11x12","10x11x12",
  "10x13x11x14x12x15","13x14x15","13x16x14x17x15x18","16x17x18","16x19x17x20x18x21","19x20x21","19x22x20x23x21x24","22x23x24","22x25x23x26x24x27","25x26x27","25x26x27x28x29x30",
  "28x29x30","28x31x29x32x30x33","31x32x33","31x34x32x35x33x36","34x35x36"];

  var ar2k1_1 = [3,6,9,12,15,18,21,24,27,30,33,36];
  var ar2k1_2 = [2,5,8,11,14,17,20,23,26,29,32,35];
  var ar2k1_3 = [1,4,7,10,13,16,19,22,25,28,31,34];
  var red = [1,3,5,7,9,14,16,18,19,21,23,25,27,30,32,34];
  var black = [2,4,6,8,10,11,12,13,15,17,20,22,24,26,28,29,31,33,35,36];
  var orphans = [1,20,14,31,9,6,34,17];
  var zero_spiel = [35,3,26,0,32];
  var s_s = [27,13,36,11,30,8,23,10,5,24,16,33];
  var big_series = [22,18,29,7,28,12,25,2,21,4,19,15];



    $(".y").click(function(){

            var z = $(this);

            var url = $("#urll").val();

            var p_indecator_count = z.children(".i");

            var prevdivnumber = $(this).children("div:not(.i)");

           

            //var canvl = $(this).children("canvas");

            var x = $(this).attr("x");

            if(nominal == "no"){
                console.log("Выберите номинал..");
                $("#fish_p").hide("1000");
                $("#message").text("Выберите номинал..").show("2000").delay("1500").hide("2000");
                $("#fish_p").delay("1500").show("1000");

                return false;
            }

            for(var i = 0;i < arnumber.length;i++){

              if(x == arnumber[i]){
                  //z.css("border","5px solid white");
                  


                  prevdivnumber.hide();
                  // img.attr("src",nominal);                      /* url + "/1.png"*/
                   var count_img = p_indecator_count.attr("count");
                   count_img++;
                   p_indecator_count.attr("count",count_img);
                   


                  var vvv = document.createElement("CANVAS");

                  vvv.setAttribute("width", "50");
                  vvv.setAttribute("height", "50");

                     var xxx = vvv.getContext('2d');

                    xxx.beginPath();

                    xxx.fillStyle = "#49EDF8";
                    xxx.arc(25,25,25,0,Math.PI*2,true); // Внешняя окружность

                    xxx.fill();

                    //xxx.moveTo(45,25);

                    xxx.beginPath();

                    xxx.fillStyle = "white";

                    xxx.arc(25,25,18,0,Math.PI*2,true); // Внутренняя окружность

                    xxx.fill();

                    xxx.beginPath();
                    xxx.fillStyle = "black";
                    xxx.font = "14px serif";
                    xxx.fillText(count_img, 20, 30);

                    document.body.appendChild(vvv);

                    p_indecator_count.empty();

                    p_indecator_count.append(vvv);




              }

            }


            for(var i = 0;i < arnumbercombination.length;i++){

                      if(x == arnumbercombination[i]){

                          switch(x){

                              case '1x12':  // if (x === 'value1')

                                  for(var r = 1;r <= 12;r++){
                                      $('[x = "'+ r + '"]').css("border","5px solid green");
                                  }  

                                break;

                              case '2x12':
                                
                                for(var e = 13;e <= 24;e++){
                                      $('[x = "'+ e + '"]').css("border","5px solid green");
                                  }  

                                break;

                              case '3x12': 

                                  for(var w = 25;w <= 36;w++){
                                      $('[x = "'+ w + '"]').css("border","5px solid green");
                                  }  
                              
                              break;

                              case '1to18': 

                                  for(var o = 1;o <= 18;o++){
                                      $('[x = "'+ o + '"]').css("border","5px solid green");
                                  }  
                              
                              break;

                              case 'even': 

                                  for(var p = 1;p <= arnumber.length;p++){

                                      if(arnumber[p] % 2 == 0){
                                        $('[x = "'+ p + '"]').css("border","5px solid green");
                                      }

                                   }
                              
                              break;

                              case 'odd': 

                                  for(var a = 1;a <= arnumber.length;a++){

                                      if(arnumber[a] % 2 == 1){
                                        $('[x = "'+ a + '"]').css("border","5px solid green");
                                      }

                                   }  
                              
                              break;

                              case '19to36': 

                                  for(var s = 19;s <= 36;s++){

                                        $('[x = "'+ s + '"]').css("border","5px solid green");

                                   }  
                              
                              break;

                              case 'red': 

                                  for(var d = 0;d <= red.length;d++){

                                        $('[x = "'+ red[d] + '"]').css("border","5px solid green");

                                   }  
                              
                              break;

                              case 'black': 

                                  for(var f = 0;f <= black.length;f++){

                                        $('[x = "'+ black[f] + '"]').css("border","5px solid green");

                                   }  
                              
                              break;

                              case 'bs': 

                                  for(var c = 0;c <= big_series.length;c++){

                                        $('[x = "'+ big_series[c] + '"]').css("border","5px solid green");

                                   }  
                              
                              break;

                              case 'ss': 

                                  for(var l = 0;l <= s_s.length;l++){

                                        $('[x = "'+ s_s[l] + '"]').css("border","5px solid green");

                                   }  
                              
                              break;


                              case 'orp': 

                                  for(var v = 0;v <= orphans.length;v++){

                                        $('[x = "'+ orphans[v] + '"]').css("border","5px solid green");

                                   }  
                              
                              break;

                              case 'zs': 

                                  for(var b = 0;b <= zero_spiel.length;b++){

                                        $('[x = "'+ zero_spiel[b] + '"]').css("border","5px solid green");

                                   }  
                              
                              break;



                              case '2k1-1': 

                                for(var t = 0;t < ar2k1_1.length;t++){
                                    $('[x = "'+ ar2k1_1[t] + '"]').css("border","5px solid green");
                                }
                                
                                break;

                              case '2k1_2': 

                                for(var y = 0;y < ar2k1_2.length;y++){
                                    $('[x = "'+ ar2k1_2[y] + '"]').css("border","5px solid green");
                                }
                                
                                break;

                              case '2k1_3': 

                                for(var u = 0;u < ar2k1_3.length;u++){
                                    $('[x = "'+ ar2k1_3[u] + '"]').css("border","5px solid green");
                                }
                                
                                break;

                              case 'value2': 
                              
                              break;


                              case 'value2': 
                                
                                break;

                              case 'value2': 
                              
                              break;

                              default:


                                    for(var g = 0;g < arnumbersearchcombination.length;g++){
                                        if(x == arnumbersearchcombination[g]){

                                              var revoar = arnumbersearchcombination[g].split('x');

                                             // for(var k = 0;k < revoar.length;k++){

                                                     // $('[x = "'+ revoar[k] + '"]').css("border","5px solid green");
                                                     prevdivnumber.hide();
                                                    img.attr("src",nominal);                      /* url + "/1.png"*/
                                                    var count_img = img.attr("count");
                                                    count_img++;
                                                    img.attr("count",count_img);
                                                    p_indecator_count.text("x" + count_img);

                                             // }

                                         }
                                     }


                            }

                          
                      }

                      

            }






          

    });


    $(".y").hover(

        function(){

            var z = $(this);

            

            var x = $(this).attr("x");

            for(var i = 0;i < arnumber.length;i++){

              if(x == arnumber[i]){
                  z.css("opacity","0.5");
              }

            }


            for(var i = 0;i < arnumbercombination.length;i++){

                      if(x == arnumbercombination[i]){

                          switch(x){

                              case '1x12':  // if (x === 'value1')

                                  for(var r = 1;r <= 12;r++){
                                      $('[x = "'+ r + '"]').css("opacity","0.5");
                                  }  

                                break;

                              case '2x12':
                                
                                for(var e = 13;e <= 24;e++){
                                      $('[x = "'+ e + '"]').css("opacity","0.5");
                                  }  

                                break;

                              case '3x12': 

                                  for(var w = 25;w <= 36;w++){
                                      $('[x = "'+ w + '"]').css("opacity","0.5");
                                  }  
                              
                              break;

                              case '1to18': 

                                  for(var o = 1;o <= 18;o++){
                                      $('[x = "'+ o + '"]').css("opacity","0.5");
                                  }  
                              
                              break;

                              case 'even': 

                                  for(var p = 1;p <= arnumber.length;p++){

                                      if(arnumber[p] % 2 == 0){
                                        $('[x = "'+ p + '"]').css("opacity","0.5");
                                      }

                                   }
                              
                              break;

                              case 'odd': 

                                  for(var a = 1;a <= arnumber.length;a++){

                                      if(arnumber[a] % 2 == 1){
                                        $('[x = "'+ a + '"]').css("opacity","0.5");
                                      }

                                   }  
                              
                              break;

                              case '19to36': 

                                  for(var s = 19;s <= 36;s++){

                                        $('[x = "'+ s + '"]').css("opacity","0.5");

                                   }  
                              
                              break;

                              case 'red': 

                                  for(var d = 0;d <= red.length;d++){

                                        $('[x = "'+ red[d] + '"]').css("opacity","0.5");

                                   }  
                              
                              break;

                              case 'black': 

                                  for(var f = 0;f <= black.length;f++){

                                        $('[x = "'+ black[f] + '"]').css("opacity","0.5");

                                   }  
                              
                              break;

                               case 'bs': 

                                  for(var c = 0;c <= big_series.length;c++){

                                        $('[x = "'+ big_series[c] + '"]').css("opacity","0.5");

                                   }  
                              
                              break;

                              case 'ss': 

                                  for(var l = 0;l <= s_s.length;l++){

                                        $('[x = "'+ s_s[l] + '"]').css("opacity","0.5");

                                   }  
                              
                              break;


                              case 'orp': 

                                  for(var v = 0;v <= orphans.length;v++){

                                        $('[x = "'+ orphans[v] + '"]').css("opacity","0.5");

                                   }  
                              
                              break;

                              case 'zs': 

                                  for(var b = 0;b <= zero_spiel.length;b++){

                                        $('[x = "'+ zero_spiel[b] + '"]').css("opacity","0.5");

                                   }  
                              
                              break;


                              case '2k1-1': 

                                for(var t = 0;t < ar2k1_1.length;t++){
                                    $('[x = "'+ ar2k1_1[t] + '"]').css("opacity","0.5");
                                }
                                
                                break;

                              case '2k1_2': 

                                for(var y = 0;y < ar2k1_2.length;y++){
                                    $('[x = "'+ ar2k1_2[y] + '"]').css("opacity","0.5");
                                }
                                
                                break;

                              case '2k1_3': 

                                for(var u = 0;u < ar2k1_3.length;u++){
                                    $('[x = "'+ ar2k1_3[u] + '"]').css("opacity","0.5");
                                }
                                
                                break;


                              default:


                                    for(var g = 0;g < arnumbersearchcombination.length;g++){
                                        if(x == arnumbersearchcombination[g]){

                                              var revoar = arnumbersearchcombination[g].split('x');

                                              for(var k = 0;k < revoar.length;k++){

                                                     $('[x = "'+ revoar[k] + '"]').css("opacity","0.5");

                                              }

                                         }
                                     }


                            }

                          
                      }

                      

            }



          

        },
        function(){

              for(var i = 0;i <= 36;i++){

                  $('[x = "'+ i + '"]').css("opacity","1");

              }

        });





        $(".fishki").hover(function(){


            var gretto = $(this);

            gretto.css("width","90px");


        },function(){


            var gretto = $(this);

            gretto.css("width","70px");


        });

        var fishArray = new Array();

        $(".fishki").click(function(){

            var x = $(this);

            fishArray.push(x);

            for(var i = 0;i < fishArray.length;i++){

                var g = $(fishArray[i]).css("border","0px");

            }

            x.css("border","2px solid red");
            var nom = x.attr("src");
            var numb = x.attr("v");

            nominal = nom;
            nominalnumber = numb;

        });
             
            

            // var vvv = document.getElementById('ggg');
     

            //         if (vvv.getContext) {
            //          var xxx = vvv.getContext('2d');

            //         xxx.beginPath();

            //         xxx.fillStyle = "#49EDF8";
            //         xxx.arc(25,25,25,0,Math.PI*2,true); // Внешняя окружность

            //         xxx.fill();

            //         //xxx.moveTo(45,25);

            //         xxx.beginPath();

            //         xxx.fillStyle = "white";

            //         xxx.arc(25,25,18,0,Math.PI*2,true); // Внутренняя окружность

            //         xxx.fill();

            //         xxx.beginPath();
            //         xxx.fillStyle = "black";
            //         xxx.font = "14px serif";
            //         xxx.fillText(1, 20, 30);

                    

            //         copyimage = vvv;

            //         }




                    // var x = document.createElement("CANVAS");
                    // var ctx = x.getContext("2d");
                    // ctx.fillStyle = "#FF0000";
                    // ctx.fillRect(20, 20, 150, 100);
                    // document.body.appendChild(x);



                    

                    

                    

                    


});


