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
 * Asset bundle jQCloudAsset
 */
class MenuAsset extends AssetBundle
{
    public $sourcePath = '';
    
    public $css = [];
    
    public $js = [];
    
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    
    
}

