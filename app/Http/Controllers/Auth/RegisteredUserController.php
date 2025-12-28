<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => ['required', Password::min(6), 'confirmed'], 
            
        ]);

        $employerData = $request->validate([
            'company_name' => 'required|unique:employers,name',
            'company_logo' => ['required', File::types(['png', 'jpg', 'webp'])]
        ]);

        //store file and get path
        $logo_path = $request->file('company_logo')->store('logos');

        $user = User::create($userData);
        $user->employer()->create([
            'name' => $employerData['company_name'],
            'logo_path' => $logo_path
        ]);

        Auth::login($user);

        return redirect()->route('jobs.index')->with('ok', 'New User Registered');
    }
}
