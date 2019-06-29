<?php

namespace app\Models;

use app\Core\ConnectionManager;

<<<<<<< HEAD
/**
 * Class Territory
 * @package app\Models
 */
=======
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
class Territory extends Model
{
    private $id;
    private $address;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return Territory
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param $address
     * @return Territory
     */
    public function setAddress($address): self
    {
        $this->address = $address;

        return $this;
    }

<<<<<<< HEAD
    /**
     * @return array
     */
    public function getAreas(): array
=======
    public function getAreas()
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
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

<<<<<<< HEAD
    /**
     * @param $area
     * @return array
     */
    public function getRegions($area): array
=======
    public function getRegions($area)
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
    {
        $query = "SELECT ter_address FROM t_koatuu_tree WHERE ter_address LIKE '%$area%' AND ter_address LIKE '%район%'";

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

<<<<<<< HEAD
    /**
     * @param $region
     * @return array
     */
    public function getCities($region): array
=======
    public function getCities($region)
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
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

<<<<<<< HEAD
    /**
     * @param $area
     * @param $region
     * @param $city
     * @return Territory
     */
    public function getTerritoryId($area, $region, $city): Territory
=======
    public function getTerritoryId($area, $region, $city)
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
    {
        $query = "SELECT ter_id FROM t_koatuu_tree WHERE ter_address LIKE '%$area%'
                    AND ter_address LIKE '%$region%'
                    AND ter_address LIKE '%$city%'";

        $data = ConnectionManager::executionQuery($query);

        $obj = new self();
        $obj->setId($data[0]['ter_id']);

        return $obj;
    }

<<<<<<< HEAD
    /**
     * @param $id
     * @return Territory
     */
    public function getAddressById($id): Territory
=======
    public function getAddressById($id)
>>>>>>> 90822002d01fcebddd989437559e74336f1edfbb
    {
        $query = "SELECT ter_address FROM t_koatuu_tree WHERE ter_id = $id";

        $data = ConnectionManager::executionQuery($query);

        $obj = new self();

        return $obj->setAddress($data[0]['ter_address']);
    }
}
