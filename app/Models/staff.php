<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail', 'name', 'position', 'link_ig', 'link_fb', 'link_twitter', 'link_wa',
    ];

    protected $primaryKey = 'id_staff';
}
