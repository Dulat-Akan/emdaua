<?php 
use yii\helpers\Url;

date_default_timezone_set("Asia/Almaty");


function checkcombination($check){

switch ($check) {
                case "corner":
                  return "CORNER";
                  break;

                  case "street":
                  return "STREET";
                  break;

                case "duzhina":
                  return "DOZEN";
                  break;
                case "kolonki":
                  return "COLUMN";
                  break;

                  case "mal_bol":
                  return "1-18,19-36";
                  break;

                  case "stright_up":
                  return "STRIGHT UP";
                  break;


                  case "even_odd":
                  return "EVEN ODD";
                  break;

                  case "black_red":
                  return "BLACK RED";
                  break;

                  case "no":
                  return "1 сосед";
                  break;

                  case "notwo":
                  return "2 соседа";
                  break;

                  case "nothree":
                  return "3 соседа";
                  break;

                  case "nofour":
                  return "4 соседа";
                  break;

                  case "split":
                  return "SPLIT";
                  break;

                  case "six_number":
                  return "SIX NUMBER";
                  break;

                  case "z_s":
                  return "ZERO SPIEL";
                  break;

                  case "orp":
                  return "ORPHANS";
                  break;

                  case "s_s":
                  return "SMALL SERIES";
                  break;
                  
                  case "b_s":
                  return "BIG SERIES";
                  break;

                
              }

      	}


      	function checkx($value){

      			$exp = explode("x", $value);
                    

                    if(count($exp) == 2){
                    	return "SPLIT";
                    }else if(count($exp) == 3){
                    	return "STREET";
                    }else if(count($exp) == 4){
                    	return "CORNER";
                    }else if(count($exp) == 6){
                    	return "SIX_NUMBER";
                    }


      	}


      	function checkbigcomb($value){

     		switch ($value) {
     			case '1to18':
     				# code...
     					return "1to18";
     				break;

     				case '19to36':
     				# code...
     					return "19to36";
     				break;

     				case 'red':
     				# code...
     					return "RED";
     				break;

     				case 'black':
     				# code...
     					return "BLACK";
     				break;

     				case 'even':
     				# code...
     					return "EVEN";
     				break;

     				case 'odd':
     					
     					return "ODD";

     				break;

     				case '1x12':
     					
     					return "1x12";

     				break;

     				case '2k1-1':
     					
     					return "2 TO 1";

     				break;

     				case '1k1-1':
     					
     					return "2 TO 1";

     				break;

     				case '3k1-1':
     					
     					return "2 TO 1";

     				break;
     			
     			default:
     				# code...
     				break;
     		}

      	}

 ?>


		<div class="col-md-12 col-sm-12 col-xs-12"  style="margin-bottom:10px;background-color: white;">
							
								
								<div class="col-md-4 col-md-offset-4 col-sm-3 col-sm-offset-5 col-xs-10 col-xs-offset-2"><h2 style="text-align: center;">GAME HISTORY</h2></div>
								
							
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12 nov"  style="margin-bottom:10px;background-color: white;display: none;">
							
								
								<div class="alert alert-danger" role="alert"><h2 style="text-align: center;">NO CASH!</h2></div>
								
							
						</div>






	<div class="container">
		<div class="row">
		
	

		

		<!-- Tab panes -->
	
	
		<div class="col-md-12 col-sm-12 col-xs-12">
		  <div  id="home">

		  		
		  	
					<table class="table table-bordered">

							<tr>
							    <td> GAME NO </td>
							    <td> DATE / TIME </td>
							    <td> INITIAL BALANCE </td>
							    <td> BET </td>
							    <td> WINNING NUMBER </td>
							    <td> COMBINATION </td>
							    <td> WIN </td>
							    <td> LAST BALANCE </td>
							    
							    
							    
							    
							  </tr>

																									
						<?php 



							$sumamount = 0;
							$sumwon = 0;
							$lossessum = 0;
							$totalbet = 0;

							$fixtime = 0;

							foreach ($result as $key) {
								
											$key['id'];
											$key['win_status'];
											$key['sum'];
											$key['time'];
											$unserial = unserialize($key['result_koef']);
											$unserial2 = unserialize($key['koef']);
									
							
											//print_r($unserial);

						?>
													
							
								<?php
										
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($i = 0;$i < count($unserial[0][0]);$i++){

												if($unserial[0][1][$i] != 0){


													//if($unserial[0][3][$i] == 0){
															$a_1 = "STRINGHT_UP";
													
													 
			                                                      $startingbalans = 0;

			                                                      
			                                                      if(isset($unserial[6])){ $startingbalans = $unserial[6];	}

			                                                     
			                                                     

			                                                      if($unserial[0][3][$i] > 0){
			                                                      		$sumamount += (int) $unserial[0][1][$i];
			                                                      		$sumwon += (int) $unserial[0][3][$i];
			                                                      	}else{
			                                                      		$lossessum += (int) $unserial[0][1][$i];
			                                                      	}

			                                                      $totalbet += $unserial[0][1][$i];


			                                                      
			                                                      $time = date("d.m.y H:i:s",$key['time']);
			                                                      //$time->setTimezone($timezone);

			                                                      if($fixtime % 2 == 0){

																	

			                                        		?>
											
														<tr class="info" rowspan="">

			                                        <?php               	
	                                                      }else{
	                                                   ?>
	                                                   <tr class="success">
	                                                   <?php 
	                                                     	 }
													  	?>   


							
									
									    <td><?php if(isset($unserial[7])){ echo $unserial[7];	}  ?> </td>
									    <td><?php echo $time; ?> </td>
									    <td><?php  echo $startingbalans;    ?></td>
									    <td><?php echo $unserial[0][1][$i]; ?></td>
									    <td><?php echo $unserial[5]; ?></td>
									    <td><?php echo $a_1." : ".$unserial[0][0][$i]; ?> </td>

										<?php if($unserial[0][3][$i] > 0){ ?>
									    <td style="color:green;"><b><?php echo $unserial[0][3][$i]; ?></b></td>
										<?php }else{ ?>
										<td><?php echo $unserial[0][3][$i]; ?></td>
										<?php } ?>

									    <td> <?php if(isset($unserial[8])){ echo $unserial[8];	} ?> </td>
									  </tr>


										
								<?php
									
									}
									}

								 ?>
								
								
							
								<?php
					
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($ii = 0;$ii < count($unserial[1][0]);$ii++){

												if($unserial[1][1][$ii] != 0){


													if($unserial[1][2][$ii] == 1){
														$a_2 = checkcombination($unserial[1][4][$ii]);
													}else{
														$a_2 = checkbigcomb($unserial[1][0][$ii]);
													}
													

			                                                  


                              									  $startingbalans2 = 0;
			                                                      if(isset($unserial[6])){ $startingbalans2 = $unserial[6];	}

			                                                 
			                                                     

			                                                      if($unserial[1][3][$ii] > 0){
			                                                      		$sumamount += $unserial[1][1][$ii];
			                                                      		$sumwon += $unserial[1][3][$ii];
			                                                      }else{
			                                                      	$lossessum += $unserial[1][1][$ii];
			                                                      }

			                                                      $totalbet += $unserial[1][1][$ii];

								               if($fixtime % 2 == 0){

			                                        		?>
											
														<tr class="info">

			                                        <?php               	
	                                                      }else{
	                                                   ?>
	                                                   <tr class="success">
	                                                   <?php 
	                                                     	 }
													  	?> 

											<td><?php if(isset($unserial[7])){ echo $unserial[7];	}  ?> </td>
											<td><?php echo date("d.m.y H:i:s",$key['time']); ?> </td>
											<td><?php  echo $startingbalans2;  ?></td>
											<td><?php echo $unserial[1][1][$ii]; ?></td>
											<td><?php echo $unserial[5]; ?></td>
											<td><?php echo $a_2." : ".$unserial[1][0][$ii]; ?></td>


											<?php if($unserial[1][3][$ii] > 0){ ?>
									    <td style="color:green;"><b><?php echo $unserial[1][3][$ii]; ?></b></td>
										<?php }else{ ?>
										<td><?php echo $unserial[1][3][$ii]; ?></td>
										<?php } ?>




											<td> <?php if(isset($unserial[8])){ echo $unserial[8];	} ?> </td>
										</tr>
									
								
									

								<?php
									}
									}

								 ?>
								





							
								<?php
					
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($iii = 0;$iii < count($unserial[2][0]);$iii++){

												if($unserial[2][1][$iii] != 0){


													if($unserial[2][2][$iii] == 1){
														$a_3 = checkcombination($unserial[2][4][$iii]);
														
													}else{
														$a_3 = checkx($unserial[2][0][$iii]);
													}
													

			                                                    

                              									  $startingbalans3 = 0;
			                                                      if(isset($unserial[6])){ $startingbalans3 = $unserial[6];	}

			                                               

			                                                      if($unserial[2][3][$iii] > 0){
			                                                      		$sumamount += $unserial[2][1][$iii];
			                                                      		$sumwon += $unserial[2][3][$iii];
			                                                      }else{
			                                                      		$lossessum += $unserial[2][1][$iii];
			                                                      }

			                                                      $totalbet += $unserial[2][1][$iii];

								               if($fixtime % 2 == 0){

			                                        		?>
											
														<tr class="info">

			                                        <?php               	
	                                                      }else{
	                                                   ?>
	                                                   <tr class="success">
	                                                   <?php 
	                                                     	 }
													  	?> 
											<td><?php if(isset($unserial[7])){ echo $unserial[7];	}  ?> </td>
											<td><?php echo date("d.m.y H:i:s",$key['time']); ?> </td>
											<td><?php  echo $startingbalans3;  ?></td>
											<td><?php echo $unserial[2][1][$iii]; ?></td>
											<td><?php echo $unserial[5]; ?></td>
											<td><?php echo $a_3." : ".$unserial[2][0][$iii]; ?></td>



											

											<?php if($unserial[2][3][$iii] > 0){ ?>
										    <td style="color:green;"><b><?php echo $unserial[2][3][$iii]; ?></b></td>
											<?php }else{ ?>
											<td><?php echo $unserial[2][3][$iii]; ?></td>
											<?php } ?>




											<td> <?php if(isset($unserial[8])){ echo $unserial[8];	} ?> </td>
										</tr>
									



								<?php


									}
									}

								 ?>
								



							<?php
									$fixtime += 1;


									}

									
									$resultt = $sumwon - $lossessum;

									$novalid = 0;

								

							 ?>
								<tr>
							 		<td colspan="3" style="text-align: center;"> TOTAL </td>
									
									<td> <?php echo $totalbet; ?> </td>
									<td> </td>
									<td>  </td>
									<td> <?php echo $sumwon; ?> </td>
									<td>  </td>
								</tr>
								
								<tr>
									<td colspan="3" style="text-align: center;" > TOTAL LOSE SUM </td>
									<td>  <?php echo $lossessum; ?></td>
									<td>  </td>
									<td> TOTAL WIN - LOSE</td>
									<td>  <?php echo $resultt; ?></td>
									<td> <?php if($novalid == 1){
										echo "NO CASH! ";
										} ?></td>
								</tr>
					</table>


		  </div>

		  				<div class="cash" x="<?php echo $novalid; ?>"></div>



		  <!-- profile -->
	
		  </div>
							</div>
		</div>


	
										
		<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>								
