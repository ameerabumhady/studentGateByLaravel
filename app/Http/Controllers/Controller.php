<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login(){
        
        return view('login');
    }

    public function checkLogin($username, $password){
        
        return view('home');
        
        
    }

    public function getStudents(){
        $students = array(
            // ["firstName", "lastName", "email", "college name"]
            [1, "ahmed1", "ahmed11", "ahmed1@gmail.com", "Enginee college"],
            [2, "ahmed2", "ahmed22", "ahmed2@gmail.com", "Enginee college"],
            [3, "ahmed3", "ahmed33", "ahmed3@gmail.com", "Medical college"],
            [4, "ahmed1", "ahmed11", "ahmed1@gmail.com", "Medical college"],
            [5, "ahmed2", "ahmed22", "ahmed2@gmail.com", "IT college"],
            [6, "ahmed3", "ahmed33", "ahmed3@gmail.com", "IT college"]
        );
        
        return view('students.displayStudents', compact('students'));
    }

    public function setStudents(){
        
        return view('students.addStudent');
    }

    public function editStudent($id, $firstname, $lastname, $email, $collegname){
        $arr = [$id, $firstname, $lastname, $email, $collegname];
        return view('students.editStudent')->with('arr', $arr);
    }

    public function getStudentGrades(){
        $studentGrades = array(
            // ["firstName", "lastName", "course name", " Grade"]
            [1, "ahmed1", "ahmed11", "course1", 50],
            [2, "ahmed2", "ahmed22", "course2", 60],
            [3, "ahmed3", "ahmed33", "course3", 80],
            [4, "ahmed1", "ahmed11", "course4", 68],
            [5, "ahmed2", "ahmed22", "course5", 90],
            [6, "ahmed3", "ahmed33", "course6", 75]
        );
        
        return view('students.grades', compact('studentGrades'));
    }

    public function getCourses(){
        $courses = array(
            // ["num", "course name", "college name"]
            ["1", "course1", "Enginee college"],
            ["2", "course2", "Enginee college"],
            ["3", "course3", "Enginee college"],
            ["4", "course4", "IT college"],
            ["5", "course5", "IT college"],
            ["6", "course6", ""]
        );
        
        return view('courses.displayCourses', compact('courses'));
    }

    public function setCourses(){
        
        return view('courses.addCourse');
    }

    public function getColleges(){
        $colleges = array(
            // ["num", "college name"]
            ["1", "Enginee college"],
            ["2", "IT college"],
            ["3", "Medical college"],
            ["4", " college 4"],
            ["5", " college 5"]
        );
        return view('colleges.displayColleges', compact('colleges'));
    }

    public function setColleges(){
        
        return view('colleges.addCollege');
    }

    

}
