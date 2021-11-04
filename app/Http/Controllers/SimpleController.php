<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Optional\Simples\ISimple;

class SimpleController extends Controller
{

    private $_simple;

    public function __construct(ISimple $simple){
        $this->_simple = $simple;
    }

    public function index(Request $request){
        return $this->_simple->Get();
    }

    public function create(){
        $result = $this->_simple->Create();
        return $result;
    }

}
