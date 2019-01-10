<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhitePaper;
use Validator;
use Auth;

class WhitePaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $title = 'White Paper';
        $white_papers =  WhitePaper::paginate(20);

       //  dd($white_papers);
        return view('white-paper.index', compact('title','white_papers'));
    }

    public function create()
    {
        return view('white-paper.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function upload(Request $request)
    {        
        // dd($request->file('avatar'));
        /*$validator = Validator::make($request->all(), [
            'title'         => 'required|unique:posts|max:255',
            'description'   => 'required',
            'version'       => 'required',
            'file'          => 'required|mimes:pdf|max:10000'
        ]);

        if($validator->fails()) {
            
            return redirect()->back()->withErrors($validator);
        } else {
            
           /* User::where('username', $username)->update([
                'name' => $request->fullname
            ]);
            if (isset($request->avatar)) {
                // dd('kakaikuda');
                Auth::user()->addMediaFromRequest("avatar")->toMediaCollection('avatars');
            }
            return redirect()->back();
        }

        

        return response()->json($result, $status);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validator = Validator::make($request->all(),[
            'title' => 'required',
            'description' => 'required',
            'version' => 'required',
            'file' => 'required|mimes:pdf'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $add = new WhitePaper;
            $add->title             = $request->title;
            $add->description       = $request->description;
            $add->version           = $request->version;
            $add->save();

            if (isset($request->file)) {
                // dd('kakaikuda');
                $add->addMediaFromRequest("file")->toMediaCollection('files');
            }

            return redirect()->route('whitePaper.index');
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
         $white_paper = WhitePaper::find($id);
         return view('white-paper.edit',compact('white_paper'));
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
            'title' => 'required',
            // 'description' => 'required',
            // 'version' => 'required',
            // 'file' => 'required|mimes:pdf'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            $edit = WhitePaper::find($request->id);
            $edit->title             = $request->title;
            $edit->description       = $request->description;
            $edit->version           = $request->version;
            $edit->update();

            if (isset($request->file)) {
                // dd('kakaikuda');
                $add->addMediaFromRequest("file")->toMediaCollection('files');
            }

             return redirect()->route('whitePaper.index');
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
        
        WhitePaper::find($id)->delete();
        return redirect()->back();
    
    }
}
