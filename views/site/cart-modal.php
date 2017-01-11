


<? $identity = Yii::$app->user->identity;?>

 <?if($identity):?>
 
 <?else:?>
 <h4>Вы не авторизованы</h4><?exit();?>
 <?endif?>



<?if(isset($session['stavka'])):?>
          
            <?php foreach($session['stavka'] as $id => $item2):?>
			
				
   
		
		    <div class="table-responsive next-statistika">
			 <table class="table table-hover table-striped">
			
			   <?if($id =='stavka4'):?><h4>статистика по ставке на 4 цифры</h4><?endif?>
		<?if($id =='stavka2'):?><h4>статистика по ставке на 2 цифры</h4><?endif?>
	<?if($id =='stavka2k1'):?><h4>цифры от 3 до 36</h4><?endif?>
	<?if($id =='stavka2k1middle'):?><h4>цифры от 2 до 35</h4><?endif?>
	<?if($id =='stavka2k1bottom'):?><h4>цифры от 1 до 34</h4><?endif?>		
	<?if($id =='dozen'):?><h4>1 дюжина</h4><?endif?>			
	<?if($id =='dozen1'):?><h4>2 дюжина</h4><?endif?>			
		<?if($id =='dozen2'):?><h4>3 дюжина</h4><?endif?>		 
            <thead>
                <tr>
                    <th>выбранные числа</th>
                    <th>выигрвшное число</th>
					 <th>сумма-ставка</th>
                  
                </tr>
            </thead>
			
			 <tbody>
			
			
			<?php foreach($item2 as $item):?>
				<pre><?print_r($item[3])?></pre>
                <tr>
                   <td><?= $item[0]?></td>
				
					  <td><span><?= $item[1]?></span></td>
					     <td>
                 <?=$item[2]?>
					 </td>
                </tr>
			
				
            <?php endforeach?>
			
			
			   </tbody>
   
        </table>
		 </div>
			
		
 

			 <?php endforeach?>
			<?else:?>
		<h3>Ничего нет</h3>
		<?endif?>
	
