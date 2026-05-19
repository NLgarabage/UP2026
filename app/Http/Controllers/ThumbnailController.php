<?php

namespace App\Http\Controllers;

use App\Models\Thumbnaill;
use Illuminate\Http\Request;

class ThumbnailController extends Controller
{
    public function show()
    {
        $thumbnail = Thumbnail::find(1);
        dump($thumbnail->post->title);
    }
}
