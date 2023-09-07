<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillsDetail extends Model
{
    use HasFactory;
    protected $table = "bills_detail";
    protected $primaryKey = "detail_id";
    public $timestamps = false;
    protected $fillable = ['detail_id', 'bill_id', 'pro_id', 'detail_quantity'];

    public function getProduct(){
        return $this->hasMany(Products::class, 'pro_id', 'pro_id');
    }
}
