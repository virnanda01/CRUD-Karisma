@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="p-3 mb-2 bg-primary text-white">
<h1 align="center" class="fw-bold">Input Data Mahasiswa</h1>
<form action="/mahasiswa/store" method="POST">
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NAMA</label>
        <input type="text" name='nama' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">NIM</label>
        <input type="text" name='nim' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <select class="form-select" name="jenis_kelamin">
        <option value="">Pilih Jenis Kelamin</option>
        <option value="Laki-Laki">Laki-Laki</option>
        <option value="Perempuan">Perempuan</option>
    </select><br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">JURUSAN</label>
        <input type="text" name='jurusan' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">EMAIL</label>
        <input type="text" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
        <textarea class="form-control" name="alamat" rows="10"></textarea>
    </div>
    <input type="submit" name="submit" class="btn btn-light" value="Save">
</form>
</div>
</div>
@endsection
