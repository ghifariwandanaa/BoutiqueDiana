<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseVendor;
use Yajra\DataTables\DataTables;

class DatabaseVendorController extends Controller
{
    public function index()
    {
        return view('page.admin.vendor.index');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabaseVendor::select(['kode_vendor', 'nama_vendor', 'alamat', 'no_telp']);
            return Datatables::of($data)
                ->addColumn('options', function ($vendor) {
                    $editUrl = route('vendor.update', $vendor->kode_vendor); // Assuming 'update' is the route name for editing a 'vendor'
                    $deleteUrl = route('vendor.destroy', $vendor->kode_vendor); // Assuming 'destroy' is the route name for deleting a 'vendor'
                    return "<a href='$editUrl'><i class='mdi mdi-pencil'>Edit</i></a> <a style='border: none; background-color:transparent;' class='hapusData' data-kode_vendor='$vendor->kode_vendor' data-url='$deleteUrl'><i class='mdi mdi-delete text-danger'>Hapus</i></a>";
                })
                ->rawColumns(['options'])
                ->make(true);
        }
    }

    public function tambahVendor(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kode_vendor' => 'required|unique:database_vendor,kode_vendor',
                'nama_vendor' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
            ], [
                'kode_vendor.unique' => 'Kode Vendor sudah digunakan, mohon gunakan kode yang lain.',
            ]);

            DatabaseVendor::create([
                'kode_vendor' => $request->kode_vendor,
                'nama_vendor' => $request->nama_vendor,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);

            return redirect()->route('vendor.index')->with('status', 'Data Vendor telah ditambahkan');
        }

        return view('page.admin.vendor.addVendor');
    }

    public function updateVendor($kode_vendor, Request $request)
    {
        $vendor = DatabaseVendor::findOrFail($kode_vendor);

        if ($request->isMethod('post')) {
            // Update data vendor
            $vendor->update([
                'kode_vendor' => $request->kode_vendor,
                'nama_vendor' => $request->nama_vendor,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);

            return redirect()->route('vendor.update', ['kode_vendor' => $vendor->kode_vendor])->with('status', 'Data telah tersimpan di database');
        }

        return view('page.admin.vendor.updateVendor', [
            'vendor' => $vendor
        ]);
    }

    public function hapusVendor($kode_vendor)
    {
        $vendor = DatabaseVendor::findOrFail($kode_vendor);
        $vendor->delete();

        return response()->json([
            'msg' => 'Data yang dipilih telah dihapus'
        ]);
    }
}
