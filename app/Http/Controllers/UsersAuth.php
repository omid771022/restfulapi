<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event\UserCreated;
class UsersAuth extends Controller
{
    public function  event(){
        event(new UserCreated('12345'));

    }
}
