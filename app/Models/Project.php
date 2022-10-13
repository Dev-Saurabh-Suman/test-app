<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'project_name',
        'project_description'
    ];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
