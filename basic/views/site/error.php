<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>
<section id="main">
    <div class="inner">
        
        <header>
            <h1><?= Html::encode($this->title) ?></h1>
            <p class="info"><?= nl2br(Html::encode($message)) ?></p>
        </header>
        <div class="image fit">
            <img src="<?=Yii::getAlias('@web')?>/public/images/error.jpg" alt="" />
        </div>

        <p>
            The above error occurred while the Web server was processing your request.
        </p>
        <p>
            Please contact us if you think this is a server error. Thank you.
        </p>
    </div>
</section>
