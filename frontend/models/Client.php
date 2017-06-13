<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "client".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $mob_phone
 * @property string $email
 * @property string $adress
 * @property string $sale_card
 * @property double $sale_service
 * @property double $sale_product
 * @property string $note
 * @property integer $from
 */
class Client extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'client';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'mob_phone', 'email', 'adress', 'sale_card', 'sale_service', 'sale_product', 'note', 'from'], 'required'],
            [['user_id', 'from'], 'integer'],
            [['sale_service', 'sale_product'], 'number'],
            [['note'], 'string'],
            [['name', 'mob_phone', 'email', 'adress', 'sale_card'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('main', 'ID'),
            'user_id' => Yii::t('main', 'User ID'),
            'name' => Yii::t('main', 'Имя'),
            'mob_phone' => Yii::t('main', 'Mob Phone'),
            'email' => Yii::t('main', 'Email'),
            'adress' => Yii::t('main', 'Adress'),
            'sale_card' => Yii::t('main', 'Sale Card'),
            'sale_service' => Yii::t('main', 'Sale Service'),
            'sale_product' => Yii::t('main', 'Sale Product'),
            'note' => Yii::t('main', 'Заметка'),
            'from' => Yii::t('main', 'Откуда'),
        ];
    }
}
