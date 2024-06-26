@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('Siswa')}}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('siswa.index') }}" class="btn btn-sm btn-outline-primary">Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <img src="{{ asset('storage/siswas/' . $siswa->foto) }}" class="w-100 rounded">
                    <hr>
                    <h4>{{ $siswa->nama }}</h4>
                    <p class="tmt-3">
                        {{ $siswa->tempat_lahir }} , {{ $siswa->tanggal_lahir }}
                    </p>
                    <p class="tmt-3">
                        {{ $siswa->agama }}
                    </p>
                    <p class="tmt-3">
                        @if ( $siswa->jenis_kelamin === 0 )
                        Laki-laki
                        @else
                        Perempuan
                        @endif
                    </p>
                    <p class="tmt-3">
                        {{ $siswa->Kelas->nama_kelas }} jurusan {{ $siswa->jurusan->nama_jurusan }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
