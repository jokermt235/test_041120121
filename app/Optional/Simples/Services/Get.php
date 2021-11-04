<?php
namespace App\Optional\Simples\Services;
use App\Models\Simple;
trait Get
{
    public function Get(){
        return Simple::orderBy('id', 'desc')->first();
    }
}
