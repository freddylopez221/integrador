<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Estudiantessituacion */

$this->title = Yii::t('app', 'Create Estudiantessituacion');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Estudiantessituacions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estudiantessituacion-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
