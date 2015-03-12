<?php
/**
 * Created by PhpStorm.
 * User: chencheng
 * Date: 14-12-12
 * Time: 下午12:00
 */
namespace azlar\adminLTE;

use yii\web\AssetBundle;

class AdminLTEAsset extends AssetBundle
{
    public $sourcePath = '@bower/admin-lte/source';
    public $js = [
        'js/admin-lte.js',
    ];
    public $css = [
        'css/admin-lte.css',
    ];
    public $depends = [
        'azlar\adminLTE\BootstrapPluginAsset',
    ];
}