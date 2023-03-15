<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volume extends Model
{
    use HasFactory;
    protected $table = 'volumes';

    protected $fillable = [
        'product_id',
        'volume'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
