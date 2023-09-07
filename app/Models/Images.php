<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    use HasFactory;
    protected $table = "images";
    protected $primaryKey = "img_id";
    public $timestamps = true;
    protected $fillable = ['pro_id', 'img_file'];

    public function getProduct() {
        return $this->belongsTo(Products::class, 'pro_id', 'pro_id');
    }
}
