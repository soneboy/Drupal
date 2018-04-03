<?php

namespace Drupal\checkoutpayment\Controller;

use Drupal\Core\Controller\ControllerBase;

class CheckoutpaymentController extends ControllerBase
{
    public function indexAction()
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

        if(empty($_SESSION['cart'])){
            header('Location: '.$actual_link);
        }

        if(!isset($_SESSION['loginId'])){
            header('Location: '.$actual_link . '/login');
        }

        $totalPrice = $this->getTotalPrice($_SESSION['cart']);

        return [
            '#theme' => 'display_payment',
            '#payment' => isset($_SESSION['cart']) ? $_SESSION['cart'] : [],
            '#totalPrice' => $totalPrice
        ];
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