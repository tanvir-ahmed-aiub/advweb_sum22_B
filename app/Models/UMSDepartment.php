<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMSStudent;

class UMSDepartment extends Model
{
    use HasFactory;
    protected $table="departments";
    public function students(){
        return $this->hasMany(UMSStudent::class,'d_id');
    }
}
