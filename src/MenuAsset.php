<?php

/**
 * @package yii2-extentions
 * @license BSD-3-Clause
 * @copyright Copyright (C) 2012-2019 Sergio coderius <coderius>
 * @contacts sunrise4fun@gmail.com - Have suggestions, contact me :)
 * @link https://github.com/coderius - My github
 */

namespace coderius\dynamicDontentMenu;

use Yii;
use yii\web\AssetBundle;
/**
 * Asset bundle yii2-jquery-dynamic-content-menu
 */
class MenuAsset extends AssetBundle
{
    public $sourcePath = '@bower/jquery-dynamic-content-menu';
    
    public $css = [
        'jquery-dynamic-content-menu.css'
    ];
    
    public $js = [
        'jquery-dynamic-content-menu.js'
    ];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    
}

