<?php

namespace App\Http\Controllers;

use App\Models\student_detail;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data=student_detail::paginate(3);
        return view('home',['student_detail'=>$data]);  
    }
}
