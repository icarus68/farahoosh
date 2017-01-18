<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

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
                        'actions' => ['login', 'error','captcha'],
                        'allow' => true,
                    ],
                    [
                        'actions' => [
                                        'logout',
                                        'index',
                                        'email',
                                        'getmessage',
                                        'stream',
                                        'filemanager',
                                        'chart',
                                        'tables',
                                        'forms',
                                        'panelsWells',
                                        'buttons',
                                        'notifications',
                                        'typography',
                                        'icons',
                                     ],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }
    
    public function actionTables()
    {
        //Yii::app()->controller->id and Yii::app()->controller->action->id
        return $this->render('tables');
    }
    public function actionForms()
    {
        return $this->render('forms');
    }
    public function actionPanelsWells()
    {
        return $this->render('panelswells');
    }
    public function actionButtons()
    {
        return $this->render('buttons');
    }
    public function actionNotifications()
    {
        return $this->render('notifications');
    }
    public function actionTypography()
    {
        return $this->render('typography');
    }
    public function actionIcons()
    {
        return $this->render('icons');
    }    
    /* Add access rules if needed for getMessage */
    
    public function actionGetmessage()
    {

        //echo "data: The server time is: {$time}\n\n";
        $querySearch = array();
        $queryUpdate = array('$set'=>array('new'=>0));
        $collection = Yii::$app->mongodb->getCollection('gps');
	$messageList = $collection->find(['new'=>1]);
        
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        echo "retry: 1000\n"; // Optional. We tell the browser to retry after 10 seconds
        
        foreach($messageList as $item){
            $ar = array(
                    'lat' => isset($item['lat'])?$item['lat']:'',
                    'long' => isset($item['long'])?$item['long']:'',
                    'timestamp' => isset($item['timestamp'])?$item['timestamp']:'',
                    'new' => isset($item['new'])?$item['new']:'',
                    );
                    
            $querySearch['_id'] = $item['_id'];
            
            echo "data: ".json_encode($ar)."\n\n";
        }
        
        $collection->update($querySearch,$queryUpdate);
        flush();
    }
    public function actionStream()
    {
        return $this->render('stream');
    }
    
    public function actionChart()
    {
        return $this->render('chart');

    }
    public function actionFilemanager($path="/")
    {
        return $this->render('filemanager',array('path'=>$path));
    }
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        
        $listDB = Yii::$app->mongodb->createCommand()->listDatabases();
        //print_r($listDB);
        //$listCol = Yii::$app->mongodb->createCommand()->listCollection();
        //print_r($listCol);
        //Yii::$app->MessageComponent->display('I am Yii2.0 Programmer');
        //Yii::$app->SmsComponent->send('http://91.98.100.94/Service.asmx?WSDL','smsadmin.ir','9128384585','0123456','5000298918',array('09128384585'),'from yii2');
        
        return $this->render('index');
    }
    /**
     * Email Sender action
     */
    public function actionEmail()
    {
        $type = 'text';
        $from = 'hello@hadoop.ir';
        $to = 'info@farafekr.co';
        $data = 'hi mobin merdad';
        Yii::$app->mailer->compose( null, ['data' => $data])
            ->setFrom($from)
            ->setTo($to)
            ->setSubject('test subject')
            ->send();
        
        return $this->render('email');
    }
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
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
}
