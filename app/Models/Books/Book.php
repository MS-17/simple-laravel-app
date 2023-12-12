<?php

namespace App\Models\Books;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ["title", "description", "author_id", "genre_id"];
    
    public function author(): BelongsTo {
        return $this -> belongsTo(Author::class);
    }
    
    public function genre(): BelongsTo {
        return $this -> belongsTo(Genre::class);
    }

}
