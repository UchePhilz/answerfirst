<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web'); ?>/assets/anserfirst/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= Yii::getAlias('@web'); ?>/assets/anserfirst/font-awesome/css/font-awesome.min.css" />

        <script type="text/javascript" src="<?= Yii::getAlias('@web'); ?>/assets/anserfirst/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?= Yii::getAlias('@web'); ?>/assets/anserfirst/bootstrap/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="<?= Yii::getAlias('@web'); ?>/assets/richtext/richtext.min.css">
        <script type="text/javascript" src="<?= Yii::getAlias('@web'); ?>/assets/richtext/jquery.richtext.js"></script>
    </head>
    <body>

        <div class="container">

            <div class="page-header">
                <h1>Answer First <small>Unlimited answers to question</small></h1>
            </div>

            <!-- Bootstrap FAQ - START -->
            <div class="container">
                <br />
                <br />
                <br />
                <div class="alert alert-info alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <h4>Post answers to questions not asked yet, or make a version of your answer to a question</h4>
                </div>

                <br />

                <?= $content ?>
            </div>

            <style>
                .faqHeader {
                    font-size: 27px;
                    margin: 20px;
                }

                .panel-heading [data-toggle="collapse"]:after {
                    font-family: 'Glyphicons Halflings';
                    content: "\e072"; /* "play" icon */
                    float: right;
                    color: #F58723;
                    font-size: 18px;
                    line-height: 22px;
                    /* rotate "play" icon from > (right arrow) to down arrow */
                    -webkit-transform: rotate(-90deg);
                    -moz-transform: rotate(-90deg);
                    -ms-transform: rotate(-90deg);
                    -o-transform: rotate(-90deg);
                    transform: rotate(-90deg);
                }

                .panel-heading [data-toggle="collapse"].collapsed:after {
                    /* rotate "play" icon from > (right arrow) to ^ (up arrow) */
                    -webkit-transform: rotate(90deg);
                    -moz-transform: rotate(90deg);
                    -ms-transform: rotate(90deg);
                    -o-transform: rotate(90deg);
                    transform: rotate(90deg);
                    color: #454444;
                }
            </style>

            <!-- Bootstrap FAQ - END -->

        </div>

    </body>
</html>