<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<div class="accordion-wrap" >
	<div class="accordion" >
		<p style="display:block;background:#fdd700;height:50px;width:89%; font-size:20px;text-align:center;padding-top:10px;position:absolute;margin-top: 10px">Личный кабинет</p>
		<a style="margin-top:58px;text-decoration: none;"href="#"><i class="fa fa-user"></i>&nbsp  &nbsp Личный кабинет</a>
		
		<div class="sub-nav">
			<div class="html about-me">
                    
                       <table  class="table table-condensed" style="width:94%; margin-left:3%;margin-top:15px;text-align: left;"> 
                                <tr>
                                          <th class="info" width="200px" rowspan="2">
                                                    <div class="photo" style="margin:auto">
                                                        <div class="photo-overlay">
						<span class="plus">+</span>
                                                        </div>
                                                </div>
                                          </th>
                                          <td style="padding-left: 30px;"><?php echo $model->name1.' '.$model->name2?></td>
                                </tr>
                                                      <tr>
                                          
                                          <td style="padding-left: 30px;"><?php echo $model->phone;?></td>
                                </tr>
                                <tr>
                                          <th class="info">Удостоверения личночти:</th>
                                          <td style="padding-left: 30px;">  
                                                    <div>
                                                            <?php $form = ActiveForm::begin(['options'=>['enctype' => 'multipart/form-data']]); ?>
                                                            <?= $form->field($model, 'file1')->fileInput() ?>

                                                            <div class="form-group">
                                                            <?= Html::submitButton($model->isNewRecord ? 'Загрузить' : 'Обновить', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                                                            </div>
                                                            <?php ActiveForm::end(); ?>
                                                    </div>
                                                    <div>
                                                              <img width="400px" id="ul" src="<?php echo $model->ul;?>" alt="">
                                                    </div>
                                          </td>
                                       
                                </tr>
                                <tr>
                                          <th class="info">Пароль:</th>
                                          <td style="padding-left: 30px;"><?php echo $model->password;?> &nbsp <a href="#" style="text-decoration: underline; display: inline;">изменить</a></td>
                                </tr>
                                <tr>
                                          <th class="info">Валюта:</th>
                                          <td style="padding-left: 30px;">
                                                    <select class="form-control" style="width:100px">
                                                            <option>тенге</option>
                                                            <option>рубль</option>
                                                            <option>доллор</option>
                                                            <option>евро</option>
                                                    </select>
                                          </td>
                                </tr>
                      </table>
			</div>
		</div>
		
		<a href="#" style="text-decoration: none;"><i class="fa fa-cogs"></i>  &nbsp Настройка счета</a>
		<div class="sub-nav">
			<div class="html chat">
				  <table  class="table table-condensed" style="width:94%; margin-left:3%;margin-top:15px;text-align: left;">            
                                                        <tr >
                                                                  <th style="width:200px" class="info">Показывть баланс:</th>
                                                                  <td style="padding-left: 30px;">
                                                                            <select class="form-control" style="width:100px">
                                                                                    <option>скрыть</option>
                                                                                    <option>показывать</option>
                                                                            </select>
                                                                  </td>
                                                        </tr>
                                                        <tr>
                                                                  <th class="info">Валюта:</th>
                                                                  <td style="padding-left: 30px;">
                                                                            <select class="form-control" style="width:100px">
                                                                                    <option>тенге</option>
                                                                                    <option>рубль</option>
                                                                                    <option>доллор</option>
                                                                                    <option>евро</option>
                                                                            </select>
                                                                  </td>
                                                        </tr>
                                                        <tr>
                                                                  <th class="info">Формат коэффициентов: </th>
                                                                  <td style="padding-left: 30px;">
                                                                            <select class="form-control" style="width:100px">
                                                                                    <option>десятичные</option>
                                                                                    <option>дробные</option>
                                                                            </select>
                                                                  </td>
                                                        </tr>
                                              </table>
                                </div>
		</div>
		<a href="#"  style="text-decoration: none;"><i class="fa fa-credit-card"></i>  &nbsp Пополнить счет </a>
		<div class="sub-nav">
                              <table  class="table table-condensed" style="width:94%; margin-left:3%;margin-top:15px;text-align: left;">
                                        <tr class="info">
                                                  <th>Вид операции</th>
                                                  <th>Комиссия</th>
                                                  <th>Минимальная сумма</th>
                                                  <th></th>
                                        </tr>
                                        <tr>
                                                  <td><a href="">Visa/Mastercard Woopay</a> </td>
                                                  <td>0%</td>
                                                  <td>100 тенге</td>
                                                  <td><a href="#">подробнее</a></td>
                                        </tr>
                                        <tr>
                                                  <td><a href="">Qiwi кошелек</a> </td>
                                                  <td>0%</td>
                                                  <td>100 тенге</td>
                                                  <td><a href="#">подробнее</a></td>
                                        </tr>
                                        <tr>
                                                  <td><a href="">Beeline</a> </td>
                                                  <td>0%</td>
                                                  <td>100 тенге</td>
                                                  <td><a href="#">подробнее</a></td>
                                        </tr>
                                        
                              </table>
		</div>
		<a href="#"  style="text-decoration: none;"><i class="fa fa-money"></i> &nbsp Снятие денег<span class="pull-right alert-numb">&nbsp К снятию: 14 500 тенге &nbsp</span></a>
		<div class="sub-nav">
			<div class="html invite">
				<table  class="table table-condensed" style="width:94%; margin-left:3%;margin-top:15px;text-align: left;">
                                                <tr class="info">
                                                          <th>Вид операции</th>
                                                          <th>Комиссия</th>
                                                          <th>Минимальная сумма</th>
                                                          <th></th>
                                                </tr>
                                                <tr>
                                                          <td><a href="">Наличными через кассу</a> </td>
                                                          <td>0%</td>
                                                          <td>1000 тенге</td>
                                                          <td><a href="#">подробнее</a></td>
                                                </tr>
                                                <tr>
                                                          <td><a href="">Visa/Mastercard Woopay</a> </td>
                                                          <td>0%</td>
                                                          <td>100 тенге</td>
                                                          <td><a href="#">подробнее</a></td>
                                                </tr>
                                                <tr>
                                                          <td><a href="">Qiwi кошелек</a> </td>
                                                          <td>0%</td>
                                                          <td>100 тенге</td>
                                                          <td><a href="#">подробнее</a></td>
                                                </tr>
                                                <tr>
                                                          <td><a href="">Beeline</a> </td>
                                                          <td>0%</td>
                                                          <td>100 тенге</td>
                                                          <td><a href="#">подробнее</a></td>
                                                </tr>
                                      </table>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
	Profile.load();
});

Profile = {
	load:function(){
		this.links();
		this.social();
		this.accordion();
	},
	links:function(){
		$('a[href="#"]').click(function(e){
			e.preventDefault();
		});
	},
	social:function(){
		$('.accordion .about-me .photo .photo-overlay .plus').click(function(){
			$('.social-link').toggleClass('active');
			$('.about-me').toggleClass('blur');
		});
		$('.social-link').click(function(){
			$(this).toggleClass('active');
			$('.about-me').toggleClass('blur');
		});
	},
	accordion:function(){
		var subMenus = $('.accordion .sub-nav').hide();
		$('.accordion > a').each(function(){
			if($(this).hasClass('active')){
				$(this).next().slideDown(100);
			}
		});
		$('.accordion > a').click(function(){
			$this = $(this);
			$target =  $this.next();
			$this.siblings('a').removeAttr('class');
			$this.addClass('active');
			if(!$target.hasClass('active')){
				subMenus.removeClass('active').slideUp(100);
				$target.addClass('active').slideDown(100);
			}
			return false;
		});
	}
}
</script>