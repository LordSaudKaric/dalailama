<?php declare(strict_types=1);

namespace App\Controllers;

use Dalailama\View\View;

class ErrorController
{
    public function _404()
    {
        $data = [
            'page_title' => 'Not Found Page'
        ];
        return view('error/404', $data);
    }
}