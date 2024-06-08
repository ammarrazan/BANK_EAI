<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BiroTour extends Model
{
    use HasFactory;

    protected $table = "birotour";

    protected $guarded = [];

    public $timestamps = false;
}
