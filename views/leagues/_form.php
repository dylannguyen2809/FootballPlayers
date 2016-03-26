<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Leagues */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="leagues-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'leaguename')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'division')->textInput() ?>

    <?= $form->field($model, 'countryname')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
