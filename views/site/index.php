<?php
use yii\helpers\Html;
use app\assets;

/* @var $this yii\web\View */

assets\AppAsset::register($this);
assets\ReactApp::register($this);
assets\RxApp::register($this);

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <div id="content"></div>
</div>
