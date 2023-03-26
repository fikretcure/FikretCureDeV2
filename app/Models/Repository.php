<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Repository extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'url'
    ];

    public function tagItem(): MorphMany
    {
        return $this->morphMany(TagItem::class, 'model');
    }

    public function gallery(){
        return $this->hasMany(Gallery::class)->latest('id');

    }

}
