<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesSuspect extends Model
{
    use HasFactory;
    protected $table = 'sales_suspect';
    protected $guarded = [];
}
