# Project-RPC-System-
# SECTION 1 - Project Overview 

**Apa yang dibangun:** Website pendaftaran event lari yang digunakan untuk mengelola proses peserta mulai dari registrasi hingga pengambilan racepack.

**Masalah yang diselesaikan:** Menyelesaikan permasalahan penyelenggara yang kesulitan untuk melakukan dan mengidentifikasi identitas, dan nomor pendaftaran peserta secara manual dalam proses pemberian race pack. Web ini menyelesaikan kerumitan pencatatan manual di kertas/spreadsheet, mencegah kecurangan data ganda, serta mengatasi risiko salah serah terima ukuran jersey dan nomor BIB melalui verifikasi kode terpusat. 

**Menyediakan apa:** Website ini menyediakan sistem terpusat untuk kelola pendaftaran dan pengidentifikasian identitas peserta, sebagai berikut:
**1) Bagi Peserta (Di Sisi Depan / Front-End):**
Web ini menyediakan layanan pendaftaran mandiri secara online. Peserta bisa melihat informasi lengkap event (jadwal, kategori 5K/10K, dan benefit), mengisi formulir pendaftaran yang aman (tervalidasi NIK dan usia), melakukan pembayaran langsung, hingga tampil konfirmasi pendaftaran digital yang berisi nomor BIB, kode unik, dan status aktif mereka.

**2) Bagi Panitia (Di Sisi Dasbor / Back-End):**
Web ini menyediakan alat manajemen operasional. Panitia dibekali fitur untuk memasukkan kode pendaftaran peserta guna mencocokkan data jersey dan nomor BIB saat serah terima (handover), serta halaman rekapitulasi data yang menampilkan total peserta aktif dan sisa racepack yang belum diambil secara real-time.


# SECTION 2 - User personas

**Penyelenggara Event**

**Tujuan:** Mengelola proses pendaftaran peserta event lari secara mandiri dan terintegrasi melalui sistem online agar proses administrasi menjadi lebih efektif dan terorganisir.

**Pain Point:** Selama ini proses pendaftaran dan pendataan peserta masih dilakukan secara manual menggunakan formulir, kertas, atau spreadsheet secara manual menggunakan formulir, kertas, atau spreadsheet sehingga berisiko menyebabkan duplikasi data peserta, kesalahan pencatatan identitas, serta kesalahan saat proses serah terima racepack dan BIB. 

**Kebutuhan Utama:** Membutuhkan sistem terpusat yang dapat digunakan untuk mengelola pendaftaran peserta, menyimpan identitas pelari, melakukan proses handover racepack, serta menghasilkan rekapitulasi peserta secara otomatis.

**Peserta (Calon Pelari)**

**Tujuan:** Memudahkan proses pendaftaran event lari secara online tanpa harus melakukan pencatatan dan registrasi secara manual

**Pain Point:** Proses pendaftaran manual dinilai berpotensi terjadi kesalahan data peserta, serta berisiko menyebabkan kesalahan saat pengambilan racepack dan BIB. 

**Kebutuhan Utama:** Membutuhkan sistem pendaftaran yang mudah digunakan untuk melakukan registrasi peserta, mengisi identitas pelari, melakukan pembayaran, memperoleh informasi nomor BIB dan kode pendaftaran, serta mempermudah proses pengambilan racepack tanpa kesalahan.


# SECTION 3 - Tech Stack
Untuk menjaga kesederhanaan sistem, website POLI-CHROME RUN dibangun menggunakan teknologi dasar tanpa framework tambahan. Seluruh proses pengembangan difokuskan pada penggunaan HTML, CSS, JavaScript, PHP Native, dan MySQL agar sistem tetap ringan serta mudah dikembangkan. 

**A. Front-End**
1. HTML5 
Digunakan untuk membangun struktur halaman website seperti homepage, informasi event, formulir pendaftaran peserta, halaman pembayaran, halaman konfirmasi peserta, serta dashboard panitia. 
2. CSS
Digunakan untuk mengatur tampilan antarmuka website, termasuk layout halaman, navigasi, form input, tabel rekapitulasi, dan tampilan dashboard. 
3. JavaScript
Digunakan untuk validasi interaktif pada sisi pengguna, seperti pengecekan usia minimal peserta (12 tahun), validasi form pendaftaran, serta interaksi sederhana pada halaman. 

