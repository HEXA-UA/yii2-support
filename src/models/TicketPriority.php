<?php

namespace hexa\yiisupport\models;

use hexa\yiisupport\db\ActiveQuery;
use hexa\yiisupport\db\ActiveRecord;

/**
 * This is the model class for table "ticket_priority".
 *
 * @property integer  $id
 * @property string   $name
 * @property string   $color
 *
 * @property Ticket[] $tickets
 */
class TicketPriority extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%ticket_priority}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['color'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        $category = $this->getConfig('languageCategory', 'app');

        return [
            'id'    => \Yii::t($category, 'ID'),
            'name'  => \Yii::t($category, 'Priority'),
            'color' => \Yii::t($category, 'Color'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTickets()
    {
        return $this->hasMany(Ticket::className(), ['ticket_priority_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public static function find()
    {
        return new ActiveQuery(get_called_class());
    }
}
