<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class  Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function success($request_message  ,$content_name = null , $content = null){
        $data['status'] = 200;
        $data['message'] =$request_message;
        if($content_name){
            $data[$content_name] = $content;
        }
        return response()->json($data)->header('Content-type:application/json',true);
    }
    public static function filed($request_message  ,$status =404, $content_name = null , $content = null){
        $data['status'] = $status;
        $data['message'] =$request_message;
        if($content_name){
            $data[$content_name] = $content;
        }
        return response()->json($data)->header('Content-type:application/json',true);
    }
}
