<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTabungan extends Model
{
    use HasFactory;

    protected $table = "jenistabungan";

    protected $guarded = [];
    public $timestamps = false;
}
