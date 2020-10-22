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
                font-size: 6.5pt;
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
        <h4 style = "text-align:center;">Report Perpindahan</h4>
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
                    <th>Kelas Awal</th>
                    <th>Kelas Akhir</th>
                    <th>Jenjang Awal</th>
                    <th>Jenjang Akhir</th>
                    <th>Jurusan Awal</th>
                    <th>Jurusan Akhir</th>
                    <th>Bidang Awal</th>
                    <th>Bidang Akhir</th>
                    <th>Thn Semester</th>
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
                        <td>{{ $t->Kls_Awal }}</td>
                        <td>{{ $t->Kls_Akhir }}</td>
                        <td>{{ $t->Jjg_Awal }}</td>
                        <td>{{ $t->Jjg_Akhir }}</td>
                        <td>{{ $t->Jrs_Awal }}</td>
                        <td>{{ $t->Jrs_Akhir }}</td>
                        <td>{{ $t->Bdg_Awal }}</td>
                        <td>{{ $t->Bdg_Akhir }}</td>
                        <td>{{ $t->Tahun_Sem }}</td>
                        <td style="text-align:justify" width="100px">{{ $t->Keterangan }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop
