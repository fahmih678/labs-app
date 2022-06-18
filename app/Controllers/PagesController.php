<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class PagesController extends BaseController
{
    public function index()
    {
        //
    }
    public function login()
    {
        $data = [
            "title" => "Login Page"
        ];
        return view("pages/login");
    }
}
