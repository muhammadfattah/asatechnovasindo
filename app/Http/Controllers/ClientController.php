<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Service;
use App\Models\TeamContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use function GuzzleHttp\Promise\all;

class ClientController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        $contacts['team'] = TeamContact::all();
        return view('client.index', [
            'clients'         => Client::all(),
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function client()
    {
        return view('client.client', [
            'clients' => Client::all()
        ]);
    }

    public function client_add()
    {
        return view('client.client_add');
    }

    public function client_upload()
    {
        $validatedData = request()->validate(
            [
                'filename'         => 'required|image',
                'filename.*'         => 'required|image'
            ],
            [
                'required' => ':attribute harus diupload',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'filename'         => 'file'
            ]
        );
        if (!request()->hasFile('filename')) {
            request()->validate(['filename' => 'required|image']);
        }
        foreach ($validatedData['filename'] as $value) {
            Client::create([
                'filename' => str_replace('public', '', $value->store('public/assets/img/clients'))
            ]);
        }
        return redirect()->to('/admin/client')->with('message', [
            'icon'  => 'success',
            'title' => 'Client Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function client_edit($id)
    {

        return view('client.client_edit', [
            'client' => Client::find($id)
        ]);
    }

    public function client_update($id)
    {
        $validatedData = request()->validate(
            [
                'filename' => 'image'
            ],
            [
                'image' => ':attribute harus berupa gambar',
            ],
            [
                'filename' => 'file'
            ]
        );
        $oldClient = Client::find($id);
        if (isset($validatedData['filename'])) {
            $validatedData['filename'] = str_replace('public', '', request()->file('filename')->store('public/assets/img/clients'));
            Storage::delete('public' . $oldClient->filename);
        }
        $oldClient->update($validatedData);
        return redirect()->to('/admin/client')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Client',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function client_delete($id)
    {
        $client = Client::find($id);
        Storage::delete('public' . $client->filename);
        $client->delete();
        return redirect()->to('/admin/client')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Client',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
