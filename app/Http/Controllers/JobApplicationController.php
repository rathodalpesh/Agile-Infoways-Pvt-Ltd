<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class JobApplicationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('job_applications');
    }

    /**
     * @param Request $request
     * 
     * @return redirect index page
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $request->validate([
            'name' => 'required|max:255',
            'mobile_number' => 'sometimes|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email_id' => 'required|email:rfc,dns|unique:applications',
            'gender' =>  'required',
            'preferred_location' =>  'required',
            'expected_ctc' =>  'required',
            'current_ctc' =>  'required',
            'notice_period' =>  'required',
        ]);

        Application::create($data);

        return redirect('/job_applications')->with('success', 'Application is successfully saved');
    }
}
