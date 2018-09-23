<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
use yii\helpers\Html;

?>
<div class="site-index">

    <div class="body-content">

        <div class="row">
            <h2>Список всех авторов и их произведений:</h2>
            <ul>
                <?php foreach ($listAuthors as $raw): ?>
                    <li>
                        <?= Html::encode("$raw") ?>:
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </div>
</div>
