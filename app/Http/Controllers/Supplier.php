<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Supplier extends Controller
{
    //
    protected $id_supplier;
    protected $nama_supplier;
    protected $alamat_supplier;
    protected $telp_supplier;

    public function index()
    {
        //Menampilkan list supplier
        echo "hello world";
    }
    public function form()
    {
        return view('supplier/formtambah');
    }
    public function process(Request $request)
    {
        echo $request->input('nama');
    }
    public function tambah()
    {
        // Prosedur 
    }
    public function edit($id = null)
    {
    }
    public function detil(Request $request, $id = null)
    {
        $request->input();
    }
    public function hapus()
    {
    }
}
