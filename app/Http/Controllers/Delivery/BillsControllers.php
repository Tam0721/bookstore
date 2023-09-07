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
    public function getProgressingBills() {
        $bills = Bills::orderBy('updated_at', 'asc')
                        -> where('bill_paystatus', 0)
                        -> where('bill_status', 0)
                        -> paginate(3);
        return view('delivery.bills.list-progressing-bills', ['bills' => $bills]);
    }

    public function getProgressedBills() {
        $bills = Bills::orderBy('updated_at', 'desc')
                        -> where('bill_paystatus', 1)
                        -> where('bill_status', 1)
                        -> paginate(3);
        return view('delivery.bills.list-progressed-bills', ['bills' => $bills]);
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
