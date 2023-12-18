@extends('layouts.admin')
@section('css')
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <a href="{{route('admin.master.daftar_makanan_minuman.create')}}" class="btn btn-success mb-2 btn-sm">Tambah Data Pelanggan</a>
                <table class="table table-bordered table-hover table-stripped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>No Telpon</th>
                            <th>Alamat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no_daftar = 1;?>
                        @foreach($daftarpelanggans as $daftarpelanggan)
                            <tr>
                                <td class="text-center">{{$no_daftarpelanggan}}</td>
                                <td>{{$daftarpelanggan->nama}}</td>
                                <td>{{$daftarpelanggan->no_telp}}</td>
                                <td>{{$daftarpelanggan->alamat}}</td>
                                <td>
                                    <a href="{{route('admin.master.pelanggan.edit',$daftarpelanggan->id_daftarpelanggan)}}">
                                        <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                    <form action="{{route('admin.master.daftar_makanan_minuman.destroy',$daftarpelanggan->id_daftarpelanggan)}}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-link">
                                            <i class="fas fa-fw fa-trash text-danger"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php $no_daftar++;?>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
