<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student_list extends Model
{
    use HasFactory;
    protected $table = "student_list";
    protected $primaryKey = "id";
    protected $fillable = ["name", "Address", "PhoneNum"];
}
