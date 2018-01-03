<?php

namespace App\Http\Controllers;


class DocController extends Controller
{
    public function index($viewName = null) {


        $viewName = ($viewName === null) ? "installation" : "$viewName";
        return view('docs.'. $viewName);

    }

}

