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
            'id' => Yii::t('main', '№ заказа'),
            'user_id' => 'User id',
            'type' => Yii::t('main', 'Тип заказа'),
            'client_name' => Yii::t('main', 'Имя клиента'),
            'phone' => Yii::t('main', 'Телефон'),
            'email' => Yii::t('main', 'Емейл'),
            'address' => Yii::t('main', 'Адрес'),
            'where_find' => Yii::t('main', 'Как нашли'),
            'device_type' => Yii::t('main', 'Тип устройства'),
            'serial_number' => Yii::t('main', 'Серийный номер'),
            'brand' => Yii::t('main', 'Бренд'),
            'model' => Yii::t('main', 'Модель'),
            'malfunction' => Yii::t('main', 'Неисправность'),
            'appearance' => Yii::t('main', 'Внешний вид'),
            'equipment' => Yii::t('main', 'Комплектация'),
            'notes' => Yii::t('main', 'Заметки'),
            'date' => Yii::t('main', 'Дата'),
            'indicative_price' => Yii::t('main', 'Ориентировочная цена'),
            'avans' => Yii::t('main', 'Аванс'),
            'urgently' => Yii::t('main', 'Срочно'),
            'manager' => Yii::t('main', 'Менеджер'),
            'executor' => Yii::t('main', 'Исполнитель'),
        ];
    }
}
