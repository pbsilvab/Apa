<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessPodcast;
use App\Podcast;
class PodcastController extends Controller
{
    public function store(Request $request)
    {
       $podcast = Podcast::create([
           'title'=>'new podcast'
       ]);

        ProcessPodcast::dispatch($podcast);
    }
}
