<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CatalogController extends Controller
{
    public function catalog()
    {
        return view('catalog.catalog', [
            'catalog' => Catalog::first()
        ]);
    }

    public function catalog_upload($id)
    {
        $validatedData = request()->validate(
            [
                'filename'         => 'required'
            ],
            [
                'required' => ':attribute harus diupload',
            ],
            [
                'filename'     => 'file',
            ]
        );
        $oldCatalog = Catalog::find($id);
        Storage::delete('public' . $oldCatalog->filename);

        $validatedData['filename'] = str_replace('public', '', request()->file('filename')->store('public/assets/catalog'));
        Storage::move('public' . $validatedData['filename'], 'public/assets/catalog/' . request()->file('filename')->getClientOriginalName());
        $validatedData['filename'] = '/assets/catalog/' . request()->file('filename')->getClientOriginalName();

        $oldCatalog->update($validatedData);
        return redirect()->to('/admin/catalog')->with('message', [
            'icon'  => 'success',
            'title' => 'Catalog',
            'text'  => 'berhasil diubah'
        ]);
    }
}
