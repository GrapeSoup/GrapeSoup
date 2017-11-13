<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function storePost(PostFormRequest $formRequest)
    {
        $formRequest->persist();

        return redirect()->back();
    }
}
