<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'loaisanpham';
    protected $fillable = ['TenLSP', 'HinhAnh', 'Mota', 'created_at', 'updated_at'];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
