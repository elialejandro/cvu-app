<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'phone',
        'address_1',
        'address_2',
        'city',
        'state',
        'country',
        'postal_code',
    ];

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function employmentHistory()
    {
        return $this->hasMany(EmploymentHistory::class);
    }
}
