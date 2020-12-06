<?php


namespace App\Http\Controllers;


use Illuminate\Routing\Controller as BaseController;
use MoodleRest;

class UsersController extends BaseController
{
    public function index()
    {
        $users = $this->getUsers();

        return view('users/index', compact('users'));
    }

    public function enrolledUsers(){
        $users = $this->getEnrolledUsers();

        return view('users/enrolled_users', compact('users'));
    }

    public function getUsers()
    {
        $token = env('TOKEN_MOODLE');
        $domainName = env('URL_MOODLE');
        $functionName = 'local_local_get_users';
        $params = 'all';

        $MoodleRest = new MoodleRest($domainName . '/webservice/rest/server.php', $token);
        $response = $MoodleRest->request($functionName, array('users' => $params));

        return json_decode($response);
    }

    public function getEnrolledUsers()
    {
        $token = env('TOKEN_MOODLE');
        $domainName = env('URL_MOODLE');
        $functionName = 'local_local_get_enrolled_users';
        $params = 'all';

        $MoodleRest = new MoodleRest($domainName . '/webservice/rest/server.php', $token);
        $response = $MoodleRest->request($functionName, array('users' => $params));

        return json_decode($response);
    }
}

