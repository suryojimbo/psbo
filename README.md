# Pengembangan Sistem Beriorientasi Objek

[Deskripsi](#deskripsi) | [User-Analisis](#user-analisis) | [Spesifikasi](#spesifikasi) | [Hasil](#hasil) | [Saran](#saran) | Lampiran

- Kelompok Kita
    * Mochamad Rhayfa - G64160054
    * Ivan Mahinza - G64160066
    * Suryo Hamukti S. - G64160095

## Deskripsi
Aplikasi yang telah kami usaha kembangkan ada 2 yaitu aplikasi :
* Toko online bernama PS Store, sebuah toko online seperti umumnya
* Aplikasi Polling, sebuah aplikasi postingan untuk voting poll.

## User Analisis

### PS Store
aplikasi ini memiliki user sebanyak tiga jenis user, yaitu ada penjual, admin, dan pembeli

Penjual dapat melakukan :
- CRUD barang yang ingin dijual

Admin dapat melakukan : 
- Mengubah status pembayaran
- Mengatur kategori dan subkategori jenis barang
- Mengubah status user
- Mengontrol transaksi

Pembeli dapat melakukan :
- CRUD identitas
- Melihat semua produk
- Melihat detail produk
- Melihat data penjual
- CRUD bagian transaksi (meliputi add to cart sampai pembelian yang terkonfirmasi admin)

### Polling App
aplikasi ini memiliki 2 jenis user, yaitu admin dan non-admin (sebut saja user) 

Admin dapat melakukan : 
- Kontrol banyak polling dan izin akses pembuatan polling

User dapat melakukan :
- Voting
- Meminta izin membuat polling baru

## Spesifikasi
### PS Store
Lingkungan Pengembangan PS Store adalah sebagai berikut :
- Laravel Framework version 5.8.16
- php version 7.1.3 
- uxweb sweet-alert version 2.0 or greater
- SQLYog as GUI database version 13.1.1
- xampp for windows version 7.2.3
- Sublime text editor version 3.2.1
- Visual Studio Code version 1.33

### Polling App
Lingkungan Pengembangan Polling Application adalah sebagai berikut :
- Spring tool suite 4 version 4.2.1 RELEASE
- SpringBoot  framework version 2.1.4
- xampp for windows version 7.2.3
- Sublime text editor version 3.2.1
- Visual Studio Code version 1.33
- React as Front-end framework version 16.8.6
- php version 7.1.3 

## Hasil dan Pembahasan

### PS Store
Pengembangan kami belum rampung semua, baru sampai melakuan create dan update dari barang yang ingin dijual, dan sisi admin yang belum berfungsi dengan baik, berikut adalah cuplikan gambarnya.
![1.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/list%20ps%20store.PNG?raw=true)
![2.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/ps%20store%20admin.PNG?raw=true)

Berikut adalah dokumentasi Use Case Diagram, Activity Diagram, dan Class diagram dari aplikasi PS Store. 

Use Case Diagram Aplikasi PS Store:
![3.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/usecase_fix.png)

Activity Diagram pada proses bisnis transaksi:
![4.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/activiti1.png)

Activity Diagram pada proses melihat dan mengatur isi dari antarmuka sistem
![5.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/activiti2.png)

### Polling App
Untuk pengembangan aplikasi yang ini, kami mengalami kendala dalam api fetch jadi kami tidak dapat melakukan login karena masih dianggap unauthorized access. Berikut adalah cuplikan demo aplikasinya.
![2.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/springboot.jpg?raw=true)
![2.2](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/springboot2.jpg?raw=true)
![2.3](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/springboot3.jpg?raw=true)
![2.4](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/springboot4.jpg?raw=true)


## Saran
Sebagai evaluasi dari sistem yang telah dibuat, ke depannya seluruh proses pembayaran
sebaiknya dapat dilakukan dalam sistem tanpa harus verifikasi manual oleh admin toko. Namun
terasa hambar berkata demikian jika aplikasinya saja belum rampung, jadi saran dari kami adalah
bulatkan niat dan tekad ketika mengembangkan sebuah aplikasi, jangan mudah menyerah ketika
bertemu pesan error. Di luar sana masih banyak developer yang terombang-ambing menghadapi
error juga, dan lagi pula ada yang namanya stackoverflow yang menjadi teman baik anda ketika
berhadapan dengan kode yang error (walaupun metode ini rentan menyebabkan anti-pattern
namun tidak apa karena learning can be on the hard ways ).
Selain itu, terapkan juga clean code pada kodingannya agar terdokumentasi dengan baik
dan rapi. Disarankan juga untuk tidak menerapkan sistem kebut semalam layaknya membuat
candi, karena kami sudah mencobanya dan gagal. Tidak baik juga untuk kesehatan.


## Lampiran
Design Pattern
1. Data Access Pattern yang diterapkan adalah **ORM Patterns** . Sebuah fitur bawaan dari
laravel yang sudah dijelaskan seperti diatas.


2. Terdapat **Singleton** atau adanya suatu kelas yang berisi hanya satu instances saja, yaitu
admin


Anti Pattern
1. Ketiga dari kami mungkin merasakan **Death March** , adalah perasaan yang dirasa
ditakdirkan untuk gagal, atau yang membutuhkan kerja keras yang tidak berkelanjutan,
atau perasaan “Everyone knows that the project is going to be a disaster”. Dalam
manejemen proyek, perasaan tipikal ini biasanya merupakan hasil dari harapan yang tidak
realistis atau terlalu optimis dalam scheduling, membuat fitur mewah, atau keduanya, dan
sering kali termasuk kurangnya dokumentasi yang sesuai atau pelatihan yang relevan dan
keahlian dari luar yang akan diperlukan untuk menyelesaikan tugasnya secara baik.
Pengetahuan tentang sifat terkutuk dari proyek ini sangat membebani jiwa para
pesertanya, seolah-olah mereka tidak berdaya menyaksikan diri mereka sendiri dan rekan
kerja mereka dipaksa untuk menyiksa diri mereka sendiri dan berbaris menuju kematian.
Seringkali, pawai kematian akan melibatkan upaya putus asa untuk memperbaiki
jalannya proyek dengan meminta anggota tim untuk bekerja terutama jam yang
melelahkan (14 jam sehari, 7 hari minggu, dll) atau dengan mencoba "melempar (cukup)
mayat ke masalah ", sering menyebabkan kelelahan ( burnout ). (dikutip dari wikipedia )


2. Karena terjadi banyak pemangkasan pada fitur, terjadi **Smoke and Mirrors** yaitu sebuah
fitur yang dijanjikan dari awal namun tidak jadi pada akhirnya.
