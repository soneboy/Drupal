<?php

namespace Drupal\checkout\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;

class CheckoutController extends ControllerBase
{
    public function indexAction()
    {
        $deleteKey = \Drupal::request()->request->get('delete');
        $quantity = \Drupal::request()->request->get('quantity');
        $key = \Drupal::request()->request->get('key');

        if(!is_null($deleteKey)) {
            unset($_SESSION['cart'][$deleteKey]);
            $totalPrice = $this->getTotalPrice($_SESSION['cart']);
            $response = new JsonResponse();
            $response->setContent(json_encode(['totalPrice' => $totalPrice]));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
        elseif(!is_null($quantity) && !is_null($key)) {
            $_SESSION['cart'][$key]['quantity'] = $quantity;
            $totalPrice = $this->getTotalPrice($_SESSION['cart']);
            $response = new JsonResponse();
            $response->setContent(json_encode(['totalPrice' => $totalPrice]));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
        else {

            $totalPrice = $this->getTotalPrice($_SESSION['cart']);

            return [
                '#theme' => 'display_checkout',
                '#cartContent' => isset($_SESSION['cart']) ? $_SESSION['cart'] : [],
                '#totalPrice' => $totalPrice
            ];
        }
    }

    /**
     * @param $cart
     * @return mixed
     */
    private function getTotalPrice($cart)
    {
        $start = 0;

        foreach($cart as $item) {
            $countLocalPrice = $item['quantity'] * $item['price'];
            $start += $countLocalPrice;
        }

        return $start;
    }
}