<?php
namespace app\controllers;

use yii\base\Controller;
use app\models\CadastroModel;
use app\models\Pessoas;
use Yii;
use yii\data\Pagination;

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

    public function actionPessoas(){
        //pegando todas as pessoas
        #$pessoas = Pessoas::find()->orderBy('nome')->all();

        //Buscando por um id e salvando um nome diferente
        #$pessoas = Pessoas::findOne(1);
        #$pessoas->nome = "Teste2";
        #$pessoas->save();

        $query = Pessoas::find();

        //fazendo configuração de paginação
        $pagination = new Pagination([
            'defaultPageSize' => 3,
            'totalCount' => $query->count()
        ]);
        //definindo uma paginação dos resultados do banco
        $pessoas = $query->orderBy('nome')
        ->offset($pagination->offset)
        ->limit($pagination->limit)
        ->all();

        return $this->render('pessoas', [
            'pessoas' => $pessoas,
            'pagination' => $pagination
        ]);
    }
}        