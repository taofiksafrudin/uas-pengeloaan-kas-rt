<?php
namespace App\Controllers;
class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact'
        ]);
    }

    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman Artikel'
        ]);
    }
}