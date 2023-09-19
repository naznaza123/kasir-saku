<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kas;

class Kas extends Model
{
    use HasFactory;
    protected $table = "kas";
    protected $guarded = [];
    protected $primaryKey = "id";

}
