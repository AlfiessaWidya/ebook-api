<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        $biodata = [
            'nama' => 'Alfiessa Widya Wirawan',
            'kelas' => 'XII RPL 1',
            'Absen' => '09',
            'Kelamin' => 'Laki-laki',
            'NIS' => '3103118010',
            'phone' => '098648802782'
        ];

        return response()->json($biodata,200);
    }
}
