<?php

namespace App\Http\Controllers\Driver;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Http\Controllers\Controller;

class DriverProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $driver = Auth::guard('driver')->user();

        return view('driver.profile.edit', compact('driver'));
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->driver()->fill($request->validated());

        if ($request->driver()->isDirty('email')) {
            $request->driver()->email_verified_at = null;
        }

        $request->driver()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('driverDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $driver = $request->driver();

        Auth::guard('driver')->logout($driver);

        $driver->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
