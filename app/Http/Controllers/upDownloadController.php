<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Marcel 2019 *
 **/

class upDownloadController extends Controller
{
    public function upload(Request $request, $id){
        try{
            if($request->hasFile('data')){
                $data = $request->file('data');
                $ext = $data->getClientOriginalExtension();
                if(!$data->isValid()) {
                    return response()->json([‘invalid_file_upload’], 400);
                }

                $data_name = $id . date('YmdHis'). ".$ext";
                $upload_path = 'uploads';
                $data->move($upload_path, $data_name);
            }
            return response()->json(['sukses'=>true,
                                'name'=>$data_name]);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
        }
    }

    public function download($file_name) {
        $file_path = public_path('uploads/'.$file_name);
        return response()->download($file_path);
    }
}
