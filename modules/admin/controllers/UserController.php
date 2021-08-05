<?php

namespace app\modules\admin\controllers;

use app\modules\admin\models\UserSearch;
use Yii;
use app\modules\admin\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends AppAdminController
{
    public function actionIndex()
    {
        Yii::$app->getView()->params['title'] = '<i class="glyphicon glyphicon-list"></i> Пользователи: cписок пользователей';
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        Yii::$app->getView()->params['title'] = '<i class="glyphicon glyphicon-edit"></i> Пользователи: создать';
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $password = Yii::$app->security->generatePasswordHash($model->password);
            $model->password = $password;
            $date = Yii::$app->formatter->asDate($model->birthday, 'php:Y-m-d');
            $model->birthday=$date;
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionSavecreate()
    {
        Yii::$app->getView()->params['title'] = '<i class="glyphicon glyphicon-edit"></i> Пользователи: создать';
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $password = Yii::$app->security->generatePasswordHash($model->password);
            $model->password = $password;
            $date = Yii::$app->formatter->asDate($model->birthday, 'php:Y-m-d');
            $model->birthday=$date;
            if ($model->save()) {
                return $this->refresh();
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionUpdatecreate($id)
    {
        $model = $this->findModel($id);
        Yii::$app->getView()->params['title'] = '<i class="glyphicon glyphicon-edit"></i>  Пользователи: изменить пользователя -'.$model->username;
        if ($model->load(Yii::$app->request->post())) {
            $password = Yii::$app->security->generatePasswordHash($model->password);
            $model->password = $password;
            $date = Yii::$app->formatter->asDate($model->birthday, 'php:Y-m-d');
            $model->birthday = $date;
            if ($model->password)
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        Yii::$app->getView()->params['title'] = '<i class="glyphicon glyphicon-edit"></i>  Пользователи: изменить пользователя -'.$model->username;

        if ($model->load(Yii::$app->request->post())) {
            $password = Yii::$app->security->generatePasswordHash($model->password);
            $model->password = $password;
            $date = Yii::$app->formatter->asDate($model->birthday, 'php:Y-m-d');
            $model->birthday = $date;
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    public function actionStatus($id)
    {
        $ph = User::findOne($id);
        if ($ph->status === 0){
            Yii::$app->db->createCommand()
                ->update('user',['status' => '1'], ['id' => $id])
                ->execute();
//            Yii::$app->session->setFlash('success', "Категория скрыта");
            return $this->redirect(Yii::$app->request->referrer);
        }

        else {
            Yii::$app->db->createCommand()
                ->update('user',['status' => '0'], ['id' => $id])
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

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {

            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
