<div class="container" style="margin-top:60px;">
	<div class="row">

		<div class="col-xs-12"  style="margin-bottom:10px;background-color: white;">
							<div class="col-xs-12">
								
								<div class="col-xs-4 col-xs-offset-4"><h2>История ставок</h2></div>
								
								

							</div>
						</div>



						<div class="col-xs-12"  style="">
							<div class="col-xs-11 col-xs-offset-1">
								
								<div class="col-xs-2"><h4>комбинация</h4></div>
								<div class="col-xs-2"><h4>поставлено</h4></div>
								<div class="col-xs-2"><h4>выиграно</h4></div>
								<div class="col-xs-2"><h4>№ шара</h4></div>
								<div class="col-xs-2"><h4>дата</h4></div>

							</div>
						</div>


		<div class="col-xs-12">

			<?php 

				foreach ($result as $key) {
					
								$key['win_status'];
								$key['sum'];
								$key['time'];
								$unserial = unserialize($key['result_koef']);
				
								//print_r($unserial);

			?>
			
				
					<?php
		
								/*arkoef[0][4][k],arkoef[0][1][k],arkoef[0][3][k],arkoef[5],obj[3]*/
								for($i = 0;$i < count($unserial[0][0]);$i++){

									if($unserial[0][2][$i] == 1){


										 $a_1 = "";

                                                  switch ($unserial[0][4][$i]) {
                                                        case "corner":
                                                          $a_1 = "угол";
                                                          break;
                                                        case "duzhina":
                                                          $a_1 = "дюжина";
                                                          break;
                                                        case "kolonki":
                                                          $a_1 = "колонка";
                                                          break;

                                                          case "mal_bol":
                                                          $a_1 = "малые_большие";
                                                          break;

                                                          case "stright_up":
                                                          $a_1 = "прямое попадание";
                                                          break;


                                                          case "even_odd":
                                                          $a_1 = "четное_нечетное";
                                                          break;

                                                          case "black_red":
                                                          $a_1 = "красные_черные";
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
                                                          $a_1 = "сплит";
                                                          break;

                                                          case "six_number":
                                                          $a_1 = "6 номеров";
                                                          break;

                                                          case "z_s":
                                                          $a_1 = "zero_speal";
                                                          break;

                                                          case "orp":
                                                          $a_1 = "orphans";
                                                          break;

                                                          case "s_s":
                                                          $a_1 = "малая серия";
                                                          break;
                                                          
                                                          case "b_s":
                                                          $a_1 = "большая серия";
                                                          break;

                                                        
                                                      }
					?>
				<div class="col-xs-11 col-xs-offset-1">
					<div class="col-xs-2 hist hist2">
							
							<?php
									

									echo $a_1;

							 ?>
							

					</div>

					<div class="col-xs-2 hist">
						
							<?php
									

									echo $unserial[0][1][$i];

							 ?>



					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo $unserial[0][3][$i];

								 ?>


					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo $unserial[5];

								 ?>


					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo date("d.m.y H:i:s",$key['time']);

								 ?>


					</div>

							</div>
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
                                                          $a_2 = "угол";
                                                          break;
                                                        case "duzhina":
                                                          $a_2 = "дюжина";
                                                          break;
                                                        case "kolonki":
                                                          $a_2 = "колонка";
                                                          break;

                                                          case "mal_bol":
                                                          $a_2 = "малые_большие";
                                                          break;

                                                          case "stright_up":
                                                          $a_2 = "прямое попадание";
                                                          break;


                                                          case "even_odd":
                                                          $a_2 = "четное_нечетное";
                                                          break;

                                                          case "black_red":
                                                          $a_2 = "красные_черные";
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
                                                          $a_2 = "сплит";
                                                          break;

                                                          case "six_number":
                                                          $a_2 = "6 номеров";
                                                          break;

                                                          case "z_s":
                                                          $a_2 = "zero_speal";
                                                          break;

                                                          case "orp":
                                                          $a_2 = "orphans";
                                                          break;

                                                          case "s_s":
                                                          $a_2 = "малая серия";
                                                          break;
                                                          
                                                          case "b_s":
                                                          $a_2 = "большая серия";
                                                          break;

                                                        
                                                      }
					?>
				<div class="col-xs-11 col-xs-offset-1">
					<div class="col-xs-2 hist hist2">
						
							<?php
									

									echo $a_2;

							 ?>


					</div>

					<div class="col-xs-2 hist">
						
							<?php
									

									echo $unserial[1][1][$i];

							 ?>



					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo $unserial[1][3][$i];

								 ?>


					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo $unserial[5];

								 ?>


					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo date("d.m.y H:i:s",$key['time']);

								 ?>


					</div>
					</div>

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
                                                          $a_3 = "угол";
                                                          break;
                                                        case "duzhina":
                                                          $a_3 = "дюжина";
                                                          break;
                                                        case "kolonki":
                                                          $a_3 = "колонка";
                                                          break;

                                                          case "mal_bol":
                                                          $a_3 = "малые_большие";
                                                          break;

                                                          case "stright_up":
                                                          $a_3 = "прямое попадание";
                                                          break;


                                                          case "even_odd":
                                                          $a_3 = "четное_нечетное";
                                                          break;

                                                          case "black_red":
                                                          $a_3 = "красные_черные";
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
                                                          $a_3 = "сплит";
                                                          break;

                                                          case "six_number":
                                                          $a_3 = "6 номеров";
                                                          break;

                                                          case "z_s":
                                                          $a_3 = "zero_speal";
                                                          break;

                                                          case "orp":
                                                          $a_3 = "orphans";
                                                          break;

                                                          case "s_s":
                                                          $a_3 = "малая серия";
                                                          break;
                                                          
                                                          case "b_s":
                                                          $a_3 = "большая серия";
                                                          break;

                                                        
                                                      }
					?>
				<div class="col-xs-11 col-xs-offset-1">
					<div class="col-xs-2 hist hist2">
						
							<?php
									

									echo $a_3;//8707633484

							 ?>


					</div>

					<div class="col-xs-2 hist">
						
							<?php
									

									echo $unserial[2][1][$i];

							 ?>



					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo $unserial[2][3][$i];

								 ?>


					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo $unserial[5];

								 ?>


					</div>

					<div class="col-xs-2 hist">
						
								<?php
									

									echo date("d.m.y H:i:s",$key['time']);

								 ?>


					</div>
					</div>

					<?php
						}
						}

					 ?>
					


				



				<?php

						}


				 ?>

		</div>
	</div>
</div>

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