<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use portalium\device\Module;
/* @var $this yii\web\View */
/* @var $type portalium\device\models\Type */
/* @var $properties portalium\device\models\Properties */
/* @var $variable portalium\device\models\Variable*/
/* @var $form yii\widgets\ActiveForm */

$this->title = Module::t('Variable');

?>
<div class="variable-create">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_variable', [
        'variable' => $variable,
    ]) ?>

</div>
