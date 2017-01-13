<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/* ========== STUDENTS ========== */
Route::get('/students', 'StudentController@getAllStudents');

Route::post('/student', 'StudentController@postOneStudent');
Route::get('/student', 'StudentController@getInputStudent');

Route::get('/student/create', 'StudentController@getCreateStudent');
Route::post('/student/create', 'StudentController@postCreateStudent');

Route::put('/student/update', 'StudentController@putUpdateStudent');
Route::post('/student/update', 'StudentController@postUpdateStudent');
Route::get('/student/update', 'StudentController@getUpdateStudent');

Route::post('/student/delete', 'StudentController@postRemoveStudent');
Route::get('/student/delete', 'StudentController@getRemoveStudent');
Route::delete('/student/delete', 'StudentController@deleteRemoveStudent');


/* ========== TEACHERS ========== */
Route::get('/teachers', 'TeacherController@getAllTeachers');
Route::post('/teacher', 'TeacherController@postOneTeacher');
Route::get('/teacher', 'TeacherController@getInputTeacher');

Route::get('/teacher/create', 'TeacherController@getCreateTeacher');
Route::post('/teacher/create', 'TeacherController@postCreateTeacher');

Route::put('/teacher/update', 'TeacherController@putUpdateTeacher');
Route::post('/teacher/update', 'TeacherController@postUpdateTeacher');
Route::get('/teacher/update', 'TeacherController@getUpdateTeacher');

Route::post('/teacher/delete', 'TeacherController@postRemoveTeacher');
Route::get('/teacher/delete', 'TeacherController@getRemoveTeacher');
Route::delete('/teacher/delete', 'TeacherController@deleteRemoveTeacher');

Route::get('/teachers/courses', 'TeacherCourseController@getShowAllTeachers');
Route::post('/teachers/courses', 'TeacherCourseController@postShowTeacherCourses');

Route::get('/teachers/courses/create', 'TeacherCourseController@getCreateCourse');
Route::post('/teachers/courses/create', 'TeacherCourseController@postCreateCourse');


/* ========== COURSES ========== */
Route::get('/courses', 'CourseController@getAllCourses');
Route::post('/course', 'CourseController@postOneCourse');
Route::get('/course', 'CourseController@getInputCourse');

Route::get('/courses/students', 'CourseStudentController@getShowAllCourses');
Route::post('/courses/students', 'CourseStudentController@postShowCourseStudents');

Route::get('/courses/students/add', 'CourseStudentController@getAddStudent');
Route::post('/courses/students/add', 'CourseStudentController@postAddStudent');



Route::get('/', function () {
    return view('main');
});




