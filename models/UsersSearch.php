<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 
* UsersSearch representa el modelo detrás de la forma de búsqueda de `app \ models \ Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'role'], 'integer'],
            [['username', 'email', 'password', 'authKey', 'accessToken', 'activate'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        
    // omitir la implementación de escenarios () en la clase padre
        return Model::scenarios();
    }

    /**
     
    * Crea una instancia del proveedor de datos con una consulta de búsqueda aplicada
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Users::find();

        
        // agrega condiciones que siempre deberían aplicarse aquí

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // elimine el comentario de la siguiente línea si no desea devolver ningún registro cuando la validación falla
            // $query->where('0=1');
            return $dataProvider;
        }

        // condiciones de filtrado 
        $query->andFilterWhere([
            'id' => $this->id,
            'role' => $this->role,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken])
            ->andFilterWhere(['like', 'activate', $this->activate]);

        return $dataProvider;
    }
}
