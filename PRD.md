# Project-RPC-System-
SECTION 1 - Project Overview 

Apa yang dibangun: Website pendaftaran event lari yang digunakan untuk mengelola proses peserta mulai dari registrasi hingga pengambilan racepack.

Masalah yang diselesaikan: Menyelesaikan permasalahan penyelenggara yang kesulitan untuk melakukan dan mengidentifikasi identitas, dan nomor pendaftaran peserta secara manual dalam proses pemberian race pack. Web ini menyelesaikan kerumitan pencatatan manual di kertas/spreadsheet, mencegah kecurangan data ganda, serta mengatasi risiko salah serah terima ukuran jersey dan nomor BIB melalui verifikasi kode terpusat. 

Menyediakan apa: Web ini menyediakan sistem terpusat untuk kelola pendaftaran dan pengidentifikasian identitas peserta, sebagai berikut:
Bagi Peserta (Di Sisi Depan / Front-End):
Web ini menyediakan layanan pendaftaran mandiri secara online. Peserta bisa melihat informasi lengkap event (jadwal, kategori 5K/10K, dan benefit), mengisi formulir pendaftaran yang aman (tervalidasi NIK dan usia), melakukan pembayaran langsung, hingga tampil konfirmasi pendaftaran digital yang berisi nomor BIB, kode unik, dan status aktif mereka.

Bagi Panitia (Di Sisi Dasbor / Back-End):
Web ini menyediakan alat manajemen operasional. Panitia dibekali fitur untuk memasukkan kode pendaftaran peserta guna mencocokkan data jersey dan nomor BIB saat serah terima (handover), serta halaman rekapitulasi data yang menampilkan total peserta aktif dan sisa racepack yang belum diambil secara real-time.


SECTION 2 - User personas

Penyelenggara Event

Tujuan: Mengelola proses pendaftaran peserta event lari secara mandiri dan terintegrasi melalui sistem online agar proses administrasi menjadi lebih efektif dan terorganisir.

Pain Point: Selama ini proses pendaftaran dan pendataan peserta masih dilakukan secara manual menggunakan formulir, kertas, atau spreadsheet secara manual menggunakan formulir, kertas, atau spreadsheet sehingga berisiko menyebabkan duplikasi data peserta, kesalahan pencatatan identitas, serta kesalahan saat proses serah terima racepack dan BIB. 

Kebutuhan Utama: Membutuhkan sistem terpusat yang dapat digunakan untuk mengelola pendaftaran peserta, menyimpan identitas pelari, melakukan proses handover racepack, serta menghasilkan rekapitulasi peserta secara otomatis.
Peserta (Calon Pelari)

Tujuan: Memudahkan proses pendaftaran event lari secara online tanpa harus melakukan pencatatan dan registrasi secara manual

Pain Point: Proses pendaftaran manual dinilai berpotensi terjadi kesalahan data peserta, serta berisiko menyebabkan kesalahan saat pengambilan racepack dan BIB. 

Kebutuhan Utama: Membutuhkan sistem pendaftaran yang mudah digunakan untuk melakukan registrasi peserta, mengisi identitas pelari, melakukan pembayaran, memperoleh informasi nomor BIB dan kode pendaftaran, serta mempermudah proses pengambilan racepack tanpa kesalahan.



SECTION 3 - Tech Stack
Untuk menjaga kesederhanaan sistem, website POLI-CHROME RUN dibangun menggunakan teknologi dasar tanpa framework tambahan. Seluruh proses pengembangan difokuskan pada penggunaan HTML, CSS, JavaScript, PHP Native, dan MySQL agar sistem tetap ringan serta mudah dikembangkan. 

# Front-End
1. HTML5 
Digunakan untuk membangun struktur halaman website seperti homepage, informasi event, formulir pendaftaran peserta, halaman pembayaran, halaman konfirmasi peserta, serta dashboard panitia. 
2. CSS
Digunakan untuk mengatur tampilan antarmuka website, termasuk layout halaman, navigasi, form input, tabel rekapitulasi, dan tampilan dashboard. 
3. JavaScript
Digunakan untuk validasi interaktif pada sisi pengguna, seperti pengecekan usia minimal peserta (12 tahun), validasi form pendaftaran, serta interaksi sederhana pada halaman. 

# Back-End
1. PHP-Native
Digunakan untuk memproses seluruh logika sistem, meliputi:
- Pengelolaan data pendaftaran peserta
- Validasi NIK (1 NIK untuk 1 peserta)
- Pembuatan nomor BIB dan kode pendaftaran
- Pengelolaan status pembayaran
- Proses handover racepack
- Pengelolaan status pengambilan racepack
- Rekapitulasi data peserta
2. MySQL 
Digunakan sebagai media penyimpanan seluruh data sistem, meliputi:
- Data identitas peserta
- Data kategori lari
- Nomor BIB
- Kode pendaftaran
- Ukuran jersey
- Status pembayaran
- Data pengambilan racepack
- Rekapitulasi peserta

# Development Environment
1. XAMPP
Digunakan sebagai server lokal selama proses pengembangan karena menyediakan Apache, PHP, dan MySQL dalam satu lingkungan pengembangan. 
2. phpMyAdmin
Digunakan untuk mengelola database, membuat tabel, serta melakukan pengujian data peserta dan transaksi. 
3. Visual Studio Code 
Digunakan sebagai code editor untuk proses pengembangan antarmuka dan logika sistem.
