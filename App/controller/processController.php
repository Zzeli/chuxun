<?php

namespace App\controller;

use Core\Framework;
class processController extends Framework
{
    public function index()
    {
        $this->display('process/overview.html');
    }
}