<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable = ['nrp', 'user_id', 'no_telp', 'no_reg'];

    public function products()
    {
        return $this->hasMany(Product::class, 'seller_nrp', 'nrp');
    }
}
