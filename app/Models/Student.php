<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

// class Student extends Model
// {
//     use HasFactory;

//     // protected $table = 'students'; 

//     // function getNameAttribute($val){
//     //     return ucfirst($val);
//     // }

//     // function getPhoneAttribute($val){
//     //     return "+91-" . $val;
//     // }
//     public function save(array $options = [])
//     {
//         return "save";
//     }
//     public function setNameAttribute($val)
//     {
//         $this->attributes['name'] = ucfirst($val);
//     }
//     public function getPhoneAttribute($val)
//     {
//         return "+91-" . $val;
//     }
// }


class Student extends Model
{
    protected $table = 'students';

    function list(){
        return Students::all();
    }

}





