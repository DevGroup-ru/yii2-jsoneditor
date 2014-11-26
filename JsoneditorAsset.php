<?php

namespace devgroup\jsoneditor;

use yii\web\AssetBundle;

class JsoneditorAsset extends AssetBundle
{
    public $sourcePath = '@bower/jsoneditor';
    public $js = [
        'assets/jsoneditor.min.js'
    ];
    public $css = [
        'assets/jsoneditor.min.css'
    ];
}
