<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = false;
    protected $table = 'tags';
    public function articles()
    {
        return $this->belongsToMany(Article::class,'article_tags');
    }
}
