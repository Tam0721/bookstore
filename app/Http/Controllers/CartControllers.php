<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CartControllers extends Controller
{
    public function loadView() {
        return view('cart.cartView');
    }

    public function addToCart($pro_id) {
        $product = Products::findOrFail($pro_id);
          
        $cart = session()->get('cart', []);

        $quantity = 1;
        if(isset($_POST['quantity'])) {
            $quantity = $_POST['quantity'];
        } else {
            $quantity = 1;
        }
  
        if(isset($cart[$pro_id])) {
            $cart[$pro_id]['quantity'] += $quantity;
        } else {
            $cart[$pro_id] = [
                "pro_id" => $product->pro_id,
                "pro_name" => $product->pro_name,
                "quantity" => $quantity,
                "pro_price" => $product->pro_price,
                "pro_img" => $product->pro_img
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng!');
    }

    public function updateCart(Request $request)
    {
        if($request->pro_id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->pro_id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cập nhật giỏ hàng thành công!');
        }
    }
  
    public function deleteProduct(Request $request)
    {
        if($request->pro_id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->pro_id])) {
                unset($cart[$request->pro_id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Xóa sản phẩm thành công!');
        }
    }
}
