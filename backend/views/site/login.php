<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="app app-header-fixed ">
    <div class="container w-xxl w-auto-xs" ng-controller="SigninFormController" ng-init="app.settings.container = false;">
        <a href class="navbar-brand block m-t">MCUE10</a>
        <div class="m-b-lg">
            <div class="wrapper text-center">
                <strong>Sign in to get in touch</strong>
            </div>
            
            <?php $form = ActiveForm::begin(['id' => 'login-form','class' => 'form-validation']); ?>

                <div class="text-danger wrapper text-center" ng-show="authError"></div>
                <div class="list-group list-group-sm">
                    <div class="list-group-item">
                        <?= $form->field($model, 'username',
                            [
                                'labelOptions' => [
                                    'class' => 'form-control no-border'
                                ]
                            ])->textInput(['autofocus' => true])->label(false); 
                        ?>
                    </div>
                    <div class="list-group-item">
                        <?= $form->field($model, 'password',
                            [
                                'labelOptions' => [
                                    'class' => 'form-control no-border'
                                ]
                            ])->passwordInput()->label(false); 
                        ?>
                    </div>
                </div>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <?= Html::submitButton('Log in', ['class' => 'btn btn-lg btn-primary btn-block', 'name' => 'login-button']) ?>

                <div class="text-center m-t m-b"><a ui-sref="access.forgotpwd">Forgot password?</a></div>
                <div class="line line-dashed"></div>

            <?php ActiveForm::end(); ?>
        </div>
        <div class="text-center" ng-include="'tpl/blocks/page_footer.html'">
            <p><small class="text-muted">Web app framework base on Bootstrap and AngularJS<br>&copy; 2014</small></p>
        </div>
    </div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
