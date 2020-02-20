<?php

namespace app\controllers;

use app\models\EntryForm;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class UserController extends Controller
{
    /**
     * Redirect to Register Page
     *
     * @return string
     */
    public function actionRegister()
    {
        return $this->render('register');
    }
}
