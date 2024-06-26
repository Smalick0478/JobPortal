<?php

namespace App\Http\Controllers;

use App\Models\Job\Job;
use App\Models\User;
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
        $jobs = Job::select()->take(5)->orderby('id', 'desc')->get();
        $totalJobs = Job::count();
        $totalCompanies = Job::distinct()->count('job_company');
        $totalCandidates = User::count();


        return view('home', compact('jobs', 'totalJobs', 'totalCompanies', 'totalCandidates'));
    }
}
