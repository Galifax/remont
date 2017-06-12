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
            'id' => Yii::t('app', 'ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'name' => Yii::t('app', 'Name'),
            'mob_phone' => Yii::t('app', 'Mob Phone'),
            'email' => Yii::t('app', 'Email'),
            'adress' => Yii::t('app', 'Adress'),
            'sale_card' => Yii::t('app', 'Sale Card'),
            'sale_service' => Yii::t('app', 'Sale Service'),
            'sale_product' => Yii::t('app', 'Sale Product'),
            'note' => Yii::t('app', 'Note'),
            'from' => Yii::t('app', 'From'),
        ];
    }
}
