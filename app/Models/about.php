<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    use HasFactory;

    protected $fillable = [
        'thumbnail', 'about_content', 'visi', 'misi',
    ];

    protected $primaryKey = 'id_about';


}
