🚗 API Cuci Mobil
API RESTful berbasis Laravel untuk mengelola layanan cuci mobil dan reservasi.

📌 Ringkasan
API ini memungkinkan pengguna untuk:

Mengelola layanan cuci mobil (buat, lihat, ubah, hapus)

Mengelola reservasi layanan cuci
📬 Endpoint API
Layanan Cuci
GET /api/wash-services - Menampilkan semua layanan

GET /api/wash-services/{id} - Menampilkan satu layanan berdasarkan ID

POST /api/wash-services - Menambahkan layanan baru

PUT /api/wash-services/{id} - Memperbarui layanan berdasarkan ID

DELETE /api/wash-services/{id} - Menghapus layanan berdasarkan ID

Reservasi
GET /api/reservations - Menampilkan semua reservasi

GET /api/reservations/{id} - Menampilkan reservasi tertentu

POST /api/reservations - Menambahkan reservasi baru

PUT /api/reservations/{id} - Memperbarui reservasi

DELETE /api/reservations/{id} - Menghapus reservasi

📄 Koleksi Postman
Gunakan koleksi Postman berikut untuk mencoba endpoint API:

Koleksi Wash Services

Koleksi Reservations

Koleksi Tambahan
