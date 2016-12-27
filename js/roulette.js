$(document).ready(function(){


  var arnumber = [0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36];

  var arnumbercombination = ["1x12","2x12","3x12","race","3x2x1","3x6x2x51x4","6x5x4","6x9x5x8x4x7","9x8x7","9x12x8x11x7x10","12x11x10","12x15x11x14x10x13","15x14x13",
  "15x18x14x17x13x16","18x17x16","18x21x17x20x16x19","21x20x19","21x24x20x23x19x22","24x23x22","24x27x23x26x22x25","27x26x25","27x30x26x29x25x28","30x29x28","30x33x29x32x28x310",
  "33x32x31","33x36x32x35x31x34","36x35x34","x3x6","6x9","9x12","12x15","15x18"];

  var arnumbersearchcombination = [];

    $(".y").click(function(){

            var z = $(this);

            

            var x = $(this).attr("x");

            for(var i = 0;i < arnumber.length;i++){

              if(x == arnumber[i]){
                  z.css("border","5px solid blue");
              }

            }






          console.log(x);

    });
             




             

});


