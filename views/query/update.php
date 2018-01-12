<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Query */

$this->title = 'Редактирование запроса';
$this->params['breadcrumbs'][] = ['label' => 'Запросы копирайтеров', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактирование запроса';
?>
<div class="query-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
