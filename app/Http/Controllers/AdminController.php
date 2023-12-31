<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::all(); //ambil data
        // dd($admin);
        return view('admin.index', compact('admin')); 
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
        Admin::create([
            'nama_menu' => $data['nama'],
            'deskripsi_menu' => $data['deskripsi'],
            'tipe_menu' => $data['tipe'],
        ]);

        return redirect(route('admin.index'));
    }

    public function edit($id)
    {
        $admin = Admin::where('id', $admin->id)->get();
        return view('Admin.index', [
            'title' => 'Edit Menu',
        ]);
    }

    public function update(Request $request, Admin $admin)
    {
        $data = $request->all();
        Admin::where('id', $admin->id)->update([
            'nama_menu'=>$data['nama'] ,
            'deskripsi_menu'=>$data['deskripsi'],
            'tipe_menu'=>$data['tipe']
        ]);

        return redirect('admin.index')->with('success', 'Berhasil mengubah menu dengan nama ' . $request['nama_menu']);
    }

    public function delete($id)
    {
        $admin = Admin::findOrFail($id);
        $admin -> delete();
        return redirect('Admin')->with('success', 'Berhasil menghapus menu dengan nama ' . $admin->nama_menu);
    }
}
