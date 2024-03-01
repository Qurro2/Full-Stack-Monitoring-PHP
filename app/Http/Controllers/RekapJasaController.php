<?php

namespace App\Http\Controllers;

use App\Models\Regency;
use App\Models\RekapJasa;
use App\Models\User;
use Illuminate\Http\Request;

class RekapJasaController extends Controller
{
    public function index()
    {
        $totalOnP = RekapJasa::where("aprove_status",'0')->count();
        $totalDone = RekapJasa::where("aprove_status",'1')->count();
        $totalData = RekapJasa::all();
        $rekap = RekapJasa::all();
        return view('rekapjasa.index',compact('rekap','totalData','totalOnP','totalDone'));
    }
    public function produk()
    {
        $kabupaten2 = Regency::all();
        $totalData = RekapJasa::all();
        $rekap = RekapJasa::all();
        return view('rekapjasa.add',compact('rekap','totalData','kabupaten2'));
    }
    public function store(Request $request)
    {
        RekapJasa::create($request->except(['_token','submit']));
        return redirect()->back()->with('success', 'Data Berhasil di Tambahkan');
    }

    public function delete($id)
    {
        $itdel = RekapJasa::find($id);
        $itdel->delete();

        return redirect()->back()->with('success', 'Data Berhasil di Hapus!!');
    }
    public function update($id, Request $request)
    {
        $itedt = RekapJasa::find($id);
        $itedt->update($request->except(['_token','submit']));

        return redirect('/rekapjasa/add')->with('success', 'Data Berhasil di Update');
    }
    public function edit($id)
    {
        $kabupaten2 = Regency::all();
        $rekap = RekapJasa::find($id);
        return view('rekapjasa.edit',compact('rekap','kabupaten2'));
    }
    public function myprofil()
    {
        $user = User::all();
        return view('rekapjasa.profile.myprofile',compact('user'));
    }
    public function aprove($id, Request $request)
    {
        $tutor = RekapJasa::findOrfail($id);
        $tutor->update($request->only(['aprove_status']));
        $tutor->save();

        return redirect()->back()->with('success', 'Data Berhasil di Tambahkan');
    }   
}
