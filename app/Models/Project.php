<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['user_id', 'name', 'nilai', 'name_client', 'alamat_client', 'kontak_client', 'ktp_client', 'foto_ktp_client', 'npwp_client', 'foto_npwp_client', 'keterangan', 'teknisi_loadingan', 'teknisi_bongkaran'];
}
