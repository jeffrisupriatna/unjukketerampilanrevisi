@extends('layout')
@section('konten')
    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror" id="exampleFormControlInput1" value="{{ old('nama') }}">
        </div>        
        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select  class="custom-select" name="kategori_id" >
                @foreach ($ktgr as $item)
                    <option value="{{ $item->id }}">{{ $item->namakategori }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Deskripsi</label>
            <input type="text" name="deskripsi" class="form-control  @error('deskripsi') is-invalid @enderror" id="exampleFormControlInput1"  value="{{ old('deskripsi') }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control  @error('harga') is-invalid @enderror" id="exampleFormControlInput1"  value="{{ old('harga') }}">
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Pilih Foto</label>
            <input type="file" class="form-control-file" name="image">
        </div>
        <button type="submit" class="btn btn-primary">Simpan Data</button>
    </form>
@endsection
