<?php

namespace Drupal\thankyou\Controller;

use Drupal\Core\Controller\ControllerBase;

class ThankyouController extends ControllerBase
{
    public function indexAction()
    {
        $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]";

        if(!isset($_SESSION['loginId'])){
            header('Location: '.$actual_link . '/payment');
        }

        if(empty($_SESSION['cart'])){
            header('Location: '.$actual_link);
        }

        $this->populateSale();
        $_SESSION['cart'] = [];

        return [
            '#theme' => 'display_thankyou',
            '#thanks' => '',
        ];
    }

    private function populateSale(){
        $cart = $_SESSION['cart'];

        foreach($cart as $item) {
            $db = \Drupal::database();

            $sth = $db->prepare("INSERT INTO sales(customer_id, product_id, quantity, price, color, size, date)
                                  VALUES(:customer_id, :product_id, :quantity, :price, :color, :size, NOW())");
            $sth->execute(
                [
                    ':customer_id' => $_SESSION['loginId'],
                    ':product_id' => $item['id'],
                    ':quantity' => $item['quantity'],
                    ':price' => $item['price'] * $item['quantity'],
                    ':color' => $item['color'],
                    ':size' => $item['size']
                ]
            );
        }
    }
}