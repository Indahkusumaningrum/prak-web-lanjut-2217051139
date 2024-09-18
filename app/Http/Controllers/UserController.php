<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile($nama = "", $kelas = "", $npm = "") {
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'npm' => $npm,
        ];
        return view ('profile', $data);
    }

    public function create() {
        // $data = [
        //     'nama' => $nama,
        //     'kelas' => $kelas,
        //     'npm' => $npm,
        // ];
        return view ('create_user');
    }

    public function store(Request $request) {
        // $data = $request->all();
        // dd($data);

        $data = [
            'nama' => $request->input('nama'),
            'kelas' => $request->input('kelas'),
            'npm' => $request->input('npm'),
        ];

        return view('profile',$data);
    }
}
