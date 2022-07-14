<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Portfolio;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function client()
    {
        return view('admin.client', [
            'clients' => Client::all()
        ]);
    }

    public function client_upload()
    {
        $validatedData = request()->validate([
            'filename.*'         => 'required|image'
        ]);
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

        return view('admin.client_edit', [
            'client' => Client::find($id)
        ]);
    }

    public function client_update($id)
    {
        $validatedData = request()->validate([
            'filename'         => 'image'
        ]);
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

    public function portofolio()
    {
        return view('admin.portofolio', [
            'portfolio' => Portfolio::all()
        ]);
    }

    public function portofolio_upload()
    {
        $validatedData = request()->validate([
            'application_name' => 'required',
            'filename'         => 'required|image'

        ]);
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

        return view('admin.portofolio_edit', [
            'portfolio' => Portfolio::find($id)
        ]);
    }

    public function portofolio_update($id)
    {
        $validatedData = request()->validate([
            'application_name' => 'required',
            'filename'         => 'image'
        ]);
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

    public function product()
    {
        return view('admin.product', [
            'products' => Product::all()
        ]);
    }

    public function product_upload()
    {
        $validatedData = request()->validate([
            'application_name' => 'required',
            'description'      => 'required',
            'filename'         => 'required|image'

        ]);
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

        return view('admin.product_edit', [
            'product' => Product::find($id)
        ]);
    }

    public function product_update($id)
    {
        $validatedData = request()->validate([
            'application_name' => 'required',
            'description'      => 'required',
            'filename'         => 'image'
        ]);
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

    public function swap($table, $id1, $id2)
    {
        if ($table == 'client') {
            Client::where('id', $id2)->update([
                'id' => 0
            ]);
            Client::where('id', $id1)->update([
                'id' => $id2
            ]);
            Client::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == "produk") {
            Product::where('id', $id2)->update([
                'id' => 0
            ]);
            Product::where('id', $id1)->update([
                'id' => $id2
            ]);
            Product::where('id', 0)->update([
                'id' => $id1
            ]);
        } else if ($table == 'portfolio') {
            Portfolio::where('id', $id2)->update([
                'id' => 0
            ]);
            Portfolio::where('id', $id1)->update([
                'id' => $id2
            ]);
            Portfolio::where('id', 0)->update([
                'id' => $id1
            ]);
        }

        return redirect()->to("/admin/$table")->with('message', [
            'icon'  => 'success',
            'title' => 'Data',
            'text'  => 'berhasil ditukar'
        ]);
    }
}
