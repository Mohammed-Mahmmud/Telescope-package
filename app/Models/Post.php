<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Post extends Model {
    protected $table = 'posts';
    protected $guarded = [];
    use HasFactory;

    public function category() {
        return $this->belongsTo( Category::class );
    }
}