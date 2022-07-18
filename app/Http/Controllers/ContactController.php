<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Service;
use App\Models\TeamContact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        $contacts['team'] = TeamContact::all();
        return view('contact.index', [
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function contact()
    {
        return view('contact.contact', [
            'contact'     => Contact::first(),
            'teamContact' => TeamContact::all()
        ]);
    }


    public function contact_add()
    {
        return view('contact.contact_add');
    }

    public function contact_upload($id)
    {
        $validatedData = request()->validate(
            [
                'phone'       => 'required',
                'address'     => 'required',
                'email'       => 'required|email',
                'website'     => 'required',
                'maps'        => 'required',
                'street_maps' => 'required'
            ],
            [
                'required' => ':attribute harus diisi',
                'email'    => 'format :attribute harus valid',
            ],
            [
                'phone'       => 'nomor HP',
                'address'     => 'alamat',
                'website'     => 'link website',
                'maps'        => 'link maps',
                'street_maps' => 'link street maps',
            ]
        );
        $contact = Contact::find($id);
        $contact->update($validatedData);
        return redirect()->to('/admin/kontak')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Kontak',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function contact_upload2()
    {
        $validatedData = request()->validate(
            [
                'name'     => 'required',
                'phone'    => 'required',
                'position' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'name'     => 'nama',
                'phone'    => 'no HP',
                'position' => 'jabatan',
            ]
        );
        TeamContact::create($validatedData);
        return redirect()->to('/admin/kontak')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Kontak',
            'text'  => 'berhasil ditambah'
        ]);
    }

    public function contact_edit($id)
    {

        return view('contact.contact_edit', [
            'contact' => TeamContact::find($id)
        ]);
    }

    public function contact_update($id)
    {
        $validatedData = request()->validate(
            [
                'name'     => 'required',
                'phone'    => 'required',
                'position' => 'required',
            ],
            [
                'required' => ':attribute harus diisi',
            ],
            [
                'name'     => 'nama',
                'phone'    => 'no HP',
                'position' => 'jabatan',
            ]
        );
        $contact = TeamContact::find($id);
        $contact->update($validatedData);
        return redirect()->to('/admin/kontak')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Kontak',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function contact_delete($id)
    {
        $contact = TeamContact::find($id);
        $contact->delete();
        return redirect()->to('/admin/kontak')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Kontak',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
