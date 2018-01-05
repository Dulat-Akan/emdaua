<?php 
use yii\helpers\Url;

date_default_timezone_set("Asia/Almaty");

function checkcombination($check){

switch ($check) {
                case "corner":
                  return $a_1 = "CORNER";
                  break;

                  case "street":
                  return $a_1 = "STREET";
                  break;

                case "duzhina":
                  return $a_1 = "DOZEN";
                  break;
                case "kolonki":
                  return $a_1 = "COLUMN";
                  break;

                  case "mal_bol":
                  return $a_1 = "1-18,19-36";
                  break;

                  case "stright_up":
                  return $a_1 = "STRIGHT UP";
                  break;


                  case "even_odd":
                  return $a_1 = "EVEN ODD";
                  break;

                  case "black_red":
                  return $a_1 = "BLACK RED";
                  break;

                  case "no":
                  return $a_1 = "1 сосед";
                  break;

                  case "notwo":
                  return $a_1 = "2 соседа";
                  break;

                  case "nothree":
                  return $a_1 = "3 соседа";
                  break;

                  case "nofour":
                  return $a_1 = "4 соседа";
                  break;

                  case "split":
                  return $a_1 = "SPLIT";
                  break;

                  case "six_number":
                  return $a_1 = "SIX NUMBER";
                  break;

                  case "z_s":
                  return $a_1 = "ZERO SPIEL";
                  break;

                  case "orp":
                  return $a_1 = "ORPHANS";
                  break;

                  case "s_s":
                  return $a_1 = "SMALL SERIES";
                  break;
                  
                  case "b_s":
                  return $a_1 = "BIG SERIES";
                  break;

                
              }

      	}

 ?>


		<div class="col-md-12 col-sm-12 col-xs-12"  style="margin-bottom:10px;background-color: white;">
							
								
								<div class="col-md-4 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-10 col-xs-offset-2"><h2>ACCOUNT HISTORY</h2></div>
								
							
						</div>

						<div class="col-md-12 col-sm-12 col-xs-12 nov"  style="margin-bottom:10px;background-color: white;display: none;">
							
								
								<div class="alert alert-danger" role="alert"><h2 style="text-align: center;">Внимание этот аккаунт не валиден!</h2></div>
								
							
						</div>






	<div class="container">
		<div class="row">
		
		<div style="padding: 5px;" class="col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-9 col-xs-offset-3">
			
			<ul class="nav nav-tabs">
			  <li class="w active"><a id="w">Won bets</a></li>
			  <li class="d"><a  id="d">LOSSES</a></li>
			</ul>

		</div>

		

		<!-- Tab panes -->
	
	
		<div class="col-md-12 col-sm-12 col-xs-12">
		  <div  id="home">

		  			<div style="padding: 5px;" class="col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-9 col-xs-offset-3"><h3>WON BETS</h3></div>
		  	
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


													 $a_1 = checkcombination($unserial[0][4][$i]);

			                                                  

			                                                      $sumamount += (int) $unserial[0][1][$i];
			                                                      $sumwon += (int) $unserial[0][3][$i];

			                                                      $startingbalans = 0;

			                                                      
			                                                      if(isset($unserial[6])){ $startingbalans = $unserial[6];	}

			                                                      $result = 0;
			                                                      if($unserial[0][3][$i] == 0){

			                                                      		$result = $startingbalans - $unserial[0][1][$i];

			                                                      }else{
			                                                      		$result = $startingbalans + $unserial[0][3][$i];
			                                                      }



			                                                      
			                                                      $time = date("d.m.y H:i:s",$key['time']);
			                                                      //$time->setTimezone($timezone);

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
									    <td><?php echo $time; ?> </td>
									    <td><?php  echo $startingbalans;  ?></td>
									    <td><?php echo $unserial[0][1][$i]; ?></td>
									    <td><?php echo $unserial[5]; ?></td>
									    <td><?php echo $a_1; ?></td>
									    <td><?php echo $unserial[0][3][$i]; ?></td>
									    <td> <?php echo $result; ?> </td>
									  </tr>


										
								<?php
									}
									}

								 ?>
								
								
							
								<?php
					
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($i = 0;$i < count($unserial[1][0]);$i++){

												if($unserial[1][1][$i] != 0){


													$a_2 = checkcombination($unserial[1][4][$i]);

			                                                  


			                                                      $sumamount += (int) $unserial[1][1][$i];
                              									  $sumwon += (int) $unserial[1][3][$i];

                              									  $startingbalans2 = 0;
			                                                      if(isset($unserial[6])){ $startingbalans2 = $unserial[6];	}

			                                                      $result2 = 0;
			                                                      if($unserial[1][3][$i] == 0){

			                                                      		$result2 = $startingbalans2 - $unserial[1][1][$i];

			                                                      }else{
			                                                      		$result2 = $startingbalans2 + $unserial[1][3][$i];
			                                                      }
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
											<td><?php echo $unserial[1][1][$i]; ?></td>
											<td><?php echo $unserial[5]; ?></td>
											<td><?php echo $a_2; ?></td>
											<td><?php echo $unserial[1][3][$i]; ?></td>
											<td> <?php echo $result2; ?> </td>
										</tr>
									
								
									

								<?php
									}
									}

								 ?>
								





							
								<?php
					
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($i = 0;$i < count($unserial[2][0]);$i++){

												if($unserial[2][1][$i] != 0){


													$a_3 = checkcombination($unserial[2][4][$i]);

			                                                      $sumamount += (int) $unserial[2][1][$i];
                              									  $sumwon += (int) $unserial[2][3][$i];

                              									  $startingbalans3 = 0;
			                                                      if(isset($unserial[6])){ $startingbalans3 = $unserial[6];	}

			                                                      $result3 = 0;

			                                                      if($unserial[2][3][$i] == 0){

			                                                      		$result3 = $startingbalans3 - $unserial[2][1][$i];

			                                                      }else{
			                                                      		$result3 = $startingbalans3 + $unserial[2][3][$i];
			                                                      }
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
											<td><?php echo $unserial[2][1][$i]; ?></td>
											<td><?php echo $unserial[5]; ?></td>
											<td><?php echo $a_3; ?></td>
											<td><?php echo $unserial[2][3][$i]; ?></td>
											<td> <?php echo $result3; ?> </td>
										</tr>
									



								<?php
									}
									}

								 ?>
								



							<?php
									$fixtime += 1;

									}

									$resultneiro = $sumamount + $sumwon;


							 ?>

							 		<tr>
									    <td></td>
									    <td><b>TOTAL WIN AGP</b></td>
									    <td> <b><?php echo $sumamount; ?></b> </td>
									    <td> <b><?php echo $sumwon; ?></b> </td>
									    
									  </tr>

					</table>


		  </div>



		  <!-- profile -->
		  <div style="display: none;" id="profile">

		  			
		  				<div style="padding: 5px;" class="col-md-3 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-9 col-xs-offset-3"><h3 style="padding: 5px;" >LOSSES</h3></div>

		  			
		  			<table class="table table-bordered">

										 		  <tr>
												    <td> id </td>
												    <td> combination </td>
												    <td> sum </td>
												    <td> ball number </td>
												    <td> date </td>
												  </tr>

										<?php 

												$lossessum = 0;

								

													$resultneiro = (int) $resultneiro + (int) $balance;

												 ?>

												 <tr>
												    <td></td>
												    <td><b>TOTAL LOSES AGP</b> </td>
												    <td> <b><?php echo $lossessum; ?></b> </td>
												    <td> </td>
												    <td> </td>
												  </tr>

												 </table>
	
	

		  </div>
		  </div>
							</div>
		</div>


		<?php 

			//echo $resultneiro." | ".$lossessum;

			if((int) $resultneiro < (int) $lossessum){

				
					
		?>
			
			

			<script>
				
				setTimeout(function(){

					$(".nov").show();

				},2000);
			</script>

		<?php 

				}

		 ?>
										
		<script type="text/javascript" src="<?php echo Url::to('@jquery') ?>/jquery-1.11.1.min.js"></script>								
<script>


		




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