<?php

/**
 * @package yii2-extentions
 * @license BSD-3-Clause
 * @copyright Copyright (C) 2012-2019 Sergio coderius <coderius>
 * @contacts sunrise4fun@gmail.com - Have suggestions, contact me :)
 * @link https://github.com/coderius - My github
 */
namespace coderius\dynamicDontentMenu;

use yii\base\Widget;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use Closure;

class Menu extends Widget
{
    /**
     * @var array the options for the JS plugin jquery-dynamic-content-menu.
     * Please refer to the JS plugin Web page for possible options.
     * @see https://github.com/coderius/jquery-dynamic-content-menu/blob/master/README.md
     */
    public $clientOptions = [];

    /**
     * @var array the HTML attributes for the menu wrapper tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = [];

    /**
     * Initializes the widget.
     * If you override this method, make sure you call the parent implementation first.
     */
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        parent::init();
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        $id = $this->options['id'];
        echo Html::tag('div', '', ['id' => $id]);

        $this->registerClientScript();
    }
    /**
     * Registers js plugin jquery-dynamic-content-menu
     */
    protected function registerClientScript()
    {
        $js = [];
        $view = $this->getView();
        MenuAsset::register($view);
        $id = $this->options['id'];
        $options = Json::encode($this->clientOptions);
        $js[] = "$('#{$id}').dynamicContentMenu($options);";
        $view->registerJs(implode("\n", $js));
    }

}