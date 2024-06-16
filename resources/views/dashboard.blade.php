@extends('layout')
@section('konten')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>

<!-- Content Row -->
<div class="row">

    @foreach ($data as $item )
    <!-- Illustrations -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">{{ $item->nama }}</h6>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" 
                src="{{ 'storage/'.$item->image }}" width="200" alt="...">
            </div>
            <p>{{ $item->Kategori->namakategori }}</p>
            <a target="_blank" rel="nofollow" href="3">Selengkapnya...</a>
        </div>
    </div>

    @endforeach

</div>

<!-- Content Row -->


<!-- Content Row -->


@endsection