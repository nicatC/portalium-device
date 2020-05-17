<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use portalium\device\Module;
use portalium\device\models;
use dosamigos\selectize\SelectizeTextInput;
/* @var $this yii\web\View */
/* @var $type portalium\device\models\Type */
/* @var $form yii\widgets\ActiveForm */
/* @var $tag portalium\device\models\Tag */
?>

<div class="type-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($tag, 'name')->widget(SelectizeTextInput::className(), [
        // calls an action that returns a JSON object with matched
        // tags
        'loadUrl' => ['tag/list'],
        'options' => ['class' => 'form-control'],
        'clientOptions' => [
            'plugins' => ['remove_button'],
            'valueField' => 'Tag',
            'labelField' => 'Tag',
            'searchField' => ['Tag'],
            'create' => true,
        ],
    ])->hint('Tagleri ekleyiniz') ?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('Save'), ['view'],['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>