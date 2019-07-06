<?php


namespace App\Models;


class Cart extends Model
{   private $table = 'goods';



   public function addToCart($id, $qty, $columns = '*')
   {
   	
         $cart = $this->pdo->query("SELECT {$columns} FROM {$this->table} "
            . "WHERE id = $id");
            
            echo(json_encode($cart));
   }

}