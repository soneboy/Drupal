<?php

namespace Drupal\products\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\products\Repository\Repository;

class ProductsController extends ControllerBase
{
    public function indexAction($category)
    {
        $repository = new Repository();
        $products = $repository->getProductsByCategory($category);

        return [
            '#theme' => 'display_products',
            '#products' => $products,
        ];
    }
}