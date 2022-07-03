Langkah - langkah membuat aplikasi CRUD :
1. Langkah pertama install laravel melalui composer, buka cmd atau powershell ketikkan perintah "composer create-project laravel/laravel crudmahasiswa" (untuk membuat project baru).
2. buka XAMPP, lalu buat database di MySql "crudvirnanda" setelah membuat database setting .env dengan mengubah DB_DATABASE=crudvirnanda agar terhubung dengan database.
3. buat migration di terminal dengan perintah "php artisan make:migration create_mahasiswa_table", kemudian buat model dengan perintah "php atisan make:model Mahasiswa".
4. setelah membuat migration tambahkan field atau kolom pada migration, kemudian sesuaikan field model dengan struktur tabel migration. lalu jalankan migrasi "php artisan migrate".
5. buat controller dengan menggunakan perintah "php artisan make:controller MahasiswaController".
6. buat fuction di MahasiswaController untuk menampilkan data dengan menggunakan public fuction index().
7. kemudian buat route baru dengan membuka routes/web.php dan tambahkan route Route::get('/mahasiswa',[MahasiswaController::class, 'index']); untuk membuka halaman data post.
8. buat folder mahasiswa, recources/views/mahasiswa di dalam folder mahasiswa buat file dengan nama index.blade.php
9. buat fuction di MahasiswaController untuk menambahkan data dengan menggunakan public fuction create() dan public fuction store(), setelah itu tambahkan route di web.php Route::get('/mahasiswa/create',[MahasiswaController::class, 'create']); kemudian view baru sesuai dengan yang ada di method view('mahasiswa.create'). kemudian membuat file view baru recources/views/mahasiswa/create.blade.php
10. buat form action mengarah ke route mahasiswa.store dengan menggunakan public fuction store() untuk menambahkan data, kemudian tambahkan route di web.php Route::post('/mahasiswa/store',[MahasiswaController::class, 'store']);
11. buat fuction di MahasiswaController untuk mengedit data dengan menggunakan public fuction edit() dan public fuction update(), setelah itu tambahkan route di web.php Route::get('/mahasiswa/{id}/edit',[MahasiswaController::class, 'edit']); dan Route::put('/mahasiswa/{id}',[MahasiswaController::class, 'update']); kemudian tambahkan view baru sesuai dengan yang ada di method view('mahasiswa.edit'). kemudian membuat file view baru recources/views/mahasiswa/edit.blade.php
12. buat fuction di MahasiswaController untuk menghapus data dengan menggunakan public fuction destory(), setelah itu tambahkan route di web.php Route::delete('/mahasiswa/{id}',[MahasiswaController::class, 'destory']); lalu pada view index.blade.php tambahkan methot('delete').


KENDALA SELAMA MEMBUAT APLIKASI CRUD :
- saya membuat aplikasi CRUD ini meniru dari youtube mulai dari langkah-langkahnya dan script codingannya. Namun, ada beberapa yang saya ubah yaitu nama "Data Mahasiswa" isi tabel juga saya rubah (nama, nim, jenis kelamin, jurusan, email, alamat), dan tampilannya.
- kendala di tabel nim mahasiswa ketika dimasukkan / diinpu angka 0 tidak bisa atau eror jadi dari $table->Integer('nim'); dirubah ke $table->bigInteger('nim');
- kendala di bagian index.blade.php ada kekeliruan script pada bagian <form action="/mahasiswa/({$w->id}}" method="POST"> yang seharusnya ditulis <form action="/mahasiswa/{{$m->id}}" method="POST"> sehingga menyebabkan eror.
- kendala dibagian no ketika di delete no tidak bisa berubah atau tidak berurutan <td>{{$m->id}}</td> saya rubah menjadi <td>{{$loop->iteration}}</td>.
- 
