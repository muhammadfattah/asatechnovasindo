<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function profile()
    {
        return view('auth.profile');
    }

    public function update_profile()
    {
        $validatedData = request()->validate(
            [
                'fullname' => 'required',
                'username' => 'required|unique:users,username,' . auth()->user()->id,
            ],
            [
                'required' => ':attribute harus diisi',
                'unique'   => ':attribute telah digunakan'
            ],
            [
                'fullname' => 'nama lengkap',
                'username' => 'username'
            ]
        );
        if (request()->filled('password')) {
            $validatedData = request()->validate(
                [
                    'password'              => 'required|confirmed',
                    'password_confirmation' => 'required|same:password',
                ],
                [
                    'required'  => ':attribute harus diisi',
                    'confirmed' => 'konfirmasi :attribute tidak sama',
                    'same'      => ':attribute tidak sama'
                ],
                [
                    'password_confirmation' => 'konfirmasi password'
                ]
            );
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
}
