<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Comments;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getComments()
    {
        $json = json_decode(file_get_contents('http://jsonplaceholder.typicode.com/comments'), true);
        
        for ($i=0; $i < count($json); $i++) { 
            $comment = new Comments($json[$i]);                 
            $comment->save();
        }
        return $json;
    }
}
