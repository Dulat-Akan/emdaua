<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UserpaySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$this->title = 'Открытие закрытие смены"';


$this->params['breadcrumbs'][] = $this->title;
?>
<input type="hidden" id="url" value="<?php echo Url::to('@base'); ?>/userpay/stats">
<script>
	$("#opensmen").click(function () {
		$("#opensmena").show();
	});
	
	
</script>



<div class="col-md-12">
	<h1 style="text-align:center">Статистика</h1>
                        <div class="card col-md-12">
                            <div class="header">
                                Выберите период:  
								С <input type="number" id="beginday" placeholder="число" style="width:80px;height:20px;">&nbsp 
								<select id="beginmonth"><option>месяц</option>	<option value="01">Январь</option><option value="02">Февраль</option><option value="03">Март</option><option value="04">Апрель</option><option value="05">Май</option><option value="06">Июнь</option><option value="07">Июль</option><option value="08">Август</option><option value="09">Сентябрь</option><option value="10">Октябрь</option><option value="11">Ноябрь</option><option value="12">Декабрь</option><select>
								<select id="beginyear"><option>год</option>&nbsp &nbsp	<option value="2017">2017</option><option value="2018">2018</option></select>&nbsp &nbsp
								по &nbsp &nbsp <input type="number" id="endday" placeholder="число" style="width:80px;height:20px;">&nbsp <select id="endmonth"> <option>месяц</option>
								<option value="01">Январь</option><option value="02">Февраль</option><option value="03">Март</option><option value="04">Апрель</option><option value="05">Май</option><option value="06">Июнь</option><option value="07">Июль</option><option value="08">Август</option><option value="09">Сентябрь</option><option value="10">Октябрь</option><option value="11">Ноябрь</option><option value="12">Декабрь</option><select>
								&nbsp &nbsp
								<button id="getperiod" style="background-color: #93291b; border: 1px solid #333333; border-radius: 3px 3px 3px 3px; box-shadow: 0 0 1px #93291b inset; color: #f5f5f5; padding: 2px 5px;">Выбрать</button>
								<br><br><h4 class="title">Статистика за указанный период (<?php 
								$month = intval((intval($period1%10000))/100);
								if($month<10)
									$month="0".$month;
								
								$day = intval($period1%100);
								if($day<10)
									$day="0".$day;
								
								$month2 = intval((intval($period2%10000))/100);
								if($month2<10)
									$month2="0".$month2;
								
								$day2 = intval($period2%100);
								if($day2<10)
									$day2="0".$day2;
								
								echo "c ".$day."-".$month."-".intval($period1/10000)." по ".$day2."-".$month2."-".intval($period2/10000);?>)</h4>
								
                            </div>
							
						<script>
							/*$('select').on('change', function() {
							
								var url = "http://almagames.kz/basic/web/index.php/userpay/stats?period="+$(this).val(); // get selected value
								if (url) { // require a URL
								  window.location = url; // redirect
								}
							
							})*/
							
							$("#getperiod").click(function () {
								var beginday = $("#beginday").val();
								if(beginday<10)
									beginday="0"+beginday;
								var beginmonth = $("#beginmonth").val();
								var beginyear = $("#beginyear").val();
								var period1= ""+beginyear+beginmonth+beginday;
								
								var endday = $("#endday").val();
								if(endday<10)
									endday="0"+endday;
								var endmonth = $("#endmonth").val();
								var period2= "2018"+endmonth+endday;
								
								console.log(period1 + " " + period2);
								
								var url = "http://almagames.kz/basic/web/index.php/userpay/stats?period1="+period1+"&period2="+period2; // get selected value
								if (url) { // require a URL
								  window.location = url; // redirect
								}
							});
						</script>

                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
										<th style="font-size: 15px">Accaunt</th>
                                        <th style="font-size: 15px">Cash</th>
                                    	<th style="font-size: 15px">Qiwi</th>
                                    	<th style="font-size: 15px">Kassa24</th>
                                    	<th style="font-size: 15px">Systembot</th>
                                    	<th style="font-size: 15px">AP</th>
										<th style="font-size: 15px">Total</th>
										<th style="font-size: 15px">Withdraw</th>
										<th style="font-size: 15px">Bets</th>
										<th style="font-size: 15px">Win</th>
										<th style="font-size: 15px">Net</th>
										<th style="font-size: 15px">Balance</th>
                                    </thead>
                                    <tbody>
									<thead>
										<th style="font-size: 15px">Total</th>
                                        <th style="font-size: 15px"><?php echo $cash;?></th>
                                    	<th style="font-size: 15px"><?php echo $qiwi;?></th>
                                    	<th style="font-size: 15px"><?php echo $kassa24;?></th>
                                    	<th style="font-size: 15px"><?php echo $systembot;?></th>
                                    	<th style="font-size: 15px">0</th>
										<th style="font-size: 15px"><?php echo ($cash+$qiwi+$kassa24+$systembot);?></th>
										<th style="font-size: 15px"><?php echo $withdrow;?></th>
										<th style="font-size: 15px"><?php echo $bets;?></th>
										<th style="font-size: 15px"><?php echo $win;?></th>
										<th style="font-size: 15px"><?php echo ($bets - $win);?></th>
										<th style="font-size: 15px"><?php echo $balance;?></th>
                                    </thead>
									<?php foreach($total as $t){
										$total = $t['cash']+$t['qiwi']+$t['kassa24']+$t['systembot'];
										/*$bets = $t['win'] - $t['balance'];
										if($t['win']==0)
											$bets = 0;*/
										echo"
										<tr>
											<td  style='font-size: 13px'>".$t['phone']."</td>
                                        	<td style='font-size: 13px'>".$t['cash']."</td>
                                        	<td style='font-size: 13px'>".$t['qiwi']."</td>
                                        	<td style='font-size: 13px'>".$t['kassa24']."</td>
                                        	<td style='font-size: 13px'>".$t['systembot']."</td>
                                        	<td style='font-size: 13px'>0</td>
                                        	<td style='font-size: 13px'>".$total."</td>
                                        	<td style='font-size: 13px'>".$t['withdrow']."</td>
                                        	<td style='font-size: 13px'>".$t['bets']."</td>
                                        	<td style='font-size: 13px'>".$t['win']."</td>
                                        	<td style='font-size: 13px'>".($t['bets'] - $t['win'])."</td>
                                        	<td style='font-size: 13px'>".$t['balance']."</td>
                                        </tr>";
										
										
									}
									
									
									
									?>
                                        
									
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
					
				