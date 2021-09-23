<?php
namespace app\controllers;

use yii\base\Controller;
use app\models\CadastroModel;
use Yii;

class ExerciciosController extends Controller
{   
    public function actionFormulario(){
        $cadastroModel = new CadastroModel;
        //Pegando os request posts
        $post = Yii::$app->request->post();

        //carregando os dados post para dentro do model, e validando conforme as especificações passados dentro do model
        if($cadastroModel->load($post) && $cadastroModel->validate()){
            //passando essas informações para a nova view
            return $this->render('formularios-confirmacao', [
                'model' => $cadastroModel
            ]);
        }

        return $this->render('formularios', [
            'model' => $cadastroModel
        ]);
    }
}