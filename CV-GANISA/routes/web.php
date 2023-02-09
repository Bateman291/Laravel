<?php

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

Route::get('/', function () {
    return('welcome');
});

Route::get('/cv', function () {
    return view('cv');
});

// Route::get('/siswa', function() {
//     return view('smkbpi.siswarpl',
//     [
//         "siswa01" => "Risa Lestari",
//         "siswa02" => "Rudi Hermawan",
//         "siswa03" => "Bambang Kusumo",
//         "siswa04" => "Lisa Permata"
//     ]);
// });

Route:: get('/siswarpl', function () {
    $arrSiswa = ["Risa Lestari", "Rudi Hermawan", "Bambang Kusumo", "Lisa Permata"];

    return view('smkbpi.siswarpl')->with('siswa', $arrSiswa);
});

Route:: get('/nilaisiswa', function () {
    $nama = 'Tya Kirana Putri';
    $nilai = 75;
    return view('smkbpi.nilaisiswa',compact('nama','nilai'));
});                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   


