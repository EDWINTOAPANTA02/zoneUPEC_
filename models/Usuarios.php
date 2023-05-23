<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
 *
 * @property int $id
 * @property string $nombre_usuario
 * @property string $contraseña_usuario
 * @property string $correo_usuario
 */
class Usuarios extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre_usuario', 'contraseña_usuario', 'correo_usuario'], 'required'],
            [['nombre_usuario', 'contraseña_usuario', 'correo_usuario'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre_usuario' => 'Nombre Usuario',
            'contraseña_usuario' => 'Contraseña Usuario',
            'correo_usuario' => 'Correo Usuario',
        ];
    }
}
