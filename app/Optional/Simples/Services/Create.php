<?php                            
namespace App\Optional\Simples\Services;
use App\Models\Simple;
trait Create{
    public function Create($data){ 
        $base_url = pathinfo($data['link'], PATHINFO_DIRNAME);
        $simple = Simple::create([
          'link' => $data['link'],
          'simple' => $generated
        ]);
        return $simple->save();
    }
}

