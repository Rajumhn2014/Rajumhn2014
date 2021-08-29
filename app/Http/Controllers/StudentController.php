<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentChoice;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=student::all();

        //dd($students);
        
        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {                
        $this->validate($request,['email'=>'required','unique:students']);

        // $request->all();     
        
        $students=new Student;
        $students->firstname=$request->firstname;
        $students->lastname=$request->lastname;
        $students->email=$request->email;
        $students->phone=$request->phone;
        $students->gender=$request->gender;

        //$students->image=$request->image;

        $students->save();

                if($request->hasFile('image')){
                        $image=$request->file('image');
                        $imageName=$request->firstname.'.'.$image->extension();

                        $request->image->move('public/student',$imageName);
                        //$request->image->storeAs('public/student/'.$imageName);

                        $students->image=$imageName;

                        $students->save();
                }

                        $data=$request->all();
                            foreach($data['choice'] as $key=>$choice){
                                // dd($choice);
                                    if(!empty($choice)){
                                        //dd($choice);
                                        $choices=new StudentChoice;
                                        $choices->student_id=$students->id;
                                        $choices->student_choice=$choice;
                                        //dd($choice);
                                        $choices->save();                        
                                    }
                            }
        
        return redirect()->route('student.index')->with('success','New student added');
    }

    /**
     * Display the specified resource.
     *   
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //dd($id);
        
        $students=Student::findOrFail($id);
        //dd($students);

        return view('student.edit',compact('students'));                
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
            //dd($id);
            $student=Student::findOrFail($id);
            //dd($students);
            //dd($id);
            $student->firstname=$request->firstname;
            $student->lastname=$request->lastname;
            $student->email=$request->email;
            $student->phone=$request->phone;
            $student->gender=$request->gender;
            
            // $students->image=$request->image;
            
            $student->update();

            if ($request->hasFile('image')) {
                if ($student->image && file_exists(public_path('public/student/'.$student->image))) {
                    unlink(public_path('public/student/'.$student->image));
                }
                                
                $imageName = $request->firstname.'.'.$request->image->extension();
                $path=$request->image->move('public/student/',$imageName);
                
                $student->image=$imageName;                
                
                $student->save();
            }

                $student->studentchoices()->delete();
                $data=$request->all();
                foreach($data['choice']as $key=>$choice){
                    if(isset($choice)){
                        $choices=new StudentChoice;
                        $choices->student_id=$student->id;
                        $choices->student_choice=$choice;
                        $choices->save();
                    }

                }
            
            
            
            return redirect()->route('student.index')->with('success','Data added update success');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student=student::findOrFail($id);

        //dd($id);
        //dd($student);

        $imagePath='public/student/'.$student->image;

        if(file_exists($imagePath)){
            unlink($imagePath);
        }

        $studentchoices=$student->studentchoices()->delete();

        $student->delete();

        return back()->with('success','Student deleted');
    }
}
