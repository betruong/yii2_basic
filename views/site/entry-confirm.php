<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Content</label>: <?= Html::encode($model->content) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>