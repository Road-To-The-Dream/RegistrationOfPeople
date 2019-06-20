<?php

namespace app\Models;

use app\Core\ConnectionManager;

class Territory extends Model
{
    public function __construct()
    {
        $this->initConnection();
    }

    public function getAreas()
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

    public function getRegions()
    {
        $query = "SELECT ter_address FROM t_koatuu_tree WHERE ter_address LIKE '%" . $_POST['area'] . "%'";

        $data = ConnectionManager::executionQuery($query);

        $count = 0;
        $regions = [];

        foreach ($data as $item) {
            $region = explode(',', $item['ter_address']);

            if (array_search(trim($region[count($region) - 2]), $regions) === false) {
                array_push($regions, strtolower(trim($region[count($region) - 2])));
            }

            $count++;
        }

        return $regions;
    }

    public function getCities()
    {
        $query = "SELECT ter_address FROM t_koatuu_tree WHERE ter_address LIKE '%" . $_POST['region'] . "%'";

        $data = ConnectionManager::executionQuery($query);

        $count = 0;
        $cities = [];

        foreach ($data as $item) {
            $city = explode(',', $item['ter_address']);

            if (array_search(trim($city[count($city) - 3]), $cities) === false) {
                array_push($cities, strtolower(trim($city[count($city) - 3])));
            }

            $count++;
        }

        return $cities;
    }
}
