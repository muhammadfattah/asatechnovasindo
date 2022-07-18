<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Product;
use App\Models\Service;
use App\Models\TeamContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        $contacts['team'] = TeamContact::all();
        return view('product.index', [
            'products'        => Product::all(),
            'contacts'        => $contacts,
            'catalog'         => Catalog::first(),
            'footer_services' => Service::orderBy('id', 'asc')->limit(6)->get()
        ]);
    }

    public function product()
    {
        return view('product.product', [
            'products' => Product::all()
        ]);
    }

    public function product_add()
    {
        return view('product.product_add');
    }

    public function product_upload()
    {
        $validatedData = request()->validate(
            [
                'application_name' => 'required',
                'description'      => 'required',
                'filename'         => 'required|image'
            ],
            [
                'required' => ':attribute harus diisi',
                'filename.required' => ':attribute harus diupload',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'application_name' => 'nama produk',
                'description'      => 'deskripsi',
                'filename'         => 'file'
            ]
        );
        $validatedData['filename'] = str_replace('public', '', request()->file('filename')->store('public/assets/img/product'));
        Product::create($validatedData);
        return redirect()->to('/admin/produk')->with('message', [
            'icon'  => 'success',
            'title' => 'Produk Baru',
            'text'  => 'berhasil ditambahkan'
        ]);
    }

    public function product_edit($id)
    {

        return view('product.product_edit', [
            'product' => Product::find($id)
        ]);
    }

    public function product_update($id)
    {
        $validatedData = request()->validate(
            [
                'application_name' => 'required',
                'description'      => 'required',
                'filename'         => 'image'
            ],
            [
                'required' => ':attribute harus diisi',
                'image'    => ':attribute harus berupa gambar',
            ],
            [
                'application_name' => 'nama produk',
                'description'      => 'deskripsi',
                'filename'         => 'file'
            ]
        );
        $oldProduct = Product::find($id);
        if (isset($validatedData['filename'])) {
            $validatedData['filename'] = str_replace('public', '', request()->file('filename')->store('public/assets/img/product'));
            Storage::delete('public' . $oldProduct->filename);
        }
        $oldProduct->update($validatedData);
        return redirect()->to('/admin/produk')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Produk',
            'text'  => 'berhasil diubah'
        ]);
    }

    public function product_delete($id)
    {
        $product = Product::find($id);
        Storage::delete('public' . $product->filename);
        $product->delete();
        return redirect()->to('/admin/produk')->with('message', [
            'icon'  => 'success',
            'title' => 'Data Produk',
            'text'  => 'berhasil dihapus'
        ]);
    }
}
