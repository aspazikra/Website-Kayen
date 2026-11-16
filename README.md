# Website Desa Kayen

Village information website for Desa Kayen, built with native **PHP**, **MySQL** and **Bootstrap 5** (2025).

## Features

**Public pages**
- Home and village profile
- News and announcements
- Village documents
- Infographics
- Local MSME (UMKM) directory

**Admin panel** (`/admin`)
- Login with hashed passwords
- Create, edit and delete news, documents and UMKM entries

## Tech stack

PHP (mysqli), MySQL, Bootstrap 5, HTML, CSS, JavaScript

## Running locally (XAMPP)

1. Copy this folder into `htdocs/`.
2. Create a database named `website_kayen` and import `database/website_kayen.sql` (tables: `admin_desa`, `berita`, `dokumen_desa`, `umkm_desa`).
3. Adjust the connection settings in `database/koneksi.php` if needed.
4. Open `http://localhost/Website-Kayen/` in the browser, and `http://localhost/Website-Kayen/admin/adminlogin.php` for the admin panel.

## Author

[Muhammad Aspa Zikra](https://github.com/aspazikra)
