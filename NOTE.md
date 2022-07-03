Langkah - langkah membuat CRUD laravel
1. membuat file CRUD terlebih dahulu menggunakan powershell - composer create-project laravel/laravel crudvirnanda
2. buka vscode
3. import file. file - add folder to workspace
4. membuat database baru. buka localhostphpmyadmin - new (crudvirnanda) - create
5. setelah membuat database, buka vscode - .env - DB_DATABASE nya diganti crudvirnanda
6. menghubungkan database. new terminal - php artisan migrate
7. membuat tabel baru. php artisan make:migration create_mahasiswa_table
8. di migration tabel mahasiswa di isi nama, nim, jenis kelamin, jurusan, email, alamat. hubungkan kembali dengan database
9. membuat model. php artisan make:model Mahasiswa
10. membuat controller. php artisan make:controller MahasiswaController (di controller ini berisi routing yang berhubugan dengan mahasiswa, mulai dari index, create, edit, update, dan destory)
11. 
12. 
 
