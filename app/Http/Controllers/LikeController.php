<?php

namespace App\Http\Controllers;

use App\Model\Like;
use Illuminate\Http\Request;
use App\Model\Reply;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class LikeController extends Controller
{
    public function likeIt(Request $request, Reply $reply)    
    {

        $reply->like()->create([
            'user_id'=> '1'
        ]);

        return response($reply,Response::HTTP_CREATED);

    }

    public function unLikeIt(Reply $reply)
    {

        $reply->like()->where('user_id','1')->first()->delete();

        return response('Deleted',Response::HTTP_OK);

    }
}
