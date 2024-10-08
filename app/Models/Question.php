<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $guarded = [];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }
}
