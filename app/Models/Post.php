<?php

namespace App\Models;

use App\Models\Traits\PropertyAccessor;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use PropertyAccessor;

    protected $fillable = [
        'slug',
        'title',
        'content'
    ];
}
