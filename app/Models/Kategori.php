<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'table_kategori';
    protected $fillable = ['deskripsi'];
    use HasFactory;
}
