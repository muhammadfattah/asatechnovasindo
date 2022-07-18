<?php

namespace App\Http\Controllers;

use App\Models\Vision;
use Illuminate\Http\Request;

class VisionController extends Controller
{
    public function vision_add()
    {
        return view('about.vision_add');
    }

    public function vision_upload()
    {
        $validatedData = request()->validate(
            [
                'vision' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'vision' => 'visi',
            ]
        );
        Vision::create($validatedData);
        return redirect()->to('/admin/tentang-perusahaan')->with('message', [
            'icon'  => 'success',
            'title' => 'Visi Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function vision_edit($id)
    {
        return view('about.vision_edit', [
            'vision' => Vision::find($id)
        ]);
    }

    public function vision_update($id)
    {
        $validatedData = request()->validate(
            [
                'vision' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'vision' => 'visi',
            ]
        );
        $vision = Vision::find($id);
        $vision->update($validatedData);
        return redirect()->to('/admin/tentang-perusahaan')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Visi',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function vision_delete($id)
    {
        $vision = Vision::find($id);
        $vision->delete();
        return redirect()->to('/admin/tentang-perusahaan')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Visi',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
