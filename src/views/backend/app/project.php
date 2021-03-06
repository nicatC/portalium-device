<?php

use portalium\device\models\ProjectAppRelation;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use portalium\device\Module;
use portalium\device\models;
use portalium\theme\widgets\GridView;
/* @var $this yii\web\View */
/* @var $type portalium\device\models\Type */
/* @var $form yii\widgets\ActiveForm */
/* @var $model portalium\device\models\Project */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(['action' => Url::toRoute(['app/updateproject','id' => $app])]); ?>

    <?= $form->field($appprojects, 'project_id')->dropDownList($items,['prompt'=>''])->label('')?>

    <div class="form-group">
        <?= Html::submitButton(Module::t('Add'), ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <?=GridView::widget([
        'dataProvider' => $provider,
        'summary'=> false,
        'columns' => [

            'name',
            'app_config',

            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Actions',
                'headerOptions' => ['style' => 'color:#337ab7'],
                'template' => '{view}{update}{delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', Url::toRoute(['project/view','id' => $model->id]), [
                            'title' => Module::t('project-view'),
                        ]);
                    },
                    'update' => function ($url, $model) {
                        return Html::a('<span class="glyphicon glyphicon-pencil"></span>', Url::toRoute(['project/manage','id' => $model->id]), [
                            'title' => Module::t('project-update'),
                        ]);
                    },
                    'delete' => function($url, $model){
                        return Html::a('<span class="glyphicon glyphicon-trash"></span>', ['delete', 'id' => $model->id], [
                            'class' => '',
                            'data' => [
                                'confirm' => 'Are you absolutely sure ? You will lose all the information about this user with this action.',
                                'method' => 'post',
                            ],
                        ]); }
                ],
            ],
        ],
    ]); ?>

</div>
