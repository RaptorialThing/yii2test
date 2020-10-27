<?php

/* @var $this yii\web\View */
// use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm; 

$this->title = 'My Yii Application';

// echo Url::to(['chat/show']);
?>
<div class="site-index">


    <div class="body-content">

        <div class="row">
           <div class="col-lg-12">
            <p>Вот это messages</p>
            <ul>
            <?php foreach ($messages as $message) { ?>
                <?php if (!is_null($message->messagetext)) { ?>
                <li><label>Message</label>: <?= Html::encode($message->messagetext)?>
                <label>from chat</label>: <?= Html::encode($chats[$message->chat_id])?>
                </li>
            <?php }}
            ?> 
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
