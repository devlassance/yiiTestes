<?php

namespace app\controllers;

use yii\web\Controller;


class HelloController extends Controller
{
    public function actionSaySomething($message = 'Hello'){
        //renderizando o controller e passando uma variavel
        return $this->render('say-something', [
            'message' => $message
        ]);
    }
}