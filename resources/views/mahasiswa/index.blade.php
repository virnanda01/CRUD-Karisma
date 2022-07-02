@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="p-3 mb-2 bg-drak text-drak">
    <h1 align="center" class="fw-bold">Data Mahasiswa</h1>
<a class="btn btn-primary" href="/mahasiswa/create">Tambahkan Data</a>
<table class="table table-dark table-striped">
    <tr align="center">
        <th>NO</th>
        <th>NAMA</th>
        <th>NIM</th>
        <th>JENIS KELAMIN</th>
        <th>JURUSAN</th>
        <th>EMAIL</th>
        <th>ALAMAT</th>
        <th>OPSI</th>
    </tr>
    @foreach($mahasiswa as $m)
    <tr>
       <td>{{$loop->iteration}}</td>
       <td>{{$m->nama}}</td>
       <td>{{$m->nim}}</td>
       <td>{{$m->jenis_kelamin}}</td>
       <td>{{$m->jurusan}}</td>
       <td>{{$m->email}}</td>
       <td>{{$m->alamat}}</td>
       <td>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <a class="btn btn-warning" href="/mahasiswa/{{$m->id}}/edit">Edit</a>
            <form action="/mahasiswa/{{$m->id}}" method="POST">
            @csrf
            @method('delete')
            <input class="btn btn-danger" type="submit" name="submit" value="Delete">
            </form>
        </div>
        </td>
    </tr>
    @endforeach
</table>
</div>
</div>
@endsection