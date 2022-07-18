<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Mission;
use App\Models\Profile;
use App\Models\Service;
use App\Models\TeamContact;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        $contacts['team'] = TeamContact::all();
        $profile = Profile::first();
        $profile->section_1 =  str_replace('CV. ASA TECHNOVASINDO', '<span class="text-primary fw-bold">CV. ASA TECHNOVASINDO</span>', $profile->section_1);
        $profile->section_2 =  str_replace('CV. ASA TECHNOVASINDO', '<span class="text-primary fw-bold">CV. ASA TECHNOVASINDO</span>', $profile->section_2);

        return view('about.index', [
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'profile'         => $profile,
            'visions'         => Vision::all(),
            'missions'        => Mission::all(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function profile()
    {
        return view('about.about', [
            'profile'  => Profile::first(),
            'visions'  => Vision::all(),
            'missions' => Mission::all(),
        ]);
    }

    public function profile_upload($id)
    {
        $validatedData = request()->validate(
            [
                'section_1'       => 'required',
                'section_2'       => 'required',
                'section_1_image' => 'image',
                'section_2_image' => 'image',
            ],
            [
                'required' => ':attribute harus diisi',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'section_1' => 'section 1',
                'section_2' => 'section 2',
                'section_1_image' => 'file gambar section 1',
                'section_2_image' => 'file gambar section 2',
            ]
        );
        $oldProfile = Profile::find($id);
        if (isset($validatedData['section_1_image'])) {
            $validatedData['section_1_image'] = str_replace('public', '', request()->file('section_1_image')->store('public/assets/img/company_profiles'));
            Storage::delete('public' . $oldProfile->section_1_image);
        }
        if (isset($validatedData['section_2_image'])) {
            $validatedData['section_2_image'] = str_replace('public', '', request()->file('section_2_image')->store('public/assets/img/company_profiles'));
            Storage::delete('public' . $oldProfile->section_2_image);
        }
        $oldProfile->update($validatedData);
        return redirect()->to('/admin/tentang-perusahaan')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Profil',
            'text'  => 'berhasil diubah'
        ]);
    }
}
