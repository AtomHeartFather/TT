<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Schet;

/**
 * SchetSearch represents the model behind the search form of `app\models\Schet`.
 */
class SchetSearch extends Schet
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'number', 'inn', 'kpp', 'rschet', 'kschet', 'bik'], 'integer'],
            [['date', 'name', 'adres', 'bank'], 'safe'],
            [['summa'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Schet::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'number' => $this->number,
            'date' => $this->date,
            'summa' => $this->summa,
            'inn' => $this->inn,
            'kpp' => $this->kpp,
            'rschet' => $this->rschet,
            'kschet' => $this->kschet,
            'bik' => $this->bik,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'adres', $this->adres])
            ->andFilterWhere(['like', 'bank', $this->bank]);

        return $dataProvider;
    }
}
