<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() {
        return view('hello.index', ['msg' => '']);
    }

    // public function post(Request $request) {
    //     return view('hello.index', ['msg' => $request->msg]);
    // }

    public function create() {
        return view('hello.create');
    }

    public function store(Request $request) {
        return redirect('/hello');
    }

    public function edit() {
        return view('hello.edit');
    }

    public function update(Request $request) {
        return redirect('/hello');
    }

    public function destroy(Request $request) {
        return redirect('/hello');
} 
