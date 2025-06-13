<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\ApplicationModel $model */
/** @var ActiveForm $form */
?>
<div class="application">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'description') ?>
        <?= $form->field($model, 'income') ?>
        <?= $form->field($model, 'number_of_dependents') ?>
        <?= $form->field($model, 'updated_at') ?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'data_of_birth') ?>
        <?= $form->field($model, 'created_at') ?>
        <?= $form->field($model, 'id')->hiddenInput()->label(false) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- application -->
