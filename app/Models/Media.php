<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Media extends Model
{
    use HasFactory;

    protected $fillable = ['table_name', 'table_id', 'media_type', 'path', 'file_name'];

    /**
     * Get the user that owns the Media
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'table_id', 'id');
    }

    /**
     * Get the user that owns the Media
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function banner(): BelongsTo
    {
        return $this->belongsTo(Banner::class, 'table_id', 'id');
    }

}
