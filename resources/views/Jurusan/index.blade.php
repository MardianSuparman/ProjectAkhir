@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        {{ __('jurusan') }}
                    </div>
                    <div class="float-end">
                        <a href="{{ route('jurusan.create') }}" class="btn btn-sm btm-uotline-secondary">Tambah Data</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsiv">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>No</td>
                                    <td>Jurusan</td>
                                    <td>Aksi</td>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @forelse ( $jurusan as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->nama_jurusan }}</td>
                                    <td>
                                        <form action="{{ route('jurusan.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('jurusan.edit', $data->id) }}" class="btn btn-sm btn-success">Edit</a> |
                                            <button type="submit" onclick="return confirm('Are You Sure ?');"
                                                class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Data Data Belum Tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {!! $jurusan->withQueryString()->links('pagination::bootstrap-4') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
