<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\AdminPanel;

/**
 * AdminpanelSearch represents the model behind the search form about `app\models\AdminPanel`.
 */
class AdminpanelSearch extends AdminPanel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['pole1', 'pole2', 'pole3', 'pole4', 'pole5', 'pole6', 'pole7', 'pole8', 'pole9', 'pole10', 'pole11', 'pole12', 'pole13', 'pole14', 'pole15', 'pole16', 'pole17', 'pole18', 'pole19', 'pole20', 'pole21', 'pole22', 'pole23', 'pole24', 'pole25', 'pole26', 'pole27', 'pole28', 'pole29', 'pole30', 'pole31', 'pole32', 'pole33', 'pole34', 'pole35', 'pole36', 'pole37', 'pole38', 'pole39', 'pole40', 'pole41', 'pole42', 'pole43', 'pole44', 'pole45', 'pole46', 'pole47', 'pole48', 'pole49', 'pole50', 'pole51', 'pole52', 'pole53', 'pole54', 'pole55', 'pole56', 'pole57', 'pole58', 'pole59', 'pole60', 'pole61', 'pole62', 'pole63', 'pole64', 'pole65', 'pole66', 'pole67', 'pole68', 'pole69', 'pole70', 'pole71', 'pole72', 'pole73', 'pole74', 'pole75', 'pole76', 'pole77', 'pole78', 'pole79', 'pole80', 'pole81', 'pole82', 'pole83', 'pole84', 'pole85', 'pole86', 'pole87', 'pole88', 'pole89', 'pole90', 'pole91', 'pole92', 'pole93', 'pole94', 'pole95', 'pole96', 'pole97', 'pole98', 'pole99', 'pole100', 'imageurl1', 'imageurl2', 'imageurl3', 'imageurl4', 'imageurl5', 'imageurl6', 'imageurl7', 'imageurl8', 'imageurl9', 'imageurl10', 'imageurl11', 'imageurl12', 'imageurl13', 'imageurl14', 'imageurl15', 'imageurl16', 'imageurl17', 'imageurl18', 'imageurl19', 'imageurl20'], 'safe'],
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
        $query = AdminPanel::find();

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
        ]);

        $query->andFilterWhere(['like', 'pole1', $this->pole1])
            ->andFilterWhere(['like', 'pole2', $this->pole2])
            ->andFilterWhere(['like', 'pole3', $this->pole3])
            ->andFilterWhere(['like', 'pole4', $this->pole4])
            ->andFilterWhere(['like', 'pole5', $this->pole5])
            ->andFilterWhere(['like', 'pole6', $this->pole6])
            ->andFilterWhere(['like', 'pole7', $this->pole7])
            ->andFilterWhere(['like', 'pole8', $this->pole8])
            ->andFilterWhere(['like', 'pole9', $this->pole9])
            ->andFilterWhere(['like', 'pole10', $this->pole10])
            ->andFilterWhere(['like', 'pole11', $this->pole11])
            ->andFilterWhere(['like', 'pole12', $this->pole12])
            ->andFilterWhere(['like', 'pole13', $this->pole13])
            ->andFilterWhere(['like', 'pole14', $this->pole14])
            ->andFilterWhere(['like', 'pole15', $this->pole15])
            ->andFilterWhere(['like', 'pole16', $this->pole16])
            ->andFilterWhere(['like', 'pole17', $this->pole17])
            ->andFilterWhere(['like', 'pole18', $this->pole18])
            ->andFilterWhere(['like', 'pole19', $this->pole19])
            ->andFilterWhere(['like', 'pole20', $this->pole20])
            ->andFilterWhere(['like', 'pole21', $this->pole21])
            ->andFilterWhere(['like', 'pole22', $this->pole22])
            ->andFilterWhere(['like', 'pole23', $this->pole23])
            ->andFilterWhere(['like', 'pole24', $this->pole24])
            ->andFilterWhere(['like', 'pole25', $this->pole25])
            ->andFilterWhere(['like', 'pole26', $this->pole26])
            ->andFilterWhere(['like', 'pole27', $this->pole27])
            ->andFilterWhere(['like', 'pole28', $this->pole28])
            ->andFilterWhere(['like', 'pole29', $this->pole29])
            ->andFilterWhere(['like', 'pole30', $this->pole30])
            ->andFilterWhere(['like', 'pole31', $this->pole31])
            ->andFilterWhere(['like', 'pole32', $this->pole32])
            ->andFilterWhere(['like', 'pole33', $this->pole33])
            ->andFilterWhere(['like', 'pole34', $this->pole34])
            ->andFilterWhere(['like', 'pole35', $this->pole35])
            ->andFilterWhere(['like', 'pole36', $this->pole36])
            ->andFilterWhere(['like', 'pole37', $this->pole37])
            ->andFilterWhere(['like', 'pole38', $this->pole38])
            ->andFilterWhere(['like', 'pole39', $this->pole39])
            ->andFilterWhere(['like', 'pole40', $this->pole40])
            ->andFilterWhere(['like', 'pole41', $this->pole41])
            ->andFilterWhere(['like', 'pole42', $this->pole42])
            ->andFilterWhere(['like', 'pole43', $this->pole43])
            ->andFilterWhere(['like', 'pole44', $this->pole44])
            ->andFilterWhere(['like', 'pole45', $this->pole45])
            ->andFilterWhere(['like', 'pole46', $this->pole46])
            ->andFilterWhere(['like', 'pole47', $this->pole47])
            ->andFilterWhere(['like', 'pole48', $this->pole48])
            ->andFilterWhere(['like', 'pole49', $this->pole49])
            ->andFilterWhere(['like', 'pole50', $this->pole50])
            ->andFilterWhere(['like', 'pole51', $this->pole51])
            ->andFilterWhere(['like', 'pole52', $this->pole52])
            ->andFilterWhere(['like', 'pole53', $this->pole53])
            ->andFilterWhere(['like', 'pole54', $this->pole54])
            ->andFilterWhere(['like', 'pole55', $this->pole55])
            ->andFilterWhere(['like', 'pole56', $this->pole56])
            ->andFilterWhere(['like', 'pole57', $this->pole57])
            ->andFilterWhere(['like', 'pole58', $this->pole58])
            ->andFilterWhere(['like', 'pole59', $this->pole59])
            ->andFilterWhere(['like', 'pole60', $this->pole60])
            ->andFilterWhere(['like', 'pole61', $this->pole61])
            ->andFilterWhere(['like', 'pole62', $this->pole62])
            ->andFilterWhere(['like', 'pole63', $this->pole63])
            ->andFilterWhere(['like', 'pole64', $this->pole64])
            ->andFilterWhere(['like', 'pole65', $this->pole65])
            ->andFilterWhere(['like', 'pole66', $this->pole66])
            ->andFilterWhere(['like', 'pole67', $this->pole67])
            ->andFilterWhere(['like', 'pole68', $this->pole68])
            ->andFilterWhere(['like', 'pole69', $this->pole69])
            ->andFilterWhere(['like', 'pole70', $this->pole70])
            ->andFilterWhere(['like', 'pole71', $this->pole71])
            ->andFilterWhere(['like', 'pole72', $this->pole72])
            ->andFilterWhere(['like', 'pole73', $this->pole73])
            ->andFilterWhere(['like', 'pole74', $this->pole74])
            ->andFilterWhere(['like', 'pole75', $this->pole75])
            ->andFilterWhere(['like', 'pole76', $this->pole76])
            ->andFilterWhere(['like', 'pole77', $this->pole77])
            ->andFilterWhere(['like', 'pole78', $this->pole78])
            ->andFilterWhere(['like', 'pole79', $this->pole79])
            ->andFilterWhere(['like', 'pole80', $this->pole80])
            ->andFilterWhere(['like', 'pole81', $this->pole81])
            ->andFilterWhere(['like', 'pole82', $this->pole82])
            ->andFilterWhere(['like', 'pole83', $this->pole83])
            ->andFilterWhere(['like', 'pole84', $this->pole84])
            ->andFilterWhere(['like', 'pole85', $this->pole85])
            ->andFilterWhere(['like', 'pole86', $this->pole86])
            ->andFilterWhere(['like', 'pole87', $this->pole87])
            ->andFilterWhere(['like', 'pole88', $this->pole88])
            ->andFilterWhere(['like', 'pole89', $this->pole89])
            ->andFilterWhere(['like', 'pole90', $this->pole90])
            ->andFilterWhere(['like', 'pole91', $this->pole91])
            ->andFilterWhere(['like', 'pole92', $this->pole92])
            ->andFilterWhere(['like', 'pole93', $this->pole93])
            ->andFilterWhere(['like', 'pole94', $this->pole94])
            ->andFilterWhere(['like', 'pole95', $this->pole95])
            ->andFilterWhere(['like', 'pole96', $this->pole96])
            ->andFilterWhere(['like', 'pole97', $this->pole97])
            ->andFilterWhere(['like', 'pole98', $this->pole98])
            ->andFilterWhere(['like', 'pole99', $this->pole99])
            ->andFilterWhere(['like', 'pole100', $this->pole100])
            ->andFilterWhere(['like', 'imageurl1', $this->imageurl1])
            ->andFilterWhere(['like', 'imageurl2', $this->imageurl2])
            ->andFilterWhere(['like', 'imageurl3', $this->imageurl3])
            ->andFilterWhere(['like', 'imageurl4', $this->imageurl4])
            ->andFilterWhere(['like', 'imageurl5', $this->imageurl5])
            ->andFilterWhere(['like', 'imageurl6', $this->imageurl6])
            ->andFilterWhere(['like', 'imageurl7', $this->imageurl7])
            ->andFilterWhere(['like', 'imageurl8', $this->imageurl8])
            ->andFilterWhere(['like', 'imageurl9', $this->imageurl9])
            ->andFilterWhere(['like', 'imageurl10', $this->imageurl10])
            ->andFilterWhere(['like', 'imageurl11', $this->imageurl11])
            ->andFilterWhere(['like', 'imageurl12', $this->imageurl12])
            ->andFilterWhere(['like', 'imageurl13', $this->imageurl13])
            ->andFilterWhere(['like', 'imageurl14', $this->imageurl14])
            ->andFilterWhere(['like', 'imageurl15', $this->imageurl15])
            ->andFilterWhere(['like', 'imageurl16', $this->imageurl16])
            ->andFilterWhere(['like', 'imageurl17', $this->imageurl17])
            ->andFilterWhere(['like', 'imageurl18', $this->imageurl18])
            ->andFilterWhere(['like', 'imageurl19', $this->imageurl19])
            ->andFilterWhere(['like', 'imageurl20', $this->imageurl20]);

        return $dataProvider;
    }
}
