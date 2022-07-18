<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\TeamContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        $contacts['team'] = TeamContact::all();
        return view('portfolio.index', [
            'portfolio'       => Portfolio::all(),
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function portofolio()
    {
        return view('portfolio.portofolio', [
            'portfolio' => Portfolio::all()
        ]);
    }

    public function portofolio_add()
    {
        return view('portfolio.portofolio_add');
    }

    public function portofolio_upload()
    {
        $validatedData = request()->validate(
            [
                'application_name' => 'required',
                'filename'         => 'required|image'
            ],
            [
                'required' => ':attribute harus diisi',
                'filename.required' => ':attribute harus diupload',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'application_name' => 'nama aplikasi',
                'filename'         => 'file'
            ]
        );
        $validatedData['filename'] = str_replace('public', '', request()->file('filename')->store('public/assets/img/portofolio'));
        Portfolio::create($validatedData);
        return redirect()->to('/admin/portfolio')->with('message', [
            'icon'  => 'success',
            'title' => 'Portfolio Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function portofolio_edit($id)
    {
        return view('portfolio.portofolio_edit', [
            'portfolio' => Portfolio::find($id)
        ]);
    }

    public function portofolio_update($id)
    {
        $validatedData = request()->validate(
            [
                'application_name' => 'required',
                'filename'         => 'image'
            ],
            [
                'required' => ':attribute harus diisi',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'application_name' => 'nama aplikasi',
                'filename'         => 'file'
            ]
        );
        $oldportfolio = Portfolio::find($id);
        if (isset($validatedData['filename'])) {
            $validatedData['filename'] = str_replace('public', '', request()->file('filename')->store('public/assets/img/portofolio'));
            Storage::delete('public' . $oldportfolio->filename);
        }
        $oldportfolio->update($validatedData);
        return redirect()->to('/admin/portfolio')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Portfolio',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function portofolio_delete($id)
    {
        $portfolio = Portfolio::find($id);
        Storage::delete('public' . $portfolio->filename);
        $portfolio->delete();
        return redirect()->to('/admin/portfolio')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Portfolio',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
