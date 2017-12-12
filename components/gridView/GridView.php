<?php

namespace yuncms\supervisor\components\gridView;

/**
 * Class GridView
 * @package yuncms\supervisor\components\gridView
 */
class GridView extends \yii\grid\GridView
{
    /**
     * @var string Header title that will be displayed at top of table.
     */
    public $tableTitle;

    /**
     * @var string
     */
    public $beforeItems = '';

    public function init()
    {
        parent::init();

        $this->layout = $this->render('gridTemplate');
    }
}