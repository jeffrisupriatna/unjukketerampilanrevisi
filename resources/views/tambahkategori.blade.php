@extends('layout')
@section('konten')
    <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
            <input type="text" name="namakategori" class="form-control @error('namakategori') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('namakategori') }}">
        </div>   
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
            <input type="text" name="desckategori" class="form-control  @error('desckategori') is-invalid @enderror" id="exampleFormControlInput1"  value="{{ old('desckategori') }}">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
