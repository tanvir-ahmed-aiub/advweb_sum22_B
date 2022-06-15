<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSStudent extends Model
{
    use HasFactory;
    protected $table="students_info";
    public $timestamps = false;
}
