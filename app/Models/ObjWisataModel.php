<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjWisataModel extends Model
{
    use HasFactory;

    protected $table = "obj_wisata";

    protected $guarded = [];
    public $timestamps = false;
}
