<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Prp;

class Package extends Model
{
    protected $guarded = [];

    public function roomPrices() : HasMany {
        return $this->hasMany(Prp::class, 'package_id');
    }
}
