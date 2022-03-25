<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\InvestigacionBienes;

class HomeController extends Controller
{
    public function index() {
        return view('home', [
            'meses' => [
                '',
                'Enero',
                'Febrero',
                'Marzo',
                'Abril',
                'Mayo',
                'Junio',
                'Julio',
                'Agosto',
                'Septiembre',
                'Octubre',
                'Noviembre',
                'Diciembre'
            ],
            'rows' => InvestigacionBienes::orderBy('fecha', 'desc')->get()
        ]);
    }

    public function register() {
        return view('register');
    }

    public function registerGo(Request $request) {
        InvestigacionBienes::create($request->all());
        return redirect()->route('Home');
    }
}
