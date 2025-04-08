<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Member;
use Illuminate\Support\Facades\Route;


// DOKUMENTASI ROUTE
    //get untuk mengambil data
    //post untuk menambahkan data
    //delete untuk menghapus data
    //put untuk mengedit atau menimpa data 

Route::get('/', function () {
    return view('home');
});



// Route Dari Member Controller
Route::get('/anggota', [Member::class, 'index'])->name('anggota');

Route::get('/dokumentasi', [Member::class, 'dokumentasi'])->name('dokumentasi');




// Route Dari Admin Controller
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');

Route::post('/admin/store', [AdminController::class, 'store'])->name('admin.store');

Route::delete('admin/{data}/delete', [AdminController::class, 'delete'])->name('admin.delete');

Route::put('admin/{data}/edit', [AdminController::class, 'update'])->name('admin.edit');