<?php

namespace Drupal\products\Repository;

use Drupal\product\Model\Product;

class Repository{

    public function getProductsByCategory($category)
    {
        $db = \Drupal::database();
        $sth = $db->prepare("SELECT * FROM produtcts WHERE category = :category");
        $sth->execute([':category' => $category]);
        $result = $sth->fetchAll(\PDO::FETCH_ASSOC);
        $response = [];

        foreach($result as $dbObject) {
            $response[] = $this->populateModel($dbObject);
        }

        return $response;
    }

    private function populateModel($result)
    {
        $model = new Product();
        $model->setId($result['id']);
        $model->setName($result['name']);
        $model->setDescription($result['descripion']);
        $model->setComposition($result['composition']);
        $model->setPrice($result['price']);
        $model->setImg($result['img']);

        return $model;
    }
}
