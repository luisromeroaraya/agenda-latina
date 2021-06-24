<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'source',
        'author',
        'title',
        'description',
        'content',
        'url',
        'urlToImage',
        'publishedAt',
        'highlight',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, array $filters){        
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
            ->where('source', 'like', '%' . $search . '%')
            ->orWhere('title', 'like', '%' . $search . '%')
            ->orWhere('author', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('content', 'like', '%' . $search . '%')
            ->orWhere('publishedAt', 'like', '%' . $search . '%');
        });
    }
}
