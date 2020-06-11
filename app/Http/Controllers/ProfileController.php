<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    /**
     * Show a user's profile
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(User $user)
    {
        return view('profile.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profile.edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $data = request()->all(); //validate();

        $user = auth()->user();

        $user->update(['name' => $data['name']]);

        $data = [
            'bio' => $data['bio'],
            'website' => $data['website'],
        ];

        if (request('image')) {
            $imagePath = request('image')->store('profile', 'public');

            $image = Image::make(public_path("storage/$imagePath"))->fit(1000, 1000);
            $image->save();

            $data['image'] = $imagePath;
        }

        $user->profile->update($data);

        return redirect('/profile/' . $user->id);
    }
}
