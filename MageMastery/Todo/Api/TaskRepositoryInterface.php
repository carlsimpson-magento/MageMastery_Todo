<?php
/**
 * Created by PhpStorm.
 * User: carlsimpson
 * Date: 20/10/2020
 * Time: 17:36
 */


namespace MageMastery\Todo\Api;

/**
 * @api
 */
interface TaskRepositoryInterface
{
    public function getList();
    public function get(int $taskId);
}