<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model imanilchaudhari\mongodb\admin\models\AuthItem */
/* @var $context imanilchaudhari\mongodb\admin\components\ItemController */

$context = $this->context;
$labels = $context->labels();
$this->title = Yii::t('app', 'Update ' . $labels['Item']) . ': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', $labels['Items']), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="auth-item-update">
    <?= $this->render('_form', ['model' => $model]);?>
</div>
