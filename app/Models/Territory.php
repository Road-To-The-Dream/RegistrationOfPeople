<?php

namespace app\Models;

use app\Core\ConnectionManager;

class Territory extends Model
{
    private $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

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

    public function getRegions($area)
    {
        $query = "SELECT ter_address FROM t_koatuu_tree WHERE ter_address LIKE '%$area%'";

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

    public function getCities($region)
    {
        $query = "SELECT ter_address FROM t_koatuu_tree WHERE ter_address LIKE '%$region%'";

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

    public function getTerritoryId($area, $region, $city)
    {
        $query = "SELECT ter_id FROM t_koatuu_tree WHERE ter_address LIKE '%$area%'
                    AND ter_address LIKE '%$region%'
                    AND ter_address LIKE '%$city%'";

        $data = ConnectionManager::executionQuery($query);

        $obj = new self();
        $obj->setId($data[0]['ter_id']);

        return $obj;
    }
}
