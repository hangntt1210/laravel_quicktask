<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class News extends Model
{
    use HasFactory;

    protected $table = "news";
    protected $fillable = [
        'id', 
        'category_id',
        'title',
        'body',
    ];
    public $timestamps = true;

    public function categories()
    {
        return $this->belongTo(Category::class, 'category_id', 'id');
    }
}
