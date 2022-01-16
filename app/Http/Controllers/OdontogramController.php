<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OdontogramController extends Controller
{
    public function canvas()
    {
        return view('odontogram.canvas');
    }
}
