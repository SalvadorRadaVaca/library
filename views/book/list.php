<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;

?>

<h1>Books for sale</h1>
<div class="row">

<?php foreach($books as $book): ?>

    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <a href="#" class="thumbnail">

            <?= Html::img($book->image); ?>
            <br/>
            <?= Html::encode("{$book->title}") ?>
        </a>
    </div>

<?php endforeach; ?>

</div>

<?= LinkPager::widget(['pagination' => $pagination]) ?>