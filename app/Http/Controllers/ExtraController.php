<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExtraController extends Controller
{
    public function index () {
        $outils=['crayons', 'bic', 'trousse', 'taille-crayon'];
        return view('pages.extra', compact('outils'));
    }
}
