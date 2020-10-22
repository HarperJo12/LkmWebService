@extends('template')

@section('main')
    <div id="report">
        <style type="text/css">
            table{
                table-layout: auto;
                position: absolute;
                left: -0.5cm;
                z-index: -1;
            }
            table tr.matkul td, table tr.tiket td, table tr.judul th{
                font-size: 6pt;
                padding: .25em .25em;
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
        <h4 style = "text-align:center;">Report Sidang</h4>
        <br>
        <p class="thick">Jumlah Pengajuan : {{ $adTiket['sumTicket'] }}</p>
        <p class="thick">Jumlah Pengajuan Kelas Reguler : {{ $adTiket['klsReguler'] }}</p>
        <p class="thick">Jumlah Pengajuan Kelas Karyawan : {{ $adTiket['klsKaryawan'] }}</p>
        <p class="thick">Dosen dengan Jumlah pengajuan Terbanyak : {{ $adTiket['cDosen'] }}</p>
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
                    <th>TTL</th>
                    <th>Alamat Bdg</th>
                    <th>Kode Pos</th>
                    <th>No Telp</th>
                    <th>No Hp</th>
                    <th>Email</th>
                    <th>Jenjang</th>
                    <th>Jurusan</th>
                    <th>Bidang</th>
                    <th>Judul TA</th>
                    <th>Nama Prs</th>
                    <th>Alamat Prs</th>
                    <th>NIK Dsn Pembimbing</th>
                    <th>Nm Dsn Pembimbing</th>
                    <th>Nm Dsn Ko-Pembimbing</th>
                    <th>Thn Semester</th>
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
                        <td>{{ $t->Ttl }}</td>
                        <td>{{ $t->Alamat }}</td>
                        <td>{{ $t->Kd_Pos }}</td>
                        <td>{{ $t->No_telp }}</td>
                        <td>{{ $t->No_HP }}</td>
                        <td>{{ $t->Email }}</td>
                        <td>{{ $t->Jenjang }}</td>
                        <td>{{ $t->Jurusan }}</td>
                        <td>{{ $t->Bidang }}</td>
                        <td>{{ $t->Judul_TA }}</td>
                        <td>{{ $t->Nama_Prs }}</td>
                        <td>{{ $t->Alamat_Prs }}</td>
                        <td>{{ $t->NIK_Dosen }}</td>
                        <td>{{ $t->Pembimbing }}</td>
                        <td>{{ $t->Ko_Pembimbing }}</td>
                        <td>{{ $t->Tahun_Sem }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop

@section('footer')

@stop
