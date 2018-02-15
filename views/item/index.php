<?php

use yii\helpers\Html;
use yii\grid\GridView;
use imanilchaudhari\mongodb\admin\components\RouteRule;
use imanilchaudhari\mongodb\admin\components\Configs;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel imanilchaudhari\mongodb\admin\models\searchs\AuthItem */
/* @var $context imanilchaudhari\mongodb\admin\components\ItemController */

$context = $this->context;
$labels = $context->labels();
$this->title = Yii::t('app', $labels['Items']);
$this->params['breadcrumbs'][] = $this->title;

$rules = array_keys(Configs::authManager()->getRules());
$rules = array_combine($rules, $rules);
unset($rules[RouteRule::RULE_NAME]);
?>
<div class="role-index">
    <p>
        <?= Html::a(Yii::t('app', 'Create ' . $labels['Item']), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?=
    GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'attribute' => 'name',
                'label' => Yii::t('app', 'Name'),
            ],
            [
                'attribute' => 'ruleName',
                'label' => Yii::t('app', 'Rule Name'),
                'filter' => $rules
            ],
            [
                'attribute' => 'description',
                'label' => Yii::t('app', 'Description'),
            ],
            ['class' => 'yii\grid\ActionColumn',],
        ],
    ])
    ?>

</div>
