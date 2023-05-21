<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Profil075 $model */

$this->title = 'Create Profil075';
$this->params['breadcrumbs'][] = ['label' => 'Profil075s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil075-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
