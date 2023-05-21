<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil075 $model */

$this->title = 'Update Profil075: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Profil075s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil075-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
