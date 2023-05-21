<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Profil075 $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="profil075-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_mahasiswa')->textInput() ?>

    <?= $form->field($model, 'foto_profil')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
