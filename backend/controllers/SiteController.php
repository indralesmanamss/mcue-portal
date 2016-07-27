<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\web\UploadedFile;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use backend\models\TourismDestination;
use backend\models\Culinary;
use common\models\User;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index', 'new-post','all-post', 'account','ajax-all-post', 'list-participant', 'list-speaker','profile','edit-user'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['get'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $this->layout = false;
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionAllPost()
    {
        return $this->render('all-post');
    }

    public function actionAjaxAllPost($select_id)
    {
        $tourism_destination = TourismDestination::find()->all();
        $culinary = Culinary::find()->all();

        $select_post;

        if ($select_id == 8) {
            $select_post = $tourism_destination;
        } else if ($select_id == 9) {
            $select_post = $culinary;
        }

        $data1 = array();
        $data2 = [];
        for ($i=0; $i < sizeof($culinary) ; $i++) { 
            $data2[] = $culinary[$i]['title'];
            $data2[] = $culinary[$i]['content'];
            $data1[] = json_encode($data2);
            
        }
        print_r($data1);

    }

    public function actionNewPost()
    {
        $tourism_destination = new TourismDestination;
        $culinary = new Culinary;

        if($tourism_destination->load(Yii::$app->request->post())){
            
            $tourism_destination->imageFile = UploadedFile::getInstance($tourism_destination, 'imageFile');

            $tourism_destination->img_url = 'uploads/tourism_destination/'.date("m-d-Y-h-i-s", time()).'-'. $tourism_destination->imageFile->baseName . '.' . $tourism_destination->imageFile->extension;
            $tourism_destination->save();

            $tourism_destination->imageFile->saveAs('../../frontend/web/uploads/tourism_destination/'.date("m-d-Y-h-i-s", time()).'-'. $tourism_destination->imageFile->baseName . '.' . $tourism_destination->imageFile->extension);
        }

        if($culinary->load(Yii::$app->request->post())){
            
            $culinary->imageFile = UploadedFile::getInstance($culinary, 'imageFile');

            $culinary->img_url = 'uploads/culinary/'.date("m-d-Y-h-i-s", time()).'-'. $culinary->imageFile->baseName . '.' . $culinary->imageFile->extension;
            $culinary->date_post = date('M d, Y');
            $culinary->save();

            $culinary->imageFile->saveAs('../../frontend/web/uploads/culinary/'.date("m-d-Y-h-i-s", time()).'-'. $culinary->imageFile->baseName . '.' . $culinary->imageFile->extension);
        }

        return $this->render('new-post', [
            'tourism_destination' => $tourism_destination,
            'culinary' => $culinary
        ]);
    }


    public function actionAccount()
    {   
        $id = Yii::$app->user->identity->id;

        $model = User::find()->where(['id' => $id])->one();

        if($model->load(Yii::$app->request->post())){

            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');

            if ($model->imageFile !== NULL) {
                $model->img_url = 'uploads/'.date("m-d-Y-h-i-s", time()).'-'. $model->imageFile->baseName . '.' . $model->imageFile->extension;
            }

            $model->save();

            if ($model->imageFile !== NULL) {
                $model->imageFile->saveAs('uploads/'.date("m-d-Y-h-i-s", time()).'-'. $model->imageFile->baseName . '.' . $model->imageFile->extension);
            }

            return $this->redirect(['account']);
            
        }

       
        return $this->render('account', [
            'model' => $model
        ]);
    }

    public function actionListParticipant()
    {
        $model = Yii::$app->db->createCommand('SELECT * FROM user WHERE role = 20')->queryAll();
        return $this->render('list-participant', [
            'model' => $model
        ]);
    }

    public function actionListSpeaker()
    {
        $model = Yii::$app->db->createCommand('SELECT * FROM user WHERE role = 30')->queryAll();
        return $this->render('list-speaker', [
            'model' => $model
        ]);
    }

    public function actionProfile($id)
    {
        $countData = User::find()
                ->where(['id' => $id])
                ->count();

        $user = Yii::$app->db->createCommand('SELECT * FROM user WHERE id="'.$id.'"')->queryAll();

        if ($countData > 0) {
            foreach ($user as $field) {
                $role = '';
                if ($field['role'] == '20') {
                    $role = "Participant";
                } else if ($field['role'] == '30') {
                    $role = "Speaker";
                }
                echo '<div class="panel panel-default" style="box-shadow: none;border-bottom: 0!important;">
                        <div class="panel-heading">
                          <div class="clearfix">
                            <div class="pull-left thumb-md avatar b-3x m-r">
                              <img src="images/doctor.jpg" alt="...">
                            </div>
                            <div class="clear">
                              <div class="h3 m-t-xs m-b-xs">
                                '.$field['fname'].'
                                <i class="fa fa-circle text-success pull-right text-xs m-t-sm"></i>
                              </div>
                              <small class="text-muted">'.$role.'</small>
                            </div>
                          </div>
                        </div>
                        <div class="list-group no-radius alt">
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        Full Name
                                    </div>
                                    <div class="col-xs-1">
                                        :
                                    </div>
                                    <div class="col-xs-6">
                                        '.$field["fname"].' '.$field["lname"].'
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        Email
                                    </div>
                                    <div class="col-xs-1">
                                        :
                                    </div>
                                    <div class="col-xs-6">
                                        '.$field["email"].'
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        Address
                                    </div>
                                    <div class="col-xs-1">
                                        :
                                    </div>
                                    <div class="col-xs-6">
                                        '.$field["address"].'
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        Country
                                    </div>
                                    <div class="col-xs-1">
                                        :
                                    </div>
                                    <div class="col-xs-6">
                                        '.$field["country"].'
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        Zip Code
                                    </div>
                                    <div class="col-xs-1">
                                        :
                                    </div>
                                    <div class="col-xs-6">
                                        '.$field["zip_code"].'
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-3">
                                        Registered
                                    </div>
                                    <div class="col-xs-1">
                                        :
                                    </div>
                                    <div class="col-xs-6">
                                        '.date("d F Y", $field['created_at']).'
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <button class="btn btn-danger btn-addon m-t" data-dismiss="modal"><i class="fa fa-times"></i>Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>';   
            }   
        }
    }

    
    public function actionEditUser($id)
    {
        $model = User::find()->where(['id' => $id])->one();


        if($model->load(Yii::$app->request->post()) && $model->save()){

            if ($model['role'] == 20) {
                return $this->redirect(['list-participant']);
            } else if ($model['role'] == 30) {
                return $this->redirect(['list-speaker']);
            }
            

        }

        return $this->render('edit-user',[
            'model' => $model
        ]);
    }


}
