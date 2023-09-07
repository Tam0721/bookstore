<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    use HasFactory;
    protected $table = "categories";
    protected $primaryKey = "cate_id";
    public $timestamps = true;
    protected $fillable = ['cate_id', 'cate_name'];

    public function products(){
        return $this->belongsTo(Products::class, 'cate_id', 'cate_id');
    }
}
