
## **Business Requirements Document (BRD)**

### **A. Project Overview**
**Nama Proyek**: Aplikasi Pengelolaan Data Pelanggan

**Deskripsi**: Aplikasi ini bertujuan untuk memberikan kemampuan bagi admin dalam mengelola informasi pelanggan dengan fitur CRUD, serta autentikasi untuk memastikan keamanan data pelanggan.

### **B. Tujuan Bisnis**
1. Memudahkan admin dalam mengelola data pelanggan dengan efisien.
2. Menyediakan data pelanggan yang tersimpan dengan rapi dan dapat diakses dengan mudah.
3. Memastikan keamanan data pelanggan dengan membatasi akses ke data hanya bagi admin yang berwenang.

### **C. Lingkup Proyek**
1. **Autentikasi Admin**:
   - Sistem harus meminta login sebelum admin dapat mengakses aplikasi.
   - Menampilkan pesan kesalahan jika login gagal.
2. **Manajemen Data Pelanggan**:
   - **Tambah Pelanggan**: Admin dapat menambahkan pelanggan baru ke sistem.
   - **Lihat Daftar Pelanggan**: Admin dapat melihat data pelanggan yang tersimpan.
   - **Edit Pelanggan**: Admin dapat memperbarui informasi pelanggan yang sudah ada.
   - **Hapus Pelanggan**: Admin dapat menghapus data pelanggan jika diperlukan.
3. **Seeder dan Factory untuk Pengujian Data Dummy**:
   - Seeder harus digunakan untuk mengisi data dummy pelanggan secara otomatis.
   - Factory digunakan untuk membuat data pelanggan dummy dalam jumlah yang dapat dikustomisasi untuk pengujian.

### **D. Functional Requirements**
1. **Autentikasi**:
   - Sistem harus mengharuskan admin untuk login sebelum menggunakan aplikasi.
   - Menampilkan pesan error jika kredensial tidak valid.
2. **Manajemen Pelanggan**:
   - Sistem harus menyediakan formulir untuk menambah dan mengedit data pelanggan, termasuk kolom untuk nama, email, nomor telepon, dan alamat.
   - Sistem harus mencegah duplikasi data berdasarkan email pelanggan.
   - Sistem harus menampilkan daftar pelanggan yang tersimpan di dalam database.
3. **Seeder dan Factory**:
   - Seeder harus digunakan untuk mengisi data dummy pelanggan secara otomatis.
   - Factory digunakan untuk membuat data pelanggan dummy dalam jumlah yang dapat dikustomisasi untuk pengujian.

### **E. Non-Functional Requirements**
1. **Keamanan**: Sistem harus memastikan hanya admin yang dapat mengakses data pelanggan dengan autentikasi yang kuat.
2. **Kinerja**: Sistem harus dapat mengelola data pelanggan dalam jumlah besar tanpa mengurangi kinerja aplikasi.
3. **Usability**: Antarmuka aplikasi harus intuitif dan mudah digunakan oleh admin.
4. **Reliabilitas**: Data pelanggan harus tersimpan dengan aman, dan sistem tidak boleh mengalami kegagalan saat melakukan operasi CRUD.

### **F. Use Case**

1. **Login**
   - **Aktor**: Admin
   - **Deskripsi**: Admin melakukan login untuk mengakses aplikasi dan mengelola data pelanggan.
   - **Alur Kerja**:
     1. Admin memasukkan username dan password.
     2. Sistem memverifikasi kredensial.
     3. Sistem menampilkan dashboard jika login berhasil atau menampilkan pesan error jika gagal.

2. **Tambah Pelanggan**
   - **Aktor**: Admin
   - **Deskripsi**: Admin menambah data pelanggan baru.
   - **Alur Kerja**:
     1. Admin mengisi formulir data pelanggan (nama, email, nomor telepon, alamat).
     2. Admin menyimpan data.
     3. Sistem menyimpan data ke database dan menampilkan pelanggan baru di daftar.

3. **Lihat Daftar Pelanggan**
   - **Aktor**: Admin
   - **Deskripsi**: Admin melihat semua data pelanggan.
   - **Alur Kerja**:
     1. Admin memilih menu "Daftar Pelanggan".
     2. Sistem menampilkan semua data pelanggan yang tersimpan.

4. **Edit Pelanggan**
   - **Aktor**: Admin
   - **Deskripsi**: Admin memperbarui data pelanggan yang ada.
   - **Alur Kerja**:
     1. Admin memilih pelanggan yang akan diedit.
     2. Admin memperbarui informasi pelanggan.
     3. Sistem menyimpan perubahan data pelanggan di database.

5. **Hapus Pelanggan**
   - **Aktor**: Admin
   - **Deskripsi**: Admin menghapus data pelanggan.
   - **Alur Kerja**:
     1. Admin memilih pelanggan yang akan dihapus.
     2. Sistem meminta konfirmasi penghapusan.
     3. Jika dikonfirmasi, sistem menghapus data pelanggan dari database.

### **G. Assumptions and Dependencies**
1. Sistem mengandalkan database untuk menyimpan data pelanggan.
2. Admin harus memiliki akun yang terdaftar untuk mengakses aplikasi.
3. Aplikasi memerlukan koneksi internet untuk berfungsi jika berbasis web.

### **H. Approval and Sign-Off**
**Pemangku Kepentingan**:
- **Admin**: Sebagai pengguna utama aplikasi.
- **Tim Pengembang**: Pengembang yang akan membangun dan memelihara aplikasi.
- **Manajemen**: Pemantau penggunaan aplikasi untuk memenuhi tujuan bisnis.

---

Dokumen di atas merupakan panduan dalam pengembangan aplikasi data pelanggan. Jika ada perubahan atau tambahan persyaratan, dokumen ini akan diperbarui sesuai dengan kebutuhan bisnis dan teknis.
