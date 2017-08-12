<?php

namespace App\Http\Controllers\Api;

use App\Models\Bags;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;

class BagController extends Controller
{
    //
    public function postBagData(Request $request)
    {
        //Validator
        $data = $request->all();
        $validator = Validator::make($data, [
            'name' => 'required',
            'auth_name' => 'required',
            'brand' => 'required',
            'price' => 'required',
            'series' => 'required',
            'date' => 'required',
            'type' => 'required|numeric',
            'cortex' => 'required|numeric',
            'style' => 'required|numeric',
            'design' => 'required|numeric',
            'parts' => 'required|numeric',
            'line' => 'required|numeric',
            'is_check_parts' => 'required|numeric',
            'girdle' => 'required|numeric',
            'metals' => 'required|numeric',
            'logo' => 'required|numeric',
            'lining' => 'required|numeric',
            'smell' => 'required|numeric',
            'level_usage' => 'required|numeric',
            'edge_wear' => 'required|numeric',
            'metals_wear' => 'required|numeric',
            'blot' => 'required|numeric',
            'colour_fading' => 'required|numeric',
            'off_line' => 'required|numeric',
            'chip' => 'required|numeric',
            'level_new_old' => 'required|numeric',
            'buy_time' => 'required',
            'evaluated_price' => 'required',
            'details' => 'required',
            'auth_details' => 'required'
        ]);
        if ($validator->fails()) {
            $return = [
                'status_code'=>400,
                'message'=>trans('common.400'),
                'data' => $validator->errors()
            ];
            return response()->json($return);
        }
        $data['details'] = json_encode($data['details']);
        $data['auth_details'] = json_encode($data['auth_details']);
        $res = Bags::create($data);
        if($res){
            return response()->json(['status_code'=>20002,'message'=>trans('common.20002'),'data'=>$res]);
        }else{
            return response()->json(['status_code'=>20002,'message'=>trans('common.20002')]);
        }
    }
}
