<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'danhmuc';
    protected $primaryKey = 'id';
    protected $fillable = ['TenDM'];

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
}
