<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UMSdepartment extends Model
{
    use HasFactory;
    protected $table ="student";
    public function studentss(){
        return $this->hasMany(UMSStudents::class,'d_id');
    }
}
