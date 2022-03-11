<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function medicines(){
        //(Tabel yang akan dimiliki, FK di tabel tujuan, PK dari referensi FK di tabel sendiri)
        return $this->hasMany('App\Medicine', 'category_id', 'id');
    }
}
