<?php 
use \yii\widgets\LinkPager;
?>
<h1>Pessoas</h1>
<hr>

<ul>
    <?php foreach($pessoas as $pessoa): ?>
        <li><?= $pessoa->nome.' - '.$pessoa->email; ?></li>
    <?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]); ?>