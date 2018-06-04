<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tecnicas;

/**
 * TecnicasSearch representa el modelo detrás de la forma de búsqueda de `app \ models \ Tecnicas`.

 */
class TecnicasSearch extends Tecnicas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['nombre','clasificacion', 'area', 'dificultad', 'enfoque', 'proposito', 'ingredientes', 'participantes', 'procedimiento', 'salidas'], 'safe'],
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
     * 
    Crea una instancia del proveedor de datos con una consulta de búsqueda aplicada
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tecnicas::find();

        
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
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'clasificacion', $this->clasificacion])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'dificultad', $this->dificultad])
            ->andFilterWhere(['like', 'enfoque', $this->enfoque])
            ->andFilterWhere(['like', 'proposito', $this->proposito])
            ->andFilterWhere(['like', 'ingredientes', $this->ingredientes])
            ->andFilterWhere(['like', 'participantes', $this->participantes])
            ->andFilterWhere(['like', 'procedimiento', $this->procedimiento])
            ->andFilterWhere(['like', 'salidas', $this->salidas]);

        return $dataProvider;
    }
}
