<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**

* LoginForm es el modelo detrás del formulario de inicio de sesión.
 *
 * @property User | null $ user Esta propiedad es de solo lectura.
 *
 */
class LoginForm extends Model
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;


    /**
     * @return array de validación de reglas.
     */
    public function rules()
    {
        return [
            // username y password son ambos requeridos
            [['username', 'password'], 'required'],
            // rememberMe debe ser un valor booleano
            ['rememberMe', 'boolean'],
            // password es validado por validatePassword()
            ['password', 'validatePassword'],
        ];
    }

    /**
     * 
        Valida la contraseña.
     * Este método sirve como la validación en línea para la contraseña.
     *
     * @param string $attribute the attribute currently being validated
     * @param array $params the additional name-value pairs given in the rule
     */
     public function attributeLabels()
    {
        return [
            'username' => 'Usuario',
            'password' => 'Contraseña',
            'rememberMe' => 'Recordarme',
        ];
    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user || !$user->validatePassword($this->password)) {
                $this->addError($attribute, 'Usuario o contraseña incorrectos.');
            }
        }
    }

    /**
     * 
        Inicia sesión en un usuario utilizando el nombre de usuario y la contraseña proporcionados.
     * @return bool whether the user is logged in successfully
     */
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }
        return false;
    }

    /**
     * 
    Encuentra usuario por [[nombre de usuario]]
     * @return User|null
     */
    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = User::findByUsername($this->username);
        }

        return $this->_user;
    }
}
