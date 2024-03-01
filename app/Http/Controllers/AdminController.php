<?php

namespace App\Http\Controllers;

use App\Models\AdminModel;
use App\Models\Regency;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalOnP = AdminModel::where("aprove_status",'0')->count();
        $totalDone = AdminModel::where("aprove_status",'1')->count();
        $totalData = AdminModel::all();
        $admin = AdminModel::all();
        return view('admin.index',compact('admin','totalData','totalOnP','totalDone'));
    }
    public function produk()
    {
        $badan = '[
            {
                "id":"1",
                "nama":"BAPENDA (Badan Pendapatan Daerah)"
            },
            {
                "id":"2",
                "nama":"BKD (Badan Keuangan Daerah)"
            },
            {
                "id":"3",
                "nama":"BPKD (Badan Pengelolaan Keuangan Daerah"
            },
            {
                "id":"4",
                "nama":"BPKAD (Badan Pengelolaan Keuangan dan Aset Daerah)"
            },
            {
                "id":"5",
                "nama":"BPPD (Badan Pengelola Pajak Daerah)"
            },
            {
                "id":"6",
                "nama":"BPKPD (Badan Pengelolaan Keuangan dan Pendapatan Daerah)"
            },
            {
                "id":"7",
                "nama":"BPPRD (Badan Pengelola Pajak dan Retribusi Daerah)"
            },
            {
                "id":"8",
                "nama":"BKAD (Badan Keuangan dan Aset Daerah)"
            },
            {
                "id":"9",
                "nama":"BAKEUDA (Badan Keuangan Daerah)"
            },
            {
                "id":"10",
                "nama":"BPN (Badan Pertanahan Nasional)"
            },
            {
                "id":"11",
                "nama":"KOMINFO (Komunikasi dan Informatika)"
            },
            {
                "id":"12",
                "nama":"DISPERKIM (Dinas Perumahan dan Kawasan Permukiman)"
            },
            {
                "id":"13",
                "nama":"OJK (Otoritas Jasa Keuangan)"
            },
            {
                "id":"14",
                "nama":"DISKOMINFO (Dinas Komunikasi dan Informatika)"
            }
        ]';
        $badanlist = json_decode($badan);
        $totalData = AdminModel::all();
        $kabupaten2 = Regency::all();
        $admin = AdminModel::all();
        return view('admin.add',compact('admin','totalData','badanlist','kabupaten2'));
    }
    public function store(Request $request)
    {
        AdminModel::create($request->except(['_token','submit']));
        return redirect()->back()->with('success', 'Data Berhasil di Tambahkan');
    }

    public function delete($id)
    {
        $admin = AdminModel::find($id);
        $admin->delete();

        return redirect()->back()->with('success', 'Data Berhasil di Hapus!!');
    }
    public function update($id, Request $request)
    {
        $admin = AdminModel::find($id);
        $admin->update($request->except(['_token','submit']));

        return redirect('/admin/add')->with('success', 'Data Berhasil di Update');
    }
    public function edit($id)
    {
        $badan = '[
            {
                "id":"1",
                "nama":"BAPENDA (Badan Pendapatan Daerah)"
            },
            {
                "id":"2",
                "nama":"BKD (Badan Keuangan Daerah)"
            },
            {
                "id":"3",
                "nama":"BPKD (Badan Pengelolaan Keuangan Daerah"
            },
            {
                "id":"4",
                "nama":"BPKAD (Badan Pengelolaan Keuangan dan Aset Daerah)"
            },
            {
                "id":"5",
                "nama":"BPPD (Badan Pengelola Pajak Daerah)"
            },
            {
                "id":"6",
                "nama":"BPKPD (Badan Pengelolaan Keuangan dan Pendapatan Daerah)"
            },
            {
                "id":"7",
                "nama":"BPPRD (Badan Pengelola Pajak dan Retribusi Daerah)"
            },
            {
                "id":"8",
                "nama":"BKAD (Badan Keuangan dan Aset Daerah)"
            },
            {
                "id":"9",
                "nama":"BAKEUDA (Badan Keuangan Daerah)"
            },
            {
                "id":"10",
                "nama":"BPN (Badan Pertanahan Nasional)"
            },
            {
                "id":"11",
                "nama":"KOMINFO (Komunikasi dan Informatika)"
            },
            {
                "id":"12",
                "nama":"DISPERKIM (Dinas Perumahan dan Kawasan Permukiman)"
            },
            {
                "id":"13",
                "nama":"OJK (Otoritas Jasa Keuangan)"
            },
            {
                "id":"14",
                "nama":"DISKOMINFO (Dinas Komunikasi dan Informatika)"
            }
        ]';
        $kabupaten2 = Regency::all();
        $badanlist = json_decode($badan);
        $admin = AdminModel::find($id);
        return view('admin.edit',compact('admin','kabupaten2','badanlist'));
    }
    public function myprofil()
    {
        return view('admin.profile.myprofile');
    }    
    public function aprove2($id, Request $request)
    {
        $tutor = AdminModel::findOrfail($id);
        $tutor->update($request->only(['aprove_status']));
        $tutor->save();
        return redirect()->back()->with('success', 'Data Berhasil di Tambahkan');
    }   
}
