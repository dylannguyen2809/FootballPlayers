<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PlayerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="player-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'dob') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'playerID') ?>

    <?= $form->field($model, 'position') ?>

    <?= $form->field($model, 'rating') ?>

    <?php // echo $form->field($model, 'countryname') ?>

    <?php // echo $form->field($model, 'clubname') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
