<?php
namespace app\controllers;
use app\models\User_new;
use Yii;

class DangnhapController extends \yii\web\Controller
{
	public function actionIndex()
	{
		
		// $post = $request->post();
		$model = new User_new();
		if($model->load(Yii::$app->request->post())){
				$request = Yii::$app->request->post('User');
				$username = $request['username'];
				$password = $request['password'];

				echo $username;exit;
		}
		return $this->render('index',['model'=>$model]);//đẻ view nhận model
	}
}