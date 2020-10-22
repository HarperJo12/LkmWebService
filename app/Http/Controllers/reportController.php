<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dosen;
use App\Tiket;
use App\P_Izin;
use App\P_Matkul_Det;
use PDF;

/**
 * @Author Marcel 2019 *
 **/
class reportController extends Controller
{

    public function getReport(Request $request){
        $jns = $request->jenis;
        $bln = $request->bulan;
        $thn = $request->tahun;
        $r=0; $k=0; $t=0; $ad=[];
        if($jns==1){
            $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
            "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_izin.Jenis", "p_izin.Lampiran", "p_izin.Tgl_Awal", "p_izin.Tgl_Akhir",
            "p_izin.Keterangan")
                ->join("p_izin","p_izin.No_Trans","=","tiket.No_Tiket")
                ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
                ->whereMonth("tiket.Tgl_Transaksi",$bln)
                ->whereYear("tiket.Tgl_Transaksi",$thn)
                ->with('pmatkuldet')
                ->orderBy('tiket.No_Tiket')
                ->get();
            if(!$list->isEmpty()){
                foreach ($list as $l ) {
                    $t++;
                    switch ($l['Jenis_Tiket']) {
                        case 1:$l['Jenis_Tiket']="Izin"; break;
                        case 2:$l['Jenis_Tiket']="Ujian"; break;
                        case 3:$l['Jenis_Tiket']="Perpindahan"; break;
                        case 4:$l['Jenis_Tiket']="Sidang"; break;
                        default:$l['Jenis_Tiket']="";break;
                    }

                    switch ($l['Stat']) {
                        case 0:$l['Stat']="Belum Diproses"; break;
                        case 1:$l['Stat']="Diterima"; break;
                        case 2:$l['Stat']="Ditolak"; break;
                        case 3:$l['Stat']="Harap Menghubungi Ketua Jurusan"; break;
                        default:$l['Stat']="";break;
                    }

                    switch ($l['Kelas']) {
                        case 1:$l['Kelas']="Reguler"; $r++; break;
                        case 2:$l['Kelas']="Karyawan"; $k++; break;
                        default:$l['Kelas']="";break;
                    }

                    $matkul=$l['pmatkuldet'];
                    foreach ($matkul as $m ) {
                        switch ($m['Stat']) {
                            case 0:$m['Stat']="Belum Diproses"; break;
                            case 1:$m['Stat']="Diterima"; break;
                            case 2:$m['Stat']="Ditolak"; break;
                            default:$m['Stat']="";break;
                        }
                    }
                }
            }
            $ad['klsReguler']=$r;
            $ad['klsKaryawan']=$k;
            $ad['sumTicket']=$t;
            $pdf = PDF::loadView('reportIzinPdf',['tiket'=>$list, 'adTiket'=>$ad])->setPaper('a4', 'potrait');
            $file_name = 'reportIzin';
        }elseif ($jns==2) {
            $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
            "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_ujian.Jenis", "p_ujian.Tahun_Sem", "p_ujian.Tgl_Awal", "p_ujian.Tgl_Akhir",
            "p_ujian.Keterangan")
            ->join("p_ujian","p_ujian.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->whereMonth("tiket.Tgl_Transaksi",$bln)
            ->whereYear("tiket.Tgl_Transaksi",$thn)
            ->with('pmatkuldet')
            ->orderBy('tiket.No_Tiket')
            ->get();
            if(!$list->isEmpty()){
                foreach ($list as $l ) {
                    $t++;
                    switch ($l['Jenis_Tiket']) {
                        case 1:$l['Jenis_Tiket']="Izin"; break;
                        case 2:$l['Jenis_Tiket']="Ujian"; break;
                        case 3:$l['Jenis_Tiket']="Perpindahan"; break;
                        case 4:$l['Jenis_Tiket']="Sidang"; break;
                        default:$l['Jenis_Tiket']="";break;
                    }

                    switch ($l['Stat']) {
                        case 0:$l['Stat']="Belum Diproses"; break;
                        case 1:$l['Stat']="Diterima"; break;
                        case 2:$l['Stat']="Ditolak"; break;
                        case 3:$l['Stat']="Harap Menghubungi Ketua Jurusan"; break;
                        default:$l['Stat']="";break;
                    }

                    switch ($l['Kelas']) {
                        case 1:$l['Kelas']="Reguler"; $r++; break;
                        case 2:$l['Kelas']="Karyawan"; $k++; break;
                        default:$l['Kelas']="";break;
                    }

                    $matkul=$l['pmatkuldet'];
                    foreach ($matkul as $m ) {
                        switch ($m['Stat']) {
                            case 0:$m['Stat']="Belum Diproses"; break;
                            case 1:$m['Stat']="Diterima"; break;
                            case 2:$m['Stat']="Ditolak"; break;
                            default:$m['Stat']="";break;
                        }
                    }
                }
            }
            $ad['klsReguler']=$r;
            $ad['klsKaryawan']=$k;
            $ad['sumTicket']=$t;
            $pdf = PDF::loadView('reportUjianPdf',['tiket'=>$list, 'adTiket'=>$ad])->setPaper('a4', 'potrait');
            $file_name = 'reportUjian';
        }elseif ($jns==3) {
            $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
            "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_perpindahan.Kls_Awal", "p_perpindahan.Kls_Akhir", "p_perpindahan.Jjg_Awal",
            "p_perpindahan.Jjg_Akhir", "p_perpindahan.Jrs_Awal", "p_perpindahan.Jrs_Akhir", "p_perpindahan.Bdg_Awal",
            "p_perpindahan.Bdg_Akhir", "p_perpindahan.Tahun_Sem", "p_perpindahan.Keterangan", "p_perpindahan.Lampiran1", "p_perpindahan.Lampiran2")
            ->join("p_perpindahan","p_perpindahan.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->whereMonth("tiket.Tgl_Transaksi",$bln)
            ->whereYear("tiket.Tgl_Transaksi",$thn)
            ->orderBy('tiket.No_Tiket')
            ->get();
            if(!$list->isEmpty()){
                foreach ($list as $l ) {
                    $t++;
                    switch ($l['Jenis_Tiket']) {
                        case 1:$l['Jenis_Tiket']="Izin"; break;
                        case 2:$l['Jenis_Tiket']="Ujian"; break;
                        case 3:$l['Jenis_Tiket']="Perpindahan"; break;
                        case 4:$l['Jenis_Tiket']="Sidang"; break;
                        default:$l['Jenis_Tiket']="";break;
                    }

                    switch ($l['Stat']) {
                        case 0:$l['Stat']="Belum Diproses"; break;
                        case 1:$l['Stat']="Diterima"; break;
                        case 2:$l['Stat']="Ditolak"; break;
                        case 3:$l['Stat']="Harap Menghubungi Ketua Jurusan"; break;
                        default:$l['Stat']="";break;
                    }

                    switch ($l['Kelas']) {
                        case 1:$l['Kelas']="Reguler"; $r++; break;
                        case 2:$l['Kelas']="Karyawan"; $k++; break;
                        default:$l['Kelas']="";break;
                    }
                }
            }
            $ad['klsReguler']=$r;
            $ad['klsKaryawan']=$k;
            $ad['sumTicket']=$t;
            $pdf = PDF::loadView('reportPerpindahanPdf',['tiket'=>$list, 'adTiket'=>$ad])->setPaper('a4', 'landscape');
            $file_name = 'reportPerpindahan';
        }elseif ($jns==4) {
            $list = Tiket::select("tiket.No_Tiket", "tiket.Tgl_Transaksi", "tiket.Jenis_Tiket", "tiket.Stat", "tiket.Kelas", "tiket.NPM", "mahasiswa.Nama_Lkp",
            "tiket.NIK_Cs", "tiket.NIK_Dosen", "p_sidang.Ttl", "p_sidang.Alamat", "p_sidang.Kd_Pos", "p_sidang.No_Telp",
            "p_sidang.No_HP", "p_sidang.Email", "p_sidang.Jenjang", "p_sidang.Jurusan", "p_sidang.Bidang", "p_sidang.Judul_TA",
            "p_sidang.Nama_Prs", "p_sidang.Alamat_Prs", "p_sidang.Pembimbing", "p_sidang.Ko_Pembimbing", "p_sidang.Tahun_Sem",
            "p_sidang.Lmp_Kwitansi")
            ->join("p_sidang","p_sidang.No_Trans","=","tiket.No_Tiket")
            ->join("mahasiswa","mahasiswa.NPM","=","tiket.NPM")
            ->whereMonth("tiket.Tgl_Transaksi",$bln)
            ->whereYear("tiket.Tgl_Transaksi",$thn)
            ->orderBy('tiket.No_Tiket')
            ->get();
            if(!$list->isEmpty()){
                $cDosen=[];
                $dsn = Dosen::select("NIK", "Nama_Lkp")->get();
                foreach ($dsn as $d) {
                    $cDosen[$d['NIK']]=0;
                }
                foreach ($list as $l ) {
                    $t++;
                    $cDosen[$l['NIK_Dosen']]++;
                    switch ($l['Jenis_Tiket']) {
                        case 1:$l['Jenis_Tiket']="Izin"; break;
                        case 2:$l['Jenis_Tiket']="Ujian"; break;
                        case 3:$l['Jenis_Tiket']="Perpindahan"; break;
                        case 4:$l['Jenis_Tiket']="Sidang"; break;
                        default:$l['Jenis_Tiket']="";break;
                    }

                    switch ($l['Stat']) {
                        case 0:$l['Stat']="Belum Diproses"; break;
                        case 1:$l['Stat']="Diterima"; break;
                        case 2:$l['Stat']="Ditolak"; break;
                        case 3:$l['Stat']="Harap Menghubungi Dosen Pembimbing"; break;
                        default:$l['Stat']="";break;
                    }

                    switch ($l['Kelas']) {
                        case 1:$l['Kelas']="Reguler"; $r++; break;
                        case 2:$l['Kelas']="Karyawan"; $k++; break;
                        default:$l['Kelas']="";break;
                    }
                }
            }
            $max=max($cDosen);  $mNom="";
            foreach ($cDosen as $dKey=>$value) {
                if($max==$value){
                    if($mNom!=""){ $mNom=$mNom.", ".$dKey." (".$value.")"; }else{ $mNom=$dKey." (".$value.")"; }
                }
            }
            $ad['klsReguler']=$r;
            $ad['klsKaryawan']=$k;
            $ad['sumTicket']=$t;
            $ad['cDosen']=$mNom;
            $pdf = PDF::loadView('reportSidangPdf',['tiket'=>$list, 'adTiket'=>$ad])->setPaper('a4', 'landscape');
            $file_name = 'reportSidang';
        }

        if(!$list->isEmpty()){
            $nmBln="";
            switch($bln){
                case 1:$nmBln="Januari";break;
                case 2:$nmBln="Februari";break;
                case 3:$nmBln="Maret";break;
                case 4:$nmBln="April";break;
                case 5:$nmBln="Mei";break;
                case 6:$nmBln="Juni";break;
                case 7:$nmBln="Juli";break;
                case 8:$nmBln="Agustus";break;
                case 9:$nmBln="September";break;
                case 10:$nmBln="Oktober";break;
                case 11:$nmBln="November";break;
                case 12:$nmBln="Desember";break;
            }
            $file_name = $file_name.$nmBln.$thn.".pdf";
            //return $pdf->download($file_name);
            $file_path = public_path('uploads/reports/'.$file_name);
            $pdf->save($file_path);
            return response()->json(['error'=>false,
                    'name'=>$file_name]);
        }else{
            return response()->json(['error'=>true,
            'pesan'=>'Tidak terdapat tiket pengajuan']);
        }
    }

    public function downReport($file_name) {
        $file_path = public_path('uploads/reports/'.$file_name);
        return response()->download($file_path);
    }
}
