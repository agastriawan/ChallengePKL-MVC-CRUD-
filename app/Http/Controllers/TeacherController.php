<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = Teacher::paginate(5);
        return view('admin.guru.index', compact('teacher'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.guru.create', [
            'teachers' => Teacher::all()
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
            'NamaGuru' => 'required|max:255',
            'email' => 'required',
            'mapel' => 'required',
            'image' => 'image|file|max:6144',
            'alamat' => 'required'
        ]);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('image');
        }

        Teacher::create($validatedData);

        // REDIRECT
        return redirect('/admin/guru')->with('success', 'Guru baru berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher, $id)
    {
        $teacher = Teacher::find($id);
        return view('admin.guru.show', [
            'teachers' => $teacher
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher, $id)
    {
        $teacher = Teacher::find($id);
        return view('admin.guru.edit', [
            'teachers' => $teacher,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Teacher $teacher, $id)
    {

        $teacher = Teacher::find($id);
        $rules = [
            'NamaGuru' => 'required|max:255',
            'email' => 'required',
            'mapel' => 'required',
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

        Teacher::where('id', $teacher->id)->update($validatedData);

        // REDIRECT
        return redirect('/admin/guru')->with('success', 'Data Guru berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher, $id)
    {
        $teacher = Teacher::find($id);
        if ($teacher->image) {
            Storage::delete($teacher->image);
        }

        Teacher::destroy($teacher->id);
        return redirect('/admin/guru')->with('success', 'Data Guru berhasil dihapus!');
    }
}
