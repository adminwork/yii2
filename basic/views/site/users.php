<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form ActiveForm */
?>
<div class="users">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'pass') ?>
        <?= $form->field($model, 'pass_confirm') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'age_user') ?>
        <?= $form->field($model, 'create_at') ?>
        <?= $form->field($model, 'update_at') ?>
        <?= $form->field($model, 'first_name') ?>
        <?= $form->field($model, 'last_name') ?>
        <?= $form->field($model, 'avatar') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- users -->
