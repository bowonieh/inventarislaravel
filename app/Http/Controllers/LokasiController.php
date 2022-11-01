<?php

namespace App\Http\Controllers;

use App\Models\LokasiModel;
use Error;
use Exception;
use Illuminate\Http\Request;

class LokasiController extends Controller
{
    //
    protected $lokasiModel;
    public function __construct()
    {
        $this->lokasiModel = new LokasiModel;
    }
    public function index()
    {
        //menampilkan seluruh lokasi
        $data = [
            'title' => 'Daftar Lokasi Gudang',
            'lokasi' => $this->lokasiModel->all()
        ];
        return view('gudang.index', $data);
    }
    public function formTambah()
    {
        return view('gudang.tambahform');
    }
    public function simpan(Request $request)
    {
        try {
            $data = [
                'nama_lokasi' => $request->input('nama_lokasi'),
                'penanggung_jawab' => $request->input('penanggung_jawab'),
                'keterangan'        => $request->input('keterangan')
            ];
            //substr(hexdec(random_int(0,9999908)),4,-4);

            $id_lokasi = substr(md5(rand(0, 99999)), -4);
            $data['id_lokasi'] = $id_lokasi;
            // echo json_encode($data);
            //insert data ke database
            $insert = $this->lokasiModel->create($data);
            //Promise 
            if ($insert) {
                //redirect('gudang','refresh');
                return redirect('gudang');
            } else {
                return "input data gagal";
            }
        } catch (Exception $e) {
            return $e->getMessage();
            //return "yaaah error nih, sorry ya";
        }
    }

    public function edit($id = null)
    {

        $edit = $this->lokasiModel->find($id);
        // echo json_encode($edit);
        return view('gudang.editform', $edit);
    }
    public function editsimpan(Request $request)
    {
        try {
            $data = [
                'nama_lokasi'   => $request->input('nama_lokasi'),
                'penanggung_jawab' => $request->input('penanggung_jawab'),
                'keterangan'    => $request->input('keterangan')
            ];
            $upd = $this->lokasiModel
                        ->where('id_lokasi', $request->input('id_lokasi'))
                        ->update($data);
            if($upd){
                return redirect('gudang');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function hapus($id=null){
        try{
            $hapus = $this->lokasiModel
                            ->where('id_lokasi',$id)
                            ->delete();
            if($hapus){
                return redirect('gudang');
            }
        }catch(Exception $e){
            $e->getMessage();
        }
    }
}
