@extends('template')

@section('main')
    <div id="report">
        <style type="text/css">
            table{
                table-layout: auto;
                position: absolute;
                left: 0cm;
                z-index: -1;
            }
            table tr.matkul td, table tr.tiket td, table tr.judul th{
                font-size: 6pt;
                padding: .75em .75em;
                text-align: center;
            }
            table tr.matkul td.noWrap, table tr.tiket td.noWrap, table tr.judul th.noWrap{
                width: 1%;
                white-space:nowrap;
            }
            table tr.tiket td{
                background-color: #fcface;
            }
            table tr.judul{
                background-color: #ededed;
            }
            @page {
                margin: 1cm;
            }
            p {
                margin: 0;
                font-size: 7pt;
                line-height: 1.0rem;
            }
            p.thick{
                font-weight: bold;
            }
            </style>
        <h4 style = "text-align:center;">Report Izin</h4>
        <br>
        <p class="thick">Jumlah Pengajuan : {{ $adTiket['sumTicket'] }}</p>
        <p class="thick">Jumlah Pengajuan Kelas Reguler : {{ $adTiket['klsReguler'] }}</p>
        <p class="thick">Jumlah Pengajuan Kelas Karyawan : {{ $adTiket['klsKaryawan'] }}</p>
        <br>
        <table class='table table-bordered' style="padding:1px; border-spacing:1px;">
            <thead class="thead-light">
                <tr class="judul">
                    <th>No</th>
                    <th>No Tiket</th>
                    <th>Tgl Transaksi</th>
                    <th>Jenis Tiket</th>
                    <th>Status</th>
                    <th>Kelas</th>
                    <th>NPM</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Izin</th>
                    <th>Tgl Awal</th>
                    <th>Tgl Akhir</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php $i=1 @endphp
                @foreach ($tiket as $t)
                    <tr class="tiket">
                        <td>{{ $i++ }}</td>
                        <td>{{ $t->No_Tiket }}</td>
                        <td class="noWrap">{{ $t->Tgl_Transaksi }}</td>
                        <td>{{ $t->Jenis_Tiket }}</td>
                        <td>{{ $t->Stat }}</td>
                        <td>{{ $t->Kelas }}</td>
                        <td>{{ $t->NPM }}</td>
                        <td>{{ $t->Nama_Lkp }}</td>
                        <td>{{ $t->Jenis }}</td>
                        <td class="noWrap">{{ $t->Tgl_Awal }}</td>
                        <td class="noWrap">{{ $t->Tgl_Akhir }}</td>
                        <td style="text-align:justify" width="100px">{{ $t->Keterangan }}</td>
                    </tr>
                    @php $j=0; $matkul = $t->pmatkuldet; @endphp
                    @foreach ($matkul as $m)
                    <tr class="matkul">
                        <td colspan="2"></td>
                        <td>{{ $j++ }}</td>
                        <td>{{ $m['Kode_Mk'] }}</td>
                        <td>{{ $m['Nama_Mk'] }}</td>
                        <td class="noWrap">{{ $m['Tgl_Kuliah'] }}</td>
                        <td class="noWrap">{{ $m['Jam'] }}</td>
                        <td>{{ $m['Kelas'] }}</td>
                        <td>{{ $m['Stat'] }}</td>
                        <td colspan="3"></td>
                    </tr>
                    @endforeach
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop
