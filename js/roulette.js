$(document).ready(function(){

  var sendArray = new Array();

  var nominalnumber = 0;  //nominal

  var arnumber = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36];

  var arnumbercount = new Array();

  for(var i = 0;i < arnumber.length;i++){
    arnumbercount[i] = 0;
  }
    //dlya rascheta selih blokov
  var arnumbercombination = ["1x12","2x12","3x12","3x2x1","3x6x2x5x1x4","6x5x4","6x9x5x8x4x7","9x8x7","9x12x8x11x7x10","12x11x10","12x15x11x14x10x13","15x14x13",
  "15x18x14x17x13x16","18x17x16","18x21x17x20x16x19","21x20x19","21x24x20x23x19x22","24x23x22","24x27x23x26x22x25","27x26x25","27x30x26x29x25x28","30x29x28","30x33x29x32x28x31",
  "33x32x31","33x36x32x35x31x34","36x35x34","3x6","6x9","9x12","12x15","15x18","18x21","21x24","24x27","27x30","30x33","33x36","2k1-1","3x2","3x6x2x5","6x5","6x9x5x8","9x8",
  "9x12x8x11","12x11","12x15x11x14","15x14","15x18x14x17","18x17","18x21x17x20","21x20","21x24x20x23","24x23","24x27x23x26","27x26","27x30x26x29","30x29","30x33x29x32",
  "32x33","33x36x32x35","36x35","2x5","5x8","8x11","11x14","14x17","17x20","20x23","23x26","26x29","29x32","32x35","2k1_2","2x1","2x5x1x4","5x4","5x8x4x7","8x7","8x11x7x10",
  "11x10","11x14x10x13","14x13","14x17x13x16","17x16","17x20x16x19","20x19","20x23x19x22","23x22","23x26x22x25","26x25","26x29x25x28","29x28","29x32x28x31","32x31","32x35x31x34",
  "35x34","1x4","4x7","7x10","10x13","13x16","16x19","19x22","22x25","25x28","28x31","31x34","2k1_3","3x2x1","1x2x3x4x5x6","4x5x6","4x5x6x9x8x7","7x8x9","7x8x9x10x11x12","10x11x12",
  "10x13x11x14x12x15","13x14x15","13x16x14x17x15x18","16x17x18","16x19x17x20x18x21","19x20x21","19x22x20x23x21x24","22x23x24","22x25x23x26x24x27","25x26x27","25x26x27x28x29x30",
  "28x29x30","28x31x29x32x30x33","31x32x33","31x34x32x35x33x36","34x35x36","1to18","even","red","black","odd","19to36","no","ntwo","nthree","nf","bs","ss","orp","zs"];

  var arnumbercombinationcount = new Array();

  for(var i = 0;i < arnumbercombination.length;i++){
    arnumbercombinationcount[i] = 0;
  }
      //chisto combinasii iz chisel
  var arnumbersearchcombination = ["3x2x1","3x6x2x5x1x4","6x5x4","6x9x5x8x4x7","9x8x7","9x12x8x11x7x10","12x11x10","12x15x11x14x10x13","15x14x13",
  "15x18x14x17x13x16","18x17x16","18x21x17x20x16x19","21x20x19","21x24x20x23x19x22","24x23x22","24x27x23x26x22x25","27x26x25","27x30x26x29x25x28","30x29x28","30x33x29x32x28x31",
  "33x32x31","33x36x32x35x31x34","36x35x34","3x6","6x9","9x12","12x15","15x18","18x21","21x24","24x27","27x30","30x33","33x36","3x2","3x6x2x5","6x5","6x9x5x8","9x8",
  "9x12x8x11","12x11","12x15x11x14","15x14","15x18x14x17","18x17","18x21x17x20","21x20","21x24x20x23","24x23","24x27x23x26","27x26","27x30x26x29","30x29","30x33x29x32",
  "32x33","33x36x32x35","36x35","2x5","5x8","8x11","11x14","14x17","17x20","20x23","23x26","26x29","29x32","32x35","2x1","2x5x1x4","5x4","5x8x4x7","8x7","8x11x7x10",
  "11x10","11x14x10x13","14x13","14x17x13x16","17x16","17x20x16x19","20x19","20x23x19x22","23x22","23x26x22x25","26x25","26x29x25x28","29x28","29x32x28x31","32x31","32x35x31x34",
  "35x34","1x4","4x7","7x10","10x13","13x16","16x19","19x22","22x25","25x28","28x31","31x34","3x2x1","1x2x3x4x5x6","4x5x6","4x5x6x9x8x7","7x8x9","7x8x9x10x11x12","10x11x12",
  "10x13x11x14x12x15","13x14x15","13x16x14x17x15x18","16x17x18","16x19x17x20x18x21","19x20x21","19x22x20x23x21x24","22x23x24","22x25x23x26x24x27","25x26x27","25x26x27x28x29x30",
  "28x29x30","28x31x29x32x30x33","31x32x33","31x34x32x35x33x36","34x35x36"];

  var arnumbersearchcombinationcount  = new Array();

  for(var i = 0;i < arnumbersearchcombination.length;i++){
    arnumbersearchcombinationcount[i] = 0;
  }

  var ar2k1_1 = [3,6,9,12,15,18,21,24,27,30,33,36];
  var ar2k1_2 = [2,5,8,11,14,17,20,23,26,29,32,35];
  var ar2k1_3 = [1,4,7,10,13,16,19,22,25,28,31,34];
  var red = [1,3,5,7,9,14,16,18,19,21,23,25,27,30,32,34];
  var black = [2,4,6,8,10,11,12,13,15,17,20,22,24,26,28,29,31,33,35,36];
  var orphans = [1,20,14,31,9,6,34,17];
  var zero_spiel = [35,3,26,0,32];
  var s_s = [27,13,36,11,30,8,23,10,5,24,16,33];
  var big_series = [22,18,29,7,28,12,25,2,21,4,19,15];

  var fixsosed = 0;

  var noar = new Array();
  var notwoar = new Array();
  var nothreear = new Array();
  var nofar = new Array();
  var obshiiars = new Array();

      /*fixatori massivov*/

  var fixno = 0;
  var fixntwo = 0;
  var fixnthree = 0;
  var fixnfour = 0;
      /*fixatori massivov*/
      /*fixatori odnoi stavki na sosedei*/
  var fixno2 = 0;
  var fixntwo2 = 0;
  var fixnthree2 = 0;
  var fixnfour2 = 0;
      /*fixatori odnoi stavki na sosedei*/


/*peremennaya dlya otpravki koef tolko 1 raz*/

var send = 0;
/*peremennaya dlya otpravki koef tolko 1 raz*/


    $(".y").click(function(){

            var z = $(this);

            var url = $("#urll").val();

            var p_indecator_count = z.children(".i");

            var prevdivnumber = $(this).children("div:not(.i)");

            var x = $(this).attr("x");

            

            function getimage(){

              //new manipulation

                                   prevdivnumber.hide();  //skritie perednego div s nomerom
                                   //generasiya kartinki

                                    var vvv = document.createElement("CANVAS");

                                    vvv.setAttribute("width", "50");
                                    vvv.setAttribute("height", "50");

                                     var xxx = vvv.getContext('2d');

                                    xxx.beginPath();

                                    var imcolor = "#49EDF8";

                                    if(nominalnumber == "1"){
                                        imcolor = "#49EDF8";
                                    }else if(nominalnumber == "5"){
                                        imcolor = "#FFFB36";
                                    }else if(nominalnumber == "25"){
                                        imcolor = "#87EF12";
                                    }else if(nominalnumber == "50"){
                                        imcolor = "#0079EF";
                                    }else if(nominalnumber == "100"){
                                        imcolor = "#681830";
                                    }else if(nominalnumber == "500"){
                                        imcolor = "#FC4BCD";
                                    }else if(nominalnumber == "1000"){
                                        imcolor = "#FF0600";
                                    }


                                    p_indecator_count.attr("colorfx",imcolor);

                                    //podschet kolichestva nazhatii i stavok

                                   var count_img = p_indecator_count.attr("count");

                                   count_img = (+count_img + +nominalnumber);

                                   p_indecator_count.attr("count",count_img);

                                   
                                   //podschet kolichestva nazhatii i stavok

                                    xxx.fillStyle = imcolor;
                                    xxx.arc(25,25,20,0,Math.PI*2,true); // Внешняя окружность

                                    xxx.fill();

                                    //xxx.moveTo(45,25);

                                    xxx.beginPath();

                                    xxx.fillStyle = "white";

                                    xxx.arc(25,25,14,0,Math.PI*2,true); // Внутренняя окружность

                                    xxx.fill();

                                    xxx.beginPath();
                                    xxx.fillStyle = "black";
                                    xxx.font = "14px serif";

                                    /*sentrovka texta*/
                                    var positiontext = 20;

                                    if((count_img > 9) && (count_img <= 99)){
                                        positiontext = 17;
                                    }else if((count_img > 99) && (count_img <= 999)){
                                        positiontext = 12;
                                    }else if((count_img > 999) && (count_img <= 9999)){
                                        positiontext = 7;
                                    }else if((count_img > 9999) && (count_img <= 99999)){
                                        positiontext = 3;
                                    }else if((count_img > 99999) && (count_img <= 10000000)){
                                        positiontext = 0;
                                    }
                                    xxx.fillText(count_img, positiontext, 30);
                                    /*sentrovka texta*/

                                    //generasiya kartinki

                                    //document.body.appendChild(vvv); //vstabka kartinki

                                    p_indecator_count.empty();      //ochistka diva

                                    p_indecator_count.append(vvv);  //vstabka kartinki

                                    p_indecator_count.show();       //pokaz kartinki

                                    //new manipulation

            }


            function getimage2(count){

              //new manipulation

                                   prevdivnumber.hide();  //skritie perednego div s nomerom
                                   //generasiya kartinki

                                    var vvv = document.createElement("CANVAS");

                                    vvv.setAttribute("width", "50");
                                    vvv.setAttribute("height", "50");

                                     var xxx = vvv.getContext('2d');

                                    xxx.beginPath();

                                    var imcolor = "#49EDF8";

                                    if(nominalnumber == "1"){
                                        imcolor = "#49EDF8";
                                    }else if(nominalnumber == "5"){
                                        imcolor = "#FFFB36";
                                    }else if(nominalnumber == "25"){
                                        imcolor = "#87EF12";
                                    }else if(nominalnumber == "50"){
                                        imcolor = "#0079EF";
                                    }else if(nominalnumber == "100"){
                                        imcolor = "#681830";
                                    }else if(nominalnumber == "500"){
                                        imcolor = "#FC4BCD";
                                    }else if(nominalnumber == "1000"){
                                        imcolor = "#FF0600";
                                    }


                                    p_indecator_count.attr("colorfx",imcolor);

                                    //podschet kolichestva nazhatii i stavok

                                   

                                   
                                   //podschet kolichestva nazhatii i stavok

                                    xxx.fillStyle = imcolor;
                                    xxx.arc(25,25,20,0,Math.PI*2,true); // Внешняя окружность

                                    xxx.fill();

                                    //xxx.moveTo(45,25);

                                    xxx.beginPath();

                                    xxx.fillStyle = "white";

                                    xxx.arc(25,25,14,0,Math.PI*2,true); // Внутренняя окружность

                                    xxx.fill();

                                    xxx.beginPath();
                                    xxx.fillStyle = "black";
                                    xxx.font = "14px serif";

                                    /*sentrovka texta*/

                                    var snum = count + "n";
                                   
                                    xxx.fillText(snum, 17, 30);
                                    /*sentrovka texta*/

                                    //generasiya kartinki

                                    //document.body.appendChild(vvv); //vstabka kartinki

                                    p_indecator_count.empty();      //ochistka diva

                                    p_indecator_count.append(vvv);  //vstabka kartinki

                                    p_indecator_count.show();       //pokaz kartinki

                                    //new manipulation

            }

            function getcount(){

                var gcount = arnumbercombinationcount[i];

                  gcount = (+gcount + +nominalnumber);

                  arnumbercombinationcount[i] = gcount;

                  console.log(arnumbercombinationcount);

            }

            function getcount2(){

                var gcount = arnumbersearchcombinationcount[g];

                  gcount = (+gcount + +nominalnumber);

                  arnumbersearchcombinationcount[g] = gcount;

                  console.log(arnumbersearchcombinationcount);

            }

            function getcount3(){

                var gcount = arnumbercombinationcount[m];

                  gcount = (+gcount + +nominalnumber);

                  arnumbercombinationcount[m] = gcount;

                  console.log(arnumbercombinationcount);

            }

            function stopnumbers(){

              for(var jj = 0;jj < noar.length;jj++){
                      if(x == noar[jj]){
                        console.log("нельзя вибирать одно и то же число.. выберите другое..");
                        //$("#fish_p").hide("1000");
                        $("#message2").text("нельзя вибирать одно и то же число.. выберите другое..").show("2000").delay("1500").hide("2000");
                        //$("#fish_p").delay("1500").show("1000");
                        stopnumbersvalue = 1;
                        return false;
                      }
                  }

                  for(var jp = 0;jp < notwoar.length;jp++){
                      if(x == notwoar[jp]){
                        console.log("нельзя вибирать одно и то же число.. выберите другое..");
                        //$("#fish_p").hide("1000");
                        $("#message2").text("нельзя вибирать одно и то же число.. выберите другое..").show("2000").delay("1500").hide("2000");
                        //$("#fish_p").delay("1500").show("1000");
                        stopnumbersvalue = 1;
                        return false;
                      }
                  }

                  for(var ja = 0;ja < nothreear.length;ja++){
                      if(x == nothreear[ja]){
                        console.log("нельзя вибирать одно и то же число.. выберите другое..");
                        //$("#fish_p").hide("1000");
                        $("#message2").text("нельзя вибирать одно и то же число.. выберите другое..").show("2000").delay("1500").hide("2000");
                        //$("#fish_p").delay("1500").show("1000");
                        stopnumbersvalue = 1;
                        return false;
                      }
                  }

                  for(var jd = 0;jd < nofar.length;jd++){
                      if(x == nofar[jd]){
                        console.log("нельзя вибирать одно и то же число.. выберите другое..");
                        //$("#fish_p").hide("1000");
                        $("#message2").text("Выберите номинал для соседних чисел..").show("2000").delay("1500").hide("2000");
                        //$("#fish_p").delay("1500").show("1000");
                        stopnumbersvalue = 1;
                        return false;
                      }
                  }

            }

            if(nominalnumber == 0){
                console.log("Выберите номинал..");
                
                //$("#fish_p").hide("1000");
                $("#message").text("Выберите номинал..").show("2000").delay("1500").hide("2000");
                //$("#fish_p").delay("1500").show("1000");


                return false;
            }

              /*chisla s sosedyami*/
            for(var m = 0;m < arnumbercombination.length;m++){

                      if(x == arnumbercombination[m]){              


            switch(x){

                            case 'no': 
                                  getcount3();
                                  getimage();
                                  fixsosed = 1;
                                  fixno = 1;
                                  
                                  if(fixno2 != 1){
                                    //$("#fish_p").hide("1000");
                                    $("#message2").text("Выберите номинал для соседних чисел..").show("2000").delay("1500").hide("2000");
                                    //$("#fish_p").delay("1500").show("1000");
                                  }

                              break;


                              case 'ntwo': 
                                  getcount3();
                                  getimage();
                                  fixsosed = 1;
                                  fixntwo = 1;

                                  if(fixntwo2 != 1){
                                    //$("#fish_p").hide("1000");
                                    $("#message2").text("Выберите номинал для соседних чисел..").show("2000").delay("1500").hide("2000");
                                    //$("#fish_p").delay("1500").show("1000");
                                  }
                                
                                
                                break;

                              case 'nthree': 
                                  getcount3();
                                  getimage();
                                  fixsosed = 1;
                                  fixnthree = 1;

                                  if(fixnthree2 != 1){
                                    //$("#fish_p").hide("1000");
                                    $("#message2").text("Выберите номинал для соседних чисел..").show("2000").delay("1500").hide("2000");
                                    //$("#fish_p").delay("1500").show("1000");
                                  }
                                  
                              
                              break;

                              case 'nf': 
                                  getcount3();
                                  getimage();
                                  fixsosed = 1;
                                  fixnfour = 1;

                                  if(fixnfour2 != 1){
                                    //$("#fish_p").hide("1000");
                                    $("#message2").text("Выберите номинал для соседних чисел..").show("2000").delay("1500").hide("2000");
                                    //$("#fish_p").delay("1500").show("1000");
                                  }
                                 
                              
                              break;
            }

          }}
          /*chisla s sosedyami*/

          if(fixsosed == 0){

            var stopnumbersvalue = 0;

                stopnumbers();

                if(stopnumbersvalue == 1){
                  return false;
                }

            for(var i = 0;i < arnumber.length;i++){

              if(x == arnumber[i]){                           /*prostie chisla*/
                  //z.css("border","5px solid white");
                  
                  var gcount = arnumbercount[i];

                  gcount = (+gcount + +nominalnumber);

                  arnumbercount[i] = gcount;

                  console.log(arnumbercount);

                  getimage();


              }

            }

            


            for(var i = 0;i < arnumbercombination.length;i++){

                      if(x == arnumbercombination[i]){              /*chisla s combinasiyami*/

                          switch(x){

                              case '1x12':  // if (x === 'value1')

                                  // for(var r = 1;r <= 12;r++){
                                  //     //$('[x = "'+ r + '"]').css("border","5px solid green");
                                  // }  
                                  getcount();
                                  getimage();

                                break;

                              case '2x12':
                                
                                // for(var e = 13;e <= 24;e++){
                                //       $('[x = "'+ e + '"]').css("border","5px solid green");
                                //   }  
                                  getcount();
                                 getimage();

                                break;

                              case '3x12': 

                                  // for(var w = 25;w <= 36;w++){
                                  //     $('[x = "'+ w + '"]').css("border","5px solid green");
                                  // }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case '1to18': 

                                  // for(var o = 1;o <= 18;o++){
                                  //     $('[x = "'+ o + '"]').css("border","5px solid green");
                                  // }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case 'even': 

                                  // for(var p = 1;p <= arnumber.length;p++){

                                  //     if(arnumber[p] % 2 == 0){
                                  //       $('[x = "'+ p + '"]').css("border","5px solid green");
                                  //     }

                                  //  }
                                  getcount();
                                  getimage();
                              
                              break;

                              case 'odd': 

                                  // for(var a = 1;a <= arnumber.length;a++){

                                  //     if(arnumber[a] % 2 == 1){
                                  //       $('[x = "'+ a + '"]').css("border","5px solid green");
                                  //     }

                                  //  }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case '19to36': 

                                  // for(var s = 19;s <= 36;s++){

                                  //       $('[x = "'+ s + '"]').css("border","5px solid green");

                                  //  }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case 'red': 

                                  // for(var d = 0;d <= red.length;d++){

                                  //       $('[x = "'+ red[d] + '"]').css("border","5px solid green");

                                  //  }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case 'black': 

                                  // for(var f = 0;f <= black.length;f++){

                                  //       $('[x = "'+ black[f] + '"]').css("border","5px solid green");

                                  //  }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case 'bs': 

                                  // for(var c = 0;c <= big_series.length;c++){

                                  //       $('[x = "'+ big_series[c] + '"]').css("border","5px solid green");

                                  //  }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case 'ss': 

                                  /*for(var l = 0;l <= s_s.length;l++){

                                        $('[x = "'+ s_s[l] + '"]').css("border","5px solid green");

                                   }  */
                                   getcount();
                                   getimage();
                              
                              break;


                              case 'orp': 

                                  // for(var v = 0;v <= orphans.length;v++){

                                  //       $('[x = "'+ orphans[v] + '"]').css("border","5px solid green");

                                  //  }  
                                  getcount();
                                  getimage();
                              
                              break;

                              case 'zs': 

                                  // for(var b = 0;b <= zero_spiel.length;b++){

                                  //       $('[x = "'+ zero_spiel[b] + '"]').css("border","5px solid green");

                                  //  }  
                                  getcount();
                                  getimage();
                              
                              break;



                              case '2k1-1': 

                                // for(var t = 0;t < ar2k1_1.length;t++){
                                //     $('[x = "'+ ar2k1_1[t] + '"]').css("border","5px solid green");
                                // }
                                  getcount();
                                  getimage();
                                
                                break;

                              case '2k1_2': 

                                // for(var y = 0;y < ar2k1_2.length;y++){
                                //     $('[x = "'+ ar2k1_2[y] + '"]').css("border","5px solid green");
                                // }
                                  getcount();
                                  getimage();
                                
                                break;

                              case '2k1_3': 

                                // for(var u = 0;u < ar2k1_3.length;u++){
                                //     $('[x = "'+ ar2k1_3[u] + '"]').css("border","5px solid green");
                                // }
                                  getcount();
                                  getimage();
                                
                                break;

                              

                              default:


                                    for(var g = 0;g < arnumbersearchcombination.length;g++){
                                        if(x == arnumbersearchcombination[g]){

                                              var revoar = arnumbersearchcombination[g].split('x');           /*chisla s x promezhutkom*/

                                             // for(var k = 0;k < revoar.length;k++){

                                                     // $('[x = "'+ revoar[k] + '"]').css("border","5px solid green");
                                                    //  prevdivnumber.hide();
                                                    // img.attr("src",nominal);                      /* url + "/1.png"*/
                                                    // var count_img = img.attr("count");
                                                    // count_img++;
                                                    // img.attr("count",count_img);
                                                    // p_indecator_count.text("x" + count_img);

                                             // }
                                                  getcount2();
                                                  getimage();

                                         }
                                     }


                            }   /*kones if*/



                          
                      }

                      

            }


          }   /*kones if glavnogo*/



          if(fixsosed == 1){
              
                      /*sosednie chisla*/
              for(var i = 0;i < arnumber.length;i++){

              if(x == arnumber[i]){     /*prostie chisla*/

                  var stopnumbersvalue = 0;

                  stopnumbers();

                  if(stopnumbersvalue == 1){
                    return false;
                  }

                  
                  

                 if((fixno == 1) && (fixno2 != 1)){
                    //z.css("border","2px solid white");
                    getimage2(1);
                    noar.push(arnumber[i]);
                    fixno = 0;
                    fixno2 = 1;
                    console.log(noar);
                 }else if((fixntwo == 1) && (fixntwo2 != 1)){
                    //z.css("border","2px solid white");
                    getimage2(2);
                    notwoar.push(arnumber[i]);
                    fixntwo = 0;
                    fixntwo2 = 1;
                    console.log(notwoar);
                 }else if((fixnthree == 1) && (fixnthree2 != 1)){
                   // z.css("border","2px solid white");
                    getimage2(3);
                    nothreear.push(arnumber[i]);
                    fixnthree = 0;
                    fixnthree2 = 1;
                    console.log(nothreear);
                 }else if((fixnfour == 1) && (fixnfour2 != 1)){
                    //z.css("border","2px solid white");
                    getimage2(4);
                    nofar.push(arnumber[i]);
                    fixnfour = 0;
                    fixnfour2 = 1;
                    console.log(nofar);
                 }else if((fixno2 == 1) || (fixntwo2 == 1) || (fixnthree2 == 1) || (fixnfour2 == 1)){
                      console.log("Ставка на выбранного соседа уже делалась..");
                      //$("#fish_p").hide("1000");
                      $("#message2").text("Ставка на выбранного соседа уже делалась..").show("2000").delay("1500").hide("2000");
                      //$("#fish_p").delay("1500").show("1000");
                 }

                 fixsosed = 0;

              }


            }

             
                      /*sosednie chisla*/

          }



          

    });
              /*podsvetka*/

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

        /*podsvetka*/

                        /*vibor i podsvetka fishek*/

        $(".fishki").hover(function(){


            var gretto = $(this);

           // gretto.css("width","90px");
           gretto.css("opacity","0.6");


        },function(){


            var gretto = $(this);

            //gretto.css("width","70px");
            gretto.css("opacity","1");


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

            
            nominalnumber = numb;

        });
             
            /*vibor i podsvetka fishek*/



            /*var vvv = document.getElementById('ggg');
     

                    if (vvv.getContext) {
                     var xxx = vvv.getContext('2d');

                    xxx.beginPath();

                    xxx.fillStyle = "#49EDF8";
                    xxx.arc(25,25,20,0,Math.PI*2,true); // Внешняя окружность

                    xxx.fill();

                    //xxx.moveTo(45,25);

                    xxx.beginPath();

                    xxx.fillStyle = "white";

                    xxx.arc(25,25,14,0,Math.PI*2,true); // Внутренняя окружность

                    xxx.fill();

                    xxx.beginPath();
                    xxx.fillStyle = "black";
                    xxx.font = "14px serif";

                    var snum = 1 + "s";

                    xxx.fillText(snum, 17, 30);

                    

                    

                    }*/




                    // var x = document.createElement("CANVAS");
                    // var ctx = x.getContext("2d");
                    // ctx.fillStyle = "#FF0000";
                    // ctx.fillRect(20, 20, 150, 100);
                    // document.body.appendChild(x);

                                /*X2 double*/

                    $(".n251").click(function(){

                        var betta = $(".y").children(".i");

                        betta.each(function(index,element){

                              var alpha = $(element);

                              var gamma = alpha.attr("count");

                              var summ = (+gamma * 2);

                              alpha.attr("count",summ);

                              console.log("удвоение выполнено");

                              

                        });


                        $(".y").each(function(index,element){

                              var h = $(element);

                              var a = h.children(".i");

                              var b = a.attr("count");

                              if(b != "0"){

                                    var p_indecator_count = h.children(".i");

                                    var prevdivnumber = h.children("div:not(.i)");


                                    //new manipulation

                                    prevdivnumber.hide();  //skritie perednego div s nomerom
                                   //generasiya kartinki

                                    var vvv = document.createElement("CANVAS");

                                    vvv.setAttribute("width", "50");
                                    vvv.setAttribute("height", "50");

                                    var xxx = vvv.getContext('2d');

                                    xxx.beginPath();

                                    var imcolor = p_indecator_count.attr("colorfx");

                                    //podschet kolichestva nazhatii i stavok

                                   var count_img = p_indecator_count.attr("count");

                                   //count_img = (+count_img + +nominalnumber);

                                   p_indecator_count.attr("count",count_img);

                                   //podschet kolichestva nazhatii i stavok

                                    xxx.fillStyle = imcolor;
                                    xxx.arc(25,25,20,0,Math.PI*2,true); // Внешняя окружность

                                    xxx.fill();

                                    //xxx.moveTo(45,25);

                                    xxx.beginPath();

                                    xxx.fillStyle = "white";

                                    xxx.arc(25,25,14,0,Math.PI*2,true); // Внутренняя окружность

                                    xxx.fill();

                                    xxx.beginPath();
                                    xxx.fillStyle = "black";
                                    xxx.font = "14px serif";

                                    /*sentrovka texta*/
                                    var positiontext = 20;

                                    if((count_img > 9) && (count_img <= 99)){
                                        positiontext = 17;
                                    }else if((count_img > 99) && (count_img <= 999)){
                                        positiontext = 12;
                                    }else if((count_img > 999) && (count_img <= 9999)){
                                        positiontext = 7;
                                    }else if((count_img > 9999) && (count_img <= 99999)){
                                        positiontext = 3;
                                    }else if((count_img > 99999) && (count_img <= 100000000)){
                                        positiontext = 0;
                                    }
                                    xxx.fillText(count_img, positiontext, 30);
                                    /*sentrovka texta*/

                                    //generasiya kartinki

                                    //document.body.appendChild(vvv); //vstabka kartinki

                                    p_indecator_count.empty();      //ochistka diva

                                    p_indecator_count.append(vvv);  //vstabka kartinki

                                    p_indecator_count.show();       //pokaz kartinki

                                    //new manipulation

            



                              }


                        });

                        /*udvoenie massivov*/

                        for(var i = 0;i < arnumbercount.length;i++){

                            if(arnumbercount[i] != 0){
                                arnumbercount[i] = arnumbercount[i] * 2;
                            }

                        }

                        for(var n = 0;n < arnumbercombinationcount.length;n++){

                            if(arnumbercombinationcount[n] != 0){
                                arnumbercombinationcount[n] = arnumbercombinationcount[n] * 2;
                            }

                        }

                        for(var nn = 0;nn < arnumbersearchcombinationcount.length;nn++){

                            if(arnumbersearchcombinationcount[nn] != 0){
                                arnumbersearchcombinationcount[nn] = arnumbersearchcombinationcount[nn] * 2;
                            }

                        }
                        /*udvoenie massivov*/

                        

                    });

                                        /*X2 double*/

                                        /*ochistka*/


                 $(".n252").click(function(){


                    $(".y").each(function(index,element){

                        var osn = $(element);

                        var div = osn.children("div:not(.i)");

                        var ii = osn.children(".i");

                        ii.attr("count","0");

                        ii.empty();

                        ii.hide();

                        div.show();

                        


                    });

                       for(var i = 0;i < arnumbercount.length;i++){
                            arnumbercount[i] = 0;
                        }

                        for(var j = 0;j < arnumbercombinationcount.length;j++){
                            arnumbercombinationcount[j] = 0;
                        }

                        for(var k = 0;k < arnumbersearchcombinationcount.length;k++){
                            arnumbersearchcombinationcount[k] = 0;
                        }


                        noar[0] = 0;
                        notwoar[0] = 0;
                        nothreear[0] = 0;
                        nofar[0] = 0;


                 });       



                 function cleanclient(){

                       $(".y").each(function(index,element){

                        var osn = $(element);

                        var div = osn.children("div:not(.i)");

                        var ii = osn.children(".i");

                        ii.attr("count","0");

                        ii.empty();

                        ii.hide();

                        div.show();

                        


                    });

                       for(var i = 0;i < arnumbercount.length;i++){
                            arnumbercount[i] = 0;
                        }

                        for(var j = 0;j < arnumbercombinationcount.length;j++){
                            arnumbercombinationcount[j] = 0;
                        }

                        for(var k = 0;k < arnumbersearchcombinationcount.length;k++){
                            arnumbersearchcombinationcount[k] = 0;
                        }


                        noar[0] = 0;
                        notwoar[0] = 0;
                        nothreear[0] = 0;
                        nofar[0] = 0;





                 }
                                        /*ochistka*/

                                        /*otpravka dannih test*/
                       var checkkoef = 0; //peremennaya kotoraya soobsh/bili li statvki

                 $("#rb").click(function(){

                    $(".st_pr").modal("show");


                    setTimeout(function(){

                        $(".st_pr").modal("hide");

                    },4000);

                    //return false;

                    for(var i = 0;i < arnumbercount.length;i++){
                          if(arnumbercount[i] != "0"){
                            checkkoef = 1;
                          }
                    }

                    for(var i = 0;i < arnumbercombinationcount.length;i++){
                          if(arnumbercombinationcount[i] != "0"){
                            checkkoef = 1;
                          }
                    }

                    for(var i = 0;i < arnumbersearchcombinationcount.length;i++){
                          if(arnumbersearchcombinationcount[i] != "0"){
                            checkkoef = 1;
                          }
                    }


                    if(checkkoef == 1){

                        /*sbor sosedei arrays*/   
                     obshiiars[0] = noar;
                     obshiiars[1] = notwoar;
                     obshiiars[2] = nothreear;
                     obshiiars[3] = nofar;
                        /*sbor sosedei arrays*/

                        /*dopolnitelnie usloviya*/

                        if((obshiiars[0][0] == undefined) || (obshiiars[0][0] == "-")){
                            obshiiars[0][0] = 0;
                        }

                        if((obshiiars[1][0] == undefined) || (obshiiars[1][0] == "-")){
                            obshiiars[1][0] = 0;
                        }

                        if((obshiiars[2][0] == undefined) || (obshiiars[2][0] == "-")){
                            obshiiars[2][0] = 0;
                        }

                        if((obshiiars[3][0] == undefined) || (obshiiars[3][0] == "-")){
                            obshiiars[3][0] = 0;
                        }
                        
                        /*dopolnitelnie usloviya*/

                        /*berem id*/

                        var id = $("#us").val();

                        /*berem id*/

                    sendArray[0] = arnumber;
                    sendArray[1] = arnumbercount;
                    sendArray[2] = arnumbercombination;
                    sendArray[3] = arnumbercombinationcount;
                    sendArray[4] = arnumbersearchcombination;         
                    sendArray[5] = arnumbersearchcombinationcount;
                    sendArray[6] = obshiiars;     /*sosedi*/
                    sendArray[7] = id;     /*sosedi*/

                    var url = $("#burl").val();

            
                  var o = {
                      "hid":"d",
                      "data":sendArray,
                      };

                   $.ajax({
                              "type":"POST",
                              "url":url,
                              
                              "datatype":"json html script",
                              "data":o,
                            
                              "success":kx,
                              "error":errorfunc
                        
                        });

                    function kx(result){

                      

                      if(result == "1"){
                        //cleanclient();
                        console.log("ставка сделана..");
                      }else{
                        console.log("ошибка занесения в бд..");
                      }
      
                                  }

                       function errorfunc(){
                          alert("oshibka zaprosa v koef");
                       }


                     }else{

                        console.log("данные пусты..");
                        return false;

                     }/*kones if*/


                 });      //kones click



                 function sendkoef(){

                       

                        //return false;

                        for(var i = 0;i < arnumbercount.length;i++){
                              if(arnumbercount[i] != "0"){
                                checkkoef = 1;
                              }
                        }

                        for(var i = 0;i < arnumbercombinationcount.length;i++){
                              if(arnumbercombinationcount[i] != "0"){
                                checkkoef = 1;
                              }
                        }

                        for(var i = 0;i < arnumbersearchcombinationcount.length;i++){
                              if(arnumbersearchcombinationcount[i] != "0"){
                                checkkoef = 1;
                              }
                        }


                        if((checkkoef == 1) && (send == 0)){

                            /*sbor sosedei arrays*/   
                         obshiiars[0] = noar;
                         obshiiars[1] = notwoar;
                         obshiiars[2] = nothreear;
                         obshiiars[3] = nofar;
                            /*sbor sosedei arrays*/

                            /*dopolnitelnie usloviya*/

                            if((obshiiars[0][0] == undefined) || (obshiiars[0][0] == "-")){
                                obshiiars[0][0] = 0;
                            }

                            if((obshiiars[1][0] == undefined) || (obshiiars[1][0] == "-")){
                                obshiiars[1][0] = 0;
                            }

                            if((obshiiars[2][0] == undefined) || (obshiiars[2][0] == "-")){
                                obshiiars[2][0] = 0;
                            }

                            if((obshiiars[3][0] == undefined) || (obshiiars[3][0] == "-")){
                                obshiiars[3][0] = 0;
                            }
                            
                            /*dopolnitelnie usloviya*/

                            /*berem id*/

                            var id = $("#us").val();

                            /*berem id*/

                        sendArray[0] = arnumber;
                        sendArray[1] = arnumbercount;
                        sendArray[2] = arnumbercombination;
                        sendArray[3] = arnumbercombinationcount;
                        sendArray[4] = arnumbersearchcombination;         
                        sendArray[5] = arnumbersearchcombinationcount;
                        sendArray[6] = obshiiars;     /*sosedi*/
                        sendArray[7] = id;     /*sosedi*/

                        var url = $("#burl").val();

                
                      var o = {
                          "hid":"d",
                          "data":sendArray,
                          };

                       $.ajax({
                                  "type":"POST",
                                  "url":url,
                                  
                                  "datatype":"json html script",
                                  "data":o,
                                
                                  "success":kx,
                                  "error":errorfunc
                            
                            });

                        function kx(result){

                          

                          if(result == "1"){
                            //cleanclient();
                            console.log("ставка сделана..");


                            $(".st_pr").modal("show");


                            setTimeout(function(){

                                $(".st_pr").modal("hide");

                            },4000);

                            send = 1;

                          }else{
                            console.log("ошибка занесения в бд..");
                          }
          
                                      }

                           function errorfunc(){
                              alert("oshibka zaprosa v koef");
                           }


                         }else{

                            console.log("данные пусты..");
                            return false;

                         }/*kones if*/


                 }

                 /*function blockclient*/

                 function blockclient(){

                    sendkoef();
                    $(".jjj").hide("3000");
                   // $(".roul").show("3000");
                    $("#butosn").hide();
                    $("#s_p").show();
                    checkutime = 1;

                 }

                 /*function blockclient*/

                 /*function unblock client*/

                 function ublockclient(){

                     $(".jjj").show("3000");
                    // $(".roul").hide("3000");
                     $("#butosn").show();
                     $("#s_p").hide();

                     utime = 60;
                     checkutime = 0;

                     getball();

                     send = 0;
                     

                 }

                 /*function unblock client*/

                 /*table button*/

                 // var mod = 0;

                 // $("#r_mod").click(function(){

                 //    if(mod == 0){

                 //       // alert(1);
                 //        mod = 1;
                 //        $(this).text("показать дилера");
                 //        $(".jjj").show("3000");
                 //        //$(".roul").hide("3000");

                 //    }else if(mod == 1){

                 //      //alert(2);
                 //      mod = 0;
                 //      $(".jjj").hide("3000");
                 //      //$(".roul").show("3000");
                 //      $(this).text("показать стол");

                 //    }


                 // });
                 /*table button*/

                 /*function timeout*/
                 var utime = 60;
                 var checkutime = 0;

                 function updatetime(){

                    if(checkutime == 0){
                      return false;
                    }

                    utime--;

                    $("#timeout").text(utime);

                    if(utime == 1){
                      utime = 60;
                    }

                    

                 }

                
                    setInterval(function(){
                          updatetime();
                      },1000);
                 /*function timeout*/

                 /*function getball*/

                 function getball(){

                          var ball = $("#ball").val();

                  
                      /*  var o = {
                            "hid":"d",
                            "data":sendArray,
                            };
                      */
                         $.ajax({
                                    "type":"POST",
                                    "url":ball,
                                    
                                    "datatype":"json html script",
                                    /*"data":o,*/
                                  
                                    "success":kx10,
                                    "error":errorfunc10
                              
                              });

                          function kx10(result10){

                                if(result10 != "0"){

                                var obj = jQuery.parseJSON(result10);

                                console.log(obj);

                                $("#balltracker").empty();

                                for(var i = 0;i < obj.length;i++){

                                    if(i == 1){

                                        $("#balltracker").append('<h3 id="g_ball" style="margin-left:20px;">' + obj[i] + '</h3>');

                                    }else{

                                        $("#balltracker").append('<h3 style="margin-left:20px;">' + obj[i] + '</h3>');
                                        console.log(obj[i]);

                                    }
                                    
                                }

                                

                               
                                }else{
                                    console.log("ошибка ball");
                                } /*kones if*/
            
                             }

                             function errorfunc10(){
                                alert("oshibka zaprosa v ball");
                             }

                 }



                 /*function getball*/



                 /*function getresult*/

                 function getresult(){

                      var g_r = $("#gresult").val();

                        var id = $("#us").val();
                        var or = {
                            "id":id,
                            };
                      
                         $.ajax({
                                    "type":"POST",
                                    "url":g_r,
                                    
                                    "datatype":"json html script",
                                    "data":or,
                                  
                                    "success":kx15,
                                    "error":errorfunc15
                              
                              });

                          function kx15(result15){

                              //console.log(result15);

                               var obj = jQuery.parseJSON(result15);

                              // console.log(obj[0]);

                                if(result15 != "2000"){
                                    var obj = jQuery.parseJSON(result15);

                                    if(checkkoef == 1){
                                       if(obj[1] == "1"){

                                              var win = $(".winmessage");

                                              win.modal("show");
                                              
                                              setTimeout(function(){

                                                  win.modal("hide");

                                              },4000);
                                              


                                              var arkoef = jQuery.parseJSON(obj[0]);

                                               // $success1[0] = $d0;    /*stavki prostih chisel  -- massivi ravni po dline*/
                                               // $success1[1] = $d1;    /*postavlennie summi*/
                                               // $success1[2] = $d1_status; /*status stavki*/
                                               // $success1[3] = $d1_money;  /*kolichestvo viigrannih deneg ishodya iz statusa*/
                                               // $success1[4] = $d1_name;  /*kolichestvo viigrannih deneg ishodya iz statusa*/


                                               // $success2[0] = $d2;    /*stavki kombinasii naprimer 1-12 i t.d  -- massivi ravni po dline*/
                                               // $success2[1] = $d3;    /*postavlennie summi*/
                                               // $success2[2] = $d3_status;     /*status stavki*/
                                               // $success2[3] = $d3_money;      /*kolichestvo viigrannih deneg ishodya iz statusa*/
                                               // $success2[4] = $d3_name;      /*kolichestvo viigrannih deneg ishodya iz statusa*/


                                               // $success3[0] = $d4;            stavki grupp chisel  -- massivi ravni po dline
                                               // $success3[1] = $d5;                /*postavlennie summi*/
                                               // $success3[2] = $d5_status;          /*status stavki*/
                                               // $success3[3] = $d5_money;              /*kolichestvo viigrannih deneg ishodya iz statusa*/
                                               // $success3[4] = $d5_name;              /*kolichestvo viigrannih deneg ishodya iz statusa*/
                                               
                                               // $sendarray[0] = $success1;         /*1 rascheti*/  
                                               // $sendarray[1] = $success2;          /*2 rascheti*/ 
                                               // $sendarray[2] = $success3;              /*3 rascheti*/ 
                                               // $sendarray[3] = $ostat;            /*ost*/
                                               // $sendarray[4] = $money_summ;           /*summa viigrisha*/
                                               // $sendarray[5] = $number;

                                              /* <div class="col-sm-12">
                                                  <div class="col-sm-10 col-sm-offset-2">
                                                    
                                                    <div class="col-sm-2">стрит</div>
                                                    <div class="col-sm-2">2500</div>
                                                    <div class="col-sm-2">10000</div>
                                                    <div class="col-sm-2">15</div>
                                                    <div class="col-sm-2">16.01.2017</div>

                                                  </div>
                                                </div>*/

                                              var static = $(".statictics");

                                              function setstatic(a,b,c,d,e){

                                                  var gmove = '<div class="col-sm-12"><div class="col-sm-10 col-sm-offset-2"> <div class="col-sm-2">' + a + 
                                                  '</div> <div class="col-sm-2">' + b + '</div> <div class="col-sm-2">' + c + '</div> <div class="col-sm-2">' + d + 
                                                  '</div> <div class="col-sm-2">' + e + '</div> </div> </div>';

                                                  static.append(gmove);

                                              }

                                               for(var k = 0;k < arkoef[0][0].length;k++){
                                                    if(arkoef[0][2][k] == "1"){

                                                      //console.log(arkoef[0][4][k] + " | " + arkoef[0][1][k] + " | " + arkoef[0][2][k] +  " | " + arkoef[0][3][k] +  " | " + arkoef[5] + "<br>");
                                                      setstatic(arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]);
                                                    }
                                               }

                                               for(var j = 0;j < arkoef[1][0].length;j++){
                                                    if(arkoef[1][2][j] == "1"){

                                                      //console.log(arkoef[1][4][j] + " | " + arkoef[1][1][j] + " | " + arkoef[1][2][j] +  " | " + arkoef[1][3][j] +  " | " + arkoef[5] + "<br>");
                                                      setstatic(arkoef[1][4][j],arkoef[1][1][j],arkoef[1][3][j],arkoef[5],obj[3]);
                                                    }
                                               }

                                               for(var h = 0;h < arkoef[2][0].length;h++){
                                                    if(arkoef[2][2][h] == "1"){

                                                      //console.log(arkoef[2][4][h] + " | " + arkoef[2][1][h] + " | " + arkoef[2][2][h] +  " | " + arkoef[2][3][h] +  " | " + arkoef[5] + "<br>");
                                                      setstatic(arkoef[2][4][h],arkoef[2][1][h],arkoef[2][3][h],arkoef[5],obj[3]);
                                                    }

                                               }


                                             // console.log(arkoef[0][0]);

                                            
                                       }else if(obj[1] == "0"){

                                            $(".game_over").modal("show");

                                            setTimeout(function(){
                                                
                                                $(".game_over").modal("hide");

                                            },4000);

                                       }

                                       checkkoef = 0;
                                       cleanclient();
                                    }

                                   
                                }
                                
            
                             }

                             function errorfunc15(){
                                alert("oshibka zaprosa v gr..");
                             }


                 }


                 /*proverka balansa*/


                function getbalans(){



                        var urlaa = $("#gbal").val();

                                
                                    /*  var o = {
                                          "hid":"d",
                                          "data":sendArray,
                                          };
                                    */
                                       $.ajax({
                                                  "type":"POST",
                                                  "url":urlaa,
                                                  
                                                  "datatype":"json html script",
                                                  /*"data":o,*/
                                                
                                                  "success":kx20,
                                                  "error":errorfunc20
                                            
                                            });

                                        function kx20(result){

                                              
                                              console.log(result);

                                              var t = "Баланс: " + result;
                                              $("#balans").text(t);
                                          
                          
                                                      }

                                           function errorfunc20(){
                                              alert("oshibka zaprosa v bs");
                                           }


                    }


                /*proverka balansa*/

                 /*function getresult*/


                                        /*otpravka dannih test*/

                function gamestatus(){

                    var urla = $("#status").val();

            
                /*  var o = {
                      "hid":"d",
                      "data":sendArray,
                      };
                */
                   $.ajax({
                              "type":"POST",
                              "url":urla,
                              
                              "datatype":"json html script",
                              /*"data":o,*/
                            
                              "success":kx5,
                              "error":errorfunc5
                        
                        });

                    function kx5(result9){

                          
                          console.log(result9);

                          if(result9 == "3"){

                             blockclient();

                          }else if(result9 == "1"){

                              ublockclient();
                              //getresult();

                          }else if(result9 == "0"){

                              //ublockclient();
                              getresult();

                          }
                      
      
                                  }

                       function errorfunc5(){
                          alert("oshibka zaprosa v status");
                       }

                } 



                setInterval(function(){
                      
                      gamestatus();
                      //getball();
                      //getresult();
                },1000);

                setInterval(function(){
                      getbalans();
                },5000);



                    



                /*function message modal*/

                


                 

                /*function message modal*/
                    

                /*upravlenie modalyami*/


                $("#mods").click(function(){


                  $(".st_pr").modal('toggle');
                 

                });
                /*upravlenie modalyami*/



                

                





               /*kuat button function*/





                                $("#l").click(function(){

                                       $("#bottom").show(500);
                                 //$("#l").hide(2000);
                                      document.getElementById('r').style.display='block';
                                      document.getElementById('l').style.display='none';
                                      //document.getElementById('bottom').style.height = '500px';
                                      //document.getElementById('bottom').style.display='block';


                                      });

                                $("#r").click(function(){


                                           //$("#l").show(2000);
                                     $("#bottom").hide(500);
                                    document.getElementById('r').style.display='none';
                                    document.getElementById('l').style.display='block';
                                    document.getElementById('bottom').style.height = '0px';
                                    //document.getElementById('bottom').style.display='none';



                                });

                                    
                           /*kuat button function*/     


});






