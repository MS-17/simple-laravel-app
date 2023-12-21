<?php

namespace App\Models\Books;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ["title", "description", "author_id", "genre_id"];
    protected $hidden = ["created_at", "updated_at"];

    public function author(): BelongsTo {
        return $this -> belongsTo(Author::class);
    }
    
    public function genre(): BelongsTo {
        return $this -> belongsTo(Genre::class);
    }

}
