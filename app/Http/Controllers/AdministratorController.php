<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Models\AdminModel;
use App\Models\Brand;
use App\Models\ItdevModel;
use App\Models\RekapJasa;
use App\Models\SalesSuspect;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdministratorController extends Controller
{
    public function index()
    {
        $admin = AdminModel::all();
        $totalDataSales = SalesSuspect::count();
        $totalNama = SalesSuspect::whereNotNull('nama_kontak');
        $totalNoHP = SalesSuspect::whereNotNull("nohp1")->count();
        $suspect = SalesSuspect::all();
        $totalDataRekap = RekapJasa::all();
        $totalOnPBrand = Brand::where("status",'2')->count();
        $totalDoneBrand = Brand::where("status",'6')->count();
        $totalData = Brand::all();
        $totalProject = ItdevModel::all();
        $totalOnP = ItdevModel::where("status",'2')->count();
        $totalDone = ItdevModel::where("status",'6')->count();
        $itdev = ItdevModel::all();
        return view('administrator.index',compact('itdev','totalProject','totalDone','totalOnP','totalData','totalDoneBrand','totalOnPBrand','totalDataRekap','suspect','totalNoHP','totalNama','totalDataSales','admin'));
    }
    public function itdev()
    {
        $totalProject = ItdevModel::all();
        $totalPending = ItdevModel::where("status",'1')->count();
        $totalOnP = ItdevModel::where("status",'2')->count();
        $totalDone = ItdevModel::where("status",'6')->count();
        $itdev = ItdevModel::all();
        return view('administrator.itdev',compact('itdev','totalProject','totalDone','totalOnP','totalPending'));
    }
    public function brand()
    {
        $totalOnP = Brand::where("status",'2')->count();
        $totalDone = Brand::where("status",'6')->count();
        $totalData = Brand::all();
        $brand = Brand::all();
        return view('administrator.brand',compact('brand','totalData','totalOnP','totalDone'));
    }
    public function rekapjasa()
    {
        $totalData = RekapJasa::all();
        $totalOnP = RekapJasa::where("aprove_status",'0')->count();
        $totalDone = RekapJasa::where("aprove_status",'1')->count();
        $rekap = RekapJasa::all();
        return view('administrator.rekapjasa',compact('rekap','totalData','totalOnP','totalDone'));
    }
    public function salesSus()
    {
        $totalData = SalesSuspect::count();
        $totalNama = SalesSuspect::whereNotNull('nama_kontak')->count();
        $totalNoHP = SalesSuspect::whereNotNull("nohp1")->count();
        $suspect = SalesSuspect::all();
        return view('administrator.sales',compact('suspect','totalData','totalNama','totalNoHP'));
    }
    public function admin()
    {
        $totalOnP = AdminModel::where("aprove_status",'0')->count();
        $totalDone = AdminModel::where("aprove_status",'1')->count();
        $totalData = AdminModel::all();
        $admin = AdminModel::all();
        return view('administrator.admin',compact('admin','totalData','totalOnP','totalDone'));
    }
    public function listUser()
    {
        $totalIT = User::where("level",'itdev')->count();
        $totalSales = User::where("level",'marketing')->count();
        $totalBrand = User::where("level",'brand')->count();
        $totalRekap = User::where("level",'rekapjasa')->count();
        $list = User::all();
        return view('administrator.listuser',compact('totalIT','totalSales','totalBrand','totalRekap','list'));
    }
    public function delete($id)
    {
        $admin = User::find($id);
        $admin->delete();

        return redirect()->back()->with('success', 'Data Berhasil di Hapus!!');
    }
    public function myprofil()
    {
        return view('administrator.profile.myprofile');
    }    
}
