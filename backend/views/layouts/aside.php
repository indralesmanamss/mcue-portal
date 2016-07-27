<?php
  use yii\helpers\Html;
  use common\models\User;
?>
    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/a0.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt"></strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

          <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="m-t-md">
                <a href class="auto">      
                  <span class="pull-right text-muted">
                    <i class="fa fa-fw fa-angle-right text"></i>
                    <i class="fa fa-fw fa-angle-down text-active"></i>
                  </span>
                  <i class="glyphicon glyphicon-stats icon text-primary-dker"></i>
                  <span class="font-bold">Dashboard</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href>
                      <span>Dashboard</span>
                    </a>
                  </li>
                  <li>
                    <a href="index.html">
                      <span>Dashboard v1</span>
                    </a>
                  </li>
                  <li>
                    <a href="dashboard.html">
                      <b class="label bg-info pull-right">N</b>
                      <span>Dashboard v2</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <?= Html::a('<i class="glyphicon glyphicon-envelope icon text-info-lter"></i><span class="font-bold">Account</span>', ['/site/account']);
                ?>
              </li>
              <li class="line dk"></li>
              <?php
                  if (User::isUserAdmin(Yii::$app->user->identity->username)) {
              ?>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                  <span>Manage Participants</span>
                </li>
                <li>
                  <a href class="auto">      
                    <span class="pull-right text-muted">
                      <i class="fa fa-fw fa-angle-right text"></i>
                      <i class="fa fa-fw fa-angle-down text-active"></i>
                    </span>
                    <b class="badge bg-info pull-right">3</b>
                    <i class="glyphicon glyphicon-th"></i>
                    <span>Participants</span>
                  </a>
                  <ul class="nav nav-sub dk">
                    <li class="nav-sub-header">
                      <a href>
                        <span>Participants</span>
                      </a>
                    </li>
                    <li>
                      <?= Html::a('<span>List Participants</span>', ['/site/list-participant']);
                      ?>
                    </li>
                    <li>
                      <a href="layout_fullwidth.html">
                        <span>Edit</span>
                      </a>
                    </li>     
                  </ul>
                </li>
                <li>
                  <a href class="auto">
                    <span class="pull-right text-muted">
                      <i class="fa fa-fw fa-angle-right text"></i>
                      <i class="fa fa-fw fa-angle-down text-active"></i>
                    </span>
                    <i class="glyphicon glyphicon-briefcase icon"></i>
                    <span>Speakers</span>
                  </a>
                  <ul class="nav nav-sub dk">
                    <li class="nav-sub-header">
                      <a href>
                        <span>Speakers</span>
                      </a>
                    </li>
                    <li>
                      <?= Html::a('<span>List Speakers</span>', ['/site/list-speaker']);
                      ?>
                    </li>
                    <li>
                      <a href="ui_icon.html">
                        <b class="badge bg-info pull-right">3</b>
                        <span>Edit</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href class="auto">
                    <span class="pull-right text-muted">
                      <i class="fa fa-fw fa-angle-right text"></i>
                      <i class="fa fa-fw fa-angle-down text-active"></i>
                    </span>
                    <b class="label bg-primary pull-right">2</b>
                    <i class="glyphicon glyphicon-list"></i>
                    <span>Verifications</span>
                  </a>
                  <ul class="nav nav-sub dk">
                    <li class="nav-sub-header">
                      <a href>
                        <span>Table</span>
                      </a>
                    </li>
                    <li>
                      <a href="table_static.html">
                        <span>Table static</span>
                      </a>
                    </li>
                    <li>
                      <a href="table_datatable.html">
                        <span>Datatable</span>
                      </a>
                    </li>
                    <li>
                      <a href="table_footable.html">
                        <span>Footable</span>
                      </a>
                    </li>
                  </ul>
                </li>
              <?php
                } else if (User::isUserParticipant(Yii::$app->user->identity->username)) {
              ?>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                  <span>Manage Participants</span>
                </li>
                <li>
                  <a href class="auto">      
                    <span class="pull-right text-muted">
                      <i class="fa fa-fw fa-angle-right text"></i>
                      <i class="fa fa-fw fa-angle-down text-active"></i>
                    </span>
                    <b class="badge bg-info pull-right">3</b>
                    <i class="glyphicon glyphicon-th"></i>
                    <span>Participants</span>
                  </a>
                  <ul class="nav nav-sub dk">
                    <li class="nav-sub-header">
                      <a href>
                        <span>Participants</span>
                      </a>
                    </li>
                    <li>
                      <a href="layout_app.html">
                        <span>List Participants</span>
                      </a>
                    </li>
                    <li>
                      <a href="layout_fullwidth.html">
                        <span>Edit</span>
                      </a>
                    </li>     
                  </ul>
                </li>
              <?php
                } else if (User::isUserSpeaker(Yii::$app->user->identity->username)) {
              ?>
                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                  <span>Manage Speakers</span>
                </li>
                <li>
                  <a href class="auto">      
                    <span class="pull-right text-muted">
                      <i class="fa fa-fw fa-angle-right text"></i>
                      <i class="fa fa-fw fa-angle-down text-active"></i>
                    </span>
                    <b class="badge bg-info pull-right">3</b>
                    <i class="glyphicon glyphicon-th"></i>
                    <span>Participants</span>
                  </a>
                  <ul class="nav nav-sub dk">
                    <li class="nav-sub-header">
                      <a href>
                        <span>Participants</span>
                      </a>
                    </li>
                    <li>
                      <a href="layout_app.html">
                        <span>List Participants</span>
                      </a>
                    </li>
                    <li>
                      <a href="layout_fullwidth.html">
                        <span>Edit</span>
                      </a>
                    </li>     
                  </ul>
                </li>
              <?php
                }
              ?>

              <?php
                if (User::isUserAdmin(Yii::$app->user->identity->username)) {
              ?>
                <li class="line dk hidden-folded"></li>

                <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">          
                  <span>Manage Contents</span>
                </li>  
                <li>
                  <a href class="auto">
                    <span class="pull-right text-muted">
                      <i class="fa fa-fw fa-angle-right text"></i>
                      <i class="fa fa-fw fa-angle-down text-active"></i>
                    </span>
                    <b class="label bg-primary pull-right">2</b>
                    <i class="glyphicon glyphicon-list"></i>
                    <span>Posts</span>
                  </a>
                  <ul class="nav nav-sub dk">
                    <li class="nav-sub-header">
                      <a href>
                        <span>Posts</span>
                      </a>
                    </li>
                    <li>
                      <?= Html::a('<span>All Posts</span>', ['/site/all-post']) ?>
                    </li>
                    <li>
                      <?= Html::a('<span>Add New</span>', ['/site/new-post']) ?>
          
                    </li>
                  </ul>
                </li>
              <?php
                }
              ?>
              
            </ul>
          </nav>
          <!-- nav -->

          <!-- aside footer -->
          <div class="wrapper m-t">
            
          </div>
          <!-- / aside footer -->
        </div>
      </div>
  </aside>
  <!-- / aside -->