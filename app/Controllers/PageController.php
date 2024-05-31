<?php
namespace App\Controllers;
class PageController
{
    public function index()
    {
        $data = [
            'page_title' => 'Home page',
        ];
        return view('page/index', $data);
    }
}