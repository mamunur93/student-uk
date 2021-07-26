<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::join('users', 'users.id', '=', 'students.user')
               ->get(['students.*', 'users.name']);

        // $students = Student::all();
        return view('backend.index', compact('students'));
    }



    public function status()
    {
        $status = Student::all();
        return view('admin.status', compact('status'));
    }

    public function editstatus(Student $students)
    {
    
        return view('admin.statusedit',compact('students'));
    }

     public function updatestatus(Request $request, Student $students)
    {


        // dd($request);
        $input = $request->all();
        
        $students->update($input);
        return redirect()->route('student.status')
                        ->with('success','User Role updated successfully');
    }

    public function studentUpdate(Request $request, $profile)
    {

        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'citizenship' => 'required',
            'passportnumber' => 'required',
            'dob' => 'required',
            'email' => 'required|email',
    
            'passport' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cv' => 'mimes:jpeg,png,jpg,doc,docx,pdf',
            'ref1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ref2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ssccer' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'ssctrans' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hsccer' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hsctrns' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sop' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'sign' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'photos' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        
      

     
        if ($request->hasFile('passport')) {
            $destinationPath = 'image/';
            $file = $request->file('passport'); // will get all files
            $passport_name = date('YmdHis') . "." . $file->getClientOriginalName(); //Get file original name
            $file->move($destinationPath , $passport_name); // move files to destination folder
            $input['passport'] = $passport_name;
        }
        else{
            unset($input['passport']);
        }

        if ($request->hasFile('cv')) {
            $destinationPath = 'image/';
            $cv = $request->file('cv'); // will get all files
            $cv_name = date('YmdHis') . "." . $cv->getClientOriginalName(); //Get file original name
            $cv->move($destinationPath , $cv_name); // move files to destination folder
             $input['cv'] = $cv_name;
        }
        else{
            unset($input['cv']);
        }

        if ($request->hasFile('ref1')) {
            $destinationPath = 'image/';
            $ref1 = $request->file('ref1'); // will get all files
            $ref1_name = date('YmdHis') . "." . $ref1->getClientOriginalName(); //Get file original name
            $ref1->move($destinationPath , $ref1_name); // move files to destination folder
            $input['ref1'] = $ref1_name;
        }
         else{
            unset($input['ref1']);
        }
        if ($request->hasFile('ref2')) {
            $destinationPath = 'image/';
            $ref2 = $request->file('ref2'); // will get all files
            $ref2_name = date('YmdHis') . "." . $ref2->getClientOriginalName(); //Get file original name
            $ref2->move($destinationPath , $ref2_name); // move files to destination folder
             $input['ref2'] = $ref2_name;
        }
        else{
            unset($input['ref2']);
        }

         if ($request->hasFile('ssccer')) {
            $destinationPath = 'image/';
            $ssccer = $request->file('ssccer'); // will get all files
            $ssccer_name = date('YmdHis') . "." . $ssccer->getClientOriginalName(); //Get file original name
            $ssccer->move($destinationPath , $ssccer_name); // move files to destination folder
            $input['ssccer'] = $ssccer_name;
        }
        else{
            unset($input['ssccer']);
        }
        if ($request->hasFile('ssctrans')) {
            $destinationPath = 'image/';
            $ssctrans = $request->file('ssctrans'); // will get all files
            $ssctrans_name = date('YmdHis') . "." . $ssctrans->getClientOriginalName(); //Get file original name
            $ssctrans->move($destinationPath , $ssctrans_name); // move files to destination folder
            $input['ssctrans'] = $ssctrans_name;
        }
         else{
            unset($input['ssctrans']);
        }
        if ($request->hasFile('hsccer')) {
            $destinationPath = 'image/';
            $hsccer = $request->file('hsccer'); // will get all files
            $hsccer_name = date('YmdHis') . "." . $hsccer->getClientOriginalName(); //Get file original name
            $hsccer->move($destinationPath , $hsccer_name); // move files to destination folder
            $input['hsccer'] = $hsccer_name;
        }
         else{
            unset($input['hsccer']);
        }
         if ($request->hasFile('hsctrns')) {
            $destinationPath = 'image/';
            $hsctrns = $request->file('hsctrns'); // will get all files
            $hsctrns_name = date('YmdHis') . "." . $hsctrns->getClientOriginalName(); //Get file original name
            $hsctrns->move($destinationPath , $hsctrns_name); // move files to destination folder
            $input['hsctrns'] = $hsctrns_name;
        }
        else{
            unset($input['hsctrns']);
        }
        if ($request->hasFile('sop')) {
            $destinationPath = 'image/';
            $sop = $request->file('sop'); // will get all files
            $sop_name = date('YmdHis') . "." . $sop->getClientOriginalName(); //Get file original name
            $sop->move($destinationPath , $sop_name); // move files to destination folder
            $input['sop'] = $sop_name;
        }
        else{
            unset($input['sop']);
        }
        if ($request->hasFile('sign')) {
            $destinationPath = 'image/';
            $sign = $request->file('sign'); // will get all files
            $sign_name = date('YmdHis') . "." . $sign->getClientOriginalName(); //Get file original name
            $sign->move($destinationPath , $sign_name); // move files to destination folder
            $input['sign'] = $sign_name;
        }
        else{
            unset($input['sign']);
        }
        if ($request->hasFile('photos')) {
            $destinationPath = 'image/';
            $photos = $request->file('photos'); // will get all files
            $photos_name = date('YmdHis') . "." . $photos->getClientOriginalName(); //Get file original name
            $photos->move($destinationPath , $photos_name); // move files to destination folder
            $input['photos'] = $photos_name;
        }
        else{
            unset($input['photos']);
        }

        if ($request->hasFile('otherstrns')) {
            $destinationPath = 'image/';
            $otherstrns = $request->file('otherstrns'); // will get all files
            $photos_name = date('YmdHis') . "." . $otherstrns->getClientOriginalName(); //Get file original name
            $otherstrns->move($destinationPath , $photos_name); // move files to destination folder
            $input['otherstrns'] = $photos_name;
        }
        else{
            unset($input['otherstrns']);
        }

        if ($request->hasFile('otherscer')) {
            $destinationPath = 'image/';
            $otherscer = $request->file('otherscer'); // will get all files
            $photos_name = date('YmdHis') . "." . $otherscer->getClientOriginalName(); //Get file original name
            $otherscer->move($destinationPath , $photos_name); // move files to destination folder
            $input['otherscer'] = $photos_name;
        }
        else{
            unset($input['otherscer']);
        }
        // dd($input);

        $students = Student::find($profile);
       $success = $students->update($input);

       if($success){
            return redirect()->route('agent.dashboard')
                        ->with('success','User Infromation updated successfully');
        }
        else{
            return redirect()->route('agent.dashboard')
                        ->with('success','User Infromation updated failed');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    
    public function store(Request $request)
    {

        $input = $request->all();
        if ($request->hasFile('passport')) {
            $destinationPath = 'image/';
            $file = $request->file('passport'); // will get all files
            $passport_name = date('YmdHis') . "." . $file->getClientOriginalName(); //Get file original name
            $file->move($destinationPath , $passport_name); // move files to destination folder
            $input['passport'] = $passport_name;
        }

        if ($request->hasFile('cv')) {
            $destinationPath = 'image/';
            $cv = $request->file('cv'); // will get all files
            $cv_name = date('YmdHis') . "." . $cv->getClientOriginalName(); //Get file original name
            $cv->move($destinationPath , $cv_name); // move files to destination folder
             $input['cv'] = $cv_name;
        }

        if ($request->hasFile('ref1')) {
            $destinationPath = 'image/';
            $ref1 = $request->file('ref1'); // will get all files
            $ref1_name = date('YmdHis') . "." . $ref1->getClientOriginalName(); //Get file original name
            $ref1->move($destinationPath , $ref1_name); // move files to destination folder
            $input['ref1'] = $ref1_name;
        }
        if ($request->hasFile('ref2')) {
            $destinationPath = 'image/';
            $ref2 = $request->file('ref2'); // will get all files
            $ref2_name = date('YmdHis') . "." . $ref2->getClientOriginalName(); //Get file original name
            $ref2->move($destinationPath , $ref2_name); // move files to destination folder
             $input['ref2'] = $ref2_name;
        }

         if ($request->hasFile('ssccer')) {
            $destinationPath = 'image/';
            $ssccer = $request->file('ssccer'); // will get all files
            $ssccer_name = date('YmdHis') . "." . $ssccer->getClientOriginalName(); //Get file original name
            $ssccer->move($destinationPath , $ssccer_name); // move files to destination folder
            $input['ssccer'] = $ssccer_name;
        }

        if ($request->hasFile('ssctrans')) {
            $destinationPath = 'image/';
            $ssctrans = $request->file('ssctrans'); // will get all files
            $ssctrans_name = date('YmdHis') . "." . $ssctrans->getClientOriginalName(); //Get file original name
            $ssctrans->move($destinationPath , $ssctrans_name); // move files to destination folder
            $input['ssctrans'] = $ssctrans_name;
        }

        if ($request->hasFile('hsccer')) {
            $destinationPath = 'image/';
            $hsccer = $request->file('hsccer'); // will get all files
            $hsccer_name = date('YmdHis') . "." . $hsccer->getClientOriginalName(); //Get file original name
            $hsccer->move($destinationPath , $hsccer_name); // move files to destination folder
            $input['hsccer'] = $hsccer_name;
        }

         if ($request->hasFile('hsctrns')) {
            $destinationPath = 'image/';
            $hsctrns = $request->file('hsctrns'); // will get all files
            $hsctrns_name = date('YmdHis') . "." . $hsctrns->getClientOriginalName(); //Get file original name
            $hsctrns->move($destinationPath , $hsctrns_name); // move files to destination folder
            $input['hsctrns'] = $hsctrns_name;
        }
        if ($request->hasFile('sop')) {
            $destinationPath = 'image/';
            $sop = $request->file('sop'); // will get all files
            $sop_name = date('YmdHis') . "." . $sop->getClientOriginalName(); //Get file original name
            $sop->move($destinationPath , $sop_name); // move files to destination folder
            $input['sop'] = $sop_name;
        }

        if ($request->hasFile('sign')) {
            $destinationPath = 'image/';
            $sign = $request->file('sign'); // will get all files
            $sign_name = date('YmdHis') . "." . $sign->getClientOriginalName(); //Get file original name
            $sign->move($destinationPath , $sign_name); // move files to destination folder
            $input['sign'] = $sign_name;
        }

        if ($request->hasFile('photos')) {
            $destinationPath = 'image/';
            $photos = $request->file('photos'); // will get all files
            $photos_name = date('YmdHis') . "." . $photos->getClientOriginalName(); //Get file original name
            $photos->move($destinationPath , $photos_name); // move files to destination folder
            $input['photos'] = $photos_name;
        }
        if ($request->hasFile('otherscer')) {
            $destinationPath = 'image/';
            $otherscer = $request->file('otherscer'); // will get all files
            $otherscer_name = date('YmdHis') . "." . $otherscer->getClientOriginalName(); //Get file original name
            $otherscer->move($destinationPath , $otherscer_name); // move files to destination folder
            $input['otherscer'] = $otherscer_name;
        }

         if ($request->hasFile('otherstrns')) {
            $destinationPath = 'image/';
            $otherstrns = $request->file('otherstrns'); // will get all files
            $otherstrns_name = date('YmdHis') . "." . $otherstrns->getClientOriginalName(); //Get file original name
            $otherstrns->move($destinationPath , $otherstrns_name); // move files to destination folder
            $input['otherstrns'] = $otherstrns_name;
        }
        
         Student::create($input);
     
        return redirect()->route('student.index')
                        ->with('success','registration successfully completed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */


    public function show(Student $student)
    {
       
        return view('admin.profile',compact('student'));
    }

    public function agent($id)
    {
            //Get data from user
            $student = Student::find($id);
         
            return view('agent.profile',compact('student'));
            
    }

    public function agentEdit($id)
    {
            //Get data from user
            $student = Student::find($id);
         
            return view('agent.edit',compact('student'));
            
    }

   
    // public function agent(Student $student)
    // {
       
    //     return view('agent.profile',compact('student'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $students)
    {
        //
    }

    public function adminedit(students $students)
    {
        return view('backend.status');
    }

    public function adminupdate(Request $request, students $students)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(students $students)
    {
        $students->delete();
     
        return redirect()->route('student.index')
                        ->with('success','Product deleted successfully');
    }
}
