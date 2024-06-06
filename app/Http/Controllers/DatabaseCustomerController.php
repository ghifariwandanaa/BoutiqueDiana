<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatabaseCustomer;
use Yajra\DataTables\DataTables;

class DatabaseCustomerController extends Controller
{
    public function index()
    {
        return view('page.admin.customer.index');
    }

    public function dataTable(Request $request)
    {
        if ($request->ajax()) {
            $data = DatabaseCustomer::select(['kode_customer', 'nama_customer', 'alamat', 'no_telp']);
            return Datatables::of($data)
                ->addColumn('options', function ($customer) {
                    $editUrl = route('customer.update', $customer->kode_customer); // Assuming 'update' is the route name for editing a customer
                    $deleteUrl = route('customer.destroy', $customer->kode_customer); // Assuming 'destroy' is the route name for deleting a customer
                    return "<a href='$editUrl'><i class='mdi mdi-pencil'>Edit</i></a> <a style='border: none; background-color:transparent;' class='hapusData' data-kode_customer='$customer->kode_customer' data-url='$deleteUrl'><i class='mdi mdi-delete text-danger'>Hapus</i></a>";
                })
                ->rawColumns(['options'])
                ->make(true);
        }
    }

    public function tambahCustomer(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'kode_customer' => 'required|unique:database_customer,kode_customer',
                'nama_customer' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
            ], [
                'kode_customer.unique' => 'Kode Customer sudah digunakan, mohon gunakan kode yang lain.',
            ]);

            DatabaseCustomer::create([
                'kode_customer' => $request->kode_customer,
                'nama_customer' => $request->nama_customer,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);

            return redirect()->route('customer.index')->with('status', 'Data Customer telah ditambahkan');
        }

        return view('page.admin.customer.addCustomer');
    }

    public function updateCustomer($kode_customer, Request $request)
    {
        $customer = DatabaseCustomer::findOrFail($kode_customer);

        if ($request->isMethod('post')) {
            // Update data customer
            $customer->update([
                'kode_customer' => $request->kode_customer,
                'nama_customer' => $request->nama_customer,
                'alamat' => $request->alamat,
                'no_telp' => $request->no_telp,
            ]);

            return redirect()->route('customer.index')->with('status', 'Data Customer berhasil diperbarui.');
        }

        return view('page.admin.customer.updateCustomer', [
            'customer' => $customer
        ]);
    }

    public function hapusCustomer($kode_customer)
    {
        $customer = DatabaseCustomer::findOrFail($kode_customer);
        $customer->delete();

        return response()->json([
            'msg' => 'Data yang dipilih telah dihapus'
        ]);
    }
}
