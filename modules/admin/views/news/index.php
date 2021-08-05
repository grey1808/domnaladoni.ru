<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Новости';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Состояние',
                'template' => '{publish}',
                'buttons' => [
                    'publish' => function ($url, $data) {
                        if ($data->publish === 0){
                            return Html::a(
                                '<button type="button" class="btn btn-default btn-success-i" title="Опубликованно "><i class="glyphicon glyphicon-ok"></i></button>',
                                $url);
                        }

                        else {
                            return Html::a('<button type="button" class="btn btn-default btn-danger-i" title="Снят с публикации "><i class="glyphicon glyphicon-remove"></i></button>',
                                $url);
                        }
                    },
                ],
            ],
            'name',
            [
                'attribute' => 'create_datetime',
                'format' => ['date', 'php:d.m.Y'],
            ],
//            'content',
//            'images',
//            'keywords',
            //'description',

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url) {
                        return Html::a(
                            '<button type="button" class="btn btn-info"title="Просмотр"><i class="glyphicon glyphicon-eye-open"></i></button>',
                            $url);
                    },
                    'update' => function ($url) {
                        return Html::a(
                            '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalTrEdit" title="Редактировать"><i class="glyphicon glyphicon-pencil"></i></button>',
                            $url);
                    },
                    'delete' => function ($url) {
                        return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url,
                            [
                                'class' => 'btn btn-danger btn-a',
                                'data' => [
                                    'confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'method' => 'post',
                                ],
                            ]);
                    },
                ],
            ],
        ],
    ]); ?>


</div>
