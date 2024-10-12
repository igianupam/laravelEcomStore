<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attributes extends Model
{
    use HasFactory;

    protected $table = 'attributes';

    protected $fillable = ['type'];

    /**
     * Get all of the comments for the Attribute
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function arrtibutesvalue(): HasMany
    {
        return $this->hasMany(AttributeValue::class, 'attribute_id', 'id');
    }
}
