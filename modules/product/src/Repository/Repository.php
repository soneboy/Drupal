<?php

namespace Drupal\product\Repository;

use Drupal\product\Model\Product;

class Repository{

    public function getProdutById($id)
    {
        $db = \Drupal::database();
        $sth = $db->prepare("SELECT * FROM produtcts WHERE id = :id");
        $sth->execute([':id' => intval($id)]);
        $result = $sth->fetchAll();

        $model = $this->populateModel(reset($result));
        return $model;
    }

    /**
     * @param $result
     * @return Product
     */
    private function populateModel($result)
    {
        $model = new Product();
        $model->setId($result->id);
        $model->setName($result->name);
        $model->setDescription($result->descripion);
        $model->setComposition($result->composition);
        $model->setPrice($result->price);
        $model->setImg($result->img);

        return $model;
    }
}
