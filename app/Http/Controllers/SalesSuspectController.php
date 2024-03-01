<?php

namespace App\Http\Controllers;

use App\Models\SalesSuspect;
use App\Models\User;
use Illuminate\Http\Request;

class SalesSuspectController extends Controller
{
    public function salesSus()
    {
        $totalData = SalesSuspect::count();
        $totalNama = SalesSuspect::whereNotNull('nama_kontak');
        $totalNoHP = SalesSuspect::whereNotNull("nohp1")->count();
        $suspect = SalesSuspect::all();
        return view('sales.sales_suspect.index',compact('suspect','totalData','totalNama','totalNoHP'));
    }
    public function update($id, Request $request)
    {
        $suspect = SalesSuspect::find($id);
        $suspect->update($request->except(['_token','submit']));

        return redirect('/sales_suspect')->with('success', 'Data Berhasil di Update');
    }
    public function edit($id)
    {
        $suspect = SalesSuspect::find($id);
        return view('sales.sales_suspect.edit',compact('suspect'));
    }
    public function myprofil()
    {
        $user = User::all();
        return view('sales.profile.myprofile',compact('user'));
    }  
}
