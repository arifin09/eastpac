<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kyc;
use Validator;
use App\User;
use Auth;

class AdminKycController extends Controller
{
    protected $kyc;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->kyc = new Kyc;
        
    }

    public function index()
    {
        $title= "Admin Kyc";
        $kycs= Kyc::paginate(10);

        // dd(Kyc::find(7)->user);



        // dd($kycs);

        return view('admin.kyc.index', compact('title','kycs'));
    }

    public function GetKycList()
    {
        $kycs = Kyc::all();

        $result = [
            "data" => $kycs
        ];
        return response()->json($result);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kycShow($id)
    {
        $title = "Kyc";
        $kyc = Kyc::find($id);
        // $user = User::find($id);

       // dd($kyc->user());
      //  dd($kyc);

        return view('admin.kyc.show', compact('title','user','kyc'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kycUpdate(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function updatestatus(Request $request)
    {
        $kyc = Kyc::find($request->id);
        $kyc->status = $request->st;
        $kyc->save();
        return "hahaha";
    }
}
