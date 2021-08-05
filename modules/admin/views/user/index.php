<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'Пользователи';
?>
<div class="">
    <?= $this->render('_search', ['model' => $searchModel]) ?>
    <div class="row"></div>

    <div>
        <?= Html::a('Добавить пользователя', ['create'], ['class' => 'btn btn-success']) ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
//            ['class' => 'yii\grid\SerialColumn'],
            ['label'=>'ФИО',
                'format'=>'raw',
                'value'=>function($data){
                    return $data->lastname.'</br>'.$data->firstname.'</br>'.$data->secondname;
                }
            ],
            [
                'attribute'=>'username',
                'header'=>'Логин',
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Активирован',
                'template' => '{status}',
                'buttons' => [
                    'status' => function ($url, $data) {
                        if ($data->status === 0){
                            return Html::a(
                                '<button type="button" class="btn btn-default btn-success-i" title="Деактивировать"><i class="glyphicon glyphicon-ok"></i></button>',
                                $url);
                        }

                        else {
                            return Html::a('<button type="button" class="btn btn-default btn-danger-i" title="Активировать"><i class="glyphicon glyphicon-remove"></i></button>',
                                $url);
                        }
                    },
                ],
            ],
            'email:email',
            [
                'attribute'=>'role',
                'header'=>'Роль',
            ],
            [
                'attribute'=>'date',
                'header'=>'Дата',
                'value'=> function($data){
                    return Yii::$app->formatter->asDate($data->date, 'php:d.m.Y');
                },
            ],
            'id',
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Действия',
                'template' => '{update} {delete}',
                'buttons' => [
                    'update' => function ($url) {
                        return Html::a(
                            '<button type="button" class="btn btn-warning" data-toggle="modal" data-target="#myModalTrEdit" title="Редактировать"><i class="glyphicon glyphicon-pencil"></i></button>',
                            $url);
                    },
                    'delete' => function ($url) {
                        return Html::a(
                            '<button type="button" class="btn btn-danger"title="В корзину"><i class="glyphicon glyphicon-trash"></i></button>',
                            $url);
                    },
                ],
            ],
        ],
    ]); ?>
</div>
</div>