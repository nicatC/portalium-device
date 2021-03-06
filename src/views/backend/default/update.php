<?php

use yii\helpers\Html;
use portalium\device\Module;

/* @var $this yii\web\View */
/* @var $model portalium\device\models\Device */
/* @var $tag portalium\device\models\Tag */

$this->params['breadcrumbs'][] = ['label' => Module::t('Devices'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Module::t('Update');
?>
<div class="device-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_device', [
        'model' => $model,
        'tag' => $tag,
        'tagProvider' => $tagProvider,
        'properties' => $properties,
        'propertiesProvider' => $propertiesProvider,
        'device' => $model->id
    ]) ?>

</div>
