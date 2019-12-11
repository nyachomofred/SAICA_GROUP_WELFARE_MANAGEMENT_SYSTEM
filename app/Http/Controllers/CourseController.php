<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use App\Course;
use DB;
use Illuminate\Support\Fascades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
class CourseController extends Controller
{
    //
    public function index()
    { 
        $all_course=Course::all();
        if(session('success_message'))
        {
           Alert::success('Success', '');
        }
        return view('courses.index')->with('all_course',$all_course);
    }
    
    public function indexv()
    { 
        $all_course=Course::all();
        $all_course=Course::paginate(4);
        if(session('success_message'))
        {
           Alert::success('Success', '');
        }
        return view('courses.indexv')->with('all_course',$all_course);
    }

    public function showForm()
    {
        return view('courses.create');
    }
    public function create(Request $request)
    {
        $course=new Course;
        $validator= \Validator::make($request->all(),[
            'name'=>'required',
            'level'=>'required',
            'duration'=>'required',
            'description'=>'required',

        ]);
        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput($request->input()); 
        }else{
            $course->name=$request->name;
            $course->level=$request->level;
            $course->duration=$request->duration;
            $course->description=$request->description;
            $course->save();
            //Alert::success('Success')->autoclose(500);;
             Alert::toast('Data has been saved successfully', 'success','top-right')->autoclose(500);
           
            return redirect()->route('courses.index')->with('status','Data is saved successfully');
            
        }
       
    }

    public function view($id)
    {
        $v_one=DB::table('courses')->where('id',$id)->first();
        return view('courses.view')->With('v_one',$v_one);
    }

    public function update(Request $request,$id)
    {
       $data=Course::find($id);
       $data->name=$request->name;
       $data->level=$request->level;
       $data->duration=$request->duration;
       $data->description=$request->description;
       $data->save();
       Alert::success('Success')->autoclose(500);
       return redirect()->route('courses.index');
       
    }

    public function delete($id)
    {
        $delete=Course::find($id)->delete();
        Alert::success('Success')->autoclose(500);
        return redirect()->route('courses.index');
       
    }
    
     public function deletecourse(Request $request)
    {
        $id=$request->id;
        $deleteCourse=DB::table('courses')->where(['id'=>$id])->delete();
        //$delete=Course::find($id)->delete();
        Alert::success('Data has been saved successfully')->autoclose(700);

        return redirect()->route('courses.index');
       
    }
    
    public function updatecourse(Request $request)
    {
       $id=$request->id;
       $updateData=DB::table('courses')->where(['id'=>$id])->update([
           'name'=>$request->name,
           'level'=>$request->level,
           'duration'=>$request->duration,
           'description'=>$request->description,
           ]);
            Alert::success('Success')->autoclose(700);;
            redirect()->route('courses.index');
    }
    
    //users
    
    public function user()
    {
       $user=DB::table('users')->where(['pno'=>1])->get();
        return view('user')->with(['user'=>$user]);
    }
    
    //add user
    public function adduser()
    {
       
        return view('adduser');
    }
    //insert user
    public function insertuser(Request $request)
    {
       $validatedData = $request->validate([ 
           'name' => ['required', 'string', 'max:255',],
           'lastname' => ['required', 'string',],
           'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
           'username' => ['required', 'string',  'max:255', 'unique:users'],
           'password' => ['required', 'string', 'min:8', 'confirmed'],
       ]);
       $user=DB::table('users')->insert([
            'name'=>$request->name,
             'lastname'=>$request->lastname,
            'username'=>$request->username,
            'email'=>$request->email,
            'student_id'=>'Null',
            'password'=>Hash::make($request->password),
            'role'=>$request->role,
           ]);
        return redirect()->route('user')->with('addstatus','Data has been added successfully');
    }
    
    //updateuser
    
    public function updateuser($id){
        $user=DB::table('users')->where(['id'=>$id])->first();
        return view('updateuser')->with(['user'=>$user]);
        
    }
    
    //delete user
    
    //updateuser
    
    public function deleteeuser(Request $request){
        $id=$request->id;
        $user=DB::table('users')->where(['id'=>$id])->delete();
        return redirect()->route('user')->with('deletestatus','One record is deleted successfully');
        
    }
    //insert update user
    
    public function insertupdateuser(Request $request)
    {
       $id=$request->id;
       $user=DB::table('users')->where(['id'=>$id])->update([
            'name'=>$request->name,
            'lastname'=>$request->lastname,
            'username'=>$request->username,
            'email'=>$request->email,
            'role'=>$request->role,
           ]);
        return redirect()->route('user')->with('updatestatus','Data has been updated successfully');
    }
    
    public function registerstudent(Request $request){
        $validatedData = $request->validate([ 
             'student_id' => ['required', 'string',  'max:255', 'unique:users','exists:students'],
             'username' => ['required', 'string',  'max:255', 'unique:users'],
             'password' => ['required', 'string',  'max:255']
       ]);
        
        $student=DB::table('students')->where(['student_id'=>$request->student_id])->first();
        $studentname=$student->full_name;
        $studentemail=$student->email;
        
        $dataInsert=DB::table('users')->insert([
            'name'=> $studentname,
            'username'=>$request->username,
            'email'=>$studentemail,
            'student_id'=>$request->student_id,
            'password'=>Hash::make($request->password),
            'role'=>'Student',
            ]);
        
        return redirect()->route('login')->with('status','Account created successfully');
        
        
        
        
        
        
        
    }
    

}
