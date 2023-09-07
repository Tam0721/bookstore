<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bills;
use App\Models\BillsDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\Paginator;
Paginator::useTailwind();

class BillsControllers extends Controller
{
    public function __construct() {
        $this -> middleware('auth');
    }

    public function allBills() {
        $accId = Auth::user()->id;

        $shippingBills = Bills::where('acc_id', $accId) 
                                -> where('bill_status', 0) 
                                -> orderBy('created_at', 'desc') 
                                -> paginate(3);

        $shippedBills = Bills::where('acc_id', $accId) 
                                -> where('bill_status', 1) 
                                -> orderBy('created_at', 'desc') 
                                -> paginate(3);

        return view('bills.history', ['shippingBills' => $shippingBills, 'shippedBills' => $shippedBills]);
    }

    public function getOneBill($idBill = 0) {
        $detailBill = BillsDetail::where('bill_id', $idBill) -> paginate(3);
        return view('bills.detailBill', ['detailBill' => $detailBill]);
    }
}
