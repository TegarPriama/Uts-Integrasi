# 🚗 API Cuci Mobil

**API RESTful berbasis Laravel** untuk mengelola layanan cuci mobil dan reservasi pelanggan.

---

## 📌 Ringkasan

API ini memungkinkan pengguna untuk:

- ✅ Mengelola data layanan cuci mobil *(CRUD)*
- ✅ Mengatur data reservasi pelanggan untuk layanan tersebut

---

## 📬 Endpoint API

### 🧼 Layanan Cuci

| Method | Endpoint | Deskripsi |
|--------|----------|-----------|
| `GET`  | `/api/wash-services` | Menampilkan semua layanan |
| `GET`  | `/api/wash-services/{id}` | Menampilkan satu layanan berdasarkan ID |
| `POST` | `/api/wash-services` | Menambahkan layanan baru |
| `PUT`  | `/api/wash-services/{id}` | Memperbarui layanan berdasarkan ID |
| `DELETE` | `/api/wash-services/{id}` | Menghapus layanan berdasarkan ID |

---

### 📅 Reservasi

| Method | Endpoint | Deskripsi |
|--------|----------|-----------|
| `GET`  | `/api/reservations` | Menampilkan semua reservasi |
| `GET`  | `/api/reservations/{id}` | Menampilkan reservasi tertentu |
| `POST` | `/api/reservations` | Menambahkan reservasi baru |
| `PUT`  | `/api/reservations/{id}` | Memperbarui reservasi berdasarkan ID |
| `DELETE` | `/api/reservations/{id}` | Menghapus reservasi berdasarkan ID |

---

## 📄 Koleksi Postman

Gunakan koleksi berikut untuk mencoba API melalui Postman:

- [🧼 Koleksi Wash Services](https://tegarpriama.postman.co/workspace/TegarPriama's-Workspace~78ccea03-ce98-491e-86da-77fa9bb9d149/folder/44149198-5f231d94-3614-42b4-9334-862acbc11a7e)
- [📅 Koleksi Reservations](https://tegarpriama.postman.co/workspace/TegarPriama's-Workspace~78ccea03-ce98-491e-86da-77fa9bb9d149/folder/44149198-76ad706c-b9ea-4caf-8411-ff3f7d901652)
- [🧪 Koleksi Tambahan](https://tegarpriama.postman.co/workspace/TegarPriama's-Workspace~78ccea03-ce98-491e-86da-77fa9bb9d149/folder/44149198-fff8b132-f90b-421e-af43-12573fc2dbf5)
