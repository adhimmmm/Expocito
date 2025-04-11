<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    public function admin(Request $request)
    {

        $search = $request->input('search');

        $anggota = Member::when($search, function ($query, $search) {
            $query->where('nama', 'like', '%' . $search . '%')
                ->orWhere('kampus', 'like', '%' . $search . '%')
                ->orWhere('moto', 'like', '%' . $search . '%');
        })->orderBy('nama')->paginate(5);


        return view('admin', compact('anggota'));
    }


    public function store(Request $request)
    {


        //validasi data yang di input
        $validateData = $request->validate([
            'nama' => ['required', 'string', 'max:225'],
            'kampus' => ['required', 'string', 'max:225'],
            'moto' => ['required', 'string'],
            'foto' => ['nullable', 'image', 'mimes:jpeg,png,jpg', 'max:5120']
        ]);


        //simpan foto jika ada 
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('upload', 'public');
            $validateData['foto'] = $fotoPath;
        } else {
            $validateData['foto'] = 'noimage.png';
        }

        //simpan ke database
        $product = Member::create($validateData);

        //cek data berhasil ditambah atau tidak

        if ($product) {
            //return ketika data berhasil di tambah
            return redirect()->route('admin')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            //return ketika data gagal di tambah
            return redirect()->back()->with('error', 'Data gagal Ditambahkan');
        }
    }


    public function update(Request $request, Member $data)
    {
        //validasi data
        $validateData = $request->validate([
            'nama' => ['required', 'string', 'max:225'],
            'kampus' => ['required', 'string', 'max:225'],
            'moto' => ['required', 'string'],
            'foto' => ['nullable', 'image', 'max:5120']
        ]);

        //cek apakah user memperbarui foto
        if ($request->hasFile('foto')) {

            //hapus foto lama jika iya
            if ($data->foto && Storage::disk('public')->exists($data->foto)) {
                Storage::disk('public')->delete($data->foto);
            }

            //Baru menyimpan foto baru
            $path = $request->file('foto')->store('upload', 'public');
            $validateData['foto'] = $path;
        }

        //Uptade ke database
        $data->update($validateData);

        //kembali ke halaman admin 
        if ($validateData) {
            //sukses
            return redirect()->route('admin')->with('success', 'Data Berhasil Di Update');
        } else {
            return back()->with('error', 'Data Gagal Di Uptade');
        }
    }


    public function delete(Member $data)
    {

        //cek foto yang di delete 
        if ($data->foto && $data->foto !== 'noimage.png') {
            $fotoPath = public_path('storage/' . $data->foto);
            if (file_exists($fotoPath)) {
                unlink($fotoPath);
            }
        }

        $data->delete();

        return redirect()->route('admin')->with('success', 'Data Berhasil Di hapus');
    }
}
