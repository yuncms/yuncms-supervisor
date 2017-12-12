<?php

namespace yuncms\supervisor\assets;

use yii\web\AssetBundle;

class SupervisorAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@yuncms/supervisor/views/assets';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/main.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
    ];
}