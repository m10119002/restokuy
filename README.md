Apa saja yang dipindahkan?
semua file tampilan yang ada sebelumnya dipindahkan ke folder ../restokuy/public/__tampilan/

Bagaimana jika ingin buat baru/edit atau test halaman tampilan?
Tidak ada perubahan layaknya tidak menggunakan Codeigniter, hanya saja untuk akses ke halaman tampilan langsung tanpa ada ikut campur dari Codeigniter, kunjungi : http://localhost/restokuy/public/__tampilan/nama-file-halaman.(php/html)

Tutorial:
../restokuy/app/Config/Routes.php
File config untuk memberikan instruksi apa yang harus dilakukan Codeigniter ketika diberikan alamat url tertentu.

$routes->get() : form method="GET", secara default ketika load halaman.. metode yang akan digunakan yaitu "GET" meski tidak ada form / tidak submit form.
$routes->post() : form method="POST", hanya bisa dilakukan via form submit.
$routes->match(['get', 'post']) : terima request "GET" dan "POST" pada route/url yang sama. agar bisa menggunakan route/url yang sama ketika submit form.
$routes->group() : mengelompokkan route yang ada didalamnya sekaligus menyertakan nama group pada url di setiap routes.

susunan parameter $routes yang diatas yaitu (nama route/url, nama controller::nama function, filter => nama filter:value).

0.4:
+ Fitur Admin/Menu done.

0.3:
+ Fitur Admin/Pegawai done (+ validasi).

0.2:
+ Modif index.php untuk AdminBaru jadi adminbaru.php.
+ Fitur Tambah AdminBaru beres, lengkap dengan Validasi (ditambah juga validasi setiap field/input).
+ Semua file yang ada di folder __tampilan sudah dipindahkan ke ../restokuy/app/Views/ dan ../restokuy/assets/
+ Baru beres Clean-up halaman untuk admin (rewrite bagian url karena struktur folder framework beda.. href, src).
+ Rombak SessionFilter.
+ Debug views di-nonaktifkan.
+ Routes.php plus plus.
+ Controllers/Admin, Controllers/Kasir, Controllers/Koki, Controllers/Pelayan.
+ AkunBaruModel, AkunModel, PegawaiBaruModel, PegawaiModel.
on-the-way:
+ Pegawai & Menu.
belum:
+ Kasir, Pegawai, Pelayan.

0.1:
+ Added Codeigniter 4.1.3 Base.
+ Moved all previous files into ../restokuy/public/__tampilan/ folder
+ Renamed 'env' file to '.env'
+ Modified CI_ENVIRONMENT from production to development in ../restokuy/.env
+ Modified default database settings in ../restokuy/.env
+ Modified $baseURL in ../restokuy/app/Config/App.php
+ Modified $indexPage in ../restokuy/app/Config/App.php
+ Changed $uriProtocol from 'REQUEST_URI' to 'PATH_INFO' in ../restokuy/app/Config/App.php
+ Changed $routes->setAutoRoute from True to False in ../restokuy/app/Config/Routes.php
+ Added NoAdminFilter in ../restokuy/app/Filters/NoAdminFilter.php
+ Added SessionFilter in ../restokuy/app/Filters/SessionFilter.php
+ Added NoAdminFilter, SessionFilter Reference in ../restokuy/app/Config/Filters.php
+ Added 'noadmin', 'visitor' into $aliases in ../restokuy/app/Config/Filters.php
+ Modified Home::index Controller.
+ Added Sistem Controller.
+ Added Sistem::login Controller.
+ Added Sistem::logout Controller.
+ Added $routes->match, get/post, 'xyz/new', Sistem::adminBaru, filter => noadmin:noreturn.
+ Added $routes->match, get/post, 'login', Sistem::login, filter => visitor:login.
+ Added $routes->get, 'logout', Sistem::logout, filter => noadmin.