<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SliderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Видеонаблюдение | Слайдеры';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="slider-index">


    <p>
        <?= Html::a('Добавить', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Состояние',
                'template' => '{publish}',
                'buttons' => [
                    'publish' => function ($url, $data) {
                        if ($data->publish === 0){
                            return Html::a(
                                '<button type="button" class="btn btn-default btn-success-i" title="Опубликованно 12.12.2018 15.23 Измененно 12.12.2018 16.23"><i class="glyphicon glyphicon-ok"></i></button>',
                                $url);
                        }

                        else {
                            return Html::a('<button type="button" class="btn btn-default btn-danger-i" title="Снят с публикации 12.12.2018 15.23 Измененно 12.12.2018 16.23"><i class="glyphicon glyphicon-remove"></i></button>',
                                $url);
                        }
                    },
                ],
            ],
            'name',
            [
                'attribute' => 'images',
                'format' => 'html',
                'value' => function ($data) {
                    return Html::img($data['images'],
                        ['width' => '270px']);
                },
            ],
//            'url:url',
            //'date',
            'coment:ntext',
            //'sort',

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
