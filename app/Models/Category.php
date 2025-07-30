<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'description',
        'ceated_at',
        'updated_at'
    ];
    protected $dates = ['deleted_at'];

    public function items()
    {
        return $this->hasMany(Item::class, 'category_id');
    }
}
