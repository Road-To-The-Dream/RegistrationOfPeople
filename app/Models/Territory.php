<?php

namespace app\Models;

use app\Core\ConnectionManager;

class Territory extends Model
{
    public function __construct()
    {
        $this->initConnection();
    }

    public function getArea()
    {
        $query = "SELECT ter_address FROM t_koatuu_tree";

        $data = ConnectionManager::executionQuery($query);

        $count = 0;
        $areas = [];

        foreach ($data as $item) {
            $area = explode(',', $item['ter_address']);

            if (array_search(trim(end($area)), $areas) === false) {
                array_push($areas, strtolower(trim(end($area))));
            }

            $count++;
        }

        return $areas;
    }
}
