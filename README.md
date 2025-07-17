<p align="center"><a href="#" target="_blank"><img src="public/assets/img/codeflix_logo.png" width="400" alt="Codeflix Logo"></a></p>


## 🎬 Codeflix

Mini Netflix adalah aplikasi streaming video sederhana berbasis Laravel, yang memungkinkan pengguna untuk berlangganan paket tontonan melalui gateway pembayaran Midtrans. Aplikasi ini dirancang menyerupai layanan seperti Netflix namun dalam skala kecil dan edukatif.

### 🖥️ Tampilan Aplikasi Codeflix

<div align="center">
<img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/login-page.png?raw=true" alt="Login" width="45%" />
  <img src="https://raw.githubusercontent.com/ihsanzakyf/mini-netflix/main/public/assets/img/readme/register-page.png
" alt="Register Page" width="45%"/>
</div>

<br/>

<div align="center">
<img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/reset-password-page.png?raw=true" alt="Reset Password Page" width="45%"/>
<img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/payment-page.png?raw=true" alt="Payment Page" width="45%" />
</div>

<br/>

<div align="center">
 <img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/popup-payment-gateway.png?raw=true" alt="Payment Page" width="45%" />
  <img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/payment-success-by-midtrans.png?raw=true" alt="Success Payment Page By Midtrans" width="45%" />
</div>

<br/>

<div align="center">
<img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/payment-success.png?raw=true" alt="Success Payment Page" width="45%"/>
<img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/home-page.png?raw=true" alt="Home Page" width="45%" />
</div>

<br/>

<div align="center">
 <img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/detail-movie.png?raw=true
" alt="Detail Movie Page" width="45%" />
  <img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/movie-playing.png?raw=true" alt="Movie Play" width="45%" />
</div>

<br/>

<div align="center">
 <img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/email-notification-membership-expired.png?raw=true" alt="Email Membership Expired" width="45%" />
  <img src="https://github.com/ihsanzakyf/mini-netflix/blob/main/public/assets/img/readme/email-notification-reset-password.png?raw=true" alt="Email Reset Password" width="45%" />
</div>


### 🚀 Fitur Utama

- 🔐 **Autentikasi dengan Laravel Fortify**  
  Sistem login, register, dan lupa password ditangani oleh Laravel Fortify. Validasi dan keamanan bawaan Laravel seperti proteksi brute force juga sudah termasuk.

- 📧 **Pengiriman Email Dinamis (Mailable)**  
  Semua notifikasi email (termasuk reset password dan notifikasi membership) menggunakan `Mailable` Laravel. Email bisa dikustomisasi di file Blade.

- ⏰ **Membership Scheduler (Jobs / Cron Jobs)**  
  Sistem berlangganan akan dicek secara otomatis menggunakan **Scheduler** dan **Jobs**. Ketika masa aktif langganan melebihi durasi paket (misalnya 30 hari), langganan akan otomatis ditandai tidak aktif.

- 💳 **Pembayaran Online via Midtrans**  
  Pengguna dapat membeli paket langganan menggunakan metode pembayaran seperti bank transfer melalui integrasi dengan Midtrans (Snap API).

---

### 📥 Instalasi & Setup

 **1. Clone Repo**

```bash
git clone https://github.com/ihsanzakyf/mini-netflix.git
cd mini-netflix
```

 **2. Instalasi Dependency**

```bash
composer install
npm install && npm run dev
```

 **3. Setup File Environment**

```bash
cp .env.example .env
php artisan key:generate

APP_NAME=Codeflix
APP_URL=http://127.0.0.1:8000

DB_DATABASE=your_db
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=no-reply@=codeflix.com
MAIL_FROM_NAME="Codeflix"

MIDTRANS_SERVER_KEY=your_midtrans_server_key
MIDTRANS_CLIENT_KEY=your_midtrans_client_key
MIDTRANS_IS_PRODUCTION=false
```

 **4. Migrasi & Seeder**

```bash
php artisan migrate --seed
```

 **5. Running App**

```bash
php artisan serve
```

 **6. Jalankan Scheduler (Opsional - Untuk Cron Membership)**

```bash
- Manual
php artisan schedule:work

-Server
* * * * * php /path/to/artisan schedule:run >> /dev/null 2>&1
```

### 🧪 Testing Midtrans (Mode Sandbox)

 **1. Arahkan webhook midtrans**  
 Pastikan kamu sudah mengatur server key Midtrans sandbox, lalu gunakan data testing seperti:

 - Bank: BCA  
 - VA: Dikirim otomatis  
 - Status: Settlement  

 Pastikan juga webhook Midtrans mengarah ke:

 ```bash
 https://{subdomain}.ngrok-free.app/api/payment/callback
 ```
 Gunakan ngrok untuk expose local ke public:
 
 ```bash
 ngrok http 8000
 ```

 ### 📬 Mailhog untuk Testing Email

```bash
# Jalankan mailhog (jika sudah diinstal)
mailhog
# Kemudian akses di
http://localhost:8025
```


