<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFormation extends Model
{
    protected $table = "category_formations";

    protected $fillable = [
        'id', 'title', 'description'
    ];
}