**B. Back-End**
**1. PHP-Native**
Digunakan untuk memproses seluruh logika sistem, meliputi:
- Pengelolaan data pendaftaran peserta
- Validasi NIK (1 NIK untuk 1 peserta)
- Pembuatan nomor BIB dan kode pendaftaran
- Pengelolaan status pembayaran
- Proses handover racepack
- Pengelolaan status pengambilan racepack
- Rekapitulasi data peserta
**2. MySQL **
Digunakan sebagai media penyimpanan seluruh data sistem, meliputi:
- Data identitas peserta
- Data kategori lari
- Nomor BIB
- Kode pendaftaran
- Ukuran jersey
- Status pembayaran
- Data pengambilan racepack
- Rekapitulasi peserta

**C. Development Environment**
**1. XAMPP**
Digunakan sebagai server lokal selama proses pengembangan karena menyediakan Apache, PHP, dan MySQL dalam satu lingkungan pengembangan. 
**2. phpMyAdmin**
Digunakan untuk mengelola database, membuat tabel, serta melakukan pengujian data peserta dan transaksi. 
**3. Visual Studio Code **
Digunakan sebagai code editor untuk proses pengembangan antarmuka dan logika sistem.


# SECTION 4 — Data Models

**1. Admins**
Digunakan untuk menyimpan data panitia atau penyelenggara yang memiliki akses ke dashboard pengelolaan peserta dan racepack. 
- Id
- Name
- Email
- Password
- Role: enum ('admin', 'staff')
- Phone_number
- Timestamps
  
**2. Events**
Digunakan untuk menyimpan informasi event lari yang diselenggarakan.
-  Id
- Event_name
- Slug
- Description
- Event_date
- Location
- Registration_open
- Registration_close
- Poster
- Timestamps
  
**3. Participants**
Digunakan untuk menyimpan seluruh data peserta yang melakukan pendaftaran event.
Keterangan:
- BIB_number digunakan sebagai nomor peserta saat event berlangsung
- registration_code digunakan untuk pengambilan racepack
- participant_status menunjukkan status peserta setelah pembayaran

- Id
- event_id (FK: events)
- Full_name
- Bib_name
- Email
- Phone_number
- Birth_date
- NIK (one participants)
- Emergency_contact
- Medical_history (nullable)
- Jersey_size: enum('S', 'M', 'L', 'XL')
- Category: enum('5K', '10K')
- BIB_number (unique)
- Registration_code (unique)
- Participant_status: enum('pending', 'active', 'inactive')
- Timestamps
  
**4. Payments**
Digunakan untuk menyimpan data pembayaran peserta.
Keterangan:
a. Status awal peserta adalah pending
b. Setelah pembayaran diverifikasi, status berubah menjadi paid
c. Peserta kemudian menjadi active

- Id
- Participant_id (FK: participants)
- Invoice_number (unique)
- Amount
- Payment_method
- Payment_proof
- Payment_status: enum('pending', 'paid', 'failed')
- Payment_date (nullable)
- Verified_by (FK: admins)
- Timestamps
  
**5. Racepacks**
Digunakan untuk mengelola proses serah terima BIB dan racepack.
Keterangan:
a. Panitia memasukkan registration_code
b. Sistem menampilkan data peserta
c. Status berubah dari not_taken menjadi taken

- Id
- Participant_id (FK: participants)
- BIB_number
- Jersey_size
- Pickup_status: enum('not_taken', 'taken')
- Pickup_time (nullable)
- Handover_by (FK: admins)
- Timestamps
  
**6. Reports**
Digunakan untuk menampilkan rekapitulasi peserta dan status pengambilan racepack pada dashboard panitia.
Data rekap dihasilkan dari proses perhitungan data pada tabel participants dan racepacks.

