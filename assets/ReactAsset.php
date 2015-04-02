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
class ReactAsset extends AssetBundleSafe
{
    public $sourcePath = '@bower/react';
    public $css = [
    ];
    public $js = [
        'react.js',
        'JSXTransformer.js',
    ];
    public $depends = [
    ];
}
