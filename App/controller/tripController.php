<?php

namespace App\controller;

use Core\Framework;

class tripController extends Framework
{
    public function index()
    {
        $this->display('trip/setting_up.html');
    }
}