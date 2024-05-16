<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quanlynhansu;
use App\Models\nhansu;
class TeamController extends Controller
{
    public function show($id)
    {
        $nhansu = QuanLyNhansu::find($id)->nhansu;
        return view('team.show', compact('nhansu'));
    }
}
