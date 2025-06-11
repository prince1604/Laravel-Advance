<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


// class StudentController extends Controller  
// {
    


//     public function list()
//     {
//         return Student::all();
//     }

//     function save(){
//         $student= new Student();
//         $student->name = "John Doe";
//         $student->phone = "1234567890";
//         $student->email = "dgvhhd@gmail.com";
//         if($student->save()){
//             echo "Data saved successfully";
//         }
//     }
    
// } 


    class StudentController extends Controller
    {
        function list(){
            return Student::all();
        }

        function addStudent(Request $request){
            $rules = array(
                'name' => 'required | min:2 | max:10',
                'email' => 'required|email|unique:students,email',
                'phone' => 'required|digits_between:10,15'
            );
            $validation = Validator::make($request->all(), $rules);
        
            if ($validation->fails()) {
                return $validation->errors();
            } else {
                $student = new Student();
                $student->name = $request->name;
                $student->email = $request->email;
                $student->phone = $request->phone;
                if ($student->save()) {
                    return ["result" => "student added"];
                } else {
                    return ["result" => "operation failed"];
                }
            }
        }


        function updateStudent(Request $request, $id){
            $student = Student::find($id);
            $student->name = $request->name;
            $student->email = $request->email;
            $student->phone = $request->phone;
        
            if($student->save()){
                return ["result" => "student updated"];
            } else {
                return ["result" => "update failed"];
            }
        }
        
        function deleteStudent($id){
            $student = Student::destroy($id);
                 if($student){
                return ['result'=>"student record deleted"];
                 } else {
                return ['result'=>"student record not deleted"];
                 }
        }

        function searchStudent($name) {
            $student = Student::where('name', 'like', "%$name%")->get();
        
            if (count($student) > 0) {
                return ["result" => $student];
            } else {
                return ["result" => "No record found"];
            }
        }    
    } 