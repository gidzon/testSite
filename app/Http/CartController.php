<?php


namespace App\Http;
use App\Models\Cart;

class CartController extends Controller
{
    public function actionAddAjax($request, $response, $args)
    {
        $cart = new \App\Models\Cart();
        $id = $args['id'];
        $carts = $cart->addProduct($id);
        $sum = $cart::countItems();

       return $this->view('single', compact('sum', 'carts'));



    }
}