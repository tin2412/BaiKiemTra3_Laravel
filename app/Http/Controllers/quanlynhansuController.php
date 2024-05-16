<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\quanlynhansu;
class quanlynhansuController extends Controller
{
    public function index()
{
    $quanlynhansu = quanlynhansu::all();
    return view('index', compact('quanlynhansu'));
}
public function show($id)
{
    $quanlynhansu = quanlynhansu::find($id);
    return view('team.show',['quanlynhansu' => $quanlynhansu,'team'=>$quanlynhansu->team]);
}
}
