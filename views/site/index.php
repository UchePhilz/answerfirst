<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\AnswersSearch */
/* @var $models[] app\models\Answers */

$this->title = 'Home';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="panel-group" id="accordion">
    <div class="faqHeader">General questions</div>
    <a href="<?= Yii::getAlias('@web'); ?>/site/post-answer" class="btn btn-info">Have an Answer?</a>
    <?php
    $row = 0;
    foreach ($models as $model) {
        ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a class="accordion-toggle <?= ($row == 0) ? '' : 'collapsed' ?>" data-toggle="collapse" data-parent="#accordion" href="#collapse<?= $model->id ?>"><?= $model->question ?></a>
                </h4>
            </div>
            <div id="collapse<?= $model->id ?>" class="panel-collapse collapse <?= ($row == 0) ? 'in' : '' ?>">
                <div class="panel-body">
    <?= $model->answer ?>
                </div>
            </div>
        </div>
        <?php $row++;
    } ?>
    <?php
    echo \yii\widgets\LinkPager::widget([
        'pagination' => $pages,
    ]);
    ?>
</div>
