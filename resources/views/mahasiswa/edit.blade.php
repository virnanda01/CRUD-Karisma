@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="p-3 mb-2 bg-primary text-white">
    <h1 align="center" class="fw-bold">Edit Data Mahasiswa</h1>
        <form action="/mahasiswa/{{$mahasiswa->id}}" method="POST">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NAMA</label>
                <input type="text" name='nama' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->nama}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NIM</label>
                <input type="text" name='nim' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$mahasiswa->nim}}">
            </div>
            <select class="form-select" name="jenis_kelamin">
                <option value="">Pilih Jenis Kelamin</option>
                <option value="Laki-Laki" @if($mahasiswa->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
                <option value="Perempuan" @if($mahasiswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
            </select>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">JURUSAN</label>
                <input type="text" name='jurusan' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$mahasiswa->jurusan}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">EMAIL</label>
                <input type="text" name='email' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{$mahasiswa->email}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">ALAMAT</label>
                <textarea class="form-control" name="alamat" rows="10" value="{{$mahasiswa->alamat}}"></textarea>
            <input type="submit" name="submit" class="btn btn-danger" value="Update">
        </form>
        </div>
</div>
@endsection