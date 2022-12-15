<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Group;

class Student extends Model
{
    use HasFactory;

    //studento grupe. 1 studentas gali priklausyti(belgonsTo) tik vienai grupei
    //
    //belongsTo('modelis kuriam priklauso aprasomas modelis(studentas priklauo grupe)', 'foreign key', 'primary key')
    
    public function studentGroup() {
        return $this->belongsTo(Group::class, 'group_id', 'id');
    }

    //kiek duomenu sitas metodas grazina? 1 grupe
}
