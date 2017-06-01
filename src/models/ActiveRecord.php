<?php
/**
 * ActiveRecord
 * @version     1.0
 * @license     http://mit-license.org/
 * @coder       Yevhenii Pylypenko <i.pylypenko@hexa.com.ua>
 * @coder       Alexander Oganov   <a.ohanov@hexa.com.ua>
 * @copyright   Copyright (C) Hexa,  All rights reserved.
 */

namespace hexa\yiisupport\models;

use yii\db\ActiveRecord as BaseActiveRecord;

/**
 * Class ActiveRecord
 */
class ActiveRecord extends BaseActiveRecord
{
    /**
     * @return ActiveQuery
     */
    public static function find()
    {
        return new ActiveQuery(get_called_class());
    }

    /**
     * @return array
     */
    public static function list()
    {
        return static::find()->select(['name', 'id'])->indexBy('id')->column();
    }
}