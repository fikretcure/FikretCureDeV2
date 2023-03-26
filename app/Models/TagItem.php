<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TagItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tag_id',
        'model_id',
        'model_type',
    ];


    public function tag()
    {
        return $this->belongsTo(Tag::class,'tag_id','id');
    }
}
