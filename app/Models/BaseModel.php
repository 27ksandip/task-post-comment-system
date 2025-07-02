<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class BaseModel extends Model
{
    public function getCreatedAtAttribute($value) {
        return Carbon::parse($value)->format('h:i A d, M Y');
    }
}
