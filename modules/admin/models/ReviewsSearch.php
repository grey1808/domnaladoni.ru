<?php

namespace app\modules\admin\models;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Reviews;


class ReviewsSearch extends Reviews
{
    public function rules()
    {
        return [
            [['email', 'message', 'date', 'publish'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }
    public function search($params)
    {
        $query = Reviews::find()->orderBy(['id'=>SORT_DESC]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            return $dataProvider;
        }

        $query->andFilterWhere([

            'date' => $this->date,
            'publish' => $this->publish,

        ]);

        $query->andFilterWhere(['like', 'message', $this->message])
            ->andFilterWhere(['like', 'email', $this->email]);

        return $dataProvider;
    }
}