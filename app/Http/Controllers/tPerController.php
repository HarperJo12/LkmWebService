<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tiket;
use App\P_Perpindahan;

class tPerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Author Marcel 2019 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_perpindahan.Kls_Awal", "p_perpindahan.Kls_Akhir", "p_perpindahan.Jjg_Awal",
        "p_perpindahan.Jjg_Akhir", "p_perpindahan.Jrs_Awal", "p_perpindahan.Jrs_Akhir", "p_perpindahan.Bdg_Awal",
        "p_perpindahan.Bdg_Akhir", "p_perpindahan.Tahun_Sem", "p_perpindahan.Keterangan", "p_perpindahan.Lampiran1", "p_perpindahan.Lampiran2")
            ->join("p_perpindahan","p_perpindahan.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->orderBy('tiket.Stat')
            ->orderBy('tiket.No_Tiket')
            ->get();

        return $list;
    }

    public function indexKjr($id){
        $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_perpindahan.Kls_Awal", "p_perpindahan.Kls_Akhir", "p_perpindahan.Jjg_Awal",
        "p_perpindahan.Jjg_Akhir", "p_perpindahan.Jrs_Awal", "p_perpindahan.Jrs_Akhir", "p_perpindahan.Bdg_Awal",
        "p_perpindahan.Bdg_Akhir", "p_perpindahan.Tahun_Sem", "p_perpindahan.Keterangan", "p_perpindahan.Lampiran1", "p_perpindahan.Lampiran2")
            ->join("p_perpindahan","p_perpindahan.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->where("tiket.NIK_Dosen",$id)
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


            $dataCh=new P_Perpindahan;
            $dataCh->Kls_Awal = $request->Kls_Awal;
            $dataCh->Kls_Akhir = $request->Kls_Akhir;
            $dataCh->Jjg_Awal = $request->Jjg_Awal;
            $dataCh->Jjg_Akhir = $request->Jjg_Akhir;
            $dataCh->Jrs_Awal = $request->Jrs_Awal;
            $dataCh->Jrs_Akhir = $request->Jrs_Akhir;
            $dataCh->Bdg_Awal = $request->Bdg_Awal;
            $dataCh->Bdg_Akhir = $request->Bdg_Akhir;
            $dataCh->Tahun_Sem = $request->Tahun_Sem;
            $dataCh->Keterangan = $request->Keterangan;
            $dataCh->Lampiran1 = $request->Lampiran1;
            $dataCh->Lampiran2 = $request->Lampiran2;
            $data->pperpindahan()->save($dataCh);

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
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_perpindahan.Kls_Awal", "p_perpindahan.Kls_Akhir",
        "p_perpindahan.Jjg_Awal", "p_perpindahan.Jjg_Akhir", "p_perpindahan.Jrs_Awal", "p_perpindahan.Jrs_Akhir", "p_perpindahan.Bdg_Awal",
        "p_perpindahan.Bdg_Akhir", "p_perpindahan.Tahun_Sem", "p_perpindahan.Keterangan", "p_perpindahan.Lampiran1", "p_perpindahan.Lampiran2")
            ->join("p_perpindahan","p_perpindahan.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->where("tiket.No_Tiket", $id)
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
