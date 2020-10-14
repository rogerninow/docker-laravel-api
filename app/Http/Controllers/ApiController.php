<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ApiController extends Controller
{
    public function index()
    {
        return response()->json(['request' => 'OK']);
    }
}
