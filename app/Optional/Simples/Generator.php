<?php
namespace App\Optional\Simples;

class Generator{
    public static function generate() {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomstr = '';  
        for ($i = 0; $i < 6; $i++) {
            $randomstr .= $characters[rand(0, strlen($characters) - 1)];
        }   
        return $randomstr;
    }
}
