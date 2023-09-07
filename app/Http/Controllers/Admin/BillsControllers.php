<?php

namespace App\Http\Controllers\Admin;

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
        return view('admin.bills.list-bill', ['bills' => $bills]);
    }

    public function getOneBill($idBill = 0) {
        $detailBill = BillsDetail::where('bill_id', $idBill) -> paginate(3);
        return view('admin.bills.detailBill', ['detailBill' => $detailBill]);
    }
}
