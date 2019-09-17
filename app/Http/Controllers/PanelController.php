<?php

namespace App\Http\Controllers;

class PanelController extends Controller
{
    /**
     * Serve app
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('panel.index');
    }
}
