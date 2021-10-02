<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $guarded = ['id'];

    public function author()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function randomTag()
    {
        $classes = ['bg-primary-soft text-primary', 'bg-success-soft text-success',
        'bg-secondary-soft text-secondary','bg-danger-soft text-danger','bg-warning-soft text-warning',
        'bg-info-soft text-info','bg-dark-soft text-dark'];
        return $classes[rand(0,6)]; //try rand number and pick index or array_rand() with lot tags
    }
}
