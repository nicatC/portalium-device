<?php

namespace portalium\device\controllers\backend;

use Yii;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use portalium\web\Controller as WebController;

class DefaultController extends WebController
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}