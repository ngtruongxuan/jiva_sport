<?php

namespace App\Models;


class Category extends BaseModel
{
    protected $table = 'categories';

    protected $fillable = [
        'category_name',
        'parent_id',
        'note',
        'created_at',
        'created_by',
        'updated_at',
        'updated_by'
    ];
}