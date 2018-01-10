<?php

namespace app\controllers;
use app\models\Bakkara;
use app\models\Usertwo;
use app\models\Transaction;
use Yii;

class TermController extends \yii\web\Controller
{
   
    public function actionIndex()
    {
        return $this->render('index');
    }

	 public function actionServer(){
	   $message='';
		$this->layout = 'main6'; //  88.204.242.62
		if($_SERVER["REMOTE_ADDR"] =='88.204.242.62' || $_SERVER["REMOTE_ADDR"] =='89.218.238.146' || $_SERVER["REMOTE_ADDR"] =='2.135.241.202' || $_SERVER["REMOTE_ADDR"] =='176.108.65.31' || $_SERVER["REMOTE_ADDR"] =='92.47.15.162' || $_SERVER["REMOTE_ADDR"] =='79.142.56.140' || $_SERVER["REMOTE_ADDR"] =='37.151.221.25'){
			$request = Yii::$app->request;
			$action='none';
			$number='none';
			$receipt='none';
			$amount='none';
			$date='none';
			
			if( $request->get('action'))
				$action = $request->get('action');    // Вид операции
			if( $request->get('number'))
				$number = $request->get('number');    // Телефон пользовате
			if( $request->get('receipt'))
				$receipt = $request->get('receipt');  // ИД операции
			if( $request->get('amount'))
				$amount = $request->get('amount');    // Баланс
			if( $request->get('date'))
				$date = $request->get('date');    // Баланс
			  
			$result='';
			$findnumber = 0;
			$findreceipt = 0;
			$freceipt='none';
			
			if($receipt!='none'){
				$freceipt  = Yii::$app->db->createCommand("SELECT * FROM transaction WHERE receipt =$receipt")->queryAll();
				$h = count($freceipt);
			}
			
			if($number!='none'){
				$fnumber = Yii::$app->db->createCommand("SELECT * FROM user WHERE phone =$number")->queryAll();
				$n = count($fnumber);
			}
					

			

			/*$message = "action = ".$action."<br> number = ".$number."<br> receipt = ".$receipt."<br> date = ".$date."<br> amount = ".$amount;*/
		
			
			if($action!="check" && $action!="payment" && $action!="cancel" && $action!="status"){
				$message =  '<?xml version="1.0" encoding="UTF-8"?><response><code>10</code><message>Invalid action!</message></response>';
			} 
			else{
				  if($action=="check"){
					if($n>0){
						$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>0</code><message>Абонент найден</message></response>';
					  }
					  else{
						  $message = '<?xml version="1.0" encoding="UTF-8"?><response><code>2</code><message>Абонент не найден</message></response>';
						}
				  }
				  
				  if($action=="payment"){
					$len=strlen($number);
					
					if($len==10){
						
						if($n>0){
							
							if($amount>0){
								if($date!=''){
									if($receipt!='none'){
										if($h>0){
											$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>0</code><message>Платеж уже принят</message></response>';
										}
										else{
											$result = Yii::$app->db->createCommand()->insert('transaction', ['action' => $action,'number' => $number,'receipt' => $receipt,'date' => $date,'amount' => $amount])->execute();
											$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>0</code><message>Платеж принят</message></response>';
										}
									}
									else{
										$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>4</code><message>Неверное  значение номера платежа</message></response>';
									}
								}
								else{
									$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>5</code><message>Неверное значение даты</message></response>';
								}
							}
							else{
								$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>3</code><message>Неверная сумма платежа</message></response>';
							}
						}
						
						else{
							$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>2</code><message>Абонент не найден</message></response>';
						}
						
					}				
					else{
						$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>10</code><message>Не правильный формат телефона</message></response>';
					}
					

				}
				
				if($action=="cancel"){
					if($receipt>0){
						$q1=0;
						
						if($h!=0){
							$receiptid = $freceipt[0]['id'];
							if($freceipt[0]['status']==7){ // уже отменен
								$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>9</code><message>Платеж не может быть отменен</message></response>';
							}
							else
							$q1 = Yii::$app->db->createCommand("UPDATE `transaction` SET `status` = 7  WHERE `id`=$receiptid")->execute();
						}
						else{
							$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>4</code><message>Неверное  значение номера платежа</message></response>';
						}
						
						if($q1!=0)
						$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>0</code><message>Платеж отменен</message></response>';
						  
					}
					else{
						$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>4</code><message>Неверное  значение номера платежа</message></response>';
					}
				}
				
				if($action=="status"){
					if($receipt>0){
							if($h!=0){
								if($freceipt[0]['status']==0){
									$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>0</code><message>Платеж зачислен</message></response>';
								}
								if($freceipt[0]['status']==7){
									$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>0</code><message>Платеж с таким номером отменен</message></response>';
								}
							}
							else{
								$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>6</code><message>Успешный платеж с таким номером не найден</message></response>';
							}
						
					}
					else{
						$message = '<?xml version="1.0" encoding="UTF-8"?><response><code>4</code><message>Неверное  значение номера платежа</message></response>';
					}
				}
		 }
		}
		else
			$message = "Page not found. 404";
		return $this->render('server',['message' => $message,]);
	
  }
  // поиск карт по штрих коду
  public function actionFindcart(){   

     return $this->render('findcart'); 

      
  }
  public function actionAddstatus(){
  
  }   
}