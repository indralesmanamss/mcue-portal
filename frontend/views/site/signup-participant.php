<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

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
  

    <div class="container">
        <a href="" class="navbar-brand block">Angulr</a>
        <div class="wrapper text-center">
            <strong>Sign up to find interesting thing</strong>
        </div>
        <div class="row">
            <div class="col-xs-offset-2 col-xs-8 col-xs-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <?php $form = ActiveForm::begin(['id' => 'form-signup']);?>
                            <div class="row">
                                <div class="col-xs-12">
                                    <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => 'Username'])->label('Username') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <?= $form->field($model, 'fname')->textInput(['placeholder' => 'First Name'])->label('First Name') ?>
                                </div>
                                <div class="col-xs-6">
                                    <?= $form->field($model, 'lname')->textInput(['placeholder' => 'Last Name'])->label('Last Name') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <?= $form->field($model, 'email')->textInput(['placeholder' => 'Enter Email'])->label('Email') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <?= $form->field($model, 'password')->passwordInput(['placeholder' => 'Enter Password'])->label('Password') ?>
                                </div>
                                <div class="col-xs-6">
                                    <?= $form->field($model, 'confirmPassword')->passwordInput(['placeholder' => 'Confirm Password'])->label('Confirm Password') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <?= $form->field($model, 'address')->textInput(['placeholder' => 'Address'])->label('Address') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <?= $form->field($model, 'country')->textInput(['placeholder' => 'Country'])->label('Country') ?>
                                </div>
                                <div class="col-xs-6">
                                    <?= $form->field($model, 'zipCode')->textInput(['placeholder' => 'Zip Code'])->label('Zip Code') ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <?= $form->field($model, 'captcha')->widget(Captcha::className()) ?>
                                </div>
                            </div>
                            <?= $form->field($model, 'role')->hiddenInput(['value'=> 20])->label(false); ?>
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-lg m-t m-b btn-primary btn-block">Sign Up</button>
                            </div>
                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
            <p><small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>© 2014</small></p>
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
