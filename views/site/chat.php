<?php

/* @var $this yii\web\View */
// use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm; 

$this->title = 'My Yii Application';

// echo Url::to(['show']);

?>
<div class="site-index">


    <div class="body-content">

        <div class="row">
           <div class="col-lg-12">
            <p>Вот это chat form</p>
            <ul>
                <li><label>ChatName</label>: <?= Html::encode($model->chatname) ?> </li>
                <li><label>ChatMessage</label>: <?= Html::encode($modelMessage->messagetext) ?> </li>
            </ul>            
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
           </div>
        </div>
    </div>

</div>
<!-- <?php
// use Yii;
// var_dump(Yii::$app->request->post());

?>  -->
