<?php

namespace app\components;

use yii\web;

class AssetBundleSafe extends web\AssetBundle{
	public function publish($am)
	{
		parent::publish(\Yii::$app->assetManagerSafe);
	}
}