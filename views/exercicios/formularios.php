<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>

<h1>Formulários de cadastro</h1>
<hr>
<!--Definindo o form e os campos com base na variavel enviada 'model' e usando o ActiveForm do bootstrap -->
<?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'nome') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'idade') ?>
    <div class="form-group">
        <?= Html::submitButton('Enviar dados', ['class'=>'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>