<?php

namespace api\modules\v1\controllers;

use yii\rest\ActiveController;
use yii\filters\AccessControl;
use yii\data\ActiveDataProvider;
use Yii;

use api\modules\v1\models\User;

/**
 * 
 */
class UsersController extends ActiveController
{
    public $modelClass = 'api\modules\v1\models\User';

    public function actions()
        {
            return [];
        }

        public function behaviors()
        {
            $behaviors = parent::behaviors();

	        // setup access
	        $behaviors['access'] = [
		        'class' => AccessControl::className(),
		        'only' => ['index', 'view', 'create', 'update', 'delete'], //only be applied to
		        'rules' => [
			        [
				        'allow' => true,
				        'actions' => ['index', 'view', 'create', 'update', 'delete', 'signup'],
				        'roles' => ['?'],
			        ],
		        ],
	        ];

            return $behaviors;
        }


    public function actionIndex() {
        return new ActiveDataProvider([
            'query' =>  User::find()->where([
                '!=', 'status', -1
            ])->andWhere([
                'role'  =>  User::ROLE_USER
            ])
        ]);
    }

    public function actionSignup()
    {
        $request= Yii::$app->request;
        // $model->load($request->post());

        echo "<pre>";
        print_r($request->post());
        exit;
    }
}