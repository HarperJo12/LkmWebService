<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa;
use App\User;

class mahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Author Marcel 2019 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Mahasiswa::select("NPM", "Nama_Lkp", "Tgl_Lahir", "Password", "Stat", "Ipk", "Sks_Lulus", "Dos1", "Dos2",
         "Kelas", "Jenjang", "Jurusan", "Bidang")
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
            $us->username = $request->NPM;
            $us->password = bcrypt($request->Password);
            $us->level = 1;
            $us->save();

            Mahasiswa::create($request->all());
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
            $data = Mahasiswa::findOrFail($id)
                ->only(['NPM', 'Nama_Lkp', 'Password', 'Stat', 'Ipk', 'Sks_Lulus', 'Dos1', 'Dos2',
                'Tgl_Lahir', 'Kelas', 'Jenjang', 'Jurusan', 'Bidang']);
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
            $tmp['level'] = 1;
            $us->update($tmp);

            $data = Mahasiswa::findOrFail($id);
            $data->Update($request->all());
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
            $data = Mahasiswa::findOrFail($id);
            $data->delete();
            return response()->json(['sukses'=>true]);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
        }
    }
}
