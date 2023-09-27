<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRegister;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\User;
use App\Mail\OrderShipped;
use App\Models\Student;
use App\Notifications\newn;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(UserRegister $request)
    {

        $user = Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        $teacher=Teacher::where('name',$request->teacher_name)->first();
        if($teacher){
$teacher_id=$teacher->id;
$course=Course::where('name',$request->course_name)->first();
if($course){
    $course_id=$course->id;
        // $teacher1=Teacher::where('name',$teacherId);

        //     $courses=$teacher1->courses();
        //     $course_name=$courses->name();
            // if($course_name==$request->course_name){
            //     $course=Course::where('name',$request->course_name);
                $user->courses()->attach($course_id, ['teacher_id' => $teacher_id]);

                $token = $user->createToken('register_token')->plainTextToken;
                $user['token'] = $token;

         return response()->json( $user);
            }else{
                return response()->json('not found course');
            }
        // $tid=$teacher->id();
        }else{
            return response()->json('teacher not found');
        }









    }}
