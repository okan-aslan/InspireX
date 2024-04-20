<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $tweets = $user->tweets()->paginate(5);

        return view('Users.user-show', compact('user', 'tweets'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);

        return view('Users.user-edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = request()->validate([
            'about' => 'string|max:255',
        ]);

        $user = Auth::user();

        $user->about = $validated['about'];

        $user->save();

        return redirect()->route('users.show', compact('user'))->with('success', "Your about section edited successfully ...");
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }
}
