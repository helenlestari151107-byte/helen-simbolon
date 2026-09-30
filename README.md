/*
1. Penjelasan for_loop_029.php

Program for_loop_029.php merupakan program PHP yang menggunakan perulangan for untuk menjalankan perintah beberapa kali. Program diawali dengan membuat variabel $nama yang berisi tulisan Belajar PABI, kemudian ditampilkan menggunakan echo sebagai ucapan selamat datang. Setelah itu dibuat array $sayang yang berisi beberapa data seperti sayang ibu, sayang ayah, sayangkaka, dan sayang adik. Perulangan for pertama digunakan untuk menampilkan tulisan Aku anak baik sebanyak lima kali. Selanjutnya, perulangan for kedua digunakan untuk mengambil dan menampilkan setiap isi array $sayang berdasarkan indeksnya. Fungsi count($sayang) digunakan untuk mengetahui jumlah data yang terdapat di dalam array sehingga semua data dapat ditampilkan.

2. Penjelasan foreach_loop_age_029.php

Program foreach_loop_age_029.php menggunakan foreach untuk menampilkan data nama dan umur yang terdapat dalam array $age. Array tersebut berisi beberapa data dengan nama sebagai key dan umur sebagai value, yaitu Jackob berumur 25 tahun, Bien berumur 27 tahun, dan Putri berumur 13 tahun. Perintah foreach ($age as $x => $val) mengambil setiap data satu per satu, kemudian nama disimpan pada variabel $x dan umur disimpan pada variabel $val. Setelah itu, perintah echo digunakan untuk menampilkan nama dan umur tersebut pada halaman. Dengan menggunakan foreach, semua data dalam array dapat ditampilkan tanpa harus mengambil indeksnya satu per satu.

3. Penjelasan foreach_loop_colors_029.php

Program foreach_loop_colors_029.php menggunakan foreach untuk menampilkan daftar warna yang terdapat dalam array $colors. Array tersebut berisi empat data warna, yaitu red, green, blue, dan yellow. Pada perulangan foreach, setiap data warna diambil satu per satu dan disimpan sementara dalam variabel $value. Kemudian perintah echo digunakan untuk menampilkan nilai tersebut, sedangkan <br> digunakan agar setiap warna ditampilkan pada baris yang berbeda. Jadi, program ini digunakan untuk memahami cara mengambil dan menampilkan setiap data dari sebuah array menggunakan foreach.

4. Penjelasan do_while_loop_029.php

Program do_while_loop_029.php menggunakan perulangan do while untuk menampilkan nilai dari variabel $x. Nilai awal $x adalah 6. Perintah yang berada di dalam do akan dijalankan terlebih dahulu, yaitu menampilkan nilai $x, kemudian $x++ digunakan untuk menambahkan nilai $x sebesar 1. Setelah itu, program memeriksa kondisi $x <= 5. Karena nilai awal $x adalah 6, perintah di dalam do tetap dijalankan satu kali sebelum kondisi diperiksa. Setelah nilai $x menjadi 7, kondisi $x <= 5 tidak terpenuhi sehingga perulangan berhenti. Program ini menunjukkan bahwa do while akan menjalankan perintah setidaknya satu kali sebelum mengecek kondisi.

5. Penjelasan do_while_indexed_029.php

Program do_while_indexed_029.php menggunakan do while untuk menampilkan data hewan yang terdapat dalam array $hewan. Array tersebut berisi lima data, yaitu buaya, anjing, babi, cicak, dan domba. Variabel $i digunakan sebagai indeks array dan dimulai dari nilai 0 karena indeks pertama dalam array PHP dimulai dari 0. Perulangan do while menampilkan data berdasarkan indeks $i, kemudian $i++ digunakan untuk berpindah ke data berikutnya. Perulangan akan terus berjalan selama nilai $i lebih kecil dari jumlah data dalam array yang diperoleh menggunakan count($hewan). Dengan cara ini, seluruh nama hewan dapat ditampilkan satu per satu sampai data terakhir.
*/
