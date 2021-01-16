<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challan extends Model
{
    use HasFactory;
    protected $table="challan_forms";
    protected $fillable = [
        'title',
        'description'
    ];
}
