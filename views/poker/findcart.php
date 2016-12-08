<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pokers';
$this->params['breadcrumbs'][] = $this->title;
?><br><br><br>
<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/poker/findcart">
<div class="poker-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <br><br><br>
    
</div>

<div class="col-md-8">
	

    
        Barcode: <input id = "barcodeEntry" type="text" name="barcode" onkeyup="ff()" autofocus/><br />
        
	
</div>
<?php echo $sobitie.' 123  '.$karti;?>