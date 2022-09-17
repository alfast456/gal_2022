<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = [
        'icon', 'title', 'thumbnail', 'description','price', 'start_date', 'end_date'
    ];

    protected $primaryKey = 'id_service';
}
