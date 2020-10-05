<?php

namespace App\Controllers;


class Home extends \App\Core\BaseController
{
    public function index()
    {
        return view('welcome_message');
    }
    public function user()
    {
        return view('user.php');
    }

}
