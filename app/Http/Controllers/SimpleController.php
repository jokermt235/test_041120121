<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Optional\Simples\ISimple;
use Illuminate\Support\Facades\View;

class SimpleController extends Controller
{

    private $_simple;

    public function __construct(ISimple $simple){
        $this->_simple = $simple;
    }

    public function index(Request $request){
        return view('simples.index');
    }

    public function create(Request $request){
        $result = $this->_simple->Create($request->request->all());
        return view('simples.generated', $result);
    }

}
