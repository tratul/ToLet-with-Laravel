<?php

namespace App\Http\Controllers;

use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.ownerpost');
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
      $uname = $request->session()->get('logged');

        $this->validate($request,[
          'title'=>'required',
          'bedroom'=>'required',
          'bathroom'=>'required',
          'size'=>'required',
          'rent'=>'required',
          'location'=>'required',
          'mobile'=>'required',
          'description'=>'required',
          'image'=>'required|image',
        ]);

        $image  = new Image([
        //$image = new Image;
                //'name' => $request->get('name'),
                'username' => $uname,
                'image' => $request->image->store('public/images'),
                'title' => $request->get('title'),
                'bedroom' => $request->get('bedroom'),
                'bathroom' => $request->get('bathroom'),
                'size' => $request->get('size'),
                'rent' => $request->get('rent'),
                'location' => $request->get('location'),
                'mobile' => $request->get('mobile'),
                'description' => $request->get('description')
        ]);
        $image->save();
        return $image->title;

        // if($request->hasFile('image')){
        //   $request->image->store('public/images');
        // }
        // $image->save();
        // return redirect('/reg');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }

    public function image()
    {
        return view('home.ownerpost');
    }
}
