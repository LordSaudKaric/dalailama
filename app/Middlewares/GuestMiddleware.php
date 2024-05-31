<?php declare(strict_types=1);

namespace App\Middlewares;

use Dalailama\Cookie\Cookie;
use Dalailama\Session\Session;

class GuestMiddleware
{
    public function handle()
    {
        $auth = Session::get('user') ?? Cookie::get('user');
        if ($auth) {
            die("The is error in the middleware!");
        }
    }
}