<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vacancy_id',
        'status_id',
        'requested_salary',
        'experience',
        'technology_stack',
        'description',
    ];

    public function status()
    {
        return $this->belongsTo(Status::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function vacancy()
    {
        return $this->belongsTo(Vacancy::class);
    }

    
}
