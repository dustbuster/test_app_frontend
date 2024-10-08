<?php

namespace App\Models\Library;

use App\Models\Blog\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Author extends Model
{
    use HasFactory;
    public $fillable = ['name', 'bio', 'email'];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
