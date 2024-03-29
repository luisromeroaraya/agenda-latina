<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'date_start',
        'date_end',
        'name',
        'img_src',
        'description',
        'place',
        'address',
        'telephone',
        'email',
        'url',
        'highlight'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function scopeFilter($query, array $filters){        
        $query->when($filters['search'] ?? false, function ($query, $search) {
            $query
            ->where('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('place', 'like', '%' . $search . '%')
            ->orWhere('date_start', 'like', '%' . $search . '%');
        });
    }
}
