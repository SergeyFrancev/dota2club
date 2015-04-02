<?php
use yii\helpers\Html;
use app\assets;

/* @var $this yii\web\View */

assets\ReactApp::register($this);
$this->title = 'React';
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>
    <div id="example"></div>
</div>
