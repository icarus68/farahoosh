<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
$this->title = 'سیستم تجمیع اطلاعات فراهوش - صفحه ورود';

?>
<div class="container">
    
    <?php 
        $form = ActiveForm::begin([
        'id' => 'active-form',
        'options' => [
                'class' => 'form-signin',
                    ],
         ])
    ?>
        <h4 class="form-signin-heading text-center">فراهوش .::. صفحه ورود</h4>
        <br/>
        <?= Html::activeLabel($model, 'username', [
        'label'=>'آدرس ایمیل', 
        ]) ?>
    	<?= $form->field($model,'username')->input('email', ['placeholder' => "آدرس ایمیل",'autofocus' => 'autofocus','style'=>'text-align: center'],['class'=>'form-control sr-only'])->label(false); ?>
        <?php
        //Html::activeLabel($model,'password',['class'=>'sr-only']);
        ?>
        <?= Html::activeLabel($model, 'password', [
        'label'=>'کلمه عبور', 
        ]) ?>
        <?= $form->field($model, 'password')->input('password', ['placeholder' => "کلمه عبور",'style'=>'text-align: center'],['class'=>'form-control sr-only'])->label(false); ?>
        
            
            <?= $form->field($model, 'verifyCode')->widget(yii\captcha\Captcha::className(), [
                    'template' => '<span class="form-control d-b clear"><strong>تصویر امنیتی:</strong>{image}</span>{input}',
                    'imageOptions' => ['class'=>'square',/*'style'=>'height:75px;'*/],
                    'options' => ['placeholder' => "کد امنیتی را وارد نمایید",'class'=>'form-control' , 'required' => 'required'],
                ]) ?>
        <br/>
        <?= Html::submitButton('ورود', ['class' => 'btn btn-lg btn-primary btn-block']) ?>
    <?php 
        ActiveForm::end(); 
    ?>
</div> <!-- /container -->