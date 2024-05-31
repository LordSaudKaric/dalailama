<?php

if (! function_exists("view")) {
    function view($view, $data = [], $type = 'blade') {
        return \Dalailama\View\View::render($view, $data, $type);
    }
}

if (! function_exists("request")) {
    function request($key) {
        return \Dalailama\Http\Request::value($key);
    }
}

if (! function_exists("redirect")) {
    function redirect($path) {
        return \Dalailama\Http\Url::redirect($path);
    }
}

if (! function_exists("previous")) {
    function previous() {
        return \Dalailama\Http\Url::previous();
    }
}

if (! function_exists("url")) {
    function url($path) {
        return \Dalailama\Http\Url::path($path);
    }
}

if (! function_exists("asset")) {
    function asset($path) {
        return \Dalailama\Http\Url::path('assets' . $path);
    }
}

if (! function_exists("dnd")) {
    function dnd($data) {
        echo "<pre>
              <div style='background-color: black; color: green; font-size: 20px; padding: 10px 10px; margin: 25px 0'>";
        if (is_array($data)) {
            print_r($data);
        } else {
            echo $data;
        }
        echo "</div></pre>";
        die();
    }
}

if (! function_exists("session")) {
    function session($key) {
        return \Dalailama\Session\Session::get($key);
    }
}

if (! function_exists("flash")) {
    function flash($key) {
        return \Dalailama\Session\Session::flash($key);
    }
}

if (! function_exists("auth")) {
    function auth($table, $column) {
        $auth = \Dalailama\Session\Session::get($table) ?: \Dalailama\Cookie\Cookie::get($table);

        return \Dalailama\Database\Database::table($table . 's')->where($column, $auth)->get();
    }
}