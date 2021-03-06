<?php
/**
 * CommentEvent
 * @version     1.0
 * @license     http://mit-license.org/
 * @coder       Yevhenii Pylypenko <i.pylypenko@hexa.com.ua>
 * @coder       Alexander Oganov   <a.ohanov@hexa.com.ua>
 * @copyright   Copyright (C) Hexa,  All rights reserved.
 */

namespace hexaua\yiisupport\events;

use hexaua\yiisupport\models\Comment;
use yii\base\Event;

/**
 * Class CommentEvent
 */
class CommentEvent extends Event
{
    /**
     * @var bool
     */
    public $isValid;
}
