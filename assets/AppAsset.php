<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        
        'libs/bootstrap.min.css',
        'libs/normalize.css',
        'fonts/fontawesome-free-5.10.2-web/css/all.css',
        'css/style.css',
        
        
    ];
    public $js = [
        'js/jquery-3.4.1.min.js',
        'js/jquery.shorten.js',
        
        'js/script.js',
    
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
