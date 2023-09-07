<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bills extends Model
{
    use HasFactory;

    protected $table = "bills";
    protected $primaryKey = "bill_id";
    public $timestamps = true;
    protected $fillable = ['bill_id', 'acc_id', 'bill_name', 'bill_phone', 'bill_address', 'bill_email', 'bill_payment', 'bill_paystatus', 'bill_status'];
    protected $attributes = ['bill_paystatus' => 0, 'bill_status' => 0];

    public function getUser() {
        return $this->belongsTo(User::class, 'acc_id', 'id');
    }
}
