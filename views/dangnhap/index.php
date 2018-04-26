

<?php
//su dung ActiveForm
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<?php $form = ActiveForm::begin() ?>

<?= $form->field($model, 'user_name')->textInput(['placeholder'=>'Nhập tài khoản'])?>
<?= $form->field($model, 'password')->passwordInput(['placeholder'=>'Nhập password'])?>
<?= Html::submitButton('Dang nhap',['class'=>'btn btn-primary'])?>
<?php ActiveForm::end() ?>