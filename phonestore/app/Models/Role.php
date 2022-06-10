<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'phanquyen';
    protected $primaryKey = 'MaQuyen';
    public function user()
    {
        return $this->hasMany('App\User','MaQuyen','MaQuyen');
    }
}
