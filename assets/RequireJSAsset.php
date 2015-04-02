<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use app\components\AssetBundleSafe;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class RequireJSAsset extends AssetBundleSafe
{
    public $sourcePath = '@bower/requirejs';
    public $css = [
    ];
    public $js = [
        'require.js',
    ];
    public $depends = [
    ];
	public $jsOptions = [
		'data-main' => 'js',
	];
}
