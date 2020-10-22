<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Jadkul_Dummy;

class jadkulDummyController extends Controller
{
    /**
     * Display a listing of the resource.
     * @Author Marcel 2019 *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list=Jadkul_Dummy::all();
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
            Jadkul_Dummy::create($request->all());
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
            $data = Jadkul_Dummy::findOrFail($id);
            return $data;
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
    public function showJadKul(Request $request, $id)
    {
        try{
            $matkul= array();
            $tglAwal = Carbon::parse($request->Tgl_Awal);
            $tglAkhir = Carbon::parse($request->Tgl_Akhir)->addDay();
            while(!$tglAwal->eq($tglAkhir)){
                $dayOfTheWeek = $tglAwal->dayOfWeek;

                $matkulSat = Jadkul_Dummy::select("kodemk", "namamatkul", "kelas", "hari", "mulai", "selesai")
                ->where("npm", $id)
                ->where("hari",$dayOfTheWeek)
                ->get();
                foreach ($matkulSat as $mk ) {
                $mk['tanggal'] = $tglAwal->format('Y-m-d');
                }

                if(!$matkulSat->isEmpty()){
                    $matkulSat=json_decode($matkulSat);
                    $matkul=array_merge($matkul,$matkulSat);
                }
                $tglAwal->addDay();
            }

            return $matkul;
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
            $data = Jadkul_Dummy::findOrFail($id);
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
            $data = Jadkul_Dummy::findOrFail($id);
            $data->delete();
            return response()->json(['sukses'=>true]);
        }catch(\Exception $e){
            return response()->json(['sukses'=>false,'eror'=>'eror'.$e]);
        }
    }
}
