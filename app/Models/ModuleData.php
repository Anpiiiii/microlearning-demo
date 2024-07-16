<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModuleData extends Model
{
    use HasFactory;
    protected $table = 'module_data';
    protected $guarded = [];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
