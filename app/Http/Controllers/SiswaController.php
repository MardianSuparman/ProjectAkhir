<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Jurusan;
use Illuminate\Http\Request;
use Validator;
use Storage;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // menampilkan data
        $siswa=Siswa::latest()->paginate(5);
        return view('Siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas=Kelas::all();
        $jurusan=Jurusan::all();
        return view('Siswa.create', compact('kelas', 'jurusan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate($request,[
            'nama'=>'required',
            'jenis_kelamin'=>['required','boolean'],
            'agama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            'foto'=>'required|image|mimes:jpeg,jpg,png|max:2048',
        ]);

        $siswa = new siswa();
        $siswa -> nama = $request -> nama;
        $siswa -> jenis_kelamin = $request -> jenis_kelamin;
        $siswa -> agama = $request -> agama;
        $siswa -> tempat_lahir = $request -> tempat_lahir;
        $siswa -> tanggal_lahir = $request -> tanggal_lahir;
        $siswa -> kelas = $request -> kelas;
        $siswa -> jurusan = $request -> jurusan;

        // upload foto
        $image = $request -> file ('foto');
        $image->storeAs('public/siswas', $image->hashName());
        $siswa->foto=$image->hashName();
        $siswa->save();
        return redirect()->route('siswa.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa=Siswa::findOrFail($id);
        return view('Siswa.show', compact('siswa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kelas=Kelas::all();
        $jurusan=Jurusan::all();
        $siswa=Siswa::findOrFail($id);
        return view('Siswa.edit', compact('siswa','kelas','jurusan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->Validate($request,[
            'nama'=>'required',
            'jenis_kelamin'=>['required','boolean'],
            'agama'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'kelas'=>'required',
            'jurusan'=>'required',
            'foto'=>'required',
        ]);

        $siswa=Siswa::findOrFail($id);
        $siswa -> nip = $request -> nip;
        $siswa -> nama = $request -> nama;
        $siswa -> jenis_kelamin = $request -> jenis_kelamin;
        $siswa -> agama = $request -> agama;
        $siswa -> tempat_lahir = $request -> tempat_lahir;
        $siswa -> tanggal_lahir = $request -> tanggal_lahir;
        $siswa -> kelas = $request -> kelas;
        $siswa -> jurusan = $request -> jurusan;

        // upload foto
        $image = $request -> file ('foto');
        $image->storeAs('public/siswas', $image->hashName());

        // delete produk
        Storage::delete('public/siswas', $siswa->foto);

        $siswa->foto=$image->hashName();
        $siswa->save();
        return redirect()->route('siswa.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa=Siswa::findOrFail($id);
        Storage::delete('public/siswas'. $siswa->foto);
        $siswa->delete();
        return redirect()->route('siswa.index');
    }
}
