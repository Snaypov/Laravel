<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $title = 'First Laravel Project';
        $header = '<em>Home Page</em>';
        $users = ['Vasya', 'Petya'];

        return view('home', compact('title', 'header', 'users'));
    }
    public function contacts(){
        return view('contacts');
    }

    public function getContacts(){
        return 'contacts';
    }
}
