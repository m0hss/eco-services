<?php

namespace App\Services;

use App\Models\Cart;

class CartService
{
  public function clearCart($userId)
  {
    Cart::where('user_id', $userId)->where('order_id', null)->delete();
  }
}
