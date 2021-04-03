<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class Users extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function list()
    {
    	$user1=User::all();
    	return view('userlist',['user'=>$user1]);
    }
    public function logout()
    {
        Session::flush();
        return redirect('/');
    }
    public function create()
    {
    	return view('create');
    }
    public function loginsubmit(Request $req)
    {
    	$r=User::select('name')->where(
    		[['email','=',$req->email],
    		['password','=',$req->password]]
    	)->get();
        if (count($r)==0) {
            return redirect('/login');   
        }
        else{
            $req->session()->put('logData',[$req->input()]);
            return redirect('/list');
        }
        
    }
    public function createsubmit(Request $req)
    {
    	$user = new User;
    	$user->name = $req->name;
    	$user->email = $req->email;
    	$user->password = $req->password;
    	$result=$user->save();
    	if ($result) {
    		$req->session()->put('logData',[$req->input()]);
    		return redirect('/list');
    	}
    }

    public function deleteuser($id)
    {
        User::find($id)->delete(); 
        return redirect('/list');
    }

    public function edituser($id)
    {
        $data=User::find($id);
       return view('edituser',['data'=>$data]);
    }

    public function updateuser(Request $req)
    {
        $user=User::find($req->id);
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $result=$user->save();
        if ($result) {
            return redirect('/list');
        }
    }
}
