<?php


namespace App\Http;
use App\Models\Cart;

class CartController extends Controller
{
    public function actionAddAjax($request, $response, $args)
    {
        $cart = new \App\Models\Cart($this->container->get('PDO'));
        $carts = $cart->addToCart($id, $qty);

//       return $this->view('single', compact('sum', 'carts'));
    }
    
    
}