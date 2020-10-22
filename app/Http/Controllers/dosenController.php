<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;
use App\User;

class dosenController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Author Marcel 2019 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Dosen::select("NIK", "Nama_Lkp")
            ->get();
        return $list;
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
        try{
            $us = new User;
            $us->username = $request->NIK;
            $us->password = bcrypt("000000");
            $us->level = $request->Level;
            $us->save();

            $data = new Dosen;
            $data->NIK = $request->NIK;
            $data->Nama_Lkp = $request->Nama_Lkp;
            $data->save();

            return response()->json(['sukses'=>true]);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
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
        try{
            $data = Dosen::findOrFail($id)
                ->only(['NIK','Nama_Lkp']);
            return $data;
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
        }
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
    public function update(Request $request, $id)
    {
        try{
            $us = User::findOrFail($id);
            $tmp['username'] = $request->NIK;
            $tmp['password'] = bcrypt($request->Password);
            $tmp['level'] = $request->Level;
            $us->update($tmp);

            $data = Dosen::findOrFail($id);
            $isi['NIK'] = $request->NIK;
            $isi['Nama_Lkp'] = $request->Nama_Lkp;
            $data->update($isi);
            return response()->json(['sukses'=>true]);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
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
        try{
            $data = Dosen::findOrFail($id);
            $data->delete();
            return response()->json(['sukses'=>true]);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
        }
    }
}
