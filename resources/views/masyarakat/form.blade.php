@extends('layouts.master')
@section('title','Form Masyarakat')
@section('heading','Form Masyarakat')

@section('content')
    <div class="card">
    <div class="card-body">
            <form method="POST" action="/masyarakat/store/">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nik</label>
                    <input type="number" name="nik" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <input type="text" name="jenis_kelamin" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="exampleInputPassword1">
                </div>
                
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </form>
        </div>
        </div>
@endsection