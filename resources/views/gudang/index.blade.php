@extends('template')
@section('content')
<a href="gudang/tambah"><btn class="btn btn-primary">Tambah Lokasi</btn></a>
<a href="logout"><btn class="btn btn-warning">Logout</btn></a>
</p>
<table class="table table-striped table-hover table-bordered">
    <tr>
        <th>
            NO
        </th>
        <th>
            Lokasi Gudang
        </th>
        <th>
            Penanggung Jawab
        </th>
        <th>
            Keterangan
        </th>
        <th>
            AKSI
        </th>
    </tr>
    <?php
    $no = 1;
    ?>
    @foreach($lokasi as $tempat)

    <tr>
        <td>
            {{$no++}}
        </td>
        <td>
            {{$tempat->nama_lokasi}}
        </td>
        <td>
            {{$tempat->penanggung_jawab}}
        </td>
        <td>
            {{$tempat->keterangan}}
        </td>
        <td>
            <a href="gudang/edit/{{$tempat->id_lokasi}}"><btn class="btn btn-success">EDIT</btn></a>
            <a href="gudang/hapus/{{$tempat->id_lokasi}}"><btn class="btn btn-danger">Hapus</btn></a>
        </td>
    </tr>
    @endforeach
</table>
@endsection