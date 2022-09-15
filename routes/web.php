<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;


Route::get('/', function () {
    return view('dashboard');
});
Route::get('dashboard',[SellerController::class,'home'])->Name('dashboard');

Route::get('seller-create',[SellerController::class,'create'])->Name('seller.create');
Route::post('seller-store',[SellerController::class,'store'])->Name('seller.store');

Route::get('seller-index',[SellerController::class,'show'])->Name('seller.index');

Route::get('seller-edit/{id}',[SellerController::class,'edit'])->Name('seller.edit');
Route::post('seller-update/{id}',[SellerController::class,'update'])->Name('seller.update');

Route::get('seller-profile/{id}',[SellerController::class,'profile'])->Name('seller.profile');

Route::get('seller-delete/{id}',[SellerController::class,'destroy'])->Name('seller.delete');
