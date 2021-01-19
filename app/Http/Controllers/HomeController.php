<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class HomeController extends Controller
{
    public function index() {
        $all_dress = Dress::all();
        $data = [
            'testo' => 'ciaooooo',
            'dress' => $all_dress
        ];
        return view('home', $data);
    }
}
