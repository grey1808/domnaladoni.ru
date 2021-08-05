<?php


namespace app\controllers;


use app\modules\admin\models\News;
use yii\data\Pagination;

class NewsController extends AppController
{
    public function actionIndex()
    {
        $news = News::find()->where(['publish'=>'0'])->orderby(['create_datetime'=>SORT_DESC]);
        $pages = new Pagination(['totalCount' => $news->count(), 'pageSize' => 10, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $newpag = $news->offset($pages->offset)->limit($pages->limit)->all();
        $this->setMeta('Новости','Новости компании видеонаблюдения','Видеонаблюдение, системы контроля доступа');
        return $this->render('index', compact('newpag','pages'));
    }

    public function actionView ($id)
    {
        $new =  News::find()->where(['alias' => $id])->andWhere(['publish'=>'0'])->one();
        $news = News::find()->where(['publish'=>'0'])->orderby(['create_datetime'=>SORT_DESC])->limit(10)->all();
        $this->setMeta($new->name,$new->description ,$new->keywords);

        return $this->render('page', compact('new','news'));

    }
}