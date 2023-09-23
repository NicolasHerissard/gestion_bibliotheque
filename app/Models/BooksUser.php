<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class BooksUser extends Model
{
    use HasFactory;

    public $timestamps = false;

    const TAKE_AT = 'take_at';

    protected $fillable = [
        "user_id",
        "books_id",
        "render_at",
    ];

    public function users(): HasMany
    {
        return $this->HasMany(User::class);
    }

    public function books(): BelongsToMany
    {
        return $this->BelongsToMany(Book::class);
    }
}
