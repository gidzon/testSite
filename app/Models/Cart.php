<?php


namespace App\Models;


class Cart
{
    public function addProduct($id)
    {
        $id = intval($id);

        $productsInCart = [];
        if (isset($_SESSION['products'])) {

            $productsInCart = $_SESSION['products'];
        }

        if (array_key_exists($id, $productsInCart)) {

            $productsInCart[$id] ++;
        } else {

            $productsInCart[$id] = 1;
        }


        $_SESSION['products'] = $productsInCart;



        return self::countItems();
    }

    public static function countItems()
    {

        if (isset($_SESSION['products'])) {

            $count = 0;
            foreach ($_SESSION['products'] as $id => $quantity) {
                $count = $count + $quantity;
            }
            return $count;
        } else {

            return 0;
        }

    }

    public function getProducts()
    {
        if (isset($_SESSION['products'])) {
            return $_SESSION['products'];
        }
        return false;
    }

}