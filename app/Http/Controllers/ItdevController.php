<?php

namespace App\Http\Controllers;

use App\Models\ItdevModel;
use App\Models\Province;
use App\Models\Regency;
use Illuminate\Http\Request;

class ItdevController extends Controller
{
    public function produk()
    {
        $devic = '[
            {
                "id":"1",
                "nama":"AAD"
            },
            {
                "id":"2",
                "nama":"AIMAN"
            },
            {
                "id":"3",
                "nama":"BIMA"
            },
            {
                "id":"4",
                "nama":"DIKI"
            },
            {
                "id":"5",
                "nama":"EGGI"
            },
            {
                "id":"6",
                "nama":"FAISHOL"
            },
            {
                "id":"7",
                "nama":"MAFTUH"
            },
            {
                "id":"8",
                "nama":"MEGA"
            },
            {
                "id":"9",
                "nama":"SINGGIH"
            },
            {
                "id":"10",
                "nama":"YOGIK"
            },
            {
                "id":"11",
                "nama":"FANANI"
            },
            {
                "id":"12",
                "nama":"YOEL"
            }
        ]';
        $produk = '
        [
            {
                "id":"1",
                "nama_produk":"Pelatihan"
            },
            {
                "id":"2",
                "nama_produk":"Dashboard"
            },
            {
                "id":"3",
                "nama_produk":"Data Warehouse"
            },
            {
                "id":"4",
                "nama_produk":"E-SPTPD Mobile"
            },
            {
                "id":"5",
                "nama_produk":"E-SPTPD Web"
            },
            {
                "id":"6",
                "nama_produk":"GIS (One Map GIS)"
            },
            {
                "id":"7",
                "nama_produk":"GIS BDP"
            },
            {
                "id":"8",
                "nama_produk":"GIS PAD"
            },
            {
                "id":"9",
                "nama_produk":"GIS PBB"
            },
            {
                "id":"10",
                "nama_produk":"Host to Host"
            },
            {
                "id":"11",
                "nama_produk":"H2H (BPN)"
            },
            {
                "id":"12",
                "nama_produk":"H2H (Dukcapil)"
            },
            {
                "id":"13",
                "nama_produk":"H2H (Kominfo)"
            },
            {
                "id":"14",
                "nama_produk":"H2H (Perizinan)"
            },
            {
                "id":"15",
                "nama_produk":"ig-Nata"
            },
            {
                "id":"16",
                "nama_produk":"ig-BPHTB"
            },
            {
                "id":"17",
                "nama_produk":"ig-PAD"
            },
            {
                "id":"18",
                "nama_produk":"ig-PBB"
            },
            {
                "id":"19",
                "nama_produk":"ig-Pendataan"
            },
            {
                "id":"20",
                "nama_produk":"iTax 9 Pajak"
            },
            {
                "id":"21",
                "nama_produk":"iTax Retribusi"
            },
            {
                "id":"22",
                "nama_produk":"iTax BPHTB"
            },
            {
                "id":"23",
                "nama_produk":"iTax PBB"
            },
            {
                "id":"24",
                "nama_produk":"iTax Mobile (Fiskus)"
            },
            {
                "id":"25",
                "nama_produk":"iTax Mobile (WP)"
            },
            {
                "id":"26",
                "nama_produk":"iTax Perizinan"
            },
            {
                "id":"27",
                "nama_produk":"KlikSPPT"
            },
            {
                "id":"28",
                "nama_produk":"Online Payment"
            },
            {
                "id":"29",
                "nama_produk":"PAD Pemetaan"
            },
            {
                "id":"30",
                "nama_produk":"PBB Migrasi Pendataan"
            },
            {
                "id":"31",
                "nama_produk":"PBB Online"
            },
            {
                "id":"32",
                "nama_produk":"PBB Pemetaan"
            },
            {
                "id":"33",
                "nama_produk":"PBB Pemutakhiran Data"
            },
            {
                "id":"34",
                "nama_produk":"PBB Penilaian individu"
            },
            {
                "id":"35",
                "nama_produk":"PBB Penilaian ZNT"
            },
            {
                "id":"36",
                "nama_produk":"PBB Simulasi Penetapan"
            },
            {
                "id":"37",
                "nama_produk":"PPAT Online"
            },
            {
                "id":"38",
                "nama_produk":"Sipjaki"
            },
            {
                "id":"39",
                "nama_produk":"Training"
            },
            {
                "id":"40",
                "nama_produk":"Verval"
            },
            {
                "id":"41",
                "nama_produk":"Website Official"
            },
            {
                "id":"42",
                "nama_produk":"SKRD"
            }
        ]';
        $response = json_decode($produk);
        $devpic = json_decode($devic);
        $provinces = Province::all();
        $kabupaten2 = Regency::all();
        $itdev = ItdevModel::all();
        return view('itdev.add',compact('response','provinces','kabupaten2','devpic','itdev'));
    }
    public function index()
    {
        $totalProject = ItdevModel::all();
        $totalOnP = ItdevModel::where("status",'2')->count();
        $totalDone = ItdevModel::where("status",'6')->count();
        $itdev = ItdevModel::all();
        return view('itdev.index',compact('itdev','totalProject','totalDone','totalOnP'));
    }
    public function store(Request $request)
    {
        ItdevModel::create($request->except(['_token','submit']));
        
        return redirect()->back()->with('success', 'Data Berhasil di Ditambahkan!!');
    }
    public function edit($id)
    {
        $devic = '[
            {
                "id":"1",
                "nama":"AAD"
            },
            {
                "id":"2",
                "nama":"AIMAN"
            },
            {
                "id":"3",
                "nama":"BIMA"
            },
            {
                "id":"4",
                "nama":"DIKI"
            },
            {
                "id":"5",
                "nama":"EGGI"
            },
            {
                "id":"6",
                "nama":"FAISHOL"
            },
            {
                "id":"7",
                "nama":"MAFTUH"
            },
            {
                "id":"8",
                "nama":"MEGA"
            },
            {
                "id":"9",
                "nama":"SINGGIH"
            },
            {
                "id":"10",
                "nama":"YOGIK"
            },
            {
                "id":"11",
                "nama":"FANANI"
            },
            {
                "id":"12",
                "nama":"YOEL"
            }
        ]';
        $produk = '
        [
            {
                "id":"1",
                "nama_produk":"Pelatihan"
            },
            {
                "id":"2",
                "nama_produk":"Dashboard"
            },
            {
                "id":"3",
                "nama_produk":"Data Warehouse"
            },
            {
                "id":"4",
                "nama_produk":"E-SPTPD Mobile"
            },
            {
                "id":"5",
                "nama_produk":"E-SPTPD Web"
            },
            {
                "id":"6",
                "nama_produk":"GIS (One Map GIS)"
            },
            {
                "id":"7",
                "nama_produk":"GIS BDP"
            },
            {
                "id":"8",
                "nama_produk":"GIS PAD"
            },
            {
                "id":"9",
                "nama_produk":"GIS PBB"
            },
            {
                "id":"10",
                "nama_produk":"Host to Host"
            },
            {
                "id":"11",
                "nama_produk":"H2H (BPN)"
            },
            {
                "id":"12",
                "nama_produk":"H2H (Dukcapil)"
            },
            {
                "id":"13",
                "nama_produk":"H2H (Kominfo)"
            },
            {
                "id":"14",
                "nama_produk":"H2H (Perizinan)"
            },
            {
                "id":"15",
                "nama_produk":"ig-Nata"
            },
            {
                "id":"16",
                "nama_produk":"ig-BPHTB"
            },
            {
                "id":"17",
                "nama_produk":"ig-PAD"
            },
            {
                "id":"18",
                "nama_produk":"ig-PBB"
            },
            {
                "id":"19",
                "nama_produk":"ig-Pendataan"
            },
            {
                "id":"20",
                "nama_produk":"iTax 9 Pajak"
            },
            {
                "id":"21",
                "nama_produk":"iTax Retribusi"
            },
            {
                "id":"22",
                "nama_produk":"iTax BPHTB"
            },
            {
                "id":"23",
                "nama_produk":"iTax PBB"
            },
            {
                "id":"24",
                "nama_produk":"iTax Mobile (Fiskus)"
            },
            {
                "id":"25",
                "nama_produk":"iTax Mobile (WP)"
            },
            {
                "id":"26",
                "nama_produk":"iTax Perizinan"
            },
            {
                "id":"27",
                "nama_produk":"KlikSPPT"
            },
            {
                "id":"28",
                "nama_produk":"Online Payment"
            },
            {
                "id":"29",
                "nama_produk":"PAD Pemetaan"
            },
            {
                "id":"30",
                "nama_produk":"PBB Migrasi Pendataan"
            },
            {
                "id":"31",
                "nama_produk":"PBB Online"
            },
            {
                "id":"32",
                "nama_produk":"PBB Pemetaan"
            },
            {
                "id":"33",
                "nama_produk":"PBB Pemutakhiran Data"
            },
            {
                "id":"34",
                "nama_produk":"PBB Penilaian individu"
            },
            {
                "id":"35",
                "nama_produk":"PBB Penilaian ZNT"
            },
            {
                "id":"36",
                "nama_produk":"PBB Simulasi Penetapan"
            },
            {
                "id":"37",
                "nama_produk":"PPAT Online"
            },
            {
                "id":"38",
                "nama_produk":"Sipjaki"
            },
            {
                "id":"39",
                "nama_produk":"Training"
            },
            {
                "id":"40",
                "nama_produk":"Verval"
            },
            {
                "id":"41",
                "nama_produk":"Website Official"
            },
            {
                "id":"42",
                "nama_produk":"SKRD"
            }
        ]';
        $response = json_decode($produk);
        $devpic = json_decode($devic);
        $provinces = Province::all();
        $kabupaten2 = Regency::all();
        $itedt = ItdevModel::find($id);
        return view('itdev.edit',compact('itedt','response','devpic','kabupaten2'));
    }
    public function delete($id)
    {
        $itdel = ItdevModel::find($id);
        $itdel->delete();

        return redirect()->back()->with('success', 'Data Berhasil di Hapus!!');
    }
    public function update($id, Request $request)
    {
        $itedt = ItdevModel::find($id);
        $itedt->update($request->except(['_token','submit']));

        return redirect('/itdev/add')->with('success', 'Data Berhasil di Update');
    }
    public function myprofil()
    {
        return view('itdev.profile.myprofile');
    }    
}
