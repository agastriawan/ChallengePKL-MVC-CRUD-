<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::paginate(5);
        return view('admin.karyawan.index', compact('employee'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.karyawan.create', [
            'employees' => Employee::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'NamaKaryawan' => 'required|max:255',
            'pekerjaan' => 'required',
            'email' => 'required',
            'image' => 'image|file|max:6144',
            'alamat' => 'required'
        ]);

        // Kalau Image-nya ga diisi / cek ada image baru ga
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image');
        }


        // PANGGIL MODEL
        Employee::create($validatedData);

        // REDIRECT
        return redirect('/admin/karyawan')->with('success', 'Karyawan baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee, $id)
    {
        $employee = Employee::find($id);
        return view('admin.karyawan.show', [
            'employees' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee, $id)
    {
        $employee = Employee::find($id);
        return view('admin.karyawan.edit', [
            'employees' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee, $id)
    {
        $employee = Employee::find($id);
        $rules = [
            'NamaKaryawan' => 'required|max:255',
            'pekerjaan' => 'required',
            'email' => 'required',
            'image' => 'image|file|max:6144',
            'alamat' => 'required'
        ];

        // VALIDASI
        $validatedData = $request->validate($rules);

        // cek ada image baru ga
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('image');
        }

        Employee::where('id', $employee->id)->update($validatedData);

        // REDIRECT
        return redirect('/admin/karyawan')->with('success', 'Data Karyawan berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee, $id)
    {
        $employee = Employee::find($id);
        if ($employee->image) {
            Storage::delete($employee->image);
        }

        Employee::destroy($employee->id);
        return redirect('/admin/karyawan')->with('success', 'Data Karyawan  berhasil dihapus!');
    }
}
