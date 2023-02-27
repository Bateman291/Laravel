<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;

    class PageController extends Controller{
        public function index(){
            return "Halaman Home Admin";
        }
        public function tampil(){
            return "Data Siswa Admin";
        }
        public function nilai(){
            return View('daftar_nilai');
        }
        public function siswa(){
            return View('daftar_siswa');
        }
    }
?>