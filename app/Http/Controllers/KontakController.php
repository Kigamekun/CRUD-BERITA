<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class KontakController extends Controller
{
    public function index()
    {
        return view('VKontak',['kontaks'=>DB::table('kontak')->get()]);
    }
}

