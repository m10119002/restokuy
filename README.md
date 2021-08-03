Live Demo : http://hitatest.net/restokuy
Import Database : restokuy (3).sql

Sistem:
[1] Login = done.
[2] AdminBaru + Validasi (kondisi: tidak ada pegawai dengan jabatan 'admin') = done.
[3] Logout = done.

Admin:
[1] Dashboard (halaman) = done.
[2] Pegawai :
[2] [1] Tampil Tabel Pegawai = done.
[2] [2] Tambah Pegawai = done.
[2] [3] Edit Pegawai = done.
[2] [4] Hapus Pegawai = done.
[2] [*] Bonus Validasi = done.
[3] Menu :
[3] [1] Tampil Tabel Menu = done.
[3] [2] Tambah Menu = rusak, jenis_menu & kategori_menu (Perubahan Tipe Data VARCHAR menjadi ENUM, data hilang jika tidak sesuai ENUM).
[3] [3] Edit Menu = rusak, jenis_menu & kategori_menu (Perubahan Tipe Data VARCHAR menjadi ENUM, data hilang jika tidak sesuai ENUM).
[3] [4] Hapus Menu = done.

Kasir:
[1] Dashboard (halaman) = done.
[2] Pembayaran :
[2] [1] Tampil Tabel Informasi Pembayaran = done.
[2] [2] Tampil Tabel Pembayaran Lunas = done.
[2] [3] Tampil Tabel Informasi Rekapitulasi = done.
[2] [4] Fungsi Filter pada Tabel Informasi Rekapitulasi = done.
[2] [5] Fungsi Cetak = not done.
[2] [6] Fungsi Lunas = not done.
[2] [7] Fungsi Belum Lunas = not done.

Koki:
[1] Dashboard (halaman) = done.
[2] Pemesanan :
[2] [1] Tampil Tabel Informasi Pemesanan = done.
[2] [2] Informasi Detail Pemesanan = not done.
[2] [3] Fungsi Selesai = not done.
[3] Ketersediaan Menu :
[3] [1] Tampil Tabel Informasi Ketersediaan Menu = done.
[3] [2] Fungsi Tersedia/Tidak Tersedia = not done.

Pelayan:
[1] Dashboard (halaman) = done.
[2] Pesanan :
[2] [1] Tampil Tabel Pesanan (berdasarkan ID Pegawai) = done.
[2] [2] Halaman Tambah Pesanan = done.
[2] [3] Fungsi Tambah Pesanan = not done.
[2] [4] Fungsi Edit Pesanan = not done.
[2] [5] Fungsi Hapus Pesanan = not done.
[2] [6] Tampil Kartu Menu (untuk menambahkan menu pada isi form Tambah dan Edit Pesanan) = not done.
[2] [7] Fungsi Tambah Menu = not done.
[2] [8] Fungsi Hapus Menu = not done.

Note:
.env file sudah dicoret dari .gitignore, sudah ada sekarang.