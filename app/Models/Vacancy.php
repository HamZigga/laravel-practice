<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'title',
        'category_id',
        'subtitle',
        'img',
        'description',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function statement()
    {
        return $this->hasOne(Statement::class);
    }

}
