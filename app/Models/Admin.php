<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'list_menu';

    protected $fillable = [
        'id', 'nama_menu', 'deskripsi_menu', 'tipe_menu', 'created_at', 'updated_at'
    ];
}
