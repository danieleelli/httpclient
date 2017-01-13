<?php

namespace HttpClient\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    protected function performRequest($method, $url, $parameter = [])
    {

    	$client = new Client(['curl' => [CURLOPT_CAINFO => base_path('resources/certs/cacert.pem')]]);

    	$response = $client->request($method, $url, $parameter);

    	return $response->getBody()->getContents();
    }

    protected function performAuthorizedRequest($method, $url, $formParameters = [])
    {
    	$requestParameters['form_params'] = $formParameters;

    	$accessToken = 'Bearer ' . $this->obtainAccessToken();

    	$requestParameters['headers']['Authorization'] = $accessToken;

    	return $this->performRequest($method, $url, $requestParameters);
    }

    protected function obtainAccessToken()
    {
    	$grantType = config('api.grant_type');
    	$clientId = config('api.client_id');
    	$clientSecret = config('api.client_secret');

    	$contents = $this->performRequest('POST', 'https://lumenapi.juandmegon.com/oauth/access_token', 
										['form_params' => [
											'grant_type' => $grantType, 
											'client_id' => $clientId, 
											'client_secret' => $clientSecret]]);

    	$decodedContents = json_decode($contents);

    	$accessToken = $decodedContents->access_token;

    	return $accessToken;
    }




    protected function performGetRequest($url)
    {
    	$contents = $this->performRequest('GET', $url);

    	$decodedContents = json_decode($contents);

    	return $decodedContents->data;
    }


    protected function performPostRequest($url, $parameters = [])
    {
    	$contents = $this->performAuthorizedRequest('POST', $url, $parameters);

    	$decodedContents = json_decode($contents);

    	return $decodedContents->data;
    }

    protected function performPutRequest($url, $parameters = [])
    {
    	$contents = $this->performAuthorizedRequest('PUT', $url, $parameters);

    	$decodedContents = json_decode($contents);

    	return $decodedContents->data;
    }

    protected function performDeleteRequest($url, $parameters = [])
    {
    	$contents = $this->performAuthorizedRequest('DELETE', $url, $parameters);

    	$decodedContents = json_decode($contents);

    	return $decodedContents->data;
    }



    /**
	 * Function for students stuff
     */
    protected function obtainAllStudents()
    {
    	return  $this->performGetRequest('https://lumenapi.juandmegon.com/students');   	
    }

    protected function obtainOneStudent($studentId)
    {
    	return  $this->performGetRequest("https://lumenapi.juandmegon.com/students/{$studentId}");   	
    }

    protected function createOneStudent($parameters)
    {
    	return  $this->performPostRequest("https://lumenapi.juandmegon.com/students", $parameters);   	
    }

    protected function updateOneStudent($parameters)
    {
    	$studentId = $parameters['id'];
    	return  $this->performPutRequest("https://lumenapi.juandmegon.com/students/{$studentId}", $parameters);   	
    }

    protected function removeOneStudent($parameters)
    {
    	$studentId = $parameters['id'];
    	return  $this->performDeleteRequest("https://lumenapi.juandmegon.com/students/{$studentId}", $parameters);   	
    }

    /**
	 * Function for courses stuff
     */
    protected function obtainAllCourses()
    {
    	return  $this->performGetRequest('https://lumenapi.juandmegon.com/courses');   	
    }

    protected function obtainOneCourse($courseId)
    {
    	return  $this->performGetRequest("https://lumenapi.juandmegon.com/courses/{$courseId}");   	
    }

    /**
	 * Function for course-Students stuff
     */
    protected function obtainCourseStudents($courseId)
    {
    	return $this->performGetRequest("https://lumenapi.juandmegon.com/courses/{$courseId}/students");   
    }




    /**
	 * Function for teachers stuff
     */
    protected function obtainAllTeachers()
    {
    	return  $this->performGetRequest('https://lumenapi.juandmegon.com/teachers');   	
    }

    protected function obtainOneTeacher($teacherId)
    {
    	return  $this->performGetRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}");   	
    }

    protected function createOneTeacher($parameters)
    {
    	return  $this->performPostRequest("https://lumenapi.juandmegon.com/teachers", $parameters);   	
    }

    protected function updateOneTeacher($parameters)
    {
    	$teacherId = $parameters['id'];
    	return  $this->performPutRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}", $parameters);   	
    }

    protected function removeOneTeacher($parameters)
    {
    	$teacherId = $parameters['id'];
    	return  $this->performDeleteRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}", $parameters);   	
    }

    /**
	 * Function for Teacher-Courses stuff
     */
    protected function obtainTeacherCourses($teacherId)
    {
    	return $this->performGetRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}/courses");   
    }

    protected function createOneCourse($parameters)
    {
    	$teacherId = $parameters['teacherId'];
    	return  $this->performPostRequest("https://lumenapi.juandmegon.com/teachers/{$teacherId}/courses", $parameters);   	
    }

    protected function addStudentToCourse($parameters)
    {
        $courseId = $parameters['courseId'];
        $studentId = $parameters['studentId'];
        return  $this->performPostRequest("https://lumenapi.juandmegon.com/courses/{$courseId}/students/{$studentId}", $parameters);    
    }



}
