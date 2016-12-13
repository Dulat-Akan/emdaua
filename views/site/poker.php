<?use yii\helpers\Url;?>
<div class="cvet">
    <div class="main-video">
        <div class="videopoker">
            <iframe width="100%" height="480" src="https://www.youtube.com/embed/mjC2gQDqlB0" frameborder="0" allowfullscreen></iframe>
        </div>
    </div><!--main-video-->
</div>
			
<<<<<<< HEAD
<div class="section-tabs">
<!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified" role="tablist">
        <li role="presentation" class="active"><a href="#nav18"  data-toggle="tab" class="aruki">руки</a></li>
	<li role="presentation"><a href="#nav19" data-toggle="tab">комбинации</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content clearfix">
        <div role="tabpanel" class="tab-pane fade in active" id="nav18">
            <?for($i=1; $i<7; $i++):?>
            <div class="col-sm-4 flip-container">
                <div class="flipper">
                    <div class="product22 front">
                        <p class="ruka-title"> Выиграет рука <?=$i?> </p>
                        <p class='karta'>
                            <span>1</span> <img  src="<?php echo Url::to('@img/pika.png'); ?>"/>
                            <span>2</span> <img  src="<?php echo Url::to('@img/hir.png'); ?>"/>
                        </p>
                        <div class="ruka-result"> 6.55 </div><!-- /.product-buy -->
                    </div><!-- /.product -->
            <!--------------- переворачивание обратная сторона--------------------->
                    <div class="product22 back">
                        <h6> Выиграет рука <?=$i?><span>6.55</span>	</h6>
                        <p>Сумма 500</p>  
                        <form action="/" method="post" class="col-xs-12">
                            <input type="text" class="col-xs-8" name="name" value="" placeholder="введите сумму">
                            <input type="submit" class="col-xs-4 btn" value="ставка">
                        </form>
                    </div><!-- окончание блока с перевернутой стороной -->
                </div><!--flipper-->
            </div><!--окончание блок рука-->
            <?endfor;?><!--окончание цикла где выводиться контент блока рука-->
        </div><!---окончание -блок открывается по клику рука-->
    <!----------блок комбинации----------->				
        <div role="tabpanel" class="tab-pane" id="nav19">
            <div class="col-md-8">
            <div class="col-xs-12 comb">Высшая пара выиграет</div>
            <div class="col-xs-12 comb">Одна пара выиграет</div>
            <div class="col-xs-12 comb">Две пара выиграет</div>
            <div class="col-xs-12 comb">Сет выиграет</div>
            <div class="col-xs-12 comb">Стрит выиграет</div>
            <div class="col-xs-12 comb">Флэш выиграет</div>
            <div class="col-xs-12 comb">Фул-xаус выиграет</div>
            <div class="col-xs-12 comb">Каре пара выиграет</div>
            <div class="col-xs-12 comb">Стрит-флэш выиграет</div>
            <div class="col-xs-12 comb">Роял-флэш выиграет</div>
            </div>
=======
					<div class="section-tabs">
					
					
					
					
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#nav18"  data-toggle="tab" class="aruki">руки</a></li>
							<li role="presentation"><a href="#nav19" data-toggle="tab">комбинации</a></li>
							
						</ul>

						<!-- Tab panes -->
						<div class="tab-content clearfix">
							<div role="tabpanel" class="tab-pane fade in active" id="nav18">
							<?for($i=1; $i<7; $i++):?>
						
						
						<div class="col-sm-4 flip-container">
							<div class="flipper">
								<div class="product22 front">
								<p class="ruka-title">
								        Выиграет рука <?php echo $i; ?>
									</p>
									<p class='karta'>
										<span>1</span> <img  src="<?php echo Url::to('@img/pika.png'); ?>"/>
										<span>2</span> <img  src="<?php echo Url::to('@img/hir.png'); ?>"/>
									</p>
									<div class="ruka-result">
									6.55
									</div><!-- /.product-buy -->
									
								</div><!-- /.product -->
	<!--------------- переворачивание обратная сторона--------------------->
								<div class="product22 back">
									<h6>
								     Выиграет рука <?php echo$i?><span>6.55</span>
									</h6>
							
							<p>Сумма 500</p>  
							
<form action="/" method="post" class="col-xs-12">

<input type="text" class="col-xs-8" name="name" value="" placeholder="введите сумму">


<input type="submit" class="col-xs-4 btn" value="ставка">

</form>
</div><!-- окончание блока с перевернутой стороной -->
									</div><!--flipper-->
							</div><!--окончание блок рука-->
						<?endfor;?><!--окончание цикла где выводиться контент блока рука-->
</div><!---окончание -блок открывается по клику рука-->
							
							
							
<!----------блок комбинации----------->				
<div role="tabpanel" class="tab-pane" id="nav19">
<div class="col-md-8">
<div class="col-xs-12 comb">Высшая пара выиграет</div>
<div class="col-xs-12 comb">Одна пара выиграет</div>
<div class="col-xs-12 comb">Две пара выиграет</div>
<div class="col-xs-12 comb">Сет выиграет</div>
<div class="col-xs-12 comb">Стрит выиграет</div>
<div class="col-xs-12 comb">Флэш выиграет</div>
<div class="col-xs-12 comb">Фул-xаус выиграет</div>
<div class="col-xs-12 comb">Каре пара выиграет</div>
<div class="col-xs-12 comb">Стрит-флэш выиграет</div>
<div class="col-xs-12 comb">Роял-флэш выиграет</div>
</div>

<div class="col-xs-4 right">
<h6>
Выиграет рука <?php echo$i?><span>6.55</span>
</h6>
<p>Сумма 500</p>  
							
<form action="/" method="post" class="col-xs-12">

<div><input type="text" class="col-xs-12" name="name" value="" placeholder="введите сумму"></div>
>>>>>>> dcbcd5f63db046114e45742be21b46cfe772389f

            <div class="col-xs-4 right">
                <h6>Выиграет рука <?=$i?><span>6.55</span></h6>
                <p>Сумма 500</p>  
                <form action="/" method="post" class="col-xs-12">
                    <div><input type="text" class="col-xs-12" name="name" value="" placeholder="введите сумму"></div>
                    <div><input type="submit" class="col-xs-12 btn btn-danger" value="СДЕЛАТЬ СТАВКУ"></div>
                </form>
            </div>
        </div><!---конец блок комбинация--->
    </div>
</div><!-- /.section-tabs -->
			