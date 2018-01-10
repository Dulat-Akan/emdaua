<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Userpay;

/**
 * UserpaySearch represents the model behind the search form about `app\models\Userpay`.
 */
class UserpaySearch extends Userpay
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'balance', 'tel', 'role'], 'integer'],
            [['username', 'password', 'email', 'status', 'auth_key', 'created_at', 'updated_at', 'access_token', 'phone', 'timer', 'ul', 'name1', 'name2', 'dateb', 'file1'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Userpay::find();

        //$sql = "SELECT * FROM `user` WHERE `phone` != '8(777)8881888'";

        //$query = Userpay::findBySql($sql);

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
            'balance' => $this->balance,
            'tel' => $this->tel,
            'role' => $this->role,
        ]);
        
        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status', $this->status])
            ->andFilterWhere(['like', 'auth_key', $this->auth_key])
            ->andFilterWhere(['like', 'created_at', $this->created_at])
            ->andFilterWhere(['like', 'updated_at', $this->updated_at])
            ->andFilterWhere(['like', 'access_token', $this->access_token])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'timer', $this->timer])
            ->andFilterWhere(['like', 'ul', $this->ul])
            ->andFilterWhere(['like', 'name1', $this->name1])
            ->andFilterWhere(['like', 'name2', $this->name2])
            ->andFilterWhere(['like', 'dateb', $this->dateb])
            ->andFilterWhere(['like', 'file1', $this->file1])
            ->andFilterWhere(['!=', 'phone', '+77005550139']);


        return $dataProvider;
    }
}
