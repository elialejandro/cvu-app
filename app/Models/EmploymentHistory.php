<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploymentHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'resume_id',
        'title',
        'content',
        'start_date',
        'end_date',
    ];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }

}
