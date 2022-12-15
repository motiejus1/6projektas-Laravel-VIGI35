<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Student;
class Group extends Model
{
    use HasFactory;

    //grupes studentai. 1 grupe gali tureti daug studentu.

    public function groupStudents() {
        return $this->hasMany(Student::class,'group_id','id');
    }

    //kiek duomenu sitas metodas grazina? tiek studentu kiek ju yra grupe
}
