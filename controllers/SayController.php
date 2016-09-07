<?php
namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\EntryForm;
/**
 *
 */
class SayController extends Controller
{
    public function actionSay($message = 'hello '){
      return $this->render('say',['message' => $message]);
    }
    public function actionAa($sss='lizhi')
    {
      # code...
      return $this->render('test',['sss'=>$sss]);
    }

    public function actionEntry()
    {
      $model = new EntryForm;
      if ($model->load(Yii::$app->request->post()) && $model->validate()) {
        return $this->render('entry-confirm',['model'=>$model]);
      } else {
        return $this->render('entry',['model'=>$model]);
      }
    }
}

 ?>
