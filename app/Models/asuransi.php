<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asuransi extends Model
{
    use HasFactory;

    protected $table ='asuransi';

    public $timestamps= false;

    protected $guarded=[];
}
