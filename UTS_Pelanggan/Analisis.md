## **Analisis**

### **Latar Belakang**
Aplikasi ini bertujuan untuk mengelola data pelanggan secara efektif dengan menyediakan fitur CRUD (Create, Read, Update, Delete) yang akan digunakan oleh admin. Setiap pelanggan memiliki data pribadi yang terdiri dari nama, email, nomor telepon, dan alamat. Sistem ini akan menggunakan autentikasi untuk memastikan hanya admin yang dapat mengakses data.

### **Tujuan**
1. Memberikan kemudahan dalam pengelolaan data pelanggan untuk tim admin.
2. Memastikan data pelanggan tercatat dengan lengkap, akurat, dan aman.
3. Menyediakan fitur yang memungkinkan admin melakukan penambahan, pengeditan, dan penghapusan data pelanggan sesuai kebutuhan.

### **Fitur Utama**
1. **Autentikasi**: Fitur login untuk memastikan akses hanya diberikan kepada admin yang berwenang.
2. **Manajemen Data Pelanggan**:
   - **Tambah Pelanggan**: Menambah data pelanggan baru ke dalam sistem.
   - **Lihat Daftar Pelanggan**: Menampilkan seluruh data pelanggan yang tersimpan di sistem.
   - **Edit Pelanggan**: Memperbarui data pelanggan yang sudah ada.
   - **Hapus Pelanggan**: Menghapus data pelanggan yang tidak diperlukan.
3. **Seeder dan Factory untuk Data Dummy**: Menggunakan seeder dan factory untuk mengisi data dummy pelanggan, membantu pengujian dan pengembangan aplikasi.

### **Struktur Data Pelanggan**
Berdasarkan migrasi yang dibuat, tabel pelanggan (`customers`) berisi kolom-kolom berikut:
- `name` (string): Nama lengkap pelanggan.
- `email` (string): Alamat email pelanggan, unik untuk setiap pelanggan.
- `phone_number` (string): Nomor telepon pelanggan.
- `address` (text, optional): Alamat lengkap pelanggan.

### **Stakeholders**
1. **Admin**: Pengguna utama yang akan mengelola data pelanggan.
2. **Tim Pengembang**: Pengembang yang bertanggung jawab untuk membuat dan memelihara aplikasi.
3. **Manajemen**: Memantau efektivitas aplikasi dalam mendukung pengelolaan data pelanggan.

---
