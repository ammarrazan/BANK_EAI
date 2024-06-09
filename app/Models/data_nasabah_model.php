<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_nasabah_model extends Model
{
    use HasFactory;

    protected $table ='data_nasabah';

    public $timestamps= false;

    protected $guarded=[];
}
