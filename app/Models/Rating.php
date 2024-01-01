<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'rating_customers';

    protected $fillable = [
        'id', 'nama', 'rating', 'tipe_menu', 'komentar', 'created_at','updated_at'
    ];
}
