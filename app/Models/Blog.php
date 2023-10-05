<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'category_id',
        'title',
        'slug',
        'intro',
        'body',
    ];

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category () {
        return $this->belongsTo(Category::class);
    }
}
