<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index(){
        $karyawan = Karyawan::all();
        return view('karyawan.index', compact(['karyawan']));
    }

    public function create(){
        return view('karyawan.create');
    }

    public function store(Request $request){

        $messages = [
            'nama.required' => 'Nama karyawan harus diisi.',
            'nama.between' => 'Nama karyawan harus terdiri dari 5 hingga 20 karakter.',
            'umur.required' => 'Umur karyawan harus diisi.',
            'umur.min' => 'Umur karyawan harus lebih besar dari 20 tahun.',
            'alamat.required' => 'Alamat karyawan harus diisi.',
            'alamat.between' => 'Alamat karyawan harus terdiri dari 10 hingga 40 karakter.'
        ];

        $request -> validate([
            'nama' => 'required|string|between:5,20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|between:10,40'
        ], $messages);
        Karyawan::create($request->except(['_token', 'submit']));
        return redirect('/');
    }

    public function edit($id){
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit', compact(['karyawan']));
    }

    public function update($id, Request $request){
        $karyawan = Karyawan::find($id);

        $messages = [
            'nama.required' => 'Nama karyawan harus diisi.',
            'nama.between' => 'Nama karyawan harus terdiri dari 5 hingga 20 karakter.',
            'umur.required' => 'Umur karyawan harus diisi.',
            'umur.min' => 'Umur karyawan harus lebih besar dari 20 tahun.',
            'alamat.required' => 'Alamat karyawan harus diisi.',
            'alamat.between' => 'Alamat karyawan harus terdiri dari 10 hingga 40 karakter.'
        ];

        $request -> validate([
            'nama' => 'required|string|between:5,20',
            'umur' => 'required|integer|min:21',
            'alamat' => 'required|string|between:10,40'
        ], $messages);
        
        $karyawan -> update($request->except(['_token', 'submit']));
        return redirect('/');
    }

    public function destroy($id, Request $request){
        $karyawan = Karyawan::find($id);
        $karyawan -> delete();
        return redirect('/');
    }
}
