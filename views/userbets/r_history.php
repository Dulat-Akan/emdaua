<?php 
use yii\helpers\Url;

 ?>


		<div class="col-md-12 col-sm-12 col-xs-12"  style="margin-bottom:10px;background-color: white;">
							
								
								<div class="col-md-4 col-md-offset-5 col-sm-3 col-sm-offset-5 col-xs-10 col-xs-offset-2"><h2>ACCOUNT HISTORY</h2></div>
								
							
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
							    <td> id </td>
							    <td> combination </td>
							    <td> assigned amount </td>
							    <td> won </td>
							    <td> ball number </td>
							    <td> date </td>
							  </tr>

																									
						<?php 

							foreach ($result as $key) {
								
											$key['id'];
											$key['win_status'];
											$key['sum'];
											$key['time'];
											$unserial = unserialize($key['result_koef']);
											$unserial2 = unserialize($key['koef']);
											$unserial2 = unserialize($key['koef']);
							
											//print_r($unserial);

						?>
						
							
								<?php
					
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($i = 0;$i < count($unserial[0][0]);$i++){

												if($unserial[0][2][$i] == 1){


													 $a_1 = "";

			                                                  switch ($unserial[0][4][$i]) {
			                                                                                                                case "corner":
			                                                          $a_1 = "CORNER";
			                                                          break;

			                                                          case "street":
			                                                          $a_1 = "STREET";
			                                                          break;

			                                                        case "duzhina":
			                                                          $a_1 = "DOZEN";
			                                                          break;
			                                                        case "kolonki":
			                                                          $a_1 = "COLUMN";
			                                                          break;

			                                                          case "mal_bol":
			                                                          $a_1 = "1-18,19-36";
			                                                          break;

			                                                          case "stright_up":
			                                                          $a_1 = "STRIGHT UP";
			                                                          break;


			                                                          case "even_odd":
			                                                          $a_1 = "EVEN ODD";
			                                                          break;

			                                                          case "black_red":
			                                                          $a_1 = "BLACK RED";
			                                                          break;

			                                                          case "no":
			                                                          $a_1 = "1 сосед";
			                                                          break;

			                                                          case "notwo":
			                                                          $a_1 = "2 соседа";
			                                                          break;

			                                                          case "nothree":
			                                                          $a_1 = "3 соседа";
			                                                          break;

			                                                          case "nofour":
			                                                          $a_1 = "4 соседа";
			                                                          break;

			                                                          case "split":
			                                                          $a_1 = "SPLIT";
			                                                          break;

			                                                          case "six_number":
			                                                          $a_1 = "SIX NUMBER";
			                                                          break;

			                                                          case "z_s":
			                                                          $a_1 = "ZERO SPIEL";
			                                                          break;

			                                                          case "orp":
			                                                          $a_1 = "ORPHANS";
			                                                          break;

			                                                          case "s_s":
			                                                          $a_1 = "SMALL SERIES";
			                                                          break;
			                                                          
			                                                          case "b_s":
			                                                          $a_1 = "BIG SERIES";
			                                                          break;

			                                                        
			                                                      }
								?>
							
									<tr>
									    <td> <?php echo $key['id']; ?> </td>
									    <td> <?php echo $a_1; ?> </td>
									    <td> <?php echo $unserial[0][1][$i]; ?> </td>
									    <td> <?php echo $unserial[0][3][$i]; ?> </td>
									    <td> <?php echo $unserial[5]; ?></td>
									    <td> <?php echo date("d.m.y H:i:s",$key['time']); ?> </td>
									  </tr>

										
										
										

							
									
										


									
											

							
									
											 


										
								<?php
									}
									}

								 ?>
								
									

							







							
								<?php
					
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($i = 0;$i < count($unserial[1][0]);$i++){

												if($unserial[1][2][$i] == 1){


													$a_2 = "";

			                                                  switch ($unserial[1][4][$i]) {
			                                                          case "corner":
			                                                          $a_2 = "CORNER";
			                                                          break;

			                                                          case "street":
			                                                          $a_2 = "STREET";
			                                                          break;

			                                                        case "duzhina":
			                                                          $a_2 = "DOZEN";
			                                                          break;
			                                                        case "kolonki":
			                                                          $a_2 = "COLUMN";
			                                                          break;

			                                                          case "mal_bol":
			                                                          $a_2 = "1-18,19-36";
			                                                          break;

			                                                          case "stright_up":
			                                                          $a_2 = "STRIGHT UP";
			                                                          break;


			                                                          case "even_odd":
			                                                          $a_2 = "EVEN ODD";
			                                                          break;

			                                                          case "black_red":
			                                                          $a_2 = "BLACK RED";
			                                                          break;

			                                                          case "no":
			                                                          $a_2 = "1 сосед";
			                                                          break;

			                                                          case "notwo":
			                                                          $a_2 = "2 соседа";
			                                                          break;

			                                                          case "nothree":
			                                                          $a_2 = "3 соседа";
			                                                          break;

			                                                          case "nofour":
			                                                          $a_2 = "4 соседа";
			                                                          break;

			                                                          case "split":
			                                                          $a_2 = "SPLIT";
			                                                          break;

			                                                          case "six_number":
			                                                          $a_2 = "SIX NUMBER";
			                                                          break;

			                                                          case "z_s":
			                                                          $a_2 = "ZERO SPIEL";
			                                                          break;

			                                                          case "orp":
			                                                          $a_2 = "ORPHANS";
			                                                          break;

			                                                          case "s_s":
			                                                          $a_2 = "SMALL SERIES";
			                                                          break;
			                                                          
			                                                          case "b_s":
			                                                          $a_2 = "BIG SERIES";
			                                                          break;

			                                                        
			                                                      }
								?>
										

										<tr>
										    <td> <?php echo $key['id']; ?> </td>
										    <td> <?php echo $a_2; ?> </td>
										    <td> <?php echo $unserial[1][1][$i]; ?> </td>
										    <td> <?php echo $unserial[1][3][$i]; ?> </td>
										    <td> <?php echo $unserial[5]; ?></td>
										    <td> <?php echo date("d.m.y H:i:s",$key['time']); ?> </td>
									  </tr>
									
								
									

								<?php
									}
									}

								 ?>
								





							
								<?php
					
											/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
											for($i = 0;$i < count($unserial[2][0]);$i++){

												if($unserial[2][2][$i] == 1){


													$a_3 = "";

			                                                  switch ($unserial[2][4][$i]) {
			                                                                                                                case "corner":
			                                                          $a_3 = "CORNER";
			                                                          break;

			                                                          case "street":
			                                                          $a_3 = "STREET";
			                                                          break;

			                                                        case "duzhina":
			                                                          $a_3 = "DOZEN";
			                                                          break;
			                                                        case "kolonki":
			                                                          $a_3 = "COLUMN";
			                                                          break;

			                                                          case "mal_bol":
			                                                          $a_3 = "1-18,19-36";
			                                                          break;

			                                                          case "stright_up":
			                                                          $a_3 = "STRIGHT UP";
			                                                          break;


			                                                          case "even_odd":
			                                                          $a_3 = "EVEN ODD";
			                                                          break;

			                                                          case "black_red":
			                                                          $a_3 = "BLACK RED";
			                                                          break;

			                                                          case "no":
			                                                          $a_3 = "1 сосед";
			                                                          break;

			                                                          case "notwo":
			                                                          $a_3 = "2 соседа";
			                                                          break;

			                                                          case "nothree":
			                                                          $a_3 = "3 соседа";
			                                                          break;

			                                                          case "nofour":
			                                                          $a_3 = "4 соседа";
			                                                          break;

			                                                          case "split":
			                                                          $a_3 = "SPLIT";
			                                                          break;

			                                                          case "six_number":
			                                                          $a_3 = "SIX NUMBER";
			                                                          break;

			                                                          case "z_s":
			                                                          $a_3 = "ZERO SPIEL";
			                                                          break;

			                                                          case "orp":
			                                                          $a_3 = "ORPHANS";
			                                                          break;

			                                                          case "s_s":
			                                                          $a_3 = "SMALL SERIES";
			                                                          break;
			                                                          
			                                                          case "b_s":
			                                                          $a_3 = "BIG SERIES";
			                                                          break;
			                                                        
			                                                      }
								?>
						
									<tr>
										    <td> <?php echo $key['id']; ?> </td>
										    <td> <?php echo $a_3; ?> </td>
										    <td> <?php echo $unserial[2][1][$i]; ?> </td>
										    <td> <?php echo $unserial[2][3][$i]; ?> </td>
										    <td> <?php echo $unserial[5]; ?></td>
										    <td> <?php echo date("d.m.y H:i:s",$key['time']); ?> </td>
									  </tr>
									



								<?php
									}
									}

								 ?>
								



							<?php

									}


							 ?>

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

												foreach ($result as $key2) {
							
										$id2 = $key2['id'];
										$winstatus = $key2['win_status'];
										
										$timest = $key2['time'];
										$unserial4 = unserialize($key2['koef']);
										$unserial3 = unserialize($key2['result_koef']);
										

										if($winstatus == 0){

											for($y = 0;$y < count($unserial4[1]);$y++){


												if($unserial4[1][$y] != 0){


										 ?>
												 


										
												  <tr>
												    <td><?php echo $id2; ?> </td>
												    <td><?php echo $unserial4[0][$y]; ?> </td>
												    <td> <?php echo $unserial4[1][$y];  ?></td>
												    <td> <?php echo $unserial3[5];  ?></td>
												    <td> <?php echo date("d.m.y H:i:s",$timest);  ?></td>
												  </tr>

												  
												

												<?php 

												}

												}

												$u = 0;
												if($unserial4[2][$y] == "2k1-1"){
													$u = "COLUMN TOP ROW";
												}else if($unserial4[2][$y] == "2k1-2"){
													$u = "COLUMN AVERAGE ROW";
												}else if($unserial4[2][$y] == "2k1-3"){
													$u = "COLUMN LOWER ROW";
												}else{
													$u = $unserial4[2][$y];
												}

												for($yx = 0;$yx < count($unserial4[3]);$yx++){


												if($unserial4[3][$yx] != 0){


										 ?>
												 


										
												  <tr>
												    <td><?php echo $id2; ?> </td>
												    <td><?php echo $u; ?> </td>
												    <td> <?php echo $unserial4[3][$yx];  ?></td>
												    <td> <?php echo $unserial3[5];  ?></td>
												    <td> <?php echo date("d.m.y H:i:s",$timest);  ?></td>
												  </tr>

												  
												

												<?php 

												}

												}

											}




											for($yxx = 0;$yxx < count($unserial4[5]);$yxx++){


												if($unserial4[5][$yxx] != 0){

													$newcomb = explode("x",$unserial4[4][$yxx]);

													$ix = "";

													if(count($newcomb) == 2){
														$ix = "SPLIT ".$unserial4[4][$yxx];
													}else if(count($newcomb) == 3){
														$ix = "STREET ".$unserial4[4][$yxx];
													}else if(count($newcomb) == 4){
														$ix = "CORNER ".$unserial4[4][$yxx];
													}else if(count($newcomb) == 6){
														$ix = "SIX LINE ".$unserial4[4][$yxx];
													}else{
														$ix = $unserial4[4][$yxx];
													}

										 ?>
												 
													

										
												  <tr>
												    <td><?php echo $id2; ?> </td>
												    <td><?php echo $ix; ?> </td>
												    <td> <?php echo $unserial4[5][$yxx];  ?></td>
												    <td> <?php echo $unserial3[5];  ?></td>
												    <td> <?php echo date("d.m.y H:i:s",$timest);  ?></td>
												  </tr>

												  
												

												<?php 

												}

												}

											

													}

												 ?>

												 </table>



		  </div>
		  </div>
							</div>
		</div>
										
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