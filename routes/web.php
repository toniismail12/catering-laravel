<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\PaketCatering\PaketCateringController;
use App\Http\Controllers\Pelanggan\PelangganController;
use App\Http\Controllers\PesananMasuk\PesananMasukController;
use App\Http\Controllers\PesananSewaAlat\PesananSewaAlatController;
use App\Http\Controllers\RiwayatTransaksi\RiwayatTransaksiController;
use App\Http\Controllers\SendEmail\SendEmailController;
use App\Http\Controllers\SewaAlat\SewaAlatController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'auth']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'save_register']);

Route::get('/logout', [LoginController::class, 'destroy']);

Route::get('/detail-paket', [IndexController::class, 'detail_paket']);

Route::get('/pesan-paket', [IndexController::class, 'pesan_paket']);

Route::post('/simpan-pesanan', [IndexController::class, 'simpan_pesan_paket']);

Route::get('/detail-pesanan', [IndexController::class, 'detail_pesan_paket']);

Route::get('/cetak-struk', [IndexController::class, 'cetak_struk']);

Route::get('/pembayaran', [IndexController::class, 'pembayaran']);

Route::post('/kirim-pembayaran', [IndexController::class, 'kirim_pembayaran']);

Route::get('/status-pesanan', [IndexController::class, 'status_pesanan']);

Route::get('/bukti-transfer', [IndexController::class, 'bukti_transfer']);

// pesan sewa alat
Route::get('/pesan-alat-satuan', [IndexController::class, 'pesan_alat_satuan']);

Route::get('/pesan-alat-permeja', [IndexController::class, 'pesan_alat_permeja']);

Route::post('/simpan-pesan-alat-satuan', [IndexController::class, 'simpan_pesan_alat_satuan']);

Route::post('/simpan-pesan-alat-permeja', [IndexController::class, 'simpan_pesan_alat_permeja']);

Route::get('/masukan-jumlah-pesan-alat', [IndexController::class, 'masukan_jumlah_pesan_alat']);

Route::post('/update-jumlah-pesan-alat/{uuid}', [IndexController::class, 'update_jumlah_pesan_alat']);

Route::get('/detail-pesan-alat-satuan', [IndexController::class, 'detail_pesan_alat_satuan']);

Route::get('/cetak-struk-alat-satuan', [IndexController::class, 'cetak_struk_alat_satuan']);

Route::get('/lupa-password', [IndexController::class, 'lupa_password']);
Route::post('/lupa-password', [SendEmailController::class, 'sendEmail']);


// admin
Route::controller(AdminController::class)->group(function () {
    
    Route::get('/dashboard-admin', 'index')->middleware("auth"); 
    Route::get('/data-pelanggan', 'data_pelanggan')->middleware("auth"); 

});

Route::controller(PelangganController::class)->group(function () {
    
    Route::get('/dashboard-pelanggan', 'index')->middleware("auth"); 
    Route::get('/update-password', 'update_password')->middleware("auth"); 
    Route::post('/update-password', 'update_password_post')->middleware("auth"); 

});

Route::controller(PaketCateringController::class)->group(function () {
    
    Route::get('/paket-catering', 'index')->middleware("auth"); 
    Route::get('/tambah-paket-catering', 'tambah_paket_catering')->middleware("auth"); 
    Route::post('/simpan-menu-catering', 'simpan_menu_catering')->middleware("auth");
    Route::get('/update-menu-catering/{uuid}', 'update_menu_catering')->middleware("auth");  
    Route::post('/simpan-update-menu-catering/{uuid}', 'simpan_update_menu_catering')->middleware("auth");  
    Route::get('/hapus-paket-menu/{uuid}', 'hapus_paket_menu')->middleware("auth"); 

});

Route::controller(SewaAlatController::class)->group(function () {
    
    Route::get('/sewa-alat', 'index')->middleware("auth"); 
    Route::get('/tambah-alat', 'tambah_alat')->middleware("auth");
    Route::post('/simpan-tambah-alat', 'simpan_tambah_alat')->middleware("auth"); 
    Route::get('/update-alat/{uuid}', 'update_alat')->middleware("auth");
    Route::post('/simpan-update-alat/{uuid}', 'simpan_update_alat')->middleware("auth");
    Route::get('/hapus-alat/{uuid}', 'hapus_alat')->middleware("auth"); 

});

Route::controller(PesananMasukController::class)->group(function () {
    
    Route::get('/pesanan-masuk', 'pesanan_masuk')->middleware("auth"); 
    Route::get('/bukti-bayar', 'bukti_bayar')->middleware("auth"); 
    Route::get('/terima-pesanan', 'terima_pesanan')->middleware("auth"); 
    Route::get('/tolak-pesanan', 'tolak_pesanan')->middleware("auth"); 
    Route::get('/sedang-diantar', 'sedang_diantar')->middleware("auth"); 
    Route::get('/pesanan-selesai', 'pesanan_selesai')->middleware("auth"); 
   
});

Route::controller(PesananSewaAlatController::class)->group(function () {
    
    Route::get('/pesanan-masuk-alat', 'pesanan_masuk_alat')->middleware("auth"); 
    Route::get('/bukti-bayar-alat', 'bukti_bayar_alat')->middleware("auth");
    Route::get('/terima-pesanan-alat', 'terima_pesanan_alat')->middleware("auth"); 
    Route::get('/tolak-pesanan-alat', 'tolak_pesanan_alat')->middleware("auth");
    Route::get('/sedang-diantar-alat', 'sedang_diantar_alat')->middleware("auth"); 
    Route::get('/pesanan-selesai-alat', 'pesanan_selesai_alat')->middleware("auth");   
   
});

Route::controller(RiwayatTransaksiController::class)->group(function () {
    
    Route::get('/riwayat-pesan-catering', 'riwayat_pesan_catering')->middleware("auth"); 
    Route::get('/riwayat-sewa-alat', 'riwayat_sewa_alat')->middleware("auth"); 
   
});

