<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Models\Student;
use DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
       // echo $id;
       // die();
        $students = Student::all()->where('user',$id);
        return view('author.index', compact('students'));
    }

     public function createstudent()
    {
        return view('author.registration');
    }

    public function authorProfile($id)
    {
            //Get data from user
            $student = Student::find($id);
         
            return view('author.profile',compact('student'));
            
    }

    public function stdstore(Request $request)
    {
        // dd($request);
         $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'citizenship' => 'required',
            'passportnumber' => 'required',
            'dob' => 'required',
            'email' => 'required',
    
            // 'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'cv' => 'required|mimes:jpeg,png,jpg,doc,docx,pdf',
            // 'ref1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'ref2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'ssccer' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'ssctrans' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'hsccer' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'hsctrns' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'sop' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'sign' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'photos' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $input = $request->all();
        
        // if ($passport = $request->file('passport')) {

        //     $destinationPath = 'image/';
        //     $passport = date('YmdHis') . "." . $passport->getClientOriginalExtension();
        //     $passport->move($destinationPath, $passport);
        //     $input['passport'] = $passport;
        //  }

     
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
      

        // dd($input);
        $student= Student::create($input);
        if( $student) {
            return redirect()->route('author.dashboard')
                        ->with('success','registration successfully completed');
        }
        else{
            return redirect()->route('author.dashboard')
                        ->with('success','registration successfully Failed');
        }
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
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
    }
}
