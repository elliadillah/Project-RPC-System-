# Project-RPC-System-
# SECTION 1 - Project Overview 

**Apa yang dibangun: Website pendaftaran event lari yang digunakan untuk mengelola proses peserta mulai dari registrasi hingga pengambilan racepack.

Masalah yang diselesaikan: Menyelesaikan permasalahan penyelenggara yang kesulitan untuk melakukan dan mengidentifikasi identitas, dan nomor pendaftaran peserta secara manual dalam proses pemberian race pack. Web ini menyelesaikan kerumitan pencatatan manual di kertas/spreadsheet, mencegah kecurangan data ganda, serta mengatasi risiko salah serah terima ukuran jersey dan nomor BIB melalui verifikasi kode terpusat. 

Menyediakan apa: Web ini menyediakan sistem terpusat untuk kelola pendaftaran dan pengidentifikasian identitas peserta, sebagai berikut:
Bagi Peserta (Di Sisi Depan / Front-End):
Web ini menyediakan layanan pendaftaran mandiri secara online. Peserta bisa melihat informasi lengkap event (jadwal, kategori 5K/10K, dan benefit), mengisi formulir pendaftaran yang aman (tervalidasi NIK dan usia), melakukan pembayaran langsung, hingga tampil konfirmasi pendaftaran digital yang berisi nomor BIB, kode unik, dan status aktif mereka.

Bagi Panitia (Di Sisi Dasbor / Back-End):
Web ini menyediakan alat manajemen operasional. Panitia dibekali fitur untuk memasukkan kode pendaftaran peserta guna mencocokkan data jersey dan nomor BIB saat serah terima (handover), serta halaman rekapitulasi data yang menampilkan total peserta aktif dan sisa racepack yang belum diambil secara real-time.


# SECTION 2 - User personas

Penyelenggara Event

Tujuan: Mengelola proses pendaftaran peserta event lari secara mandiri dan terintegrasi melalui sistem online agar proses administrasi menjadi lebih efektif dan terorganisir.

Pain Point: Selama ini proses pendaftaran dan pendataan peserta masih dilakukan secara manual menggunakan formulir, kertas, atau spreadsheet secara manual menggunakan formulir, kertas, atau spreadsheet sehingga berisiko menyebabkan duplikasi data peserta, kesalahan pencatatan identitas, serta kesalahan saat proses serah terima racepack dan BIB. 

Kebutuhan Utama: Membutuhkan sistem terpusat yang dapat digunakan untuk mengelola pendaftaran peserta, menyimpan identitas pelari, melakukan proses handover racepack, serta menghasilkan rekapitulasi peserta secara otomatis.
Peserta (Calon Pelari)

Tujuan: Memudahkan proses pendaftaran event lari secara online tanpa harus melakukan pencatatan dan registrasi secara manual

Pain Point: Proses pendaftaran manual dinilai berpotensi terjadi kesalahan data peserta, serta berisiko menyebabkan kesalahan saat pengambilan racepack dan BIB. 

Kebutuhan Utama: Membutuhkan sistem pendaftaran yang mudah digunakan untuk melakukan registrasi peserta, mengisi identitas pelari, melakukan pembayaran, memperoleh informasi nomor BIB dan kode pendaftaran, serta mempermudah proses pengambilan racepack tanpa kesalahan.



# SECTION 3 - Tech Stack
Untuk menjaga kesederhanaan sistem, website POLI-CHROME RUN dibangun menggunakan teknologi dasar tanpa framework tambahan. Seluruh proses pengembangan difokuskan pada penggunaan HTML, CSS, JavaScript, PHP Native, dan MySQL agar sistem tetap ringan serta mudah dikembangkan. 

A. Front-End
1. HTML5 
Digunakan untuk membangun struktur halaman website seperti homepage, informasi event, formulir pendaftaran peserta, halaman pembayaran, halaman konfirmasi peserta, serta dashboard panitia. 
2. CSS
Digunakan untuk mengatur tampilan antarmuka website, termasuk layout halaman, navigasi, form input, tabel rekapitulasi, dan tampilan dashboard. 
3. JavaScript
Digunakan untuk validasi interaktif pada sisi pengguna, seperti pengecekan usia minimal peserta (12 tahun), validasi form pendaftaran, serta interaksi sederhana pada halaman. 

B. Back-End
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

C. Development Environment
1. XAMPP
Digunakan sebagai server lokal selama proses pengembangan karena menyediakan Apache, PHP, dan MySQL dalam satu lingkungan pengembangan. 
2. phpMyAdmin
Digunakan untuk mengelola database, membuat tabel, serta melakukan pengujian data peserta dan transaksi. 
3. Visual Studio Code 
Digunakan sebagai code editor untuk proses pengembangan antarmuka dan logika sistem.


# SECTION 4 — Data Models

1. Admins
Digunakan untuk menyimpan data panitia atau penyelenggara yang memiliki akses ke dashboard pengelolaan peserta dan racepack. 
- Id
- Name
- Email
- Password
- Role: enum ('admin', 'staff')
Phone_number
Timestamps
Events
Digunakan untuk menyimpan informasi event lari yang diselenggarakan.


Id
Event_name
Slug
Description
Event_date
Location
Registration_open
Registration_close
Poster
Timestamps
Participants
Digunakan untuk menyimpan seluruh data peserta yang melakukan pendaftaran event.
Keterangan:
BIB_number digunakan sebagai nomor peserta saat event berlangsung
registration_code digunakan untuk pengambilan racepack
participant_status menunjukkan status peserta setelah pembayaran



Id
event_id (FK: events)
Full_name
Bib_name
Email
Phone_number
Birth_date
NIK (one participants)
Emergency_contact
Medical_history (nullable)
Jersey_size: enum('S', 'M', 'L', 'XL')
Category: enum('5K', '10K')
BIB_number (unique)
Registration_code (unique)
Participant_status: enum('pending', 'active', 'inactive')
Timestamps
Payments
Digunakan untuk menyimpan data pembayaran peserta.
Keterangan:
Status awal peserta adalah pending
Setelah pembayaran diverifikasi, status berubah menjadi paid
Peserta kemudian menjadi active


Id
Participant_id (FK: participants)
Invoice_number (unique)
Amount
Payment_method
Payment_proof
Payment_status: enum('pending', 'paid', 'failed')
Payment_date (nullable)
Verified_by (FK: admins)
Timestamps


Racepacks
Digunakan untuk mengelola proses serah terima BIB dan racepack.
Keterangan:
Panitia memasukkan registration_code
Sistem menampilkan data peserta
Status berubah dari not_taken menjadi taken


Id
Participant_id (FK: participants)
BIB_number
Jersey_size
Pickup_status: enum('not_taken', 'taken')
Pickup_time (nullable)
Handover_by (FK: admins)
Timestamps
Reports
Digunakan untuk menampilkan rekapitulasi peserta dan status pengambilan racepack pada dashboard panitia.
Data rekap dihasilkan dari proses perhitungan data pada tabel participants dan racepacks.


Total_participants
Total_5k
Total_10k
Total_taken_racepack
Total_not_taken_racepack
Report_date
Timestamps


Relasi
Admin → mengelola data peserta, pembayaran, dan proses handover racepack
Event → memiliki banyak Participants
Participant → memiliki satu Payment
Participant → memiliki satu Racepack
Participant → memiliki banyak Notifications
Racepack → memiliki banyak Handover Transactions
Racepack → diverifikasi oleh Admin
Payment → diverifikasi oleh Admin

