<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm es el modelo detrás del formulario de contacto.
 */
class ContactForm extends Model
{
    public $nombre;
    public $email;
    public $asunto;
    public $mensaje;
    public $codigo;

    /**
     * @return array de las reglas de validación.
     */
    public function rules()
    {
        return [
            // nombre, email, asunto y mensaje son requeridos
            [['nombre', 'email', 'asunto', 'mensaje'], 'required'],
            // email debe ser una direcció válida
            ['email', 'email'],
            // verifyCode necesita ser ingresado correctamente
            ['codigo', 'captcha'],
        ];
    }

    /**
     * @return matriz de etiquetas de atributos personalizados
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo de Verificación',
        ];
    }

    /**
     * Envía un correo electrónico a la dirección de correo electrónico especificada utilizando la información recopilada por este modelo
     * @param  string  $email the target email address
     * @return boolean whether the model passes validation
     */
    public function contact($email)
    {
        $content = "<p>email: " . $this->email . "</p>";
        $content .= "<p>Nombre: " . $this->nombre . "</p>";
        $content .= "<p>Asunto: " . $this->asunto . "</p>";
        $content .= "<p>Mensaje: " . $this->mensaje . "</p>";
        if ($this->validate()) {
            Yii::$app->mailer->compose("@app/mail/layouts/html", ["content" => $content])
                ->setTo($email)
                ->setFrom([$this->email => $this->nombre])
                ->setSubject($this->asunto)
                ->setTextBody($this->mensaje)
                ->send();

            return true;
        } else {
            return false;
        }
    }
}