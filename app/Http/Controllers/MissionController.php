<?php

namespace App\Http\Controllers;

use App\Models\Mission;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function mission_add()
    {
        return view('about.mission_add');
    }

    public function mission_upload()
    {
        $validatedData = request()->validate(
            [
                'mission' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'mission' => 'visi',
            ]
        );
        Mission::create($validatedData);
        return redirect()->to('/admin/tentang-perusahaan')->with('message', [
            'icon'  => 'success',
            'title' => 'Misi Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function mission_edit($id)
    {
        return view('about.mission_edit', [
            'mission' => Mission::find($id)
        ]);
    }

    public function mission_update($id)
    {
        $validatedData = request()->validate(
            [
                'mission' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'mission' => 'visi',
            ]
        );
        $mission = Mission::find($id);
        $mission->update($validatedData);
        return redirect()->to('/admin/tentang-perusahaan')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Misi',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function mission_delete($id)
    {
        $mission = Mission::find($id);
        $mission->delete();
        return redirect()->to('/admin/tentang-perusahaan')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Misi',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
