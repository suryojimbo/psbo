# Pengembangan Sistem Beriorientasi Objek

[Deskripsi](#deskripsi) | [User-Analisis](#user-analisis) | [User-Story](#user-story) | [Spesifikasi](#spesifikasi) | [Hasil](#hasil) | [Saran](#saran) | [Lampiran](#lampiran)

- Kelompok Kita, Tim bel
    * Mochamad Rhayfa - G64160054
    * Ivan Mahinza - G64160066
    * Suryo Hamukti S. - G64160095

## Deskripsi
Aplikasi yang telah kami usaha kembangkan ada 2 yaitu aplikasi :
* Toko online bernama PS Store, sebuah toko online seperti umumnya
* Aplikasi Polling, sebuah aplikasi postingan untuk voting poll.

PS Store merupakan sistem yang dibangun untuk jual-beli barang pada suatu toko,
dimana terdapat 3 jenis user di dalamnya; pembeli, supplier, dan admin. Transaksi dapat
dilakukan di sistem, mulai dari melihat barang yang tersedia, pembayaran, hingga melihat status
pemesanan. Namun proses verifiksi pembayaran masih manual dengan cara mengunggah bukti
pembayaran ke sistem untuk kemudian diverifikasi oleh admin secara manual. Aplikasi ini lebih
cenderung seperti toko online (B2C) dibanding e-commerce (C2C).


## User Analisis 

### PS Store
Aplikasi ini memiliki user sebanyak tiga jenis user, yaitu ada supplier, admin, dan
pembeli. Target Pengguna aplikasi ini tentunya adalah supplier dan pembeli, sementara admin
hanya untuk pengelola bisnisnya.


Supplier dapat melakukan :
* Meminta verifikasi admin penambahan / penghilangan barang yang ingin dijual
* Melihat produk dan detailnya


Admin dapat melakukan :
* Mengubah status pembayaran
* Mengatur kategori dan subkategori jenis barang
* Mengubah status user
* Mengontrol transaksi


Pembeli dapat melakukan :
* CRUD identitas
* Melihat semua produk
* Melihat detail produk
* Melihat data penjual
* CRUD bagian transaksi (meliputi add to cart sampai pemberitahuan transaksi telah
selesai)

## User Story
Sebagai Pembeli, saya ingin melihat lihat produk apa saja yang dijual oleh PS Store.
Keterangan : Terdapat Category dan Sub-Category, dan fitur search untuk memudahkan surfing

Sebagai Supplier, saya ingin mendapat keuntungan melalui menyuplai barang di PS Store, dan
juga mengetahui seberapa laku barang dagangan yang saya suplai.
Keterangan : Saya bisa melakukan suplai apabila admin telah melakukan verifikasi /
authorization terhadap suplai yang ingin saya salurkan, dan saya bisa melihat detail produk yang
dijualnya

Sebagai Pembeli, saya ingin membeli produk yang telah saya lihat di PS Store.
Keterangan : Pembelian dilakukan dengan cara saya mencari dahulu apa saja yang saya ingin
beli, kemudian dimasukkan kedalam keranjang, lalu saya melakukan checkout dan melakukan
pembayaran di luar sistem, namun mengirim bukti pembayarannya kedalam sistem.

Sebagai Admin, saya ingin mengelola website PS Store dimana website tersebut menjadi sarana
barang barang yang didapat dari supplier ditawarkan kepada khalayak umum (pembeli).
Tentunya saya perlu mengelola setiap adanya perubahan terkait konten website.
Keterangan : Setiap checkout adalah tanggungan admin, jadi admin perlu memverifikasi seluruh
transaksi yang ada didalam sistem.


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
![1.2](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/ps%20store%20admin.PNG?raw=true)

Berikut adalah dokumentasi Use Case Diagram, Activity Diagram, dan Class diagram dari aplikasi PS Store. 

Use Case Diagram Aplikasi PS Store:
![3.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/usecase_fix.png)

## Use Case Description
1. UC1 : Mengelola Transaksi, Barang, dan Status User
* Importance Level : High
* Use Case Type : Essential, Temporal
* Primary Actor : Admin
* Stakeholder and Interest : Supplier dan Pembeli
* Brief Description : Di dalam use case ini, Admin bertugas untuk maintenance
kondisi website.
* Pre-Condition : Melakukan pengelolaan bila ada request dari user, dan
pengelolaan bulanan
* Trigger :
   - Ada pembeli yang ingin jadi supplier (External)
   - Ada barang yang sudah lama tidak ada transaksi dan tidak ada kunjungan(External)
   - Ada supplier yang tak bertanggung jawab (External)
   - Pengelolaan perbulan (Temporal)
* Events :
   - Menghapus / Mengubah User
   - Mengelola Jenis Barang
   - Menambahkan barang
   - Dan Lainnya
* Flow Events :
   - CRUD pada umumnya
* Alternate/Exceptional Flows : -
* Post-Condition : Tampilan dan Izin akses terbaharui
2. UC2 : Menambah Produk Penjualan
◆ Importance Level : Medium
◆ Use Case Type : Essential, Temporal
◆ Primary Actor : Supplier
◆ Stakeholder and Interest : Pembeli
◆ Brief Description : Di dalam use case ini, Supplier dapat menambah produk
beserta stocknya
◆ Pre-Condition : Telah login sebagai Supplier
◆ Trigger :
● Supplier ingin menambahkan jenis barang baru yang disuplainya kedalam
sistem (External)
● Memasukan suplai bulanan (Temporal)
◆ Events :
● Menambahkan jenis produk pada database
● Menambahkan stock produk pada database
● Menghilangkan produk yang telah berhenti disuplai
◆ Flow Events :
● Login sebagai Supplier
● Memilih produk mana yang ingin ditambah atau dihilangkan dan
● Memberi pilihan yang akan diverifikasi admin
● Tampilan akan terbaharui apabila verifikasi telah dilakukan oleh admin
◆ Alternate/Exceptional Flows :
● Admin men-decline verifikasi
◆ Post-Condition : Data dalam sistem terbaharui
3. UC3 : Verifikasi
◆ Importance Level : High
◆ Use Case Type : Essential
◆ Primary Actor : Admin
◆ Stakeholder and Interest : Pembeli dan Supplier
◆ Brief Description : Di dalam use case ini, Admin bertugas untuk memverifikasi
seluruh transaksi dan barang transaksinya
◆ Pre-Condition : Ada sebuah rangkaian kegiatan dari end-user yang perlu
diverifikasi
◆ Trigger :
● Mendapat keranjang yang ingin dibayar oleh pembeli
● Mendapat request penambahan / penghilangan produk dari supplier
◆ Events :
● Melakukan verifikasi / Memberikan akses
◆ Flow Events :
● Pembelian :
○ Admin mendapatkan keranjang yang ingin dibayar oleh pembeli
○ Pembeli melakukan pembayaran dan mengupload bukti
pembayaran ke sistem
○ Admin melakukan verifikasi pembayaran di sistem dan
mengirimkan barang ke pembeli dengan kurir pilihan pembeli
○ Admin memberikan notifikasi transaksi sukses berhasil
● Penambahan / Penghilangan suplai :
○ Admin mendapatkan request dari supplier
○ Admin memastikan barang ada dan didapat dari supplier yang
tepat, lalu melakukan verifikasi
○ Admin mengupdate database sistem
○ Tampilan akan terbaharui apabila verifikasi telah dilakukan oleh
admin
◆ Alternate/Exceptional Flows :
● Admin men-decline verifikasi
◆ Post-Condition : Data dalam sistem terbaharui, Status Keranjang berubah menjadi
Transaksi Berhasil, Barang sampai pada tangan pembeli.
4. UC4 : Melakukan Transaksi
◆ Importance Level : High
◆ Use Case Type : Essential
◆ Primary Actor : Pembeli
◆ Stakeholder and Interest : Admin dan supplier
◆ Brief Description : Di dalam use case ini, Pembeli melakukan inti proses bisnis
sebuah jual beli
◆ Pre-Condition : Telah login sebagai pembeli, sedang melihat lihat produk
◆ Trigger :
● Ada pembeli yang tertarik ingin membeli produk (External)
◆ Events :
● Melakukan proses jual beli
◆ Flow Events :
● Mencari / Melihat lihat produk
● Melihat detail produk yang ingin dibeli
● Menambahkan kedalam keranjang
● Mencari produk lain yang ingin ditambahkan kedalam keranjang
(opsional)
● Melakukan Checkout
● Mengupload bukti pembayaran
● Terverifikasi oleh admin dan barang dikirim
● Pembeli menerima barang beliannya.
◆ Alternate/Exceptional Flows : Tidak ada kurir yang tersedia, transaksi gagal
secara terpaksa
◆ Post-Condition : Mendapatkan barang beliannya, riwayat pembelian terbaharui
5. UC5 : Melakukan Transaksi
◆ Importance Level : High
◆ Use Case Type : Essential
◆ Primary Actor : Pembeli
◆ Stakeholder and Interest : Admin dan supplier
◆ Brief Description : Di dalam use case ini, Pembeli melakukan inti proses bisnis
sebuah jual beli toko online
◆ Pre-Condition : Telah login sebagai pembeli, sedang melihat lihat produk
◆ Trigger :
● Ada pembeli yang tertarik ingin membeli produk (External)
◆ Events :
● Melakukan proses jual beli
◆ Flow Events :
● Mencari / Melihat lihat produk
● Melihat detail produk yang ingin dibeli
● Menambahkan kedalam keranjang
● Mencari produk lain yang ingin ditambahkan kedalam keranjang
(opsional)
● Melakukan Checkout
● Mengupload bukti pembayaran
● Terverifikasi oleh admin dan barang dikirim
● Pembeli menerima barang beliannya.
◆ Alternate/Exceptional Flows : Tidak ada kurir yang tersedia, transaksi gagal
secara terpaksa
◆ Post-Condition : Mendapatkan barang beliannya, riwayat pembelian terbaharui
6. UC6: Melihat produk, supplier, beserta detailnya
◆ Importance Level : Medium
◆ Use Case Type : Essential, Temporal
◆ Primary Actor : Pembeli, Supplier
◆ Stakeholder and Interest : Admin, Supplier dan Pembeli
◆ Brief Description : Di dalam use case ini, end-user dapat melihat apa saja yang
ditampilkan oleh sistem untuk diperjual belikan dan siapa supplier barangnya
◆ Pre-Condition : Telah melakukan login
◆ Trigger :
● Ingin melihat detail spesifikasi produk (External)
● Ingin melihat detail latar belakang suppliernya (External)
● Supplier ingin melihat seberapa laku produk suplainya (Temporal)
◆ Events :
● Melihat lihat produk yang dijual di sistem
◆ Flow Events :
● Mencari dengan fitur search
● Melakukan surfing berdasarkan kategori-subkategori
● Menambahkan barang yang dilihat ke keranjang (akan lanjut ke proses
transaksi)
◆ Alternate/Exceptional Flows : -
◆ Post-Condition : -

Activity Diagram aplikasi PS Store pada proses bisnis transaksi:
![4.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/activiti1.png)

Activity Diagram aplikasi PS Store pada proses melihat dan mengatur isi dari antarmuka sistem
![5.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/activiti2.png)

Class Diagram aplikasi PS Store :
![6.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/classdiag_fix.png)

Sequence Diagram aplikasi PS Store : 
![7.1](https://github.com/suryojimbo/psbo/blob/master/dokumentasi/sequencediag_fix.png)

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
