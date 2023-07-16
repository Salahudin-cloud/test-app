<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Query;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class Mahasiswa extends Controller
{

    public function index()
    {
        return view('tambah');
    }

    public function tambahMahasiswa(Request $request): RedirectResponse
    {

        $validation = $request->validate([
            'nama' => 'required',
            'semester' => 'required',
            'prodi' => 'required',
        ]);

        if (!$validation) {
            return redirect('mahasiswa/tambah');
        }

        // do insert data 
        $mahasiswaModel = \App\Models\MahasiswaModel::create([
            'nama' => $request->input('nama'),
            'semester' => $request->input('semester'),
            'prodi' => $request->input('prodi'),
        ]);


        // redirect to home 
        return redirect('home');
    }

    public function allMahasiswa()
    {
        // query mahassiwa 
        $query = \App\Models\MahasiswaModel::all();

        return view('/home', ['mahasiswa' => $query]);
    }

    public function deleteMahasiswa($id)
    {
        $mahasiswaModel = \App\Models\MahasiswaModel::find($id)->delete();

        return redirect('home');
    }

    public function editViewMahasiswa($id)
    {
        $query = \App\Models\MahasiswaModel::where('id', $id)->first();
        return view('edit', ['mahasiswa' => $query]);
    }

    public function editMahasiswa(Request $request, $id): RedirectResponse
    {
        $query = \App\Models\MahasiswaModel::where('id', $id)->update([
            'nama' => $request->input('nama'),
            'semester' => $request->input('semester'),
            'prodi' => $request->input('prodi'),
        ]);

        // redirect to home 
        return redirect('home');
    }
}
