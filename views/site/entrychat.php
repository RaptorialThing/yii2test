 <?php

/* @var $this yii\web\View */
// use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\ActiveForm; 

$this->title = 'My Yii Application';

// echo Url::to(['chat']);
?>
<div class="site-index">


    <div class="body-content">

        <div class="row">
           <div class="col-lg-12">
            <p>Вот это chat form</p>
			<?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model,'chatname')->textInput(); ?>
                <?= $form->field($modelMessage, 'messagetext')->textarea(["rows"=>5]); ?>

                <div class="form-group">
                    <?= Html::submitButton('Отправить',['class' => 
                    'btn btn-primary']) ?>
                </div>
            <?php ActiveForm::end(); ?>           
                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
           </div>
        </div>
    </div>

</div>

