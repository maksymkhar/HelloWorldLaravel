<?php

namespace App\Http\Controllers;

use App\HolaMon;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HolaMonController extends Controller
{
    //

    public function hello()
    {
        $model = new HolaMon();
        $data["hola"] = $model->getString();
        return view('helloworld', $data);
    }
}
