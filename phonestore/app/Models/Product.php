<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'sanpham';
    protected $primaryKey = 'id';

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'DM_id');
    }

    public function brand()
    {
        return $this->belongsTo('App\Models\Brand', 'TH_id');
    }
}
