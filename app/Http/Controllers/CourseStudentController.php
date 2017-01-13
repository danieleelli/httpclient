<?php

namespace HttpClient\Http\Controllers;

use Illuminate\Http\Request;

class CourseStudentController extends ClientController
{
    public function getShowAllCourses()
    {
    	$courses = $this->obtainAllCourses();

    	return view('course-student.select-course', ['courses' => $courses]);
    }

    public function postShowCourseStudents(Request $request)
    {
    	$courseId = $request->get('courseId');
    	$students = $this->obtainCourseStudents($courseId);

    	return view('course-student.show-course-students', ['students' => $students]);
    }

    public function getAddStudent()
    {
        $students = $this->obtainAllStudents();
        $courses = $this->obtainAllCourses();

        return view('course-student.add-student-course', ['students' => $students, 'courses' => $courses]);
    }

    public function postAddStudent(Request $request)
    {
      $message = $this->addStudentToCourse($request->all());
      return redirect('/courses/students')->with('success', $message);
    }
}
