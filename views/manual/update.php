<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Manual */

$this->title = "Редактирование инструкция: $model->name";
$this->params['breadcrumbs'][] = ['label' => 'Manuals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="manual-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>