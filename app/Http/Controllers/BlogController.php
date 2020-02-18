<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use App\Events\BlogEvent;

class BlogController extends Controller
{
    public function list() {
       $tag = Tag::find(1);
       event(new BlogEvent($tag));
    }
}
