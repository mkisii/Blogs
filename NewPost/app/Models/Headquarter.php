<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Headquarter extends Model
{
    use HasFactory;

    public function car()
    {
        return $this->BelongsTo(Car::class);
    }
}
