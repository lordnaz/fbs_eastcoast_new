<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SystemSetting extends Model
{
    use HasFactory;

    protected $table = 'system_settings';
    
    protected $fillable = [
        'name',
        'value',
        'active',
        'created_by',
        'created_at',
        'updated_at',
    ];
}
