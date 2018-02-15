<?php

namespace imanilchaudhari\mongodb\admin;

use yii\web\AssetBundle;

/**
 * Description of AnimateAsset
 *
 * @author Anil Chaudhari <imanilchaudhari@gmail.com>
 * @since 2.5
 */
class AnimateAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@imanilchaudhari/mongodb/admin/assets';
    /**
     * @inheritdoc
     */
    public $css = [
        'animate.css',
    ];

}
