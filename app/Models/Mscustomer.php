<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mscustomer extends Model
{
    use HasFactory;
    public $primaryKey = 'customerID';
    protected $fillable = [
        'customerID', 'customerNama', 'customerAlamat', 'customerEmail', 'customerPhone'
    ];
}