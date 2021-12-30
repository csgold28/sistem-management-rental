<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaranproject extends Model
{
    protected $fillable = ['project_id', 'nilai', 'keterangan', 'status'];
}
