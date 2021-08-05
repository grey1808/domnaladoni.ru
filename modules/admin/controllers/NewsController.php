<?php

namespace app\modules\admin\controllers;

use Yii;
use app\modules\admin\models\News;
use app\modules\admin\models\NewsSearch;
use yii\db\Expression;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NewsController implements the CRUD actions for News model.
 */
class NewsController extends AppAdminController
{

    /**
     * Lists all News models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new NewsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        Yii::$app->getView()->params['title'] = '<i class="fa fa-list" aria-hidden="true"></i> Видеонаблюдение: новости';

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single News model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        Yii::$app->getView()->params['title'] = '<i class="fa fa-search" aria-hidden="true"></i> Просмотр новости';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new News model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new News();
        Yii::$app->getView()->params['title'] = '<i class="fa fa-plus-square" aria-hidden="true"></i>Добавить новость';

        if ($model->load(Yii::$app->request->post())&&$model->validate()) {
            if (empty($model->alias)) {
                $model->alias = AppAdminController::getTranslit($model->name);
            }
            if($model->create_datetime == false) {
                $model->create_datetime = new Expression('NOW()');;
            }else{
                $date = Yii::$app->formatter->asDate($model->create_datetime, 'php:Y-m-d');
                $model->create_datetime = $date;
            }
            if ($model->save()){
                Yii::$app->session->setFlash('success', "Новость № {$model->id} добавлена");
                return $this->redirect(['index']);
            }

        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing News model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        Yii::$app->getView()->params['title'] = '<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Обновить новость: '.$model->name;

        if ($model->load(Yii::$app->request->post())&&$model->validate()){
            if (empty($model->alias)) {
                $model->alias = AppAdminController::getTranslit($model->name);
            }
            if($model->create_datetime == false) {
                $model->create_datetime = new Expression('NOW()');;
            }else{
                $date = Yii::$app->formatter->asDate($model->create_datetime, 'php:Y-m-d');
                $model->create_datetime = $date;
            }
            if($model->save()) {
                Yii::$app->session->setFlash('success', "Новость № {$model->id} обновлена");
                return $this->redirect(['index']);
            }
        } else{
            return $this->render('update', ['model' => $model,]);

        }
    }

    /**
     * Deletes an existing News model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the News model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return News the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = News::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionPublish($id)
    {
        $ph = News::findOne($id);
        if ($ph->publish === 0){
            Yii::$app->db->createCommand()
                ->update('news',['publish' => '1'], ['id' => $id])
                ->execute();
            return $this->redirect(Yii::$app->request->referrer);
        }

        else {
            Yii::$app->db->createCommand()
                ->update('news',['publish' => '0'], ['id' => $id])
                ->execute();
            return $this->redirect(Yii::$app->request->referrer);
        }

    }

}
