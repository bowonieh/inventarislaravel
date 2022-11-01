<a href="gudang/tambah"><button>Tambah Lokasi</button></a>
<p>
<table border="1" cellspacing="0" cellpadding="10px">
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
            <a href="gudang/edit/{{$tempat->id_lokasi}}"><button>EDIT</button></a>
            <a href="gudang/hapus/{{$tempat->id_lokasi}}"><button>Hapus</button></a>
        </td>
    </tr>
    @endforeach
</table>