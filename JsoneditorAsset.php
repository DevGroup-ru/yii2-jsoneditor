<?php

namespace devgroup\jsoneditor;

use yii\web\AssetBundle;

class JsoneditorAsset extends AssetBundle
{
    public $sourcePath = '@bower/jsoneditor';
    public $js = [
        'jsoneditor.min.js'
    ];
    public $css = [
        'jsoneditor.min.css'
    ];
}
