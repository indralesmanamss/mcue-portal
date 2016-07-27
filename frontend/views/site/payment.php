<?php
$session = Yii::$app->session;
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Html version | Angulr</title>
        <meta name="description" content="app, web app, responsive, responsive layout, admin, admin panel, admin dashboard, flat, flat ui, ui kit, AngularJS, ui route, charts, widgets, components">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="libs/assets/animate.css/animate.css" type="text/css">
        <link rel="stylesheet" href="libs/assets/font-awesome/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="libs/assets/simple-line-icons/css/simple-line-icons.css" type="text/css">
        <link rel="stylesheet" href="libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css">

        <link rel="stylesheet" href="css/font.css" type="text/css">
        <link rel="stylesheet" href="css/app.css" type="text/css">
    </head>
<body>
<?php $this->beginBody() ?>
<div class="app app-header-fixed ">
    <div class="wrapper-md container">
        <div class="row">
            <div class="col-xs-12">
                <h1 class="text-center font-thin h3 text-black">SELECT PAYMENT</h1>
            </div>
        </div>
        <br>
        <div class="row row-sm text-center">
            <div class="col-xs-6">
              <a href="" class="block panel padder-v bg-info item">
                <div class="text-white font-thin h1 block">Paypal</div>
                <div class="top text-right w-full">
                  <i class="fa fa-caret-down text-warning m-r-sm"></i>
                </div>
              </a>
            </div>
            <div class="col-xs-6">
              <a href="veritrans/test.php?name=<?php echo $session->get('name');?>&price=<?php echo $session->get('price');?>" class="block panel padder-v item">
                <div class="h1 text-info font-thin h1">Other Payment</div>
                <div class="top text-right w-full">
                  <i class="fa fa-caret-down text-warning m-r-sm"></i>
                </div>
              </a>
            </div>
        </div>
    </div>
</div>
<script src="libs/jquery/jquery/dist/jquery.js"></script>
<script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/ui-client.js"></script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
