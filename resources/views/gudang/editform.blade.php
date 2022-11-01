<h4>Form edit lokasi {{$nama_lokasi}}</h4>
<hr>
<form method="POST" action="editsimpan">
    <table border="0" cellpadding="20px">
        <tr>
            <td>
                Nama Lokasi
            </td>
            <td>
                <input type="text" name="nama_lokasi" value="{{$nama_lokasi}}"/>
                <input type="hidden"  name="id_lokasi" value="{{$id_lokasi}}" />
            </td>
        </tr>
        <tr>
            <td>
                Penanggung Jawab
            </td>
            <td>
                <input type="text" name="penanggung_jawab" value="{{$penanggung_jawab}}" />
            </td>
        </tr>
        <tr>
            <td>
                Keterangan
            </td>
            <td>
                <textarea name="keterangan" cols="20" rows="5">
                    {{$keterangan}}
                </textarea>
            </td>
        </tr>
    </table>
    <button type="submit" value="Simpan">SIMPAN</button>
</form>