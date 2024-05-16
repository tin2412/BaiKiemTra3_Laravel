<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\nhansu;
class nhansuController extends Controller
{
    public function index()
    {
        $nhansu = nhansu::all();
        return view('nhansu.index', compact('nhansu'));
    }
    public function show($id)
    {
        $nhansu = nhansu::find($id);
        return view('team.show',['nhansu' => $nhansu,'gioithieu'=>$nhansu->gioithieu]);
    }
}
