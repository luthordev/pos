<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $guarded = [];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
