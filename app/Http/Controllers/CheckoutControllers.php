<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\BillsDetail;

class CheckoutControllers extends Controller
{
    public function __construct() {
        $this -> middleware('auth');
    }

    public function loadView() {
        return view('checkout.checkoutView');
    }

    public function checkout() {
        $bills = new Bills;
        $bills->acc_id = $_POST['acc_id'];
        $bills->bill_name = $_POST['bill_name'];
        $bills->bill_phone = $_POST['bill_phone'];
        $bills->bill_address = $_POST['bill_address'];
        $bills->bill_email = $_POST['bill_email'];
        $bills->bill_payment = $_POST['bill_payment'];
        $bills->save();

        foreach (session('cart') as $product) {
            $billsDetail = new BillsDetail;
            $billsDetail->bill_id = $bills->bill_id;
            $billsDetail->pro_id = $product['pro_id'];
            $billsDetail->detail_quantity = $product['quantity'];
            $billsDetail->save();
        }
        return redirect('/lich-su') -> with('success', 'Đặt hàng thành công.');
    }
}
