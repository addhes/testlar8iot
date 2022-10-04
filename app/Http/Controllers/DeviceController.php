<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class DeviceController extends Controller
{
    public function index()
    {
        $device = Device::all();
        // ddd($device);
        return view('admin.device.index', compact('device'));
    }

    public function create()
    {
        return view('admin.device.form');
    }

    public function store(Request $request)
    {
        // ddd($request->all());

        Device::create([
            'code' => $request->code,
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->route('dev-index')->with('success', 'update berhasil');
    }

    public function show($id)
    {
        $device = Device::find($id);
        return view('admin.device.update');
    }

    public function edit($id)
    {
        $device = Device::find($id);
        return view('admin.device.update', compact('device'));
    }

    public function update(Request $request, $id)
    {
        $device = Device::find($id)->update($request->all());

        return redirect()->route('dev-index')->with('success', 'update berhasil');
    }

    public function destroy($id)
    {
        Device::where('id', '=', $id)->delete();
        return redirect()->route('dev-index')->with('success', 'Hapus berhasil');
    }
}
