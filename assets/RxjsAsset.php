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
class RxjsAsset extends AssetBundleSafe
{
    public $sourcePath = '@bower/rxjs';
    public $css = [
    ];
    public $js = [
        'dist/rx.all.js',
    ];
    public $depends = [
    ];
}
