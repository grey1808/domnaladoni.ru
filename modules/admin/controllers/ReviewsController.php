<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\ReviewsSearch;
use Yii;
use app\modules\admin\models\Reviews;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class ReviewsController extends AppAdminController
{
    public function actionIndex()
    {
        Yii::$app->getView()->params['title'] = '<i class="glyphicon glyphicon-list"></i> Отзывы: cписок отзывов';
        $searchModel = new ReviewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }


    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }


//    public function actionCreate()
//    {
//        $model = new Reviews();
//
//        if ($model->load(Yii::$app->request->post()) && $model->save()) {
//            return $this->redirect(['view', 'id' => $model->id]);
//        }
//
//        return $this->render('create', [
//            'model' => $model,
//        ]);
//    }


    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        Yii::$app->getView()->params['title'] = '<i class="glyphicon glyphicon-edit"></i> Отзывы: модерация отзыва от '.$model->date.' автора '.$model->email;
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success', "Отзыв № {$model->id} обновлён");
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionUpdateout($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionPublish($id)
    {
        $ph = Reviews::findOne($id);
        if ($ph->publish === 0){
            Yii::$app->db->createCommand()
                ->update('reviews',['publish' => '1'], ['id' => $id])
                ->execute();
//            Yii::$app->session->setFlash('success', "Категория скрыта");
            return $this->redirect(Yii::$app->request->referrer);
        }

        else {
            Yii::$app->db->createCommand()
                ->update('reviews',['publish' => '0'], ['id' => $id])
                ->execute();
//            Yii::$app->session->setFlash('success', "Категория опубликована");
            return $this->redirect(Yii::$app->request->referrer);
        }

    }

    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    protected function findModel($id)
    {
        if (($model = Reviews::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
