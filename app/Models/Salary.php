<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'basic',
        'hra',
        'da',
        'total'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
