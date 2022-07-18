<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Service;
use App\Models\TeamContact;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        $contacts['team'] = TeamContact::all();
        return view('service.index', [
            'services'        => Service::all(),
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function service()
    {
        return view('service.service', [
            'services' => Service::all()
        ]);
    }

    public function service_add()
    {
        return view('service.service_add');
    }

    public function service_upload()
    {
        $validatedData = request()->validate(
            [
                'title'       => 'required',
                'description' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'title'       => 'nama layanan',
                'description' => 'deskripsi',
            ]
        );

        Service::create($validatedData);
        return redirect()->to('/admin/layanan')->with('message', [
            'icon'  => 'success',
            'title' => 'Layanan Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function service_edit($id)
    {

        return view('service.service_edit', [
            'service' => Service::find($id)
        ]);
    }

    public function service_update($id)
    {
        $validatedData = request()->validate(
            [
                'title'       => 'required',
                'description' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'title'       => 'nama layanan',
                'description' => 'deskripsi',
            ]
        );
        $oldService = Service::find($id);
        $oldService->update($validatedData);
        return redirect()->to('/admin/layanan')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Layanan',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function service_delete($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->to('/admin/layanan')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Layanan',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