- Total_participants
- Total_5k
- Total_10k
- Total_taken_racepack
- Total_not_taken_racepack
- Report_date
- Timestamps

**7. Relasi**
- Admin → mengelola data peserta, pembayaran, dan proses handover racepack
- Event → memiliki banyak Participants
- Participant → memiliki satu Payment
- Participant → memiliki satu Racepack
- Participant → memiliki banyak Notifications
- Racepack → memiliki banyak Handover Transactions
- Racepack → diverifikasi oleh Admin
- Payment → diverifikasi oleh Admin

# Section 5 - Core Features
## Homepage Event
Menampilkan informasi event melalui fitur:
1. Navbar, berisi home, facilities, registration, race guide, kerjasama, contact
2. Hero Section
3. Informasi Event, berisi Tanggal Pelaksanaan, Lokasi, Kategori Lari, Facilities ( Jersey, Finisher Medal, Goodie Bag, Refreshment, Water Station, Doorprize, BIB)
4. Tombol Pendaftaran, ketika dipilih sistem mengarahkan ke halaman formulir pendaftaran

## Formulir Pendaftaran







# SECTION 6 - User Flows 
**Flow: Peserta Melakukan Pendaftaran Event **
1. Peserta membuka halaman utama POLI-CHROME RUN
2. Peserta melihat informasi event:
   - Jadwal event
   - Lokasi
   - Benefit peserta
   - Kategori lari
3. Peserta menekan tombol Daftar Sekarang
4. Sistem membuka halaman formulir pendaftaran
5. Peserta mengisi data:
   - Nama lengkap
   - Nama pada BIB
   - Email
   - Nomor telepon
   - Tanggal lahir
   - NIK
   - Kontak darurat
   - Riwayat penyakit
   - Ukuran jersey
   - Kategori lari
6. Sistem melakukan validasi:
   - Cek usia minimal 12 tahun
   - Cek NIK sudah pernah dipakai atau belum
7. Jika data tidak valid:
   - Sistem menampilkan pesan error
   - Peserta diminta memperbaiki data
8. Jika data valid:
   - Sistem menyimpan data peserta
   - Sistem membuat nomor BIB otomatis
   - Sistem membuat kode pendaftaran
9. Sistem mengarahkan peserta ke halaman pembayaran


**Flow: Peserta Melakukan Pembayaran**
1. Peserta membuka halaman pembayaran
2. Sistem menampilkan:
   - Nama peserta
   - Kategori lari
   - Nominal pembayaran
   - Peserta memilih metode pembayaran
   - Peserta mengunggah bukti pembayaran
3. Jika pembayaran valid:Sistem menampilkan:
   - Nama peserta
   - Nama pada BIB
   - Nomor BIB
   - Kategori

**Flow: Panitia Melakukan Handover Racepack**
1. Panitia login ke dashboard
2. Panitia membuka menu Handover BIB
3. Panitia memasukkan kode pendaftaran peserta
4. Sistem mencari data peserta
   Sistem menampilkan:
   - Nama lengkap
   - Nama pada BIB
   - Email
   - Ukuran jersey
   - Nomor BIB
   - Kategori lari
   - Status pengambilan
5. Sistem melakukan pengecekan:
   Jika status: Not Taken
   maka tombol: Konfirmasi Pengambilan ditampilkan
6. Panitia memilih tombol konfirmasi
   Sistem mengubah status menjadi: Taken
   Sistem menyimpan:
7. Waktu pengambilan
8. Admin yang melakukan handover


**Flow: Panitia Melihat Rekap Peserta**
1. Panitia membuka menu My Transaction / Rekap
2. Sistem menghitung seluruh data peserta
   Sistem menampilkan:
   - Total peserta
   - Total peserta kategori 5K
   - Total peserta kategori 10K
   - Total racepack sudah diambil
   - Total racepack belum diambil
   - Total peserta aktif
   - Total peserta belum aktif
3. Sistem memperbarui data secara otomatis ketika:
   - Ada peserta baru
   - Pembayaran diverifikasi
   - Racepack diserahkan

