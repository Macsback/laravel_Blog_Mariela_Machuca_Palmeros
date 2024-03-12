<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

use Usamamuneerchaudhary\Commentify\Traits\Commentable;

class Comment extends Model
{
    use HasFactory;
    use Commentable;
    use Sluggable;
    protected $fillable = ['title', 'slug', 'description', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
