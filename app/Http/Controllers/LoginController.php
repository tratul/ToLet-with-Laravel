<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\Reg;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{
    public function index(Request $request){

    	return view('login.index');
    }

    public function verify(Request $request){

    	$uname = $request->username;
    	$password = $request->input('password');
      //return $uname;
    //  return $password;
    $reg = Reg::all()->toArray();
    foreach($reg as $row){
      if($uname== $row['username'] && $password==$row['password']){
       $request->session()->put('logged', $uname);


       if($row['usertype']=='owner'){
         return redirect('/ownerhome');
       }



      }
    }
    //return $reg['name'];
    //return view('index', compact('reg'));


    //     $user = DB::table('regs')
    //             ->where('username', $uname)
    //             ->where('password', $password)
    //             ->first();
    //
    //     return $user;
    //
		//  if($user != null){
    //
    //          $request->session()->put('logged', $user);
    //
		//  	return redirect()->route('home.index');
		//  }else{
    //
		//  	$request->session()->flash('message', 'Invalid username or password');
		//  	return redirect()->route('login.index', ['name'=>$uname]);
		// }

    }

    public function home(Request $request){
      $uname = $request->session()->get('logged');
      return view('home.ownerhome')->with('uname',$uname);
    }
}
