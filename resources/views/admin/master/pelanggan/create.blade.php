@extends('layouts.admin')
@section('css')
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.master.pelanggan.store')}}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" class="form-control {{$errors->has('nama')?'is-invalid':''}}" placeholder="Isikan Nama" value="{{old('nama')}}">
                  @if($errors->has('nama'))
                    <div class="invalid-feedback">
                        {{$errors->first('nama')}}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                  <label for="no_telp">Nomor Telpon</label>
                  <input type="number" name="no_telp" id="no_telp" class="form-control {{$errors->has('no_telp')?'is-invalid':''}}" placeholder="Isikan Nomor Telpon" value="{{old('no_telp')}}">
                  @if($errors->has('harga'))
                    <div class="invalid-feedback">
                        {{$errors->first('harga')}}
                    </div>
                  @endif
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control {{$errors->has('alamat')?'is-invalid':''}}" placeholder="Isikan Alamat" value="{{old('alamat')}}">
                    @if($errors->has('alamat'))
                      <div class="invalid-feedback">
                          {{$errors->first('harga')}}
                      </div>
                    @endif
                  </div>
                <button type="submit" class="btn btn-primary">Buat</button>
            </form>
        </div>
    </div>
@endsection
@section('js')
@endsection
