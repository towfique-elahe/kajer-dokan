<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'worker_id',
        'title',
        'service',
        'location',
        'phone',
        'description',
        'status',
    ];
}