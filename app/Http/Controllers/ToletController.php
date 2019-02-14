<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reg;
use App\Image;

class ToletController extends Controller
{
    public function index(){
      $reg = Reg::all()->toArray();
      return view('index', compact('reg'));
    }

    public function show(){
      $image = Image::all()->toArray();
      return view('show', compact('image'));
    }

    public function store(Request $request)
    {
        // $reg  = new Reg([
        //   'name' => $request->get('name'),
        //   'username' => $request->get('username'),
        //   'password' => $request->get('password'),
        //   'email' => $request->get('email'),
        //   'mobile' => $request->get('mobile'),
        //   'usertype' => $request->get('usertype')
        // ]);
        // $reg->save();
        // return 'added';
        $input = $request->all();
        Reg::create($input);
        return redirect('/');

    }
}
