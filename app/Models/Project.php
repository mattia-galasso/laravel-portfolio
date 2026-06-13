<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'customer',
        'category',
        'project_start',
        'project_end',
        'summary',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
