
@extends('layout')
@section('konten')
<a href="{{ route('post.create') }}" class="btn btn-primary my-3">Tambah Data</a>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Produk</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Isi Postingan</th>
                                            <th>Produk</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Judul</th>
                                            <th>Isi Postingan</th>
                                            <th>Produk</th>
                                            <th colspan="2">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($data as $item )
                                        <tr>
                                            <td>{{ $item->judul }}</td>
                                            <td>{{ $item->isi }}</td>
                                            <td>{{ $item->Produk->nama }}</td>
                                            <td><a href="{{ route('post.edit', $item->id) }}" class="btn btn-warning">Edit</a></td>
                                            <td><form action="{{ route('post.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form></td>
                                        </tr>
                                            
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection                   