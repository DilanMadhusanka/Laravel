<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        $pizza = [
            'base' => 'cheesy crust'
        ];
        $pizza2 = [
            ['type' => 'A', 'catog' => 'Sugar'],
            ['type' => 'B', 'catog' => 'Lime'],
            ['type' => 'C', 'catog' => 'Salt'],
        ];
        return view('home',$pizza, ['pizza2' => $pizza2]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
