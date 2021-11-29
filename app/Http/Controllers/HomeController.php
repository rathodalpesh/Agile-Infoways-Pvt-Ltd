<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use DataTables;
use Illuminate\Support\Str; 

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

    public function index(Request $request)
    {
        return view('home');
    }

    public function applicationsHome(Request $request)
    {
        return view('applications_list');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function list(Request $request)
    {
        $data = Application::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->filter(function ($instance) use ($request) {
                if (!empty($request->get('search'))) {
                    $instance->collection = $instance->collection->filter(function ($row) use ($request) {
                        if (Str::contains(Str::lower($row['email_id']), Str::lower($request->get('search')))) {
                            return true;
                        } else if (Str::contains(Str::lower($row['name']), Str::lower($request->get('search')))) {
                            return true;
                        }

                        return false;
                    });
                }
            })
            ->addColumn('action', function ($row) {

                $btn = '<a href="'. route('applications.show', $row->id). '" class="edit btn btn-primary btn-sm">View</a>&nbsp;&nbsp;';

                $btn .= '<a href="'. route('applications.edit', $row->id). '" class="edit btn btn-primary btn-sm">Edit</a>&nbsp;&nbsp;';

                $btn .= '<a href="'. route('applications.delete', $row->id).'" class="edit btn btn-primary btn-sm">Delete</a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $application = Application::findOrFail($id);
        return view('applications_show', compact('application'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);

        return view('applications_edit', compact('application'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->except(['_token']);
        $request->validate([
            'name' => 'required|max:255',
            'mobile_number' => 'sometimes|required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email_id' => 'required|email:rfc,dns|unique:applications,email_id,' . $id,
            'gender' =>  'required',
            'preferred_location' =>  'required',
            'expected_ctc' =>  'required',
            'current_ctc' =>  'required',
            'notice_period' =>  'required',
        ]);

        Application::whereId($id)->update($data);

        return redirect('/applications/home')->with('success', 'Application Data is successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $game = Application::findOrFail($id);
        $game->delete();
        return redirect('/applications/home')->with('success', 'Application Data is successfully deleted');
    }
}
