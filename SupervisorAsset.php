<?php

namespace supervisormanager;

use yii\web\AssetBundle;

class SupervisorAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@supervisormanager/assets';

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