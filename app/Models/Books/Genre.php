<?php

namespace App\Models\Books;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ["name"];
    protected $hidden = ["created_at", "updated_at"];
        
    public function books(): HasMany {
        return $this -> hasMany(Book::class);
    }

}
