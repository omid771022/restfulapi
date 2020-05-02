<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\User\CreateRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ArticleController extends Controller
{
    public function index()
    {
        $rticle = Article::all();
        return $rticle;
    }




}