<script>

		// setTimeout(function(){

		// 		var num = $(".cash").attr("x");

		// 		if(Number(num) == 1){
		// 				$(".nov").show();
		// 		}


		// },2000);

		
		




		$('#w').click(function (e) {
			e.preventDefault()
			$("#home").show();
			$("#profile").hide();

			$(".w").addClass("active");
			$(".d").removeClass("active");
			console.log(1);
		});

		$('#d').click(function (e) {
			e.preventDefault()

			$("#home").hide();
			$("#profile").show();
			$(".d").addClass("active");
			$(".w").removeClass("active");

			console.log(2);
		});
</script>				







					
<!-- +77714138261 -->

		


			

			



<!-- $unserial = unserialize($key['result_koef']);

                        $json_array =  json_encode($unserial);

                        $t[0] = $json_array;
                        $t[1] = $key['win_status'];
                        $t[2] = $key['sum'];
                        $t[3] = $key['time'];

                        $enc = json_encode($t); -->
 										  <!-- // $success1[0] = $d0;    /*stavki prostih chisel   massivi ravni po dline*/
                                               // $success1[1] = $d1;    /*postavlennie summi*/
                                               // $success1[2] = $d1_status; /*status stavki*/
                                               // $success1[3] = $d1_money;  /*kolichestvo viigrannih deneg ishodya iz statusa*/
                                               // $success1[4] = $d1_name;  /*kolichestvo viigrannih deneg ishodya iz statusa*/
 
 
                                               // $success2[0] = $d2;    /*stavki kombinasii naprimer 1-12 i t.d   massivi ravni po dline*/
                                               // $success2[1] = $d3;    /*postavlennie summi*/
                                               // $success2[2] = $d3_status;     /*status stavki*/
                                               // $success2[3] = $d3_money;      /*kolichestvo viigrannih deneg ishodya iz statusa*/
                                               // $success2[4] = $d3_name;      /*kolichestvo viigrannih deneg ishodya iz statusa*/
 
 
                                               // $success3[0] = $d4;            stavki grupp chisel  massivi ravni po dline
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
 
                                              /* <div class="col-xs-12">
                                                  <div class="col-xs-10 col-xs-offset-2">
                                                    
                                                    <div class="col-xs-2">стрит</div>
                                                    <div class="col-xs-2">2500</div>
                                                    <div class="col-xs-2">10000</div>
                                                    <div class="col-xs-2">15</div>
                                                    <div class="col-xs-2">16.01.2017</div>
 
                                                  </div>
                                                </div>*/ -->