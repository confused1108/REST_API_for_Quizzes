<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class UserController extends Controller
{
    public function new_user (Request $request){
        $username=$request->input('username');
        $users_count = DB::table('users')->where('username', '=', $username)->count();
        if ($users_count > 0) {
            $msg="Username already exists";
            $status="false";
            $data=array(
                "status"=>$status,
                "msg"=>$msg
            );
        }
        else{
            $user=new User();
            $user->username=$request->input('username');
            $user->password=sha1($request->input('password'));
            $password=$request->input('password');
            $date=date("Y-M-D-H-h-i-S-s");
            $token=$username.''.$password.''.$date;
            $user->ApiId=sha1($token);
            $ApiId=sha1($token);
            $save=$user->save();
            if($save){
                $status="true";
            }else{
                $status="false";
            }
            $data=array(
                "status"=>$status,
                "ApiId"=>$ApiId
            );
        }
        echo json_encode($data);
    }
    public function getapi(Request $request)
    {
        $username = $request->input('username');
        $password=sha1($request->input('password'));
        $users_count = DB::table('users')
            ->where('username', '=', $username)
            ->where('password', '=', $password)
            ->count();
        if ($users_count > 0) {
            $user = DB::table('users')
                ->where('username', '=', $username)
                ->where('password', '=', $password)
                ->first();
            $ApiId = $user->ApiId;
            $status="true";
            $data=array(
                "status"=>$status,
                "ApiId"=>$ApiId
            );
        }
        else{
            $status="false";
            $msg="Invalid Username or Password";
            $data=array(
                "status"=>$status,
                "msg"=>$msg
            );
        }
        echo json_encode($data);
    }
}
