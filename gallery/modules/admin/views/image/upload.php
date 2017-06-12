<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Image */

$this->title = 'Upload Image';
$this->params['breadcrumbs'][] = ['label' => 'Images', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="image-upload">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php if($model->file): ?>
        <img src="/uploads/<?= $model->file?>" alt="">
    <?php endif; ?>

    <div class="image-form">

        <?php $form = ActiveForm::begin([
            'options' => ['enctype' => 'multipart/form-data']
        ]);
        ?>

        <?= $form->field($model, 'file')->fileInput(); ?>

        <div class="form-group">
            <?= Html::submitButton('Upload', ['class' => 'btn btn-success']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>


</div>
