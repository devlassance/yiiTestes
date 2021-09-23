<?php 

?>
<!--Imprimindo na tela a variável vindo do controller -->
<!-- O helper evita ataques xss -->
<h2><?= \yii\helpers\Html::encode($message); ?></h2>