<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'name',
        'desc',
        'url',
        'repository_id'
    ];

    public function tagItem(): MorphMany
    {
        return $this->morphMany(TagItem::class, 'model');
    }
}
