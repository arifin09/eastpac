<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Referral;

use Validator;

class ReferralController extends Controller
{
    public function store(Request $request)
    {
        $sosmed = [
            '1' => 'facebook',
            '2' => 'twitter'
        ];

        if(!array_key_exists($request->ref_type, $sosmed)) {
            return redirect()->back();
        }

        $validator = Validator::make($request->all(), [
            'ref_type' => 'required',
            'ref_share_link' => 'required'
        ]);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        } else {
            Referral::create([
                'user_id' => Auth::user()->id,
                'referral_type' => $request->ref_type,
                'referral_link' => $request->ref_share_link,
                'referral_code' => base64_encode(Auth::user()->username.Auth::user()->email),
                'status' => 'pending'
            ]);

            return redirect()->back();
        }


    }

    protected function check()
    {
        // to do
        // check balance , request from API
    }
}
