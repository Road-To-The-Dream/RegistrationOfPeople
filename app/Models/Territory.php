<?php

namespace app\Models;

use app\Core\ConnectionManager;

class Territory extends Model
{
    public function __construct()
    {
        $this->initConnection();
    }

    public function getAll()
    {
        $query = "SELECT ter_id, ter_name, ter_address FROM t_koatuu_tree LIMIT 100";

        return ConnectionManager::executionQuery($query);

//        $dataCount = count($imageInfo);
//
//        $imageList = [];
//        for ($i = 0; $i < $dataCount; $i++) {
//            $objImage = new self();
//            $objImage->setImageName($imageInfo[$i]['image_name'])
//                ->setPath($imageInfo[$i]['path'])
//                ->setCreateAt($imageInfo[$i]['create_at']);
//
//            $imageList[] = $objImage;
//        }
//
//        return $imageList;
    }
}
