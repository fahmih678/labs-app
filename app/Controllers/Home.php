<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Dashboard",
            "style" => "homepage.css"
        ];
        return view('pages/homepage', $data);
    }
}
