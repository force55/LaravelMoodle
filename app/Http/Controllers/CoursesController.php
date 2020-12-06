<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use MoodleRest;

class CoursesController extends BaseController
{
    public function index(){
        $courses = $this->getCourses();

        return view('courses/index',compact('courses'));
    }

    public function getCourses()
    {
        $token = env('TOKEN_MOODLE');
        $domainName = env('URL_MOODLE');
        $functionName = 'local_local_get_courses';
        $params = 'all';

        $MoodleRest = new MoodleRest($domainName . '/webservice/rest/server.php', $token);
        $response = $MoodleRest->request($functionName, array('courses' => $params));

        return json_decode($response);
    }
}
