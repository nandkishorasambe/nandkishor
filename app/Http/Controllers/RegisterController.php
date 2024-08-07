<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Student;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Alert;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $userTypes = UserType::all();
        return view('auth.register', compact('userTypes'));
    }

    public function register(Request $request)
    {

        if($request->isMethod('post')){
        $request->validate([
            'usertype_id' => 'required|exists:user_types,id',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone' => 'required|digits:10',
            'dob' => 'required|date',
            'gender' => 'required|in:male,female,other',

            
        ]);

        $user = User::create([
            'usertype_id' => $request->usertype_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Student::create([
            'user_id' => $user->id,
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'father_name' => $request->father_name,
            'mother_name' => $request->mother_name,
            'phone' => $request->phone,
            'dob' => $request->dob,
            'gender' => $request->gender,
            'blood_group' => $request->blood_group,
            'marital_status' => $request->marital_status,
            'cast' => $request->cast,
            'aadhar_number' => $request->aadhar_number,
            'family_income' => $request->family_income,
            'abc_identity' => $request->abc_identity,
        ]);
        if(Auth::attempt([
            'email'=>$request->email,
            'password'=>$request->password
           ])){
            return to_route('dashboard')->with('success','successfull register !');;
           }else{
            return to_route('register')->with('error','somting is missing !');;
           }

    }
        //return view("auth.login");
       // return redirect()->route('login')->with('success', 'Registration successful. Please log in.');
         //Auth::login($student);
        // return to_route('dashboard');

    }

    public function showProfile()
    {
        $user = Auth::user();
        $student = $user->student;
       
       if(is_null($student)){
        return redirect()->route('register')->with('error','you need to register your profile first');
       }
        return view('dashboard.profile', compact('student'));
    }

     public function updateProfile(Request $request)
     {  
      
        $user = Auth::user();
        $student = $user->student;
     
        $id =$student->id;

        try{
        $student = Student::findOrFail($id);

        $student->fierst_name = $request['first_name'];
        $student->middle_name = $request['middle_name'];
        $student->last_name = $request['last_name'];
        $student->father_name = $request['father_name'];
        $student->mother_name = $request['mother_name'];
        $student->phone = $request['phone'];
        $student->dob = $request['dob'];
        $student->gender = $request['gender'];
        $student->blood_group = $request['blood_group'];
        $student->marital_status = $request['marital_status'];
        $student->cast = $request['cast'];
        $student->aadhar_number = $request['aadhar_number'];
        $student->family_income = $request['family_income'];
        $student->abc_identity = $request['abc_identity'];
        $student->update();

        

        }catch(ModelNotFoundException $e){
           // return response()->json(['error'=>'user not found'],404);
            return back()->with('error','user not found ');
        }catch(\Exception $e){
           // return response()->json(['error'=>'something went wrong'],500);
            return back()->with('error','something went wrong ');
        }

       
        return to_route('profile')->with('success','successfull profile update !');
      
     }


     public function login(Request $request){
       
        // echo "<h1> login Method</h1>";
        if($request->isMethod('post')){
          $request->validate([
             'email'=>'required|email',
             'password'=>'required'
          ]);
          if(Auth::attempt([
              'email'=>$request->email,
              'password'=>$request->password
          ])){ 
             return to_route('dashboard');
          }else{
             return to_route('login')->with('error','Invalid login details');
          }
       }
        return view("auth.login");
   
     }



     public function dashboard(){

        if(Auth::check()){
            return view('auth.dashboard');
        }else{
            return redirect()->route('login');
        }
        
        // echo "<h1> dashoard Method</h1>";
       // return view("auth.dashboard");
 
 
     }

     public function logout(){

        Session::flush();

        Auth::logout();

        return to_route('login')->with('success','logged out successfull');
    }

}
