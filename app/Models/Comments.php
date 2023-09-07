<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = ['content', 'user_id', 'product_id'];

    public function getUser() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
