<?php
/**
 * Created by PhpStorm.
 * User: Loner
 * Date: 20.01.2018
 * Time: 11:24
 */

namespace app\assets;


use yii\web\AssetBundle;

class ltAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $js = [
   'js/html5shiv.js',
   'js/respond.min.js',
    ];

    public $jsOptions = [
        'condition' =>'lte IE9',
        'position'=> \yii\web\View::POS_HEAD,
    ];
}