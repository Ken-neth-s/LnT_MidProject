<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            "name" => ["required", "string", "min:5", "max:20"],
            "age" => ["required", "integer", "min:20"],
            "address" => ["required", "string", "min:10", "max:40"],
            "phone" => ["required", "string", "min:9", "max:12", "regex:/^08[0-9]{7,10}$/"]
        ], [
            "name.required" => "Name is required.",
            "name.min" => "Name can't be less than 5 characters.",
            "name.max" => "Name can't be more than 20 characters.",
            "age.required" => "Age is required.",
            "age.min" => "Age can't be less than 20.",
            "address.required" => "Address is required.",
            "address.min" => "Address can't be less than 10 characters.",
            "address.max" => "Address can't be more than 40 characters.",
            "phone.required" => "Phone Number is required.",
            "phone.min" => "Phone Number can't be less than 9 characters.",
            "phone.max" => "Phone Number can't be more than 12 characters.",
        ]);

        Karyawan::create([
            "name" => $request->name,
            "age" => $request->age,
            "address" => $request->address,
            "phone" => $request->phone,
        ]);

        return redirect()->route('karyawan.index')->with('success', 'Data added');
    }

    public function index() {
        $karyawans = Karyawan::all();
        return view('index', compact('karyawans'));
    }

    public function edit($id) {
        $karyawan = Karyawan::findOrFail($id);
        return view('edit', compact('karyawan'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            "name" => ["required", "string", "min:5", "max:20"],
            "age" => ["required", "integer", "min:20"],
            "address" => ["required", "string", "min:10", "max:40"],
            "phone" => ["required", "string", "min:9", "max:12"]
        ]);

        $karyawan = Karyawan::findOrFail($id);
        $karyawan->update($request->all());

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id) {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        return redirect()->route('karyawan.index')->with('success', 'Data berhasil dihapus');
    }

}
