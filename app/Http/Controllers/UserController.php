<?php

namespace App\Http\Controllers;

use App\Event\UserCreated;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function eventtest()
    {
        event(new UserCreated('abc@gmail.com'));
    }
}
