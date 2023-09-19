<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BooksUser extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_users",
        "id_books",
        "render_at"
    ];

    public function books_user(): HasMany
    {
        return $this->hasMany(BooksUser::class);
    }
}
