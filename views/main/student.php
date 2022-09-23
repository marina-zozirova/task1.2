<?php
    use yii\helpers\Html;
    use yii\bootstrap5\ActiveForm;
?>

<?php 
    $form = ActiveForm::begin();
?>

<?= $form->field($model, 'surname') ?>
<?= $form->field($model, 'firstName') ?>
<?= $form->field($model, 'patronymic') ?>
<?= $form->field($model, 'dateOfBirth')->textInput(['type' => 'date']); ?>
<?= $form->field($model, 'address') ?>
<?= $form->field($model, 'number') ?>

<div class="form-group">
    <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
</div>

<?php ActiveForm::end(); ?>
