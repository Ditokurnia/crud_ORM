<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MerchantController extends Controller
{
    public function index()
    {
        // Ambil semua data merchant
        $merchants = User::where('role', 'merchant')->get();

        // Tampilkan data merchant dalam view index
        return view('merchant.index', compact('merchants'));
    }

    public function create()
    {
        // Tampilkan form untuk menambahkan merchant baru
        return view('merchant.create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Simpan data merchant baru ke dalam database
        $merchant = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']),
            'role' => 'merchant',
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('merchant.index')->with('success', 'Merchant berhasil ditambahkan');
    }

    public function show($user_id)
    {
        // Ambil data merchant berdasarkan user_id
        $merchant = User::find($user_id);

        // Tampilkan data merchant dalam view show
        return view('merchant.show', compact('merchant'));
    }

    public function edit($user_id)
    {
        // Ambil data merchant berdasarkan user_id
        $merchant = User::find($user_id);

        // Tampilkan form untuk mengedit data merchant
        return view('merchant.edit', compact('merchant'));
    }

    public function update(Request $request, $user_id)
    {
        // Validasi data yang diterima dari form
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,email,'.$user_id],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Update data merchant berdasarkan user_id
        $merchant = User::find($user_id);
        $merchant->name = $validatedData['name'];
        $merchant->email = $validatedData['email'];
        $merchant->password = bcrypt($validatedData['password']);
        $merchant->save();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('merchant.index')->with('success', 'Merchant berhasil diperbarui');
    }

    public function destroy($user_id)
    {
        // Hapus data merchant berdasarkan user_id
        $merchant = User::find($user_id);
        $merchant->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('merchant.index')->with('success', 'Merchant berhasil dihapus');
    }
}
