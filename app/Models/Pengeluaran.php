<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pengeluaran;

class Pengeluaran extends Model
{
    use HasFactory;
    protected $table = "pengeluaran";
    protected $primaryKey = "id";
    protected $guarded = [];
}
