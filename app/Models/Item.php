<?php

namespace App\Models;

use App\Models\Shop\ShopItem;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    const PATH = 'item_images';

    public function shop_item()
    {
        return $this->hasOne(ShopItem::class);
    }
}
