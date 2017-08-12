<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        $path = 'upload/' . date('Y/md');
        $res = $request->file('upload_file')->store($path);
        $return = [
            'status_code' => 20001,
            'message' => trans('common.20001'),
            'filename' => $res,
            'url' => Storage::url($res)
        ];
        return $return;

    }
}
