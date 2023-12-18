@extends('layouts.admin')
@section('css')
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.master.daftar_makanan_minuman.update',$pelanggan->id_daftarpelanggan)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control {{$errors->has('nama')?'is-invalid':''}}" placeholder="Isikan Nama" value="{{old('nama',$pelanggan->nama)}}">
                  @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{$errors->first('nama')}}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="no_telp">Nomor Telpon</label>
                  <input type="number" name="no_telp" id="no_telp" class="form-control {{$errors->has('no_telp')?'is-invalid':''}}" placeholder="Isikan Nomor Telpon" value="{{old('no_telp',$pelanggan->no_telp)}}">
                  @if($errors->has('no_telp'))
                    <div class="invalid-feedback">
                        {{$errors->first('no_telp')}}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="number" name="alamat" id="alamat" class="form-control {{$errors->has('alamat')?'is-invalid':''}}" placeholder="Isikan Alamat" value="{{old('alamat',$pelanggan->alamat)}}">
                    @if($errors->has('alamat'))
                      <div class="invalid-feedback">
                          {{$errors->first('alamat')}}
                      </div>
                    @endif
                  </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
@endsection
