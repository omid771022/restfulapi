<?php

namespace App\Http\Controllers;


use App\Events\Register;
use App\Events\RegisterUser;
use App\Http\Requests\User\CreateRequest;
use App\User;
use http\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function index1()
    {
        $rticle = User::all();
        return $rticle;
    }

    public function show(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            return $user;
        } else {
            return response(['message' => ' گوساله نیست  دنبال  چی تو اخه '], 404);
        }
    }
    public function create(CreateRequest $request)
    {
          $user = User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => $request->password,
            'token'=>$request->token
             ],'message');

             event(new RegisterUser($user));

            return response($user,'201');
    }


}



