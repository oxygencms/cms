<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\OldPassword;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the user's profile.
     *
     * @param User $user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function dashboard(User $user)
    {
        return view('users.dashboard', compact('user'));
    }

    /**
     * Show the user's profile.
     *
     * @param User $user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function profile(User $user)
    {
        return view('users.profile', compact('user'));
    }

    /**
     * Update the user's profile.
     *
     * @param User    $user
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function profileUpdate(User $user, Request $request)
    {
        $this->validate($request, [
            'photo' => 'nullable|file|mimes:jpg,jpeg,bmp,png',
            'name' => 'required|string',
            'phone' => "nullable|string|regex:/^[0-9- ]+$/u",
        ]);

        $data = $request->only('name', 'phone');

        if ($photo = $request->file('photo')) {

            $user->setMainUpload($photo);

            $data['photo'] = $photo;
        }

        $user->update($data);

        notification('Profile successfully updated');

        return redirect()->back();
    }

    /**
     * Update the user's password.
     *
     * @param User    $user
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function passwordUpdate(User $user, Request $request)
    {
        $this->validate($request, [
            'old_password' => ['required', 'string', new OldPassword($user)],
            'password_confirmation' => 'required|string|min:6',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user->update($request->only('password'));

        notification('Password successfully updated.');

        return redirect()->back();
    }
}
