<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CekController extends Controller
{

    public function index(){
      $data = DB::table('cek')->get();
      return view('welcome' , ['data' => $data]);
    }

    public function tambah(Request $request){

      $data = DB::table('cek')->insert([
        'cek' => $request->cek,
        'created_at' => '2019-11-07 15:20:48.000',
        'updated_at' => '2019-11-07 15:20:48.000'
      ]);

      if ($data) {
        return redirect('/');
      }else {
        return response('terjadi kesalahan');
      }

    }

    public function hapus($id){

      DB::table('cek')->where('id',$id)->delete();
      return redirect('/');

    }

    public function edit($id){
      $data = DB::table('cek')->where('id',$id)->get();
      return view('edit' , ['data' => $data]);
    }

    public function store(Request $request){

      $data = DB::table('cek')->where('id',$request->id)->update([
        'cek' => $request->cek
      ]);

      if ($data) {
        return redirect('/');
      }else {
        return response('terjadi kesalahan');
      }

    }

}
