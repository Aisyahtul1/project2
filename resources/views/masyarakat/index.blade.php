@extends('layouts.master')
@section('title','Data Masyarakat')
@section('heading','Data Masyarakat')

@section('bc')
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Data Masyarakat</li>
        </ol>
    </div>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">
            <a href="/masyarakat/form/" class="btn btn-primary"><i class="fa fa-folder-plus"></i> Tambah Data</a>
        </h3>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nik</th>
                        <th>Nama </th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>

                </thead>
                <tbody>
                    @forelse ($mas as $item)
                    <tr>
                    <td>{{$nomor++}}</td>
                    <td>{{$item->nik}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->jenis_kelamin}}</td>
                    <td>{{$item->pekerjaan}}</td>
                        <td>
                            <a href="/masyarakat/edit/{{$item->id}}" class="btn btn-info btn-sm"><i class="fa fa-pencil-alt"></i></a>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal">
                                <i class="fa fa-trash"></i>
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan!</h1>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    Yakin Data Masyarakat {{$item->nama}} di Hapus?
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </td>
                    </tr>



                    @empty


                  @endsection
                </tbody>
</table>
</div>