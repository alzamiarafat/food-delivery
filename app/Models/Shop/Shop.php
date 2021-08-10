<?php

namespace App\Models\Shop;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function branch()
    {
        return $this->hasMany(ShopBranch::class);
    }
}
