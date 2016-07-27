<?php

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
 
  <h2 class="font-thin m-b-lg">Combine</h2>

  <div class="row no-gutter">
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading wrapper-xs bg-primary no-border">          
        </div>
        <div class="wrapper text-center b-b b-light">
          <h4 class="text-u-c m-b-none">Start</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">Rp</sup>
            <span class="text-2x text-lt">150k</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free support for two years</span>
          </li>
          <li class="list-group-item">
            <i class="icon-close text-danger m-r-xs"></i> <span class="text-l-t">Free upgrade for one year</span>
          </li>
        </ul>
        <div class="panel-footer text-center">
            <a href="index.php?r=site/price-session&name=start&value=150000" class="btn btn-primary font-bold m">Choose</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="panel b-a m-t-n-md m-b-xl">
        <div class="panel-heading wrapper-xs bg-warning dker no-border">
          
        </div>
        <div class="wrapper bg-warning text-center m-l-n-xxs m-r-n-xxs">
          <h4 class="text-u-c m-b-none">Premium</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">Rp</sup>
            <span class="text-2x text-lt">200k</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 100 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 200 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free support for two years
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free upgrade for one year
          </li>
        </ul>
        <div class="panel-footer text-center b-t m-t bg-light lter">
          <div class="m-t-sm">Recommanded for you</div>
            <a href="index.php?r=site/price-session&name=premium&value=200000" class="btn btn-primary font-bold m">Choose</a>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6">
      <div class="panel b-a">
        <div class="panel-heading wrapper-xs bg-primary no-border">          
        </div>
        <div class="wrapper text-center b-b b-light">
          <h4 class="text-u-c m-b-none">Business</h4>
          <h2 class="m-t-none">
            <sup class="pos-rlt" style="top:-22px">Rp</sup>
            <span class="text-2x text-lt">250k</span>
          </h2>
        </div>
        <ul class="list-group text-center no-borders m-t-sm">
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Email preview on air
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Spam testing and blocking
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 500 GB Space
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> 1000 user accounts
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free support for two years
          </li>
          <li class="list-group-item">
            <i class="icon-check text-success m-r-xs"></i> Free upgrade for one year
          </li>
        </ul>
        <div class="panel-footer text-center">
            <a href="index.php?r=site/price-session&name=business&value=250000" class="btn btn-primary font-bold m">Choose</a>
        </div>
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
