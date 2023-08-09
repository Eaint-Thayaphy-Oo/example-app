<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //student home page
    public function home()
    {
        return view('student.insert');
    }

    //student insert page first way
    public function insert(Request $request)
    {
        // dd($request->all());
        // Student::create([
        //     'student_name' => $request->studentName,
        //     'student_address' => $request->studentAddress,
        //     'student_phone' => $request->studentPhone
        // ]);
        $data = [
            'student_name' => $request->studentName,
            'student_address' => $request->studentAddress,
            'student_phone' => $request->studentPhone,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];

        Student::create($data);

        return "Created success...";

        //second way
        // dd(Carbon::now());
        // $record = new Student;
        // $record->student_name = $request->studentName;
        // $record->student_address = $request->studentAddress;
        // $record->student_phone = $request->studentPhone;
        // $record->created_at = Carbon::now();
        // $record->updated_at = Carbon::now();
        // $record->save();

        // return "Created success...";
    }
}
