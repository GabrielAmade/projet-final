<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Inertia\Inertia;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        return Inertia::render('Resto/CreateResto');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string',
            'email' => 'required|string|email|max:255|unique:users',
            'adress' => 'required|string',
            'zip' => 'required|string',
            'city' => 'required|string',
            'capacity' => 'required|string',
            'hours' => 'required|string',
        ]);

        $restaurant = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'adress' => $request->adress,
            'zip' => $request->zip,
            'city' => $request->city,
            'capacity' => $request->capacity,
            'hours' => $request->hours,
        ]);

        event(new Registered($restaurant));

        Auth::login($restaurant);

        return redirect(RouteServiceProvider::HOME);
    }
}
