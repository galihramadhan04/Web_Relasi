<?php

namespace app\models;

use yii\data\ActiveDataProvider;
use app\models\Profil075;

/**
 * Profil075Search represents the model behind the search form of `app\models\Profil075`.
 */
class Profil075Search extends Profil075
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_mahasiswa'], 'integer'],
            [['foto_profil'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Profil075::find();

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
            'id_mahasiswa' => $this->id_mahasiswa,
        ]);

        $query->andFilterWhere(['like', 'foto_profil', $this->foto_profil]);

        return $dataProvider;
    }
}
