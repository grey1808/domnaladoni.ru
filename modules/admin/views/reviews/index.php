<?php

use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Отзывы';
?>
<div class="col-md-9">
    <?= $this->render('_search', ['model' => $searchModel]) ?>

    <div class="row"></div>

    <div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                'class' => 'yii\grid\ActionColumn',
                'header'=>'Состояние',
                'template' => '{publish}',
                'buttons' => [
                    'publish' => function ($url, $data) {
                        if ($data->publish == 1){
                            return Html::a(
                                '<button type="button" class="btn btn-default btn-danger-i" title="Снят с публикации "><i class="glyphicon glyphicon-remove"></i></button>',
                                $url);
                        }

                        else {
                            return Html::a('<button type="button" class="btn btn-default btn-success-i" title="Опубликованно "><i class="glyphicon glyphicon-ok"></i></button>',
                                $url);
                        }
                    },
                ],
            ],
            [
                'attribute' => 'message',
                'format' => 'html',
            ],
            'email:email',
            ['label'=>'ФИО',
                'format'=>'raw',
                'value'=>function($data){
                    return $data->lastname.'</br>'.$data->firstname.'</br>'.$data->secondname;
                }
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