<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Objetivodelplan */

$this->title = Yii::t('app', 'Create Objetivodelplan');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Objetivodelplans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="objetivodelplan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
