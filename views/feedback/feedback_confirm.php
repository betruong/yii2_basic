<?php
	use yii\heplpers\Html;
	$title = "FEEDBACK OF USER";
	$alert ="Feedback sent to admin! Thank you "
?>
	<h1><?= Html::encode($title) ?><h1>
	<p><?= Html::encode($alert) ?></p>

	<?=Html::a('Send another feedback',['index'],['class'=>'btn btn-primary']) ?>