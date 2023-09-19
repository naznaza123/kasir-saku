<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Siswa;

class Siswa extends Model
{
    use HasFactory;
    protected $table = "siswa";
    protected $primaryKey = "nis";
    protected $guarded = [];

}
