<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'worker_id',
        'worker_name',
        'worker_email',
        'worker_phone',
        'worker_address',
        'worker_service',
        'nationality',
        'birth_date',
        'religion',
        'marital_status',
        'designation_1',
        'designation_2',
        'workplace_1',
        'workplace_2',
        'time_frame_1',
        'time_frame_2',
        'description_1',
        'description_2',
        'exam_1',
        'exam_2',
        'institute_1',
        'institute_2',
        'session_1',
        'session_2',
        'details_1',
        'details_2',
    ];
}
