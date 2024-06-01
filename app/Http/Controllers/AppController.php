<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\Admin;
use Auth;

class AppController extends Controller
{
    //
public function login(){
    if(Auth::check()){
        return redirect("tampil");
    }
    return view("login");
}
    public function home(){
        return view("home");
    }
    public function tampil(){
        return view("tampil");
    }
    public function tampiladmin(){
        $admins = Admin::all();
        return view('tampiladmin', compact('admins'));
    }
    public function tampilvehicle(){
        $vehicles = Vehicle::all();
        return view('tampilvehicle', compact('vehicles'));
    }

    public function vehicle()
    {
        $vehicles = Vehicle::all();
        return view('vehicle', compact('vehicles'));
    }

    public function admin()
    {
        $admins = Admin::all();
        return view('admin', compact('admins'));
    }

    public function createadmin()
    {
        return view('createadmin');
    }
    public function storeAdmin(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'password' => 'nullable|string|min:6', // Pastikan password dapat null atau minimal 6 karakter
    ]);
    
    // Lakukan validasi input di sini jika diperlukan

    $admin = new Admin();
    $admin->name = $request->input('name');
    $admin->email = $request->input('email');
    $admin->password = bcrypt($request->input('password'));
    $admin->save();

    // Redirect ke halaman yang sesuai setelah penyimpanan
    return redirect()->route('admin')->with('success', 'Admin berhasil ditambahkan.');
}


public function editAdmin($id)
{
    $admin = Admin::findOrFail($id);
    return view('editadmin', compact('admin'));
}

public function updateAdmin(Request $request, $id)
{
    $admin = Admin::findOrFail($id);
    $admin->name = $request->input('name');
    $admin->email = $request->input('email');
    if ($request->has('password')) {
        $admin->password = bcrypt($request->input('password'));
    }
    $admin->save();    

    return redirect()->route('admin')->with('success', 'Admin berhasil diperbarui.');
}

public function destroyAdmin($id)
{
    $admin = Admin::findOrFail($id);
    $admin->delete();

    return redirect()->route('admin')->with('success', 'Admin berhasil dihapus.');
}

public function create()
    {
        return view('createvehicle');
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'admin_id' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'brand' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'number' => 'required|string|max:50',
            'cost_per_hour' => 'required|string',
            'time_start' => 'required|string|max:25',
            'time_end' => 'required|string|max:25',
            'total_price' => 'required|string|max:25',
        ]);

        // Simpan data ke database
        Vehicle::create($request->all());

        // Redirect dengan pesan sukses
        return redirect()->route('vehicle')->with('success', 'Vehicle added successfully!');
    }


    public function edit(Vehicle $vehicle)
    {
        return view('updatevehicle', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        // Validasi input
        $request->validate([
            'admin_id' => 'required|string|max:100',
            'category' => 'required|string|max:100',
            'brand' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'number' => 'required|string|max:50',
            'cost_per_hour' => 'required|string',
            'time_start' => 'required|string|max:25',
            'time_end' => 'required|string|max:25',
            'total_price' => 'required|string|max:25',
        ]);

        // Update data kendaraan
        $vehicle->update($request->all());

        // Redirect kembali ke halaman vehicle
        return redirect()->route('vehicle')->with('success', 'Vehicle updated successfully!');
    }

    public function destroy(Vehicle $vehicle)
{
    $vehicle->delete();

    return redirect()->route('vehicle')->with('success', 'Vehicle deleted successfully!');
}

public function report(Request $request)
{
    // Ambil data kendaraan dari database
    $vehicles = Vehicle::all();

    // Tampilkan view laporan dan kirim data kendaraan ke view
    return view('report', compact('vehicles'));
}

}
