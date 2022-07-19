<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function articleImage()
    {
        return $this->hasMany(ArticleImage::class);
    }

    public function scopeMine($query)
    {
        $query->where('user_id', auth()->user()->id);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeFilter($query, $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('title', 'like', '%' . $search . '%');
        });

        $query->when($filters['author'] ?? false, function ($query, $author) {
            return $query->where('user_id', User::where('username', $author)->first()->id);
        });
    }

    public function scopeSlug($query, $slug)
    {
        return $query->where('slug',  $slug);
    }
}
