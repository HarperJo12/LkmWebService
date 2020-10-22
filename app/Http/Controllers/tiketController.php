<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tiket;
use App\P_Izin;
use App\P_Matkul_Det;

class tiketController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Author Marcel 2019 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Tiket::select("No_Tiket", "Tgl_Transaksi", "Jenis_Tiket", "Stat", "Kelas", "NPM",
        "NIK_Cs", "NIK_Dosen")
            ->get();
        return $list;
    }

    public function indexMhs($id)
    {
        $list = Tiket::select("No_Tiket", "Tgl_Transaksi", "Jenis_Tiket", "Stat", "Kelas", "NPM",
        "NIK_Cs", "NIK_Dosen")
            ->where("NPM",$id)
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
            Tiket::create($request->all());
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
            $data = Tiket::findOrFail($id);
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
            $data= Tiket::findOrFail($id);
            $tmp['Tgl_Transaksi'] = $request->Tgl_Transaksi;
            $tmp['Jenis_Tiket'] = $request->Jenis_Tiket;
            $tmp['Stat'] = $request->Stat;
            $tmp['Kelas'] = $request->Kelas;
            $tmp['NPM'] = $request->NPM;
            $tmp['NIK_Cs'] = $request->NIK_Cs;
            $tmp['NIK_Dosen'] = $request->NIK_Dosen;
            $data->update($tmp);

            $reqs= $request->Matkul;
            if(!empty($reqs)){
                foreach ($reqs as $req ) {
                    //$i++;
                    $mk = P_Matkul_Det::findOrFail($req['Id']);
                    $dataMat['Kode_Mk'] = $req['Kode_Mk'];
                    $dataMat['Nama_Mk'] = $req['Nama_Mk'];
                    $dataMat['Tgl_Kuliah'] = $req['Tgl_Kuliah'];
                    $dataMat['Jam'] = $req['Jam'];
                    $dataMat['Kelas'] = $req['Kelas'];
                    $dataMat['Stat'] = $req['Stat'];
                    $dataMat['No_Trans'] = $id;
                    $mk->update($dataMat);
                }
            }
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
            $data = Tiket::findOrFail($id);
            $data->delete();
            return response()->json(['sukses'=>true]);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
        }
    }
}
