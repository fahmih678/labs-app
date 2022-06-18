<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MemberController extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Member Page"
        ];
        return view('pages/member/dashboard', $data);
    }
    public function profile()
    {
        $data = [
            "title" => "Profile Member"
        ];
        return view('pages/member/profile', $data);
    }
    public function reservation()
    {
        $data = [
            "title" => "Reservation Member"
        ];
        return view('pages/member/reservation', $data);
    }
    public function history()
    {
        $data = [
            "title" => "Reservation History"
        ];
        return view('pages/member/history', $data);
    }
}
