<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'seller_nrp',
        'main_image',
        'slide_image1',
        'slide_image2',
        'slide_image3',
        'categori_id',
        'name',
        'description',
        'price'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function transactions()
    {
        return $this->hasmany(Transaction::class);
    }

    public function seller()
    {
        return $this->belongsTo(Seller::class, 'seller_nrp', 'nrp');
    }
}
