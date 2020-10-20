<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 20/10/2020
 * Time: 12:07
 */

namespace MageMastery\Todo\Model\ResourceModel\Task;
use \MageMastery\Todo\Model\Task;
use \MageMastery\Todo\Model\ResourceModel\Task as TaskResource;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;



class Collection extends AbstractCollection
{
    protected function _construct() {
        $this->_init(Task::class,TaskResource::class);
    }
}