<?php

namespace App\Http\Controllers;

// library
use Illuminate\Http\Request;
use Validator;
use Auth;

// model
use App\Kyc;
use App\User;

class KycController extends Controller
{
    private $view_dir = 'layouts.sections.kyc.';

    public function __construct()
    {

    }

    public function index()
    {
        // dd(Auth::user()->hasVerifiedEmail());
        // $kycStatus = 0;
        $title = 'Verify your identity to participate in tokensale.';
        // $getData = Kyc::where('user_id', Auth::user()->id);
        // if ($getData->count() > 0) {
        //     $kycStatus = $getData->first()->status;
        // }

        return view($this->view_dir. 'index', compact('title'));


    }

    public function store(Request $request)
    {

        $file = $request->file('document_file');

        //dd($request->file('document_file'));

        $validator = Validator::make($request->all(), [
            'first_name'    => 'required',
            'last_name'     => 'required',
            'email'         => 'required',
            'mobilenumber'  => 'required',
            'date_of_birth' => 'required|date',
            'address_1'     => 'required',
            'address_2'     => 'required',
            'nationality'   => 'required',
            'city'          => 'required',
            'state'         => 'required',
            'document_type' => 'required',
            'document_file' => 'required|image',
            'zip_code'      => 'required',
            'wallet_type'   => 'required',
            'wallet_address' => 'required',
        ]);

       // dd($request->all());


        if($validator->fails()) {
            //dd($validator->errors());
            return redirect()->back()->withErrors($validator);
        } else {
           // dd($file->extension());
            
            $add=Kyc::updateOrcreate([
                'user_id'       => Auth::user()->id,
            ],
            [
                'status'        => 1,
                'first_name'    => $request->first_name,
                'last_name'     => $request->last_name,
                'email'         => $request->email,
                'mobilenumber'  => $request->mobilenumber,
                'date_of_birth' => $request->date_of_birth,
                'address_1'     => $request->address_1,
                'address_2'     => $request->address_2,
                'nationality'   => $request->nationality,
                'city'          => $request->city,
                'state'         => $request->state,
                'document_type' => $request->document_type,
                'document_file' => $request->document_file->getClientOriginalName(),
                'zip_code'      => $request->zip_code,
                'wallet_type'   => $request->wallet_type,
                'wallet_address' => $request->wallet_address,
            ]);
            if (isset($request->document_file)) {
                // dd($add);
                $add->addMediaFromRequest("document_file")->toMediaCollection('document_files');

            }

            return view($this->view_dir. 'kyc-thank-you');
        }


    }

    public function thankYou()

    {
       // $images = Image::find($id);
         return view($this->view_dir. 'kyc-thank-you');
    }

}
