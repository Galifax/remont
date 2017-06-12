<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "order".
 *
 * @property integer $id
 * @property string $type
 * @property string $client_name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $where_find
 * @property string $device_type
 * @property string $serial_number
 * @property string $brand
 * @property string $model
 * @property string $malfunction
 * @property string $appearance
 * @property string $equipment
 * @property string $notes
 * @property string $date
 * @property integer $indicative_price
 * @property integer $avans
 * @property integer $urgently
 * @property string $manager
 * @property string $executor
 */
class Order extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['client_name', 'phone', 'email', 'address', 'where_find', 'device_type', 'serial_number', 'brand', 'model', 'malfunction', 'appearance', 'equipment', 'notes', 'date', 'indicative_price', 'avans', 'urgently', 'manager', 'executor', 'user_id'], 'required'],
            [['date'], 'safe'],
            [['indicative_price', 'avans', 'urgently', 'user_id'], 'integer'],
            [['type', 'client_name', 'phone', 'email', 'address', 'where_find', 'device_type', 'serial_number', 'brand', 'model', 'malfunction', 'appearance', 'equipment', 'notes', 'manager', 'executor'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '№ заказа',
            'user_id' => 'User id',
            'type' => 'Тип заказа',
            'client_name' => 'Имя клиента',
            'phone' => 'Телефон',
            'email' => 'Емейл',
            'address' => 'Адрес',
            'where_find' => 'Как нашли',
            'device_type' => 'Тип устройства',
            'serial_number' => 'Серийный номер',
            'brand' => 'Бренд',
            'model' => 'Модель',
            'malfunction' => 'Неисправность',
            'appearance' => 'Внешний вид',
            'equipment' => 'Комплектация',
            'notes' => 'Заметки',
            'date' => 'Дата',
            'indicative_price' => 'Ориентировочная цена',
            'avans' => 'Аванс',
            'urgently' => 'Срочно',
            'manager' => 'Менеджер',
            'executor' => 'Испольнитель',
        ];
    }
}
