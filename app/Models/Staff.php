<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staffs";
    //ชื่อคอลัมน์ในฐานข้อมูลที่อนุญาติให้แก้ไขข้อมูล
    protected $fillable = [ "Name", "Age", "Salary", "Phone", "Action"];
    //Primary Key
    protected $primaryKey = "id";
}
