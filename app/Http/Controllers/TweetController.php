<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTweetRequest;
use App\Models\Tweet;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!auth()->check()) {
            return view('dashboard.index');
        }
        return view('Tweet.tweet-index', [
            'tweets' => Tweet::orderBy('created_at', 'DESC')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Tweet $tweet, StoreTweetRequest $request)
    {
        $request->only('user_id', 'content');

        $tweet->create([
            'user_id' => Auth::user()->id,
            'content' => $request['content'],
        ]);

        return redirect()->route('tweets.index')->with('success', 'Your tweet has been shared successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $tweet = Tweet::findOrFail($id);

        return view('Tweet.tweet-show', compact('tweet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tweet = Tweet::findOrFail($id);

        return view('Tweet.tweet-edit', compact('tweet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'content' => 'required|string|min:3|max:255',
        ]);
            $tweet = Tweet::findOrFail($id);

            $tweet->content = $request->content;

            $tweet->save();

            return redirect()->route('tweets.index')->with('success', 'Tweet updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tweet = Tweet::findOrFail($id);

        $tweet->delete();

        return redirect()->route('tweets.index')->with('success', 'Your tweet deleted successfully ...');
    }
}
