<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Admin Page"
        ];
        return view("pages/admin/dashboard", $data);
    }
    public function users()
    {
        $data = [
            "title" => "Admin Page || Users"
        ];
        return view("pages/admin/users", $data);
    }
    public function laboratory()
    {
        $data = [
            "title" => "Admin Page || Laboratory"
        ];
        return view("pages/admin/laboratory", $data);
    }
    public function reservation()
    {
        $data = [
            "title" => "Admin Page || Reservation"
        ];
        return view("pages/admin/reservation", $data);
    }
}
