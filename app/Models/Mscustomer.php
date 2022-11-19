<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mscustomer extends Model
{
    use HasFactory;
    // use SoftDeletes;

    // protected $fillable = [
    //     'customerNama',
    //     'customerAlamat'
    // ];

    // protected $table = 'mscustomers';
    // protected $hidden = [];
    protected $guarded;
}