<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model imanilchaudhari\mongodb\admin\models\Menu */

$this->title = Yii::t('app', 'Update Menu') . ': ' . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="menu-update">

    <?= $this->render('_form', ['model' => $model])?>

</div>
