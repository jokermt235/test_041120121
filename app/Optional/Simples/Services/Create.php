<?php                            
namespace App\Optional\Simples\Services;
use App\Models\Simple;
use App\Optional\Simples\Generator;
trait Create{
    public function Create($data){
        $url_data = parse_url($data['link']);
        $base_url = $url_data['host'];
        $url = $url_data['scheme']."://".$base_url.'/'.Generator::generate();
        $simple = Simple::create([
          'link' => $data['link'],
          'simple' => $url
        ]);
        return $simple->save();
    }
}

