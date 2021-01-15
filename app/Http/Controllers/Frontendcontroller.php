<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Frontendcontroller extends Controller
{
    public function home(){
        return view('Home/home');      }

    public function index(){
        return view('Home/Introduction');      }
    
    public function obj(){
        return view('Home/Objectives');      }

    public function upe(){
        return view('Home/UpcomingEvents');      }
    
    public function pr(){
        return view('Home/Participants');      }
    
    public function sts(){
        return view('Home/StudentSocieties');      }

    public function log(){
        return view('Login/Login');      }
            
    public function sgn(){
        return view('Login/SignUp');      }

    public function fgp(){
        return view('Login/ForgetPassword');      }

    public function a(){
        return view('a');      }

    public function admin(){
        return view('Admin/Admin');      }

    public function wfa(){
        return view('Login/waitingforacceptance');      }

    public function profile(){
      $id=   Auth::user()->id ;
      $role= Auth::user()->role ;
      

              
        if($role=="Student"){
            $c=DB::table('students')->where('StudentID',$id)->first();
            return view('profile.studentp')->with('c',$c);
        }
        elseif($role=="Industry"){
            $c=DB::table('industrialists')->where('CompanyPersonalEmailID',$id)->first();
            return view('profile.industrialistp')->with('c',$c);
        }
        elseif($role=="Lecturer"){
            $c=DB::table('academics')->where('EmployeeID',$id)->first();
            return view('profile.academicp')->with('c', $c);

        }
        }
        
        
               
       
          
          
        
          
           


        
        
}
