<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::paginate(5);
        return view('admin.siswa.index', compact('student'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.siswa.create', [
            'students' => Student::all()
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
            'NamaSiswa' => 'required|max:255',
            'jurusan' => 'required',
            'email' => 'required',
            'image' => 'image|file|max:6144',
            'alamat' => 'required'
        ]);


        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image');
        }

        // PANGGIL MODEL
        Student::create($validatedData);

        // REDIRECT
        return redirect('/admin/siswa')->with('success', 'Siswa baru berhasil ditambahkan!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student, $id)
    {
        $student = Student::find($id);
        return view('admin.siswa.show', [
            'students' => $student
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student, $id)
    {
        $student = Student::find($id);
        return view('admin.siswa.edit', [
            'students' => $student,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student, $id)
    {
        $student = Student::find($id);
        $rules = [
            'NamaSiswa' => 'required|max:255',
            'jurusan' => 'required',
            'email' => 'required',
            'image' => 'image|file|max:6144',
            'alamat' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('image');
        }

        Student::where('id', $student->id)->update($validatedData);

        // REDIRECT
        return redirect('/admin/siswa')->with('success', 'Data Siswa berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student, $id)
    {
        $student = Student::find($id);
        if ($student->image) {
            Storage::delete($student->image);
        }

        Student::destroy($student->id);
        return redirect('/admin/siswa')->with('success', 'Data Siswa berhasil dihapus!');
    }
}
