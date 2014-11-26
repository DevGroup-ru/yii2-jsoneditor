Jsoneditor Extension for Yii 2
==============================

This extension provides the [Jsoneditor](http://jsoneditoronline.org/) integration for the Yii2 framework.


Installation
------------

This extension requires [Jsoneditor](https://github.com/josdejong/jsoneditor/)

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist devgroup/yii2-jsoneditor "*"
```

or add

```
"devgroup/yii2-jsoneditor": "*"
```

to the require section of your composer.json.


General Usage
-------------

```php
use devgroup\jsoneditor\Jsoneditor;

Jsoneditor::widget(
    [
        'editorOptions' => [
            'modes' => ['code', 'form', 'text', 'tree', 'view'], // available modes
            'mode' => 'tree', // current mode
        ],
        'name' => 'editor', // input name. Either 'name', or 'model' and 'attribute' properties must be specified.
        'options' => [], // html options
    ]
)
```
