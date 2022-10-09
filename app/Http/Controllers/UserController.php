<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function update_photo(Request $request, $user)
    {
        $users = $request->id;
        // $fotos = $request->file;
        foreach($users as $user)
        {
            $img = $user->store('public/'. $request->user);
            $url = Storage::url($img);
            $user = User::findOrFail($user);
            $user->profile_photo = $url;
            $user->save();    
        } 
        return redirect()->route('profile.show');
    }
}
