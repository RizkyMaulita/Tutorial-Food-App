<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    // protected $fillable = ['food_name', 'price'];   //artinya kolom 'food_name' dan 'price' boleh diisi
    protected $guarded = [];    // artinya semua kolom boleh di isi.
    // protected $guarded = ['price'];     //artinya kolom 'price' ga boleh diisi.
}
