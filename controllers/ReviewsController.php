<?php


namespace app\controllers;


use app\modules\admin\models\Reviews;
use yii\helpers\Url;

class ReviewsController extends AppController
{
    public function actionIndex()
    {
        $reviews = Reviews::find()->where(['publish'=>0])->all();
        $this->setMeta('Отзывы','Отзывы на монтаж видеонаблюдения, контроль доступа' ,'Видеонаблюдение, системы контроля доступа');
        $model = new Reviews();
        if ($model->load(\Yii::$app->request->post()))
        {

//            $model->lastname = \Yii::$app->request->post('name');
//            $model->email = \Yii::$app->request->post('email');
//            $model->message = \Yii::$app->request->post('text');
            $model->date = date('Y-m-d');
            $model->publish = 1;
            if ($model->save())
            {
                \Yii::$app->session->setFlash('success', 'Ваши данные были успешно отправлены. <br>Спасибо за Ваш отзыв, он будет опубликован после модерации');
                return $this->redirect(Url::base(true).'/reviews');
            }
        }
        return $this->render('index',compact('reviews','model'));
    }
}