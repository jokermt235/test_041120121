<?php                            
namespace App\Optional\Simples\Services;
use App\Models\Simple;
trait Create{
    public function Create($data){  
        $simple = Simple::create([
          'link' => $data['link'],
          'simple' => $data['simple']
        ]);
        return $simple->save();
    }
}

