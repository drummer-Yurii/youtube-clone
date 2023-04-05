<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Video;
use Illuminate\Http\Request;
use Inertia\Inertia;

class VideosController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image_file = null;
        $video_file = null;

        $video = new Video;
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return Inertia::render('Video', [
            'video' => Video::find($id),
            'comments' => Comment::all(),
            'recommendedVideos' => Video::inRandomOrder()->get(),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $video = Video::find($id);

        if (file_exists(public_path() . $video->video)) {
            unlink(public_path() . $video->video);
        }

        if (file_exists(public_path() . $video->thumbnail)) {
            unlink(public_path() . $video->thumbnail);
        }

        $video->delete();
        return redirect()->route('deleteVideo');
    }
}
