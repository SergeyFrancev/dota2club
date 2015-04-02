<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class ReactApp extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/reactApp.js',
    ];
    public $jsOptions = [
        'type' => 'text/jsx',
    ];
    public $depends = [
        'app\assets\ReactAsset',
        'app\assets\RxjsAsset',
    ];
}
