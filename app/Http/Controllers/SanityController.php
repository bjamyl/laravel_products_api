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
        'dataset' => 'production',
        'useCdn' => false,
        'apiVersion' => '2019-01-29',
      ]);

      $results = $client->fetch(
        '*[_type == "post"]{
          ...,
          author->,
          categories[]->
        }'
      );

      foreach($results as $post){
        echo($post['title']);

      }


      return view('welcome', [
        'posts' => $results
      ]);

    }

}

