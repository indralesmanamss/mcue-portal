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
  

    <div class="container w-xxl w-auto-xs" ng-controller="SignupFormController" ng-init="app.settings.container = false;">
        <a href="" class="navbar-brand block m-t">Angulr</a>
        <div class="m-b-lg">
            <div class="wrapper text-center">
              <strong>Sign up to find interesting thing</strong>
            </div>
                <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class' => 'form-validation', 'fieldConfig' => 
                        [
                            'options' => [
                                'tag' => false,
                            ],
                        ]
                    ]); 
                ?>
                    <div class="list-group list-group-sm">
                        <?= $form->field($model, 'username', ['template' => '<div class="list-group-item">{input}</div>{error}{hint}'])->textInput(['autofocus' => true, 'class' => 'form-control no-border', 'placeholder' => 'Username'])->label(false) ?>

                        <?= $form->field($model, 'email', ['template' => '<div class="list-group-item">{input}</div>{error}{hint}'])->textInput(['class' => 'form-control no-border', 'placeholder' => 'Email'])->label(false) ?>

                        <?= $form->field($model, 'password', ['template' => '<div class="list-group-item">{input}</div>{error}{hint}'])->passwordInput(['class' => 'form-control no-border', 'placeholder' => 'Password'])->label(false) ?>
                        
                        <br>
                        <?= Html::submitButton('Signup', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'signup-button']) ?>
                     
                    </div>
                <?php ActiveForm::end(); ?>
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
