<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

/* @var $model app\models\LoginForm */
/* @var $form yii\widgets\ActiveForm */

?>
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model,'name'); ?>
<?= $form->field($model,'email'); ?>

    <div class="form-group">
        <?= Html::submitButton('Send', ['class' => 'btn btn-primary']) ?>
    </div>
<?php
$form::end();
?>