<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $primaryKey = "pro_id";
    public $timestamps = true;
    protected $fillable = ['pro_id', 'pro_name', 'pro_price', 'pro_view', 'pro_spotlight', 'pro_special', 'pro_description', 'pro_img', 'cate_id'];
    protected $dates = ['ngay'];
    protected $attributes = ['pro_view' => 0, 'pro_spotlight' => 0, 'pro_special' => 0, 'pro_img' => ''];

    public function getCateName(){
        return $this->belongsTo(Categories::class, 'cate_id', 'cate_id');
    }

    public function comments(){
        return $this->hasMany(Comments::class, 'product_id', 'pro_id');
    }

    public function images(){
        return $this->hasMany(Images::class, 'pro_id', 'pro_id');
    }
}
