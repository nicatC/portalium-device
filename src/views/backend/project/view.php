<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use portalium\device\Module;
/* @var $this yii\web\View */
/* @var $model portalium\device\models\Project */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => Module::t('Projects'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="project-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'projectName',
            'device_id',
            'connType',
        ],
    ]) ?>

</div>