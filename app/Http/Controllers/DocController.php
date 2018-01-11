<?php

namespace App\Http\Controllers;


class DocController extends Controller
{
    public function index($viewName = null) {


        $viewName = ($viewName === null) ? "installation" : "$viewName";

        $viewName = str_replace('-','.', $viewName);
        return view('docs.'. $viewName);

    }

}

