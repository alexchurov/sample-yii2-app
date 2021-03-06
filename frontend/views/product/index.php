<?php

use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProductSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Products';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="product-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= ListView::widget([
        'dataProvider' => $dataProvider,
        'itemOptions' => ['class' => 'item'],
        'itemView' => function ($model, $key, $index, $widget)
        {
            return Html::a(Html::encode($model->name), ['view', 'id' => $model->id])." $model->price руб.";
        },
        'layout' => "{sorter}\n{items}\n{pager}"
    ]) 
    ?>
</div>
