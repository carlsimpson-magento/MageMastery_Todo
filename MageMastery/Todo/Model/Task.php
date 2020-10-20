<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 20/10/2020
 * Time: 11:46
 */

namespace MageMastery\Todo\Model;


class Task extends AbstractModel
{
    protected function _construct() {
        $this->_init(TaskResource::class);
    }
}