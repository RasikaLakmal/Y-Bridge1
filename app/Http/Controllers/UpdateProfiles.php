<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UpdateProfiles extends Controller
{
    public function updatestudent(Request $request){

        

        $pw=DB::table('users')->where('id',$request->id)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            

            DB::table('students')->where('StudentID',$request->id)->update(['FirstName'=>$request->fname,
                                                                        'LastName'=>$request->lname,
                                                                        'StudentID'=>$request->si,
                                                                        'Gender'=>$request->g,
                                                                        'DateOfBirth'=>$request->dob,
                                                                        'HomeAddress'=>$request->ha,
                                                                        'ContactNumber'=>$request->cn,
                                                                        'LinkedIn '=>$request->li,
                                                                        'StudyProgramme'=>$request->sp,
                                                                        'SubjectsOffered'=>$request->so,
                                                                        ]);
            DB::table('users')->where('id',$request->id)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }

    public function updateindustrialist(Request $request){

        

        $pw=DB::table('users')->where('id',$request->id)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            

            DB::table('industrialists')->where('CompanyPersonalEmailID',$request->id)->update(['NameWithInitials'=>$request->namewi,
                                                                        'CompanyName'=>$request->comn,
                                                                        'Designation'=>$request->designation,
                                                                        'LinkedIn'=>$request->linkedin,
                                                                        'FieldOfInterests'=>$request->foi,
                                                                        'ContactNumber'=>$request->cn,
                                                                        ]);
            DB::table('users')->where('id',$request->id)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }
    public function updateacademic(Request $request){

        

        $pw=DB::table('users')->where('id',$request->id)->value('password');
        if(Hash::check($request->pwrd,$pw)){
            

            DB::table('academics')->where('EmployeeID',$request->id)->update(['Title'=>$request->title,
                                                                        'FirstName'=>$request->fname,
                                                                        'LastName'=>$request->lname,
                                                                        'EmployeeID'=>$request->eid,
                                                                        'Gender'=>$request->gender,
                                                                        'DateOfBirth'=>$request->dob,
                                                                        'Designation'=>$request->designation,
                                                                        'AdminRole'=>$request->arole,
                                                                        'LinkedIn'=>$request->linkedin,
                                                                        'ContactNumber'=>$request->cno,
                                                                        'OfficialWebsite'=>$request->ow,
                                                                        'ResearchInterest'=>$request->ri,
                                                                        'FieldOfSpecialization'=>$request->fos,
                                                                        ]);
            DB::table('users')->where('id',$request->id)->update(['password'=>Hash::make($request->nwpswrd)]);
            
            $s="Profile Successfully Updated";
        }
        else{
            $s="Old password is wrong";
        }
        return redirect()->back()->with('msg',$s);
        
    }
    

}
