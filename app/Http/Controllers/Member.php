<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Member as ModelsMember;
use Illuminate\Support\Facades\Storage;

class Member extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('search');

        $members = ModelsMember::when($query, function ($q) use ($query) {
            $q->where('nama', 'like', '%' . $query . '%');
        })->paginate(10);

        if ($request->ajax()) {
            $html = view('partials.member-list', compact('members'))->render();
            return response()->json([
                'html' => $html,
                'pagination' => $members->links()->render(),
            ]);
        }


        return view('anggota', compact('members'));
    }




    public function dokumentasi() {
        $path = public_path('img/fotosma');
        $files = collect(File::files($path))->map(function ($file) {
            return asset('img/fotosma/' . $file->getFilename());
        });

        return view('dokumentasi', ['images' => $files]);
    }



}
