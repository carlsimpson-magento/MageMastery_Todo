<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 20/10/2020
 * Time: 17:28
 */

namespace MageMastery\Todo\Api;

/**
 * @api
 */
interface TaskManagementInterface
{
    public function save();
    public function delete();
}