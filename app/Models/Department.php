<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;
    protected $table="tb_department";
    protected $primaryKey = "dept_number";
    public $incrementing = true;
    protected $keyType="string";
    public $timestamps=false;
    

}
