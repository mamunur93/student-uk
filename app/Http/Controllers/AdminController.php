<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;




class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allstudents=Student::all();
        $completedstudents = Student::all()->where('status','Congratulation');
        $submitedstudents = Student::all()->where('status','Submited');
        $reviewstudents = Student::all()->where('status','Document Require');
        return view('admin.dashboard',compact('allstudents', 'completedstudents', 'submitedstudents', 'reviewstudents'));
    }


     public function role()
    {   

       $user = Auth::user()->get();
       // dd($user);

        return view('admin.userrole',compact('user'));
    }

    public function editrole(User $user)
    {
        return view('admin.role',compact('user'));
    }

     public function viewstudent(Student $student)
    {
        return view('admin.profile',compact('student'));
    }

     public function updaterole(Request $request, User $user)
    {
        $input = $request->all();
        $user->update($input);
        return redirect()->route('admin.role')
                        ->with('success','User Role updated successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    

    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
