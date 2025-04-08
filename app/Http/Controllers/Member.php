<?php

namespace App\Http\Controllers;

use App\Models\Member as ModelsMember;
use Illuminate\Http\Request;

class Member extends Controller
{

    public function index(Request $request)
    {
        $query = $request->input('search');

        $members = ModelsMember::when($query, function ($q) use ($query) {
            $q->where('nama', 'like', '%' . $query . '%');
        })->paginate(10);

        if ($request->ajax()) {
            return view('partials.member-list', compact('members'))->render();
        }

        return view('anggota', compact('members'));
    }





    public function dokumentasi() {
        return view('dokumentasi');
    }


    //function untuk mencari data
    public function search(Request $request) {

        $search = $request->input('search');

        $data = ModelsMember::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%");
        })->paginate(10)->withQueryString();


        return view('anggota', compact('data'));

    }

}
