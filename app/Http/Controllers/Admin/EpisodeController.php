<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Episode;

class EpisodeController extends Controller
{
    public function index()
    {
        return Episode::latest()->paginate(10);
    }

    public function show(Episode $episode)
    {
        return response()->json(['data' => $episode]);
    }

    public function store()
    {
        $data = request()->all();
        $episode = Episode::create($data);

        return response()->json([
            'data' => $episode,
        ]);
    }

    public function update(Episode $episode)
    {
        $episode->update(request()->all());

        return $this->show($episode)->getOriginalContent();
    }

    public function destroy(Episode $episode)
    {
        return Episode::destroy($episode->id);
    }
}
