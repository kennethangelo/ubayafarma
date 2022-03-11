<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    //Melihat kateogri sesuai kolom category_id
    public function category(){
        //Parameter kedua diisi kolom foreign key, kalau nggak diisi, mengikuti penamaan kolom FK di laravel
        //(tabel yang dituju, FK di tabel medicine)
        return $this->belongsTo('App\Category', 'category_id');
    }
}
