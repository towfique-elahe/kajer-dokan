<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'client_id',
        'worker_id ',
        'worker_name',
        'worker_email',
        'worker_application_message',
        'job_id',
        'job_title',
        'job_service',
    ];
}