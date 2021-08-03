Live Demo : http://hitatest.net/restokuy <br />
Import Database : restokuy (3).sql <br />
<br />
Sistem: <br />
[1] Login = done. <br />
[2] AdminBaru + Validasi (kondisi: tidak ada pegawai dengan jabatan 'admin') = done. <br />
[3] Logout = done. <br />
<br />
Admin: <br />
[1] Dashboard (halaman) = done. <br />
[2] Pegawai : <br />
[2] [1] Tampil Tabel Pegawai = done. <br />
[2] [2] Tambah Pegawai = done. <br />
[2] [3] Edit Pegawai = done. <br />
[2] [4] Hapus Pegawai = done. <br />
[2] [*] Bonus Validasi = done. <br />
[3] Menu : <br />
[3] [1] Tampil Tabel Menu = done. <br />
[3] [2] Tambah Menu = rusak, jenis_menu & kategori_menu (Perubahan Tipe Data VARCHAR menjadi ENUM, data hilang jika tidak sesuai ENUM). <br />
[3] [3] Edit Menu = rusak, jenis_menu & kategori_menu (Perubahan Tipe Data VARCHAR menjadi ENUM, data hilang jika tidak sesuai ENUM). <br />
[3] [4] Hapus Menu = done. <br />
<br />
Kasir: <br />
[1] Dashboard (halaman) = done. <br />
[2] Pembayaran : <br />
[2] [1] Tampil Tabel Informasi Pembayaran = done. <br />
[2] [2] Tampil Tabel Pembayaran Lunas = done. <br />
[2] [3] Tampil Tabel Informasi Rekapitulasi = done. <br />
[2] [4] Fungsi Filter pada Tabel Informasi Rekapitulasi = done. <br />
[2] [5] Fungsi Cetak = not done. <br />
[2] [6] Fungsi Lunas = not done. <br />
[2] [7] Fungsi Belum Lunas = not done. <br />
<br />
Koki: <br />
[1] Dashboard (halaman) = done. <br />
[2] Pemesanan : <br />
[2] [1] Tampil Tabel Informasi Pemesanan = done. <br />
[2] [2] Informasi Detail Pemesanan = not done. <br />
[2] [3] Fungsi Selesai = not done. <br />
[3] Ketersediaan Menu : <br />
[3] [1] Tampil Tabel Informasi Ketersediaan Menu = done. <br />
[3] [2] Fungsi Tersedia/Tidak Tersedia = not done. <br />
<br />
Pelayan: <br />
[1] Dashboard (halaman) = done. <br />
[2] Pesanan : <br />
[2] [1] Tampil Tabel Pesanan (berdasarkan ID Pegawai) = done. <br />
[2] [2] Halaman Tambah Pesanan = done. <br />
[2] [3] Fungsi Tambah Pesanan = not done. <br />
[2] [4] Fungsi Edit Pesanan = not done. <br />
[2] [5] Fungsi Hapus Pesanan = not done. <br />
[2] [6] Tampil Kartu Menu (untuk menambahkan menu pada isi form Tambah dan Edit Pesanan) = not done. <br />
[2] [7] Fungsi Tambah Menu = not done. <br />
[2] [8] Fungsi Hapus Menu = not done. <br />
<br />
Note: <br />
.env file sudah dicoret dari .gitignore, sudah ada sekarang. <br />