<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $totalOnP = Brand::where("status",'2')->count();
        $totalDone = Brand::where("status",'6')->count();
        $totalData = Brand::all();
        $brand = Brand::all();
        return view('brand.index',compact('brand','totalData','totalOnP','totalDone'));
    }
    public function produk()
    {
        $totalData = Brand::all();
        $brand = Brand::all();
        return view('brand.add',compact('brand','totalData'));
    }
    public function store(Request $request)
    {
        Brand::create($request->except(['_token','submit']));
        return redirect()->back()->with('success', 'Data Berhasil di Tambahkan');
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->back()->with('success', 'Data Berhasil di Hapus!!');
    }
    public function update($id, Request $request)
    {
        $brand = Brand::find($id);
        $brand->update($request->except(['_token','submit']));

        return redirect('/brand/add')->with('success', 'Data Berhasil di Update');
    }
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('brand.edit',compact('brand'));
    }
    public function myprofil()
    {
        return view('brand.profile.myprofile');
    } 
}
