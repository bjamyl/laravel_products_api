<?php

namespace App\Http\Controllers;

use Sanity\Client as SanityClient;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\ApiToken;

class SanityController extends Controller
{
    
    public function index(){
      $client = new SanityClient([
        'projectId' => 's8u4200b',
        'dataset' => 'pink-mallard',
        'useCdn' => false,
        'apiVersion' => '2019-01-29',
      ]);

      $results = $client->fetch(
        '*'
      );

      foreach($results as $post){
        echo $post;
      }

    }

}

