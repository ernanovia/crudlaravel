<?php
namespace App\Http\Controllers;
    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
    
class PegawaiController extends Controller
{
    public function index(){}
   public function pegawai(){
    //    mengambil data dari tabel pegawai
       $pegawai = DB::table('pegawai')->get();

    //    mengembalikan data pegawai ke view index
    return view('index', ['pegawai' => $pegawai]);
   }

   public function tambah(){
    //    memanggil view tambah
    return view('tambah');
   }

    //    method untuk insert data ke table pegawi
    public function store(Request $request){
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    // public function edit($id){
    //     $pegawai = DB::table('pegawai')->where('pegawai_id', $id)->get();
    //     return view('edit',['pegawai' => $pegawai]);
    // }

    // method untuk edit data pegawai
    public function edit($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('edit',['pegawai' => $pegawai]);

    }

    public function update(Request $request){
        DB::table('pegawai')->where('pegawai_id',$request->id)->update([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }
    // method untuk hapus data pegawai
    public function hapus($id){
        DB::table('pegawai')->where('pegawai_id',$id)->delete();
        return redirect('/pegawai');
    }
  }
?>