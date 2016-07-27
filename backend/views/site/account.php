<?php
  use kartik\widgets\Growl;
  use yii\helpers\Html;
  use yii\helpers\ArrayHelper;
  use yii\bootstrap\ActiveForm;
  use common\models\User;

?>
<div class="wrapper-md">
  
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      Edit Account
    </div>
    <div class="panel-body">    
    
    <?php 

      $form = ActiveForm::begin(
          [
            'id' => 'contact-form',
            'options' =>  
            [
              'enctype' => 'multipart/form-data',
              'class' => 'form-horizontal',
              
            ]
          ]
      ); 
    ?>


    <?= $form->field($model, 'fname', 
        [
          'labelOptions' => [
              'class' => 'col-sm-2 control-label'
          ],
          'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
        ])->textInput(['autofocus' => true])->label('First Name');
    ?>

    <?= $form->field($model, 'lname', 
            [
                'labelOptions' => [
            'class' => 'col-sm-2 control-label'
        ],
        'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
      ])->label('Last Name');
    ?>

    <?php
        if (User::isUserParticipant(Yii::$app->user->identity->username) || User::isUserSpeaker(Yii::$app->user->identity->username)) {
    ?>
          <?= $form->field($model, 'address', 
              [
                'labelOptions' => [
                  'class' => 'col-sm-2 control-label'
              ],
              'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
            ])->label('Address');
          ?>

          <?= $form->field($model, 'country', 
                  [
                      'labelOptions' => [
                  'class' => 'col-sm-2 control-label'
              ],
              'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
            ])->label('Country');
          ?>
          
          <?= $form->field($model, 'zip_code', 
                  [
                      'labelOptions' => [
                  'class' => 'col-sm-2 control-label'
              ],
              'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
            ])->label('Zip Code');
          ?>
    <?php
        } else {
          
        }
    ?>

    <?= $form->field($model, 'imageFile',
      [
        'labelOptions' => [
          'class' => 'col-lg-2 control-label'
        ],
        'inputOptions' => [
          'ui-jq' => 'filestyle',
          'data-icon' => 'false',
          'data-classButton' => 'btn btn-default',
          'data-classInput' => 'form-control inline v-middle input-s'
        ],
        'template' => '{label}<div class="col-lg-4"><div class="img-preview"><img src="'.$model->img_url.'"></div>{input}{error}{hint}</div>'
      ])->fileInput()->label('Photo')
    ?>
    
    
    <div class="form-group">
            <div class="col-lg-offset-2 col-lg-10">
                <?= Html::submitButton('Simpan', ['class' => 'btn btn-primary', 'name' => 'action']) ?>
            </div>
        </div>

        <?php 
          $form = ActiveForm::end();
        ?>
      
    </div>
  </div>
</div>