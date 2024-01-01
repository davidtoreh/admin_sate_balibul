<?php

namespace App\Http\Controllers;

use App\Models\Cabang;
use Illuminate\Http\Request;

class CabangController extends Controller
{
    public function index()
    {
        $cabang = Cabang::all(); //ambil data
        // dd($admin);
        return view('cabang.index', compact('cabang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Cabang::create([
            'nama_menu' => $data['nama'],
            'deskripsi_menu' => $data['deskripsi'],
            'tipe_menu' => $data['tipe'],
        ]);

        return redirect(route('admin.index'));
    }

    public function edit($id)
    {
        // $admin = Admin::where('id', $admin->id)->get();
        // return view('Admin.index', [
        //     'title' => 'Edit Menu',
        // ]);

        $admin = Cabang::findOrFail($id);
        return view('Admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Cabang::findOrFail($id);
        $admin->update($request->all());

        return redirect('Admin')->with('success', 'Berhasil mengubah menu dengan nama ' . $request['nama_menu']);
    }

    public function delete($id)
    {
        $admin = Cabang::findOrFail($id);
        $admin -> delete();
        return redirect('Admin')->with('success', 'Berhasil menghapus menu dengan nama ' . $admin->nama_menu);
    }
}
