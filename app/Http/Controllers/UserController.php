<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user()
    {
        return view('user.user', [
            'users' => User::all()
        ]);
    }

    public function user_add()
    {
        return view('user.user_add');
    }

    public function user_upload()
    {
        $validatedData = request()->validate(
            [
                'fullname'              => 'required',
                'username'              => 'required|unique:users',
                'password'              => 'required|confirmed',
                'password_confirmation' => 'required|same:password',
                'role'                  => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
                'unique'   => ':attribute telah digunakan',
                'confirmed' => 'konfirmasi :attribute tidak sama',
                'same'      => ':attribute tidak sama'
            ],
            [
                'fullname' => 'nama lengkap',
                'username' => 'username',
                'password_confirmation' => 'konfirmasi password',
            ]
        );
        $validatedData['fullname'] = ucwords($validatedData['fullname']);
        $validatedData['username'] = strtolower($validatedData['username']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect()->to('/pengguna')->with('message', [
            'icon'  => 'success',
            'title' => 'Pengguna Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function user_delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->to('/pengguna')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Pengguna',
            'text'  => 'berhasil dihapus'
        ]);
    }

    public function user_edit($id)
    {
        return view('user.user_edit', [
            'user' => User::find($id)
        ]);
    }

    public function user_update($id)
    {

        $validatedData = request()->validate(
            [
                'fullname' => 'required',
                'username' => 'required|unique:users,username,' . $id,
                'role'     => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
                'unique'   => ':attribute telah digunakan',
            ],
            [
                'fullname' => 'nama lengkap',
                'username' => 'username',
            ]
        );
        if (request()->filled('password')) {
            $validatedData = request()->validate(
                [
                    'password'              => 'required|confirmed',
                    'password_confirmation' => 'required|same:password',
                ],
                [
                    'confirmed' => 'konfirmasi :attribute tidak sama',
                    'same'      => ':attribute tidak sama'
                ],
                [
                    'password_confirmation' => 'konfirmasi password',
                ]
            );
            $validatedData['password'] = Hash::make($validatedData['password']);
        }
        $validatedData['fullname'] = ucwords($validatedData['fullname']);
        $validatedData['username'] = strtolower($validatedData['username']);
        $oldUser = User::find($id);
        $oldUser->update($validatedData);

        return redirect()->to('/pengguna')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Pengguna',
            'text'  => 'berhasil diubah'
        ]);
    }
}
