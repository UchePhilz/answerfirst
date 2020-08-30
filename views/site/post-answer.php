<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Answers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="answers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'answer')->textarea(['rows' => 6,'class'=>'content form-control']) ?>

    <?= $form->field($model, 'question')->textarea(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script>
    $(document).ready(function () {
        $('.content').richText();
    });
</script>