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
        $credentials = request()->validate([
            'password' => 'required',
        ]);

        $credentials['username'] = 'admin';

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/produk');
        } else {
            return back()->with('message', [
                'icon'  => 'error',
                'title' => 'Password',
                'text'  => 'salah'
            ]);
        }
    }

    public function ganti_password()
    {
        return view('auth.ganti-password');
    }

    public function update_password()
    {
        $validatedData = request()->validate([
            'password'              => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);
        $oldUser = User::find(auth()->user()->id);
        $oldUser->update([
            'password' => Hash::make($validatedData['password'])
        ]);
        return redirect()->to('/ganti-password')->with('message', [
            'icon'  => 'success',
            'title' => 'Password',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
