<?php

namespace Drupal\cart\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class CartController extends ControllerBase
{
    public function indexAction()
    {
        $response = new JsonResponse();

        if(\Drupal::request()->isMethod('POST')) {
            $data = \Drupal::request()->request->all();
            session_start();
            if(!isset( $_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            $_SESSION['cart'][] = $data;
            $response->setContent(json_encode($_SESSION['cart']));
            $response->headers->set('Content-Type', 'application/json');
        } else {
            $responseData = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];
            $response->setContent(json_encode($responseData));
            $response->headers->set('Content-Type', 'application/json');
        }


        return $response;
    }
}