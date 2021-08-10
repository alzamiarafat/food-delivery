<?php

namespace App\Models;

use App\Models\Shop\ShopBranch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    const PATH = 'profile_images';

    public function branch()
    {
        return $this->hasOne(ShopBranch::class);
    }

}
