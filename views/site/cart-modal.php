<?//unset($session['s'])?>
<?if (isset($session['stavka'])):?>

<pre><?print_r($session['s'])?></pre>
<?endif?>






<?if(isset($session['stavka'])):?>
          
            <?php foreach($session['stavka'] as $id => $item2):?>
			
				
       
		<?if($id =='number4'):?>
		
		    <div class="table-responsive next-statistika">
			 <table class="table table-hover table-striped">
			<h4>статистика по ставке на 4 цифры</h4>
			 
            <thead>
                <tr>
                    <th>1 - число</th>
                    <th>2 - число</th>
                    <th>3- число</th>
                    <th>4- число</th>
					<th>номер выигрыша</th>
                    <th>ставка-сумма</th>
                </tr>
            </thead>
			
			 <tbody>
			
			
			<?php foreach($item2 as $item):?>
                <tr>
                   <td><?= $item[0]?></td>
                    <td><?= $item[1]?></td>
                    <td><?= $item[2]?></td>
					 <td><?= $item[3]?></td>
					 <td><span><?= $item[4]?></span></td>
					  <td><span><?= $item[5]?></span></td>
                </tr>
				<tr> <td colspan='5'>следущие 4 цифры</td></tr>
            <?php endforeach?>
			
			
			   </tbody>
   
        </table>
		 </div>
			<?endif?>
		
             
         	<?if($id =='number2'):?>
			    <div class="table-responsive next-statistika">
			<h4>статистика по ставке на 2 цифры</h4>
			 <table class="table table-hover table-striped">
       
			
            <thead>
                <tr>
                    <th>1 - число</th>
                    <th>2 - число</th>
                    <th>сумма-ставка</th>
                   
                </tr>
            </thead>
			
			
			  <tbody>
			
			<?php foreach($item2 as $item):?>
                <tr>
                   <td><?= $item[0]?></td>
                    <td><?= $item[1]?></td>
                    <td><?= $item[2]?></td>
				
					 
                </tr>
				<tr> <td colspan='4' style='text-align:center'>следущие 2 цифры</td></tr>
            <?php endforeach?>
			   </tbody>
   
        </table>
		 </div>
			<?endif?>
   



			 <?php endforeach?>
			<?else:?>
		<h3>Ничего нет</h3>
		<?endif?>
	
