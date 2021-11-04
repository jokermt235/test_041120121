<?php
namespace App\Optional\Simples;

use App\Optional\Simples\Services\Create;
use App\Optional\Simples\Services\Get;
class Simple implements ISimple{
    use Create, Get;
}
