<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LandingPageContent;
use Auth;
use Validator;

class LandingPageContentController extends Controller
{
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'key' => 'required',
            'jdata' => 'required'
        ]);

        if($validator->fails()) {
            return response()->json([
                'title' => 'Error',
                'msg' => "Update Failed",
                'type' => "error",
                'icon' => "error"
            ], 200);
        }

        if(LandingPageContent::where('key', $request->key)->count() == 0) {
            return response()->json([
                'title' => 'Error',
                'msg' => "Update Failed",
                'type' => "error",
                'icon' => "error"
            ], 200);
        } else {
            LandingPageContent::where('key', $request->key)->update([
                'json_data' => json_encode($request->jdata)
            ]);

            return response()->json([
                'title' => 'Success',
                'msg' => "Update Success",
                'type' => "success",
                'icon' => "success"
            ], 200);
        }


    }
}
