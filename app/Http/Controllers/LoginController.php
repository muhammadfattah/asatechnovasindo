<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        // User::create([
        //     'username' => 'admin',
        //     'password' => Hash::make('admin123')
        // ]);
        return view('auth.login');
    }
    public function login()
    {
        $credentials = request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
        );

        $credentials['username'] = strtolower($credentials['username']);

        if (Auth::attempt($credentials)) {
            if (auth()->user()->role == 'super admin') {
                return redirect()->intended('/admin/slider');
            } else {
                return redirect()->intended('/admin/artikel');
            }
        } else {
            return back()->with('message', [
                'icon'  => 'error',
                'title' => 'Username atau Password',
                'text'  => 'Salah'
            ]);
        }
    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function update_profile()
    {
        $validatedData = request()->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users,username,' . auth()->user()->id,
        ]);
        if (request()->filled('password')) {
            $validatedData = request()->validate([
                'password'              => 'required|confirmed',
                'password_confirmation' => 'required|same:password',
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);
        }
        $validatedData['username'] = strtolower($validatedData['username']);
        $oldUser = User::find(auth()->user()->id);
        $oldUser->update($validatedData);
        return redirect()->to('/profil')->with('message', [
            'icon'  => 'success',
            'title' => 'Profile',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
