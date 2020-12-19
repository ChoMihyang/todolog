<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function __construct()
    {
        // web middleware 자동 설정
        // $this->middleware('web');
    }

    /**
     * 사이트 웰컴 화면
     */
    public function index()
    {
        // 사용자, 프로젝트, 태스크 수 가져오기
        $countOfUsers = 0;
        $countOfProjects = 0;
        $countOfTasks = 0;

        $total = [
            'user' => $countOfUsers,
            'project' => $countOfProjects,
            'task' => $countOfTasks
        ];
        return view('welcome')->with('total', $total);
    }
}
