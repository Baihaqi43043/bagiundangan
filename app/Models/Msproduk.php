<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Msproduk extends Model
{
    use HasFactory;
    public $primaryKey = 'produkID';
    protected $fillable = [
        'customerID', 'produkName', 'file_path', 'jenisProduk', 'demoProduk', 'customerEmail', 'customerPhone'
    ];
}