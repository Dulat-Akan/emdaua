<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;


AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>

<html lang="<?= Yii::$app->language ?>">
<head>
    
    <script src="<?php echo Url::to('@jquery') ?>/jquery.min.js"></script>
    <script src="<?php echo Url::to('@jquery') ?>/jquery-ui-1.10.3.custom.js"></script>
    
    <meta charset="<?= Yii::$app->charset ?>">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
	
				<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'ru', layout: google.translate.TranslateElement.FloatPosition.BOTTOM_RIGHT}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<?php $this->beginBody() ?>
		<nav class="navbar navbar-default menu2 clearfix">
 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse menu-bot" id="bs-example-navbar-collapse-2">
	<div class="" id="mylink2">
      	<ul class="nav nav-pills nav-justified">
       <li style="margin-left: 15px;font-size:17px;" class="nav-header">Сейчас в линии</li>
                 
                  <li><a href="<?php echo Url::to('@control/slive'); ?>" r="<?php echo Url::to('@base'); ?>/site/liverequest">ставки LIVE</a></li>

                  <li><a href="<?php echo Url::to('@control/request'); ?>" r="<?php echo Url::to('@base'); ?>/site/p">результаты</a></li>
                  <li><a href="<?php echo Url::to('@control/requestlive'); ?>" r="<?php echo Url::to('@base'); ?>/site/ptwo">результаты Live</a></li>

               
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Футбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Теннис</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Хоккей</a></li>
              
             
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Американский футбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Бейсбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Биатлон</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Бокс</a></li>
                  
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Гандбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Гольф</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Горные лыжи</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Дартс</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Киберспорт</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Крикет</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Лыжи</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Мотоспорт</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Песапалло</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Прыжки с трамплина</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Ралли</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Регби-лига</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Регби-союз</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Смешанные боевые искусства</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Снукер</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Формула 1</a></li>
                  
      </ul>
    </div>
  
    </div><!-- /.navbar-collapse -->

			</nav>







	
       <?php
    NavBar::begin([
        'brandLabel' => 'AlmaBet',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top nav2',
        ],
    ]);
	
	
	
	
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
		 
		
            ['label' => 'Домой', 'url' => ['/index.php/site']],
             ['label' => 'регистрация', 'url' => ['/index.php/site/usertwo']],
            ['label' => 'О нас', 'url' => ['/index.php/site/about']],
            ['label' => 'Наши контакты', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Вход', 'url' => ['/index.php/site/login']]
                
            ) : (
                '<li>'
                . Html::beginForm(['/index.php/site/logout'], 'post', ['class' => 'navbar-form'])
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

  



    <div class="container-fluid" style="margin-top:0px;">
        



<div class="container" style="" id="download">
<div class=""><img src="<?php echo Url::to('@img') ?>/3.gif" alt=""></div>

   
</div>


<div class="container-fluid container-content">

       
		<div class="col-md-10 col-md-push-2">
	<div class="" id="pok_searh2">
	<div class='header-middle'>
<div class="" style='' id="google_translate_element"></div>

  </div>
  
<div class='clear'></div>

	<?= $content ?>
	</div>
</div>

<!-- <div class="col-md-10 col-md-push-2" id=""></div> -->
<div class="col-md-2 col-md-pull-10 kolekcii" id="mylink">

               </br>
                <ul class="nav nav-tabs nav-stacked kolekcii_soderzhimoe">
				
                  <li style="margin-left: 15px;font-size:17px;" class="nav-header">Сейчас в линии</li>
                 
                  <li><a href="<?php echo Url::to('@control/slive'); ?>" r="<?php echo Url::to('@base'); ?>/site/liverequest">ставки LIVE</a></li>

                  <li><a href="<?php echo Url::to('@control/request'); ?>" r="<?php echo Url::to('@base'); ?>/site/p">результаты</a></li>
                  <li><a href="<?php echo Url::to('@control/requestlive'); ?>" r="<?php echo Url::to('@base'); ?>/site/ptwo">результаты Live</a></li>

               
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Футбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Теннис</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Хоккей</a></li>
              
             
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Американский футбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Бейсбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Биатлон</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Бокс</a></li>
                  
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Гандбол</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Гольф</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Горные лыжи</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Дартс</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Киберспорт</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Крикет</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Лыжи</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Мотоспорт</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Песапалло</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Прыжки с трамплина</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Ралли</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Регби-лига</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Регби-союз</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Смешанные боевые искусства</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Снукер</a></li>
                  <li><a href="<?php echo Url::to('@control/soccerpage'); ?>" r="<?php echo Url::to('@base'); ?>/site/soccer">Формула 1</a></li>
                  
                </ul>

            
        
  
            </div>

             <div class="col-md-2" style="display:none;" id="korzina" >
                     
                    <a href="<?php echo Url::to('@control/korzina'); ?>"><img style="width:100px;cursor:pointer;" src="<?php echo Url::to('@img/korzina2.png'); ?>" alt=""><span class="label label-info">4 ставки</span></a>

            </div>


            


       

         
        </div>





            <script>

            $("#mybut").click(function(){


              MyLink();
            });

            function MyLink(perenapravit,zapros,t){
				$("#download").show();

                        var data = {
                            "data":t,
                            "hid":"hid",
                        }

                        $.ajax({
                            "type":"POST",
                            "url":zapros,
                            "data":data,
                            "datatype":"json html script",
                           
                          
                            "success":kx,
                            "error":errorfunc
                            
                          });

                        function kx(result){



                            if(result){
                            
                              $("#download").hide();
							  //return false;
                              window.location.href = perenapravit;


                            }
  
                              }

                       function errorfunc(){
                          alert("ошибка соединения с интернетом");
                       }


            };


                
                var link = $("#mylink").children("ul").children("li").children("a");
				var link2 = $("#mylink2").children("ul").children("li").children("a");
                             link2.click(function(event){

                    event.preventDefault();
//alert(9)
                    var perenapravit = $(this).attr("href"); /*kuda perenapravit*/
                    var zapros = $(this).attr("r");    /*kuda otpravit zapros*/

                    
                    var t = $(this).text();

                    switch(t){
                        case "Футбол":
                        MyLink(perenapravit,zapros,t);

                        break;
                        case "Теннис":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Хоккей":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Американский футбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Бейсбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Биатлон":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Бокс":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Гандбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Гольф":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Горные лыжи":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Дартс":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Киберспорт":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Крикет":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Лыжи":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Мотоспорт":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Песапалло":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Прыжки с трамплина":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Ралли":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Регби-лига":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Регби-союз":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Снукер":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Формула 1":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "результаты":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "результаты Live":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "ставки LIVE":
                        MyLink(perenapravit,zapros,t);
                        break;
                    }
                    


                });
				
				
                link.click(function(event){
//alert(8)
                    event.preventDefault();

                    var perenapravit = $(this).attr("href"); /*kuda perenapravit*/
                    var zapros = $(this).attr("r");    /*kuda otpravit zapros*/

                    
                    var t = $(this).text();

                    switch(t){
                        case "Футбол":
                        MyLink(perenapravit,zapros,t);

                        break;
                        case "Теннис":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Хоккей":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Американский футбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Бейсбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Биатлон":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Бокс":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Гандбол":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Гольф":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Горные лыжи":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Дартс":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Киберспорт":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Крикет":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Лыжи":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Мотоспорт":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Песапалло":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Прыжки с трамплина":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Ралли":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Регби-лига":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Регби-союз":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Снукер":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "Формула 1":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "результаты":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "результаты Live":
                        MyLink(perenapravit,zapros,t);
                        break;
                        case "ставки LIVE":
                        MyLink(perenapravit,zapros,t);
                        break;
                    }
                    


                });


            </script>

<script>
$('.btn.btn-primary').click(function(){
$('.alert').html('');
$('.alert').removeClass('alert-success');
$('.alert').removeClass('alert');

})

</script>


       
    </div>

 
<footer class="footer">
    <div class="container">
        <p class="pull-left"></p>

        <p class="pull-right"></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
