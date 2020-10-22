<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tiket;
use App\P_Sidang;

class tPsiController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Author Marcel 2019 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_sidang.Ttl", "p_sidang.Alamat", "p_sidang.Kd_Pos", "p_sidang.No_Telp",
        "p_sidang.No_HP", "p_sidang.Email", "p_sidang.Jenjang", "p_sidang.Jurusan", "p_sidang.Bidang", "p_sidang.Judul_TA",
        "p_sidang.Nama_Prs", "p_sidang.Alamat_Prs", "p_sidang.Pembimbing", "p_sidang.Ko_Pembimbing", "p_sidang.Tahun_Sem",
        "p_sidang.Lmp_Kwitansi")
            ->join("p_sidang","p_sidang.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->orderBy('tiket.Stat')
            ->orderBy('tiket.No_Tiket')
            ->get();

        return $list;
    }

    public function indexDsb($id)
    {
        $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_sidang.Ttl", "p_sidang.Alamat", "p_sidang.Kd_Pos", "p_sidang.No_Telp",
        "p_sidang.No_HP", "p_sidang.Email", "p_sidang.Jenjang", "p_sidang.Jurusan", "p_sidang.Bidang", "p_sidang.Judul_TA",
        "p_sidang.Nama_Prs", "p_sidang.Alamat_Prs", "p_sidang.Pembimbing", "p_sidang.Ko_Pembimbing", "p_sidang.Tahun_Sem",
        "p_sidang.Lmp_Kwitansi")
            ->join("p_sidang","p_sidang.No_Trans","=","tiket.No_Tiket")
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


            $dataCh=new P_Sidang;
            $dataCh->Ttl = $request->Ttl;
            $dataCh->Alamat = $request->Alamat;
            $dataCh->Kd_Pos = $request->Kd_Pos;
            $dataCh->No_Telp = $request->No_Telp;
            $dataCh->No_HP = $request->No_HP;
            $dataCh->Email = $request->Email;
            $dataCh->Jenjang = $request->Jenjang;
            $dataCh->Jurusan = $request->Jurusan;
            $dataCh->Bidang = $request->Bidang;
            $dataCh->Judul_TA = $request->Judul_TA;
            $dataCh->Nama_Prs = $request->Nama_Prs;
            $dataCh->Alamat_Prs = $request->Alamat_Prs;
            $dataCh->Pembimbing = $request->Pembimbing;
            $dataCh->Ko_Pembimbing = $request->Ko_Pembimbing;
            $dataCh->Tahun_Sem = $request->Tahun_Sem;
            $dataCh->Lmp_Kwitansi = $request->Lmp_Kwitansi;
            $data->psidang()->save($dataCh);

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
        "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_sidang.Ttl", "p_sidang.Alamat", "p_sidang.Kd_Pos", "p_sidang.No_Telp",
        "p_sidang.No_HP", "p_sidang.Email", "p_sidang.Jenjang", "p_sidang.Jurusan", "p_sidang.Bidang", "p_sidang.Judul_TA",
        "p_sidang.Nama_Prs", "p_sidang.Alamat_Prs", "p_sidang.Pembimbing", "p_sidang.Ko_Pembimbing", "p_sidang.Tahun_Sem",
        "p_sidang.Lmp_Kwitansi")
            ->join("p_sidang","p_sidang.No_Trans","=","tiket.No_Tiket")
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
