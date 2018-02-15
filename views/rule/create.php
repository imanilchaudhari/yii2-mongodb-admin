<?php

use yii\helpers\Html;

/* @var $this  yii\web\View */
/* @var $model imanilchaudhari\mongodb\admin\models\BizRule */

$this->title = Yii::t('app', 'Create Rule');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create">

    <?= $this->render('_form', ['model' => $model]);?>

</div>
