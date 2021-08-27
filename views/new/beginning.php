<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<?php

if($message) {

    echo Html::tag('div', Html::encode($message), ['class' => 'alert alert-danger']);
}

?>

Hello User

<?php $form=ActiveForm::begin(); ?>

<?= $form->field($model, 'valuea') ?>

<?= $form->field($model, 'valueb') ?>

<div class="form-group">

<?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>

</div>

<?php ActiveForm::end(); ?>