<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use Validator;
use Auth;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Image";
        $images = Image::paginate(5);
        // dd($images->find(4)->getMedia('images')->first()->getFullUrl());
        return view ("images.index", compact("title","images"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view ("images.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->image->getClientOriginalName());
        $validator = Validator::make($request->all(),[
            'title'         => 'required',
            'description'   => 'required',
            'image'        => 'required|mimes:jpeg,bmp,png'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $add = new Image;
            $add->title             = $request->title;
            $add->description       = $request->description;
            $add->image             = $request->image->getClientOriginalName();
            $add->save();

            if (isset($request->image)) {
                // dd('kakaikuda');
                $add->addMediaFromRequest("image")->toMediaCollection('images');
            }

            return redirect()->route('images.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $images = Image::find($id);
         return view('images.edit',compact('images'));
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
        $validator = Validator::make($request->all(),[
            'title'         => 'required',
            'description'   => 'required',
            // 'version' => 'required',
            // 'file' => 'required|mimes:pdf'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $edit = Image::find($request->id);
            $edit->title             = $request->title;
            $edit->description       = $request->description;
            if(isset($request->image)) {
                $edit->image = $request->image->getClientOriginalName();
            }
            $edit->update();

            if (isset($request->image)) {
                // dd('kakaikuda');
                $edit->addMediaFromRequest("image")->toMediaCollection('images');
            }

             return redirect()->route('images.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Image::find($id)->delete();
        return redirect()->back();
    }
}
