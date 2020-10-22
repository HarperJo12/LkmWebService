<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tiket;
use App\P_Ujian;
use App\P_Matkul_Det;

class tPujController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Author Marcel 2019 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_ujian.Jenis", "p_ujian.Tahun_Sem", "p_ujian.Tgl_Awal", "p_ujian.Tgl_Akhir",
        "p_ujian.Keterangan")
            ->join("p_ujian","p_ujian.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->with('pmatkuldet')
            ->orderBy('tiket.Stat')
            ->orderBy('tiket.No_Tiket')
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
            $data=new Tiket;
            $data->Tgl_Transaksi = $request->Tgl_Transaksi;
            $data->Jenis_Tiket = $request->Jenis_Tiket;
            $data->Stat = $request->Stat;
            $data->Kelas = $request->Kelas;
            $data->NPM = $request->NPM;
            $data->NIK_Cs = $request->NIK_Cs;
            $data->NIK_Dosen = $request->NIK_Dosen;
            $data->save();


            $dataCh=new P_Ujian;
            $dataCh->Jenis = $request->Jenis;
            $dataCh->Tahun_Sem = $request->Tahun_Sem;
            $dataCh->Tgl_Awal = $request->Tgl_Awal;
            $dataCh->Tgl_Akhir = $request->Tgl_Akhir;
            $dataCh->Keterangan = $request->Keterangan;
            $data->pujian()->save($dataCh);

            $reqs= $request->Matkul;
            foreach ($reqs as $req ) {
                $dataMat=new P_Matkul_Det;
                $dataMat->Kode_Mk = $req['Kode_Mk'];
                $dataMat->Nama_Mk = $req['Nama_Mk'];
                $dataMat->Tgl_Kuliah = $req['Tgl_Kuliah'];
                $dataMat->Jam = $req['Jam'];
                $dataMat->Kelas = $req['Kelas'];
                $dataMat->Stat = $req['Stat'];
                $data->pmatkuldet()->save($dataMat);
            }
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
        $dat = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_ujian.Jenis", "p_ujian.Tahun_Sem", "p_ujian.Tgl_Awal", "p_ujian.Tgl_Akhir",
        "p_ujian.Keterangan")
            ->join("p_ujian","p_ujian.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->where("tiket.No_Tiket", $id)
            ->with('pmatkuldet')
            ->get();

        if(!$dat){
            return response()->json(['dataTiada'=>true]);
        }else{
            return $dat;}
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
