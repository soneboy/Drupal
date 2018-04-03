<?php

namespace Drupal\product\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\product\Repository\Repository;

class ProductController extends ControllerBase
{
    public function indexAction($id)
    {
        $repository = new Repository();
        $product = $repository->getProdutById($id);
        return [
            '#theme' => 'display_product',
            '#product' => $product,
        ];
    }
}