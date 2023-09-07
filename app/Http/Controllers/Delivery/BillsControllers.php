<?php

namespace App\Http\Controllers\Delivery;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\BillsDetail;
use Illuminate\Pagination\Paginator;
Paginator::useTailwind();

class BillsControllers extends Controller
{
    public function getAll() {
        $bills = Bills::orderBy('updated_at', 'desc')->paginate(3);
        return view('delivery.homeDelivery', ['bills' => $bills]);
    }

    public function getOneBill($idBill = 0) {
        $detailBill = BillsDetail::where('bill_id', $idBill) -> paginate(3);
        return view('delivery.bills.detailBill', ['detailBill' => $detailBill]);
    }

    public function update($idBill) {
        $bill = Bills::where('bill_id', $idBill) -> get();
        if($bill == null) return redirect('/delivery');
        return view('delivery.bills.update-form', ['bill' => $bill]);
    }

    public function updateAction($idBill) {
        $bill = Bills::find($idBill);
        if ($bill == null) return redirect('/delivery')->with('alert', 'Không tìm thấy đơn hàng!');
        $bill->bill_paystatus = $_POST['bill_paystatus'];
        $bill->bill_status = $_POST['bill_status'];
        $bill->save();
        return redirect('/delivery')->with('alert', 'Cập nhật đơn hàng thành công!');
    }
}
