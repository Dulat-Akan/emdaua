<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use app\models\Usertwo;
/* @var $this yii\web\View */
/* @var $model app\models\Userpay */

$this->title = $model->phone;
$this->params['breadcrumbs'][] = ['label' => 'Userpays', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<input type="hidden" id="url" value="<?php echo Url::to('@base') ?>/userpay/cancel">
<div class="userpay-view">
    

    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center"><p class="bg-info">Профиль: <?= Html::encode($this->title) ?></p></h2>
        </div>
    </div>

  <br>
    

   
    <p>
        
        <?php 

        $id = Yii::$app->user->id;
        $model2 =Usertwo::findOne(['id' => $id]);

        //Html::a('Delete', ['delete', 'id' => $model->id], [
            //'class' => 'btn btn-danger',
           // 'data' => [
            //    'confirm' => 'Are you sure you want to delete this item?',
            //    'method' => 'post',
           // ],
       // ]) ?>
    </p>

    <input type="hidden" id="rle" value="<?php echo $model2->role; ?>">


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'id',
            //'username',
            //'password',
            'email:email',
            //'status',
            //'auth_key',
            //'created_at',
            //'updated_at',
            //'access_token',
            'phone',
            //'timer',
            'balance',
            //'ul',
            'name1',
            'name2',
            //'dateb',
            //'tel',
            //'role',
            //'file1',
        ],
    ]) ?>
    <div class="row">
        <div class="col-md-6" style="text-align: right">
            <h2>
                <?= Html::a('Пополнить/Вывести', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
            </h2>
            
        </div>
    
        <div class="col-md-6" style="text-align: left">
            <h2>
                <?= Html::a('Перейти на главную', ['index'], ['class' => 'btn btn-primary']) ?>
            </h2>
            
        </div>
    </div>
    <br>
    <h2 style="text-align: center"><p class="bg-info">History</p></h2>
    <br>
    <br>
    <?php 
         

        echo '<div><table  class="table table-striped">
        <thead><tr><th>Id</th><th>Uid</th><th>Phone</th><th>Date</th><th>Type</th><th>From</th><th>Withdraw</th><th>Bets</th><th>Win</th><th>Net</th><th>Amount(agp)</th><th>Balance(agp)</th><th>Status</th><th  class="operation">Operation</th></tr></thead>';

        $number = $model->phone; // user phone
        $fnumber = Yii::$app->db->createCommand("SELECT * FROM `transaction` WHERE `number` ='$number'")->queryAll();

        
        foreach (array_reverse($fnumber) as $n) {echo "<tr><td>".$n['id']."</td><td>".$n['uid']."</td><td>".$n['number']."</td><td>".$n['date']."</td><td>".$n['action']."</td><td>".$n['typet']."</td><td></td><td></td><td></td><td></td><td>".$n['amount']."</td><td>".$n['balagp']."</td><td>".$n['statust'].'</td><td class="operation">'; if($n['statust']!='canceled') echo '<a href="#" onclick = "cancelid('.$n['id'].',\''.$n['action'].'\','.$n['amount'].','.$n['uid'].')"  >Cancel</a>'; echo '</td></tr>';
        }
        echo '</table></div>';
    ?>

    <script type="text/javascript">
    console.log("<?php echo $number;?>");
        function cancelid(id,action,amount,uid) {
            var url = $("#url").val();

            var values = {
                "id":id,
                "action":action,
                "amount":amount,
                "uid":uid,
            };



            console.log(url+" "+id);

            $.ajax({
                type: 'post',
                url: url, 
                data: values,
                dataType:"text", 
                response: 'text',
                success: function(result){
                    console.log("Canceled successfull"+result);
                   window.location.reload();
                    
                },
                error: function(result){
                    console.log("Cancelation error"+result);
                    window.location.reload();
                }

            }); 
            
        }
    </script>

    <script type="text/javascript">
        var rle = $("#rle").val();
        console.log(rle);

        function hide() {
            $('.operation').hide();
        }


        if(rle==3)
            hide();
    </script>
</div>

