<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "author",
    ];

    public function books() : HasMany
    {
        return $this->hasMany(Books::class);
    }
}
