<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;
    protected $table = 'job_listings';
    protected $fillable = [
        'title',
        'salary',
        'company',
    ];
}
