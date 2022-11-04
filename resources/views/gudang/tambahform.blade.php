@extends('template')
@section('content')
<div class="card">
    <div class="card-header">
        <h4>Form Tambah data lokasi</h4>
        <hr>
    </div>
    <form method="POST" action="simpan">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Nama Lokasi</label>
                        <input type="text" name="nama_lokasi" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Penanggung Jawab</label>
                        <input type="text" name="penanggung_jawab" class="form-control" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label class="form-label">Nama Lokasi</label>
                        <textarea class="form-control" name="keterangan" rows="3">

                        </textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">SIMPAN</button>
        </div>
    </form>
</div>

@endsection