<?php
  use yii\helpers\Html;
  use yii\helpers\ArrayHelper;
  use yii\bootstrap\ActiveForm;
?>
<div class="wrapper-md">
  <div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <select name="account" class="form-control m-b" id="select-new-post">
              <option value="1">Home</option>
              <option value="2">About MCUE</option>
              <option value="3">Organizing Commitee</option>
              <option value="4">Sponsorship</option>
              <option value="5">Schedule</option>
              <option value="6">Transportation</option>
              <option value="7">Hotel</option>
              <option value="8">Tourism Destinantion</option>
              <option value="9">Culinary</option>
            </select>
        </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading font-bold">
      New Post for <span id="title-post"></span>
    </div>
    <div class="panel-body">

      <!--- Form Tourism Destination -->

      <?php
        $form = ActiveForm::begin(
            [
              'id' => 'form-tourism-destination',
              'options' =>  
              [
                'enctype' => 'multipart/form-data',
                'class' => 'form-horizontal new-post',
                
              ]
            ]
        );
      ?>

      <?=

        $form->field($tourism_destination, 'title', 
            [
                'labelOptions' => [
                  'class' => 'col-sm-2 control-label'
            ],
            'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
        ])->textInput()->label('Title *')

      ?>

      <?=
        $form->field($tourism_destination, 'content', 
            [
                'labelOptions' => [
                'class' => 'col-sm-2 control-label'
            ],
            'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
        ])->textArea(['rows' => '6'])->label('Content *')
      ?>
      
      <?=
        $form->field($tourism_destination, 'imageFile',
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
            'template' => '{label}<div class="col-lg-4"><div class="img-preview"><img src=""></div>{input}{error}{hint}</div>'
          ])->fileInput()->label('Image *')
      ?>

      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <?= Html::submitButton('Post', ['class' => 'btn btn-primary', 'name' => 'action']) ?>
        </div>
      </div>

      <?php
        $form = ActiveForm::end();
      ?>


      <!--- Culinary Form -->

      <?php
        $form = ActiveForm::begin(
            [
              'id' => 'form-culinary',
              'options' =>  
              [
                'enctype' => 'multipart/form-data',
                'class' => 'form-horizontal new-post',
                
              ]
            ]
        );
      ?>

      <?=

        $form->field($culinary, 'title', 
            [
                'labelOptions' => [
                  'class' => 'col-sm-2 control-label'
            ],
            'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
        ])->textInput()->label('Title *')

      ?>

      <?=
        $form->field($culinary, 'content', 
            [
                'labelOptions' => [
                'class' => 'col-sm-2 control-label'
            ],
            'template' => '{label}<div class="col-sm-10">{input}{error}{hint}</div>'
        ])->textArea(['rows' => '6'])->label('Content *')
      ?>
      
      <?=
        $form->field($culinary, 'imageFile',
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
            'template' => '{label}<div class="col-lg-4"><div class="img-preview"><img src=""></div>{input}{error}{hint}</div>'
          ])->fileInput()->label('Image *')
      ?>

      <div class="form-group">
        <div class="col-lg-offset-2 col-lg-10">
          <?= Html::submitButton('Post', ['class' => 'btn btn-primary', 'name' => 'action']) ?>
        </div>
      </div>

      <?php
        $form = ActiveForm::end();
      ?>
      
    </div>
  </div>
</div>